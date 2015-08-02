<?php

  function store_post_type() {
    register_post_type( 'store',
      array(
        'labels' => array(
          'name' => __( 'Store', 'bonestheme' ),
          'singular_name' => __( 'Store Item', 'bonestheme' ),
          'all_items' => __( 'All Store Items', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Store Item', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Store Items', 'bonestheme' ),
          'new_item' => __( 'New Store Item', 'bonestheme' ),
          'view_item' => __( 'View Store Item', 'bonestheme' ),
          'search_items' => __( 'Search Store Items', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Store custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'store',
          'with_front' => false
        ),
        'has_archive' => false,
        'capability_type' => 'post',
        'hierarchical' => true,
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


  add_action( 'init', 'store_post_type');

?>