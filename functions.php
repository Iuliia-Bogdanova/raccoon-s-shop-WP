<?php 

add_action( 'wp_enqueue_scripts', function() {
    
	wp_enqueue_style( 'font-important', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&display=swap');
    wp_enqueue_style( 'font-title', 'https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@500&display=swap' );
    wp_enqueue_style( 'font-text', 'https://fonts.googleapis.com/css2?family=Jura:wght@400&display=swap' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'vars', get_template_directory_uri() . '/assets/css/vars.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    
    
    
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});

?>