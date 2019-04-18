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
	        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	            <div class="carousel-inner">

	                <?php
	                while ( $banners->have_posts() ) {
	                    $index++;
	                    $banners->the_post();
	                    $imagem = get_the_post_thumbnail_url($banner->post->ID); 
	                    $link = get_field('link_banner');
	                    ?>

	                    <div class="carousel-item <?php if ($index == 1) { echo ' active'; } ?>">
	                    	<?php if (empty($link)) { ?>
	                        <img class="d-block w-100" src="<?= $imagem ?>" alt="<?= the_title() ?>">
	                    	<?php } else { ?>
	                        <a href="<?= $link ?>"><img class="d-block w-100" src="<?= $imagem ?>" alt="<?= the_title() ?>"></a>
	                    	<?php } ?>
	                    </div>

	                <?php } ?>
	            </div>
	            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
    <?php endif; ?>