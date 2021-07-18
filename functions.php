<?php
// Insert custom CSS
add_action( 'wp_enqueue_scripts', 'de_finibus_enqueue_styles' );

function de_finibus_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Turn off automatic resize
add_filter( 'big_image_size_threshold', '__return_false' );
