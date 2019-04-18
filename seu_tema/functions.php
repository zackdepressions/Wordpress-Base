<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');


require get_template_directory()."/includes/enqueue.php";


if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Configurações site',
    'menu_title'  => 'Configurações site',
    'menu_slug'   => 'configuracoes_site',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}


// ADICIONA FIltRO PARA BUSCAR OS SUBCAMPOS DO ACF
function my_posts_where( $where ) {
  $where = str_replace("meta_key = 'data_$", "meta_key LIKE 'data_%", $where);
  return $where;
}
add_filter('posts_where', 'my_posts_where');


add_filter('jpeg_quality', function($arg){return 100;});
add_filter( 'wp_editor_set_quality', function($arg){return 100;} );


/* Post Personalizado Depoimentos da Empresa*/
function customPostType_Depoimentos() { 
  $labels = array(
    'name' => _x('Depoimentos', ''),
    'singular_name' => _x('Depoimentos', '')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,            
    'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks'),
    'menu_icon' => 'dashicons-format-quote',
    'menu_position' => 4,
    'has_archive' => false,
    'hierarchical' => false
  );

  register_post_type( 'depoimentos' , $args );
}
add_action('init', 'customPostType_Depoimentos');



/* Post Personalizado Parceiros*/
function customPostType_Parceiros() { 
  $labels = array(
    'name' => _x('Parceiros', ''),
    'singular_name' => _x('Parceiros', '')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,            
    'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks'),
    'menu_icon' => 'dashicons-businessman',
    'menu_position' => 4,
    'has_archive' => false,
    'hierarchical' => false
  );

  register_post_type( 'parceiros' , $args );
}
add_action('init', 'customPostType_Parceiros');



/* Post Personalizado Equipe*/
function customPostType_Equipe() { 
  $labels = array(
    'name' => _x('Equipe', ''),
    'singular_name' => _x('Equipe', '')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,            
    'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks'),
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 4,
    'has_archive' => false,
    'hierarchical' => false
  );

  register_post_type( 'equipe' , $args );
}
add_action('init', 'customPostType_Equipe');



/* Post Personalizado Banners*/
function customPostType_Banners() { 
  $labels = array(
    'name' => _x('Banners', ''),
    'singular_name' => _x('Banners', '')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,            
    'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks'),
    'menu_icon' => 'dashicons-images-alt',
    'menu_position' => 4,
    'has_archive' => false,
    'hierarchical' => false
  );

  register_post_type( 'banners' , $args );
}
add_action('init', 'customPostType_Banners');


/* Remover Post Types Criados 

Após remover comentar novamente, a funcao
*/
// function delete_post_type(){
//     unregister_post_type( 'nome_do_post' );
// }
// add_action('init','delete_post_type');



// add_action( 'admin_menu', 'extra_post_info_menu' );

// function extra_post_info_menu(){

//   $page_title = 'Marketing';
//   $menu_title = 'Marketing';
//   $capability = 'manage_options';
//   $menu_slug  = 'extra-post-info';
//   $function   = 'extra_post_info_page';
//   $icon_url   = 'dashicons-rss';
//   $position   = 7;

//   add_menu_page( $page_title,
//                  $menu_title, 
//                  $capability, 
//                  $menu_slug, 
//                  $function, 
//                  $icon_url, 
//                  $position );
// }


// /* Codigos */
function scripts_marketing_footer() { 
  $marketing = pods( 'marketing', array('limit' => 0));
  $codigos = $marketing->field('codigo_marketing_footer'); 
  foreach ($codigos as $codigo) {
    echo $codigo['codigo'];
  }
 }
add_action('wp_footer', 'scripts_marketing_footer'); 


function scripts_marketing_header() { 
$marketing = pods( 'marketing', array('limit' => 0));
$codigos = $marketing->field('codigo_marketing_header');  
  foreach ($codigos as $codigo2) {
    echo $codigo2['codigo'];
  }
 }
add_action('wp_head', 'scripts_marketing_header'); 

// Fim codigos header e footer.



function custom_excerpt_length( $length ) {
        return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
 register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'quantum' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'quantum' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


remove_action('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'feed_links', 2 );
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'adjacent_posts_rel_link');


function my_related_posts() {
     $args = array('posts_per_page' => 4, 'post_in'  => get_the_tag_list());
     $the_query = new WP_Query( $args );
     echo '<hr/><div class="container" id="related_posts">';
     echo '<h2 class="titulo-sessao text-center">Artigos Relacionados</h2><div class="row">';
     while ( $the_query->have_posts() ) : $the_query->the_post();
     ?>
     <section class="item col-md-3">
          <?php if ( has_post_thumbnail() ) { ?>
          <section class="related_post_thumb">
               <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                   <?php the_post_thumbnail( 'related-post',array('class'=>'img-fluid') ); ?>
              </a>                       </section>
          <?php } else { ?>
          <section class="related_post_thumb">
               <a href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('template_directory')?>/lib/images/thumb.png" />
               </a>
          </section>
          <?php } ?>
         <h4>
          <?php the_title(); ?>
        </h4>
         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-outline-secondary">
            Continue lendo...
         </a>
      </section>
      <?php
      endwhile;
      echo '<div class="clear"></div></div></div>';
      wp_reset_postdata();
}

?>