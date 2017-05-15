<?php

add_action( 'wp_enqueue_scripts', 'twentyseventeen_parent_theme_enqueue_styles' );

function twentyseventeen_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twenty-seventeen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'twentyseventeen-style' )
    );
    wp_enqueue_script( 'vue-search-scipt', get_stylesheet_directory_uri() . '/vuesearch/dist/build.js', array('jquery'), '1.0.0', true);

}
