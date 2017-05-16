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

add_filter( 'rest_prepare_post', 'twenty_seventeen_child_post_rest', 10, 3 );

function twenty_seventeen_child_post_rest( $data, $post, $request ) {
  $_data = $data->data;
  $post_thumbnail_array = array();
  $thumbnail_id = get_post_thumbnail_id( $post->ID );
	$post_meta = get_post_meta( $post->ID );
  if( ! empty( $thumbnail_id ) ) {
    $thumbnail_full = wp_get_attachment_image_src( $thumbnail_id, 'full' );
    $thumbnail_thumb = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );
    $thumbnail_medium = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
    $thumbnail_large = wp_get_attachment_image_src( $thumbnail_id, 'large' );
    $thumbnail_data = array (
          'full' => $thumbnail_full[0],
          'thumbnail' => $thumbnail_thumb[0],
          'medium' => $thumbnail_medium[0],
          'large' => $thumbnail_large[0]
        );
    $_data['thumbnail_data'] = $thumbnail_data;
  }
  if( ! empty( $post_meta ) ) {
    $_data['post_meta'] = $post_meta;
  }
  $data->data = $_data;
  return $data;
}
