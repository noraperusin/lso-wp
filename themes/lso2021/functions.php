<?php
/*
 * Function definitions for Los Soles Oblicuos 2021
 */

function lso2021_scripts() {
    // Add styles
    wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'theme-cedar', get_template_directory_uri() . '/assets/css/theme-cedar.css' );
    wp_enqueue_style( 'socicon', get_template_directory_uri() . '/assets/css/socicon.css' );
    wp_enqueue_style( 'flickity', get_template_directory_uri() . '/assets/css/flickity.css' );
    wp_enqueue_style( 'iconsmind', get_template_directory_uri() . '/assets/css/iconsmind.css' );
    wp_enqueue_style( 'jquery.steps', get_template_directory_uri() . '/assets/css/jquery.steps.css' );
    wp_enqueue_style( 'jquery.lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css' );

    // Add scripts
    // jquery loaded by default, not necessary since added as bootstrap and popper bundle dependency
    // not using bootstrap.js or popper.js
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    /*
    wp_enqueue_script( 'countdown-js', get_template_directory_uri() . '/assets/js/countdown.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'datepicker-js', get_template_directory_uri() . '/assets/js/datepicker.js', array('jquery'), null, true );
    wp_enqueue_script( 'easypiechart-js', get_template_directory_uri() . '/assets/js/easypiechart.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'granim-js', get_template_directory_uri() . '/assets/js/granim.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'jquery-steps-js', get_template_directory_uri() . '/assets/js/jquery.steps.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'typed-js', get_template_directory_uri() . '/assets/js/typed.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'ytplayer-js', get_template_directory_uri() . '/assets/js/ytplayer.min.js', array('jquery'), null, true );
    */
    wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/assets/js/flickity.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), null, true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'twitter-fetcher-js', get_template_directory_uri() . '/assets/js/twitterfetcher..min.js', array('jquery'), null, true );
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