<?php

ob_start();

$args_banners = array(
    'posts_per_page' => -1,
    'post_type' => 'banners',
    'orderby'   => 'title',
    'order' => 'DESC'
);

$banners = new WP_Query($args_banners);

?>

	<?php
	    if ( $banners->have_posts() ): ?>

	    	<div class="carrousel-slick">
	    	<?php
	                while ( $banners->have_posts() ) {
	                    $index++;
	                    $banners->the_post();
	                    $imagem = get_the_post_thumbnail_url($banner->post->ID); 
	                    $link = get_field('link_banner');
	                    ?>
	                    <?php if (empty($link)) { ?>
	                        <div><img class="d-block w-100" src="<?= $imagem ?>" alt="<?= the_title() ?>" width="100%"></div>
	                    	<?php } else { ?>
	                        <a href="<?= $link ?>"><div><img class="d-block w-100" src="<?= $imagem ?>" alt="<?= the_title() ?>" width="100%"></div></a>
	                    	<?php } ?>

	                      
	                  <?php } ?>
	              </div>

    <?php endif; ?>

