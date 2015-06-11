<?php

  function event_post_type() {
    register_post_type( 'event',
      array(
        'labels' => array(
          'name' => __( 'Events', 'bonestheme' ),
          'singular_name' => __( 'Event', 'bonestheme' ),
          'all_items' => __( 'All Events', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Event', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Events', 'bonestheme' ),
          'new_item' => __( 'New Event', 'bonestheme' ),
          'view_item' => __( 'View Event', 'bonestheme' ),
          'search_items' => __( 'Search Events', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Events custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'events',
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


  add_action( 'init', 'event_post_type');

?>