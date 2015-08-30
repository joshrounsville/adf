<?php

  function coach_post_type() {
    register_post_type( 'coaches',
      array(
        'labels' => array(
          'name' => __( 'Coaches', 'bonestheme' ),
          'singular_name' => __( 'Coach', 'bonestheme' ),
          'all_items' => __( 'All Coaches', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Coach', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Coaches', 'bonestheme' ),
          'new_item' => __( 'New Coach', 'bonestheme' ),
          'view_item' => __( 'View Coach', 'bonestheme' ),
          'search_items' => __( 'Search Coaches', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Coaches custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'coaches',
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

  add_action( 'init', 'coach_post_type');

?>