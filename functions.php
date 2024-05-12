<?php 

add_action( 'wp_enqueue_scripts', function() {
    
	wp_enqueue_style( 'font-important', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&display=swap');
    wp_enqueue_style( 'font-title', 'https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@500&display=swap' );
    wp_enqueue_style( 'font-text', 'https://fonts.googleapis.com/css2?family=Jura:wght@400&display=swap' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'vars', get_template_directory_uri() . '/assets/css/vars.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

?>