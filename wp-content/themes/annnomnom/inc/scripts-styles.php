<?php

//Making jQuery Google API
add_action('init', 'modify_jquery');
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        // wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0', true);
        wp_register_script( 'jquery' , get_stylesheet_directory_uri() . '/js/jquery-2.0.3.min.js', '' , '', true );
        wp_enqueue_script('jquery');
    }
}

/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 * This will enqueue stylesheets and scripts to be used on various templates for the hs Theme.
 */
add_action( 'wp_enqueue_scripts', 'add_celeste_stylesheets' );
function add_celeste_stylesheets(){

  if(!is_admin()){
    wp_register_style( 'roboto' , 'http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' , '' , array() , $media = 'all' );
    wp_register_style( 'scroll' , get_stylesheet_directory_uri() . '/css/scroll.css' , '' , array() , $media = 'all' );
    wp_register_style( 'style' , get_stylesheet_directory_uri() . '/css/style.css' , '' , array() , $media = 'all' );
    wp_register_style( 'font-awesome' , get_stylesheet_directory_uri() . '/css/font-awesome.css' , '' , array() , $media = 'all' );
    wp_register_style( 'portfolio' , get_stylesheet_directory_uri() . '/css/portfolio.css' , '' , array() , $media = 'all' );
    wp_register_style( 'carousel' , get_stylesheet_directory_uri() . '/css/carousel.css' , '' , array() , $media = 'all' );
    wp_register_style( 'responsive' , get_stylesheet_directory_uri() . '/css/responsive.css' , '' , array() , $media = 'all' );

    wp_enqueue_style( 'roboto' );
    wp_enqueue_style( 'scroll' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'portfolio' );
    wp_enqueue_style( 'carousel' );
    wp_enqueue_style( 'responsive' );
  }

}

add_action( 'wp_enqueue_scripts' , 'add_celeste_scripts');

function add_celeste_scripts(){

  if(!is_admin()){
    wp_register_script( 'send-email' , get_stylesheet_directory_uri() . '/js/sendemail.js', array( 'jquery' )  , '', true );
    wp_register_script( 'progress-bar' , get_stylesheet_directory_uri() . '/js/progressbar.js', array( 'jquery' )  , '', true );
    wp_register_script( 'modernizr-custom' , get_stylesheet_directory_uri() . '/js/modernizr.custom.js', array( 'jquery' )  , '', true );
    wp_register_script( 'head' , get_stylesheet_directory_uri() . '/js/head.min.js', array( 'jquery' )  , '', true );
    wp_register_script( 'imagesloaded' , get_stylesheet_directory_uri() . '/js/imagesloaded.min.js', array( 'jquery' )  , '', true );
    wp_register_script( 'masonry' , get_stylesheet_directory_uri() . '/js/masonry.min.js', array( 'jquery' )  , '', true );
    wp_register_script( 'class-helper' , get_stylesheet_directory_uri() . '/js/class_helper.js', array( 'jquery' )  , '', true );
    wp_register_script( 'grid-gallery' , get_stylesheet_directory_uri() . '/js/grid_gallery.js', array( 'jquery' )  , '', true );
    wp_register_script( 'carousel' , get_stylesheet_directory_uri() . '/js/carousel.js', array( 'jquery' )  , '', true );
    wp_register_script( 'pie-chart' , get_stylesheet_directory_uri() . '/js/jquery.easypiechart.js', array( 'jquery' )  , '', true );
    wp_register_script( 'text-rotator' , get_stylesheet_directory_uri() . '/js/text.rotator.js', array( 'jquery' )  , '', true );
    wp_register_script( 'settings' , get_stylesheet_directory_uri() . '/js/settings.js', array( 'jquery' )  , '', true );

    wp_enqueue_script( 'send-email' );
    wp_enqueue_script( 'progress-bar' );
    wp_enqueue_script( 'modernizr-custom' );
    wp_enqueue_script( 'head' );
    wp_enqueue_script( 'imagesloaded' );
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'class-helper' );
    wp_enqueue_script( 'grid-gallery' );
    wp_enqueue_script( 'carousel' );
    wp_enqueue_script( 'pie-chart' );
    wp_enqueue_script( 'text-rotator' );
    wp_enqueue_script( 'settings' );

  }

}