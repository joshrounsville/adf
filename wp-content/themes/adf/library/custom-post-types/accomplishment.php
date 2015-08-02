<?php

  function accomplishment_post_type() {
    register_post_type( 'accomplishment',
      array(
        'labels' => array(
          'name' => __( 'Accomplishments', 'bonestheme' ),
          'singular_name' => __( 'Accomplishments', 'bonestheme' ),
          'all_items' => __( 'All Accomplishments', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Accomplishment', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Accomplishments', 'bonestheme' ),
          'new_item' => __( 'New Accomplishment', 'bonestheme' ),
          'view_item' => __( 'View Accomplishment', 'bonestheme' ),
          'search_items' => __( 'Search Accomplishments', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Accomplishments custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'accomplishment',
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


  add_action( 'init', 'accomplishment_post_type');

?>