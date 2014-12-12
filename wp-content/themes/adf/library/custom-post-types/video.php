<?php

  add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

  function bones_flush_rewrite_rules() {
    flush_rewrite_rules();
  }

  function video_post_type() {
    register_post_type( 'video',
      array(
        'labels' => array(
          'name' => __( 'Videos', 'bonestheme' ),
          'singular_name' => __( 'Video', 'bonestheme' ),
          'all_items' => __( 'All Videos', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Video', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Videos', 'bonestheme' ),
          'new_item' => __( 'New Video', 'bonestheme' ),
          'view_item' => __( 'View Video', 'bonestheme' ),
          'search_items' => __( 'Search Videos', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Videos custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'video',
          'with_front' => false
        ),
        'has_archive' => 'video',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'author',
          'thumbnail',
          'excerpt',
          'trackbacks',
          'custom-fields',
          'comments',
          'revisions',
          'sticky'
        )
      )
    );
  }


  add_action( 'init', 'video_post_type');

?>
