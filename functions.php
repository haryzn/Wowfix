<?php

// Get images in templates - eg: php echo do_shortcode('[template_dir_img]image.png');
add_shortcode( 'template_dir_img', function( $atts ){
    return get_template_directory_uri() . '/assets/images/' . $atts['image'];
});

// Automatic title tag
function wowfix_theme_support(){
    add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'wowfix_theme_support');

// CSS
function wowfix_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('wowfix-css', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action( 'wp_enqueue_scripts', 'wowfix_register_styles');


// JS
function wowfix_register_javascript(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('wowfix-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', false);
    wp_enqueue_script('wowfix-flickity', get_template_directory_uri() . "/assets/js/flickity.min.js", array(), $version, false);
    wp_enqueue_script('wowfix-main', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}
add_action( 'wp_enqueue_scripts', 'wowfix_register_javascript');

?>