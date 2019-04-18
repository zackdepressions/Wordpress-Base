<?php

/*

=====================

FRONT END

=====================

*/

function temp_load_scripts() {

    /**
     * CSS
     */
    wp_enqueue_style('style', get_template_directory_uri()."/assets/css/style.css", array(), null, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri()."/vendor/fontawesome/css/all.css", array(), null, 'all');
    wp_enqueue_style('slick', get_template_directory_uri()."/vendor/slick/slick/slick.css", array(), null, 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri()."/vendor/slick/slick/slick-theme.css", array(), null, 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri()."/vendor/lightbox/dist/css/lightbox.css", array(), null, 'all');
    wp_enqueue_style('hamburgers', get_template_directory_uri()."/vendor/hamburgers-master/dist/hamburgers.min.css", array(), null, 'all');


    /**
     * JS
     */
    wp_deregister_script('jquery');// Removendo o antigo
    wp_register_script('jquery',  get_template_directory_uri()."/assets/js/jquery-3.3.1.js", array(), '', false);
    wp_register_script('bootstrap_js', get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.min.js", array(), '', true);
    wp_register_script('slick', get_template_directory_uri()."/vendor/slick/slick/slick.min.js", array(), '', true);
    wp_register_script('lightbox', get_template_directory_uri()."/vendor/lightbox/dist/js/lightbox.js", array(), '', true);

    // CUSTOM JS
    wp_register_script('main', get_template_directory_uri()."/assets/js/main.js", array(), '', true);


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('slick');
    wp_enqueue_script('lightbox');
    wp_enqueue_script('main');

}

add_action('wp_enqueue_scripts', 'temp_load_scripts');

?>