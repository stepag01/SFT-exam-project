<?php
function my_theme_styles() {
  wp_enqueue_style( 'style-sheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
  wp_enqueue_style("theme-style", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
}

add_action( 'wp_enqueue_scripts', 'my_theme_styles' );


// Add custom scripts and stylesheets
function add_custom_scripts_and_styles() {
    // Enqueue custom JavaScript file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/custom-script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_scripts_and_styles');
?>



