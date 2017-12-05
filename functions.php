<?php
/* Para encolar los estilos https://codex.wordpress.org/Child_Themes */

function my_theme_enqueue_styles() {

    $parent_style = 'twentysixteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Para encolar fuentes http://www.wpbeginner.com/wp-themes/how-add-google-web-fonts-wordpress-themes/ */

function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:700,400,300|Roboto:700,400,300', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
