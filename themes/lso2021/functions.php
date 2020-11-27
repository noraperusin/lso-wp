<?php
/*
 * Function definitions for Los Soles Oblicuos 2021
 */

function lso2021_scripts() {
    // Add styles
    wp_enqueue_style( 'stack-interface', get_template_directory_uri() . '/assets/css/stack-interface.css' );
    wp_enqueue_style( 'socicon', get_template_directory_uri() . '/assets/css/socicon.css' );
    wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'flickity', get_template_directory_uri() . '/assets/css/flickity.css' );
    wp_enqueue_style( 'theme-cedar', get_template_directory_uri() . '/assets/css/theme-cedar.css' );

    // Add scripts
    // jquery loaded by default, not necessary since added as bootstrap and popper bundle dependency
    // not using bootstrap.js or popper.js
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/assets/js/flickity.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), null, true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'twitter-fetcher-js', get_template_directory_uri() . '/assets/js/twitterfetcher.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'smooth-scroll-js', get_template_directory_uri() . '/assets/js/smooth-scroll.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'lso2021_scripts');

/*
function lso2021_setup() {
    require_once 'class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'lso2021_setup');
*/