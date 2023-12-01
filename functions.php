<?php
function my_theme_styles() {
  wp_enqueue_style( 'style-sheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
  wp_enqueue_style("theme-style", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
}

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );


