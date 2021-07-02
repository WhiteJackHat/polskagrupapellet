<?php

function pgp_wp_theme_support(){
    //adds dynamic theme title
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 300, 300); // default Post Thumbnail dimensions (cropped)

}

add_action ('after_setup_theme', 'pgp_wp_theme_support');


function pgp_wp_menus() {

    $locations = array(
        'primary' => "Primary navibar"
    );

register_nav_menus($locations);
}

add_action ('init', 'pgp_wp_menus');

function pgp_wp_register_styles() {
    wp_enqueue_style('pgp_wp_bootstrap', get_template_directory_uri() . "/inc/bootstrap-css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('pgp_wp_aos', get_template_directory_uri() . "/inc/aos-master/dist/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('pgp_wp_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all'); 
    wp_enqueue_style('pgp_wp_efects', get_template_directory_uri() . "/assets/css/efects.css", array(), '1.0', 'all'); 
}

add_action ('wp_enqueue_scripts', 'pgp_wp_register_styles');


function pgp_wp_register_scripts() {
    wp_enqueue_script('pgp_wp_bootstrap', get_template_directory_uri() . "/inc/bootstrap-js/bootstrap.min.js", array(), '1.0', true); 
    wp_enqueue_script('pgp_wp_fontawesome', 'https://kit.fontawesome.com/43960fa140.js', array(), '1.0', true); 
    wp_enqueue_script('pgp_wp_aos_js', get_template_directory_uri() . "/inc/aos-master/dist/aos.js", array(), '1.0', true); 
    wp_enqueue_script('pgp_wp_aos_jsinit', get_template_directory_uri() . "/assets/js/aos_init.js", array(), '1.0', true); 

}


add_action ('wp_enqueue_scripts', 'pgp_wp_register_scripts');





?>

