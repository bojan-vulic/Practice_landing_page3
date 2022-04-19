<?php

/******************
Enqueueing scripts
******************/ 

function add_theme_scripts(){
    wp_enqueue_style('owl.carousel.min.css',get_template_directory_uri() .'/owl.carousel.min.css');
    wp_enqueue_style('owl.theme.default.min.css',get_template_directory_uri() .'/owl.theme.default.min.css');
    
    wp_enqueue_style('style.css',get_template_directory_uri() .'/style.css');

    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/main.js', array ( 'jquery' ), 1.1, true);
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');

/****************
Theme support
****************/

function Mairalatheme_theme_support() {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    remove_theme_support('widgets-block-editor');
    add_theme_support('custom-header');
    
/****************
Register menu
****************/  
    
   register_nav_menus(array(
        'primary' => __('Main Header Navigation')
    ));

}
add_action('init','Mairalatheme_theme_support');

/******************
    mobile menu
*******************/

// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );

// load the JS file
function wdm_mm_toggle_scripts() {
    wp_enqueue_script( 'wdm-mm-toggle', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'wdm_mm_toggle_scripts' );

/******************
    custom logo
*******************/

function Mairalatheme_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 add_action( 'after_setup_theme', 'Mairalatheme_custom_logo_setup' );

/******************
register widgets
*******************/

function Mairalatheme_widget_setup() {
    
    register_sidebar(array(
    
        'name' => 'Footer-1',
        'id' => 'footer-1',
        'before_widget' => '<article>',
        'after_widget' => '</article>'
        
    ));
    register_sidebar(array(
    
        'name' => 'Footer-2',
        'id' => 'footer-2',
        'before_widget' => '<article>',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        
    ));
   register_sidebar(array(
    
        'name' => 'Footer-3',
        'id' => 'footer-3',
        'before_widget' => '<article>',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        
    ));
    register_sidebar(array(
    
        'name' => 'Footer-4',
        'id' => 'footer-4',
        'before_widget' => '<article>',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        
    ));
    register_sidebar(array(
    
        'name' => 'Footer-5',
        'id' => 'footer-5',
        'before_widget' => '<article class="container">',
        'after_widget' => '</article>'
    ));
    
}
    add_action('widgets_init','Mairalatheme_widget_setup');
