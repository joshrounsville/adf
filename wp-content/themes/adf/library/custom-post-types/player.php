<?php

  function player_post_type() {
    register_post_type( 'players',
      array(
        'labels' => array(
          'name' => __( 'Players', 'bonestheme' ),
          'singular_name' => __( 'Player', 'bonestheme' ),
          'all_items' => __( 'All Players', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Player', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Players', 'bonestheme' ),
          'new_item' => __( 'New Player', 'bonestheme' ),
          'view_item' => __( 'View Player', 'bonestheme' ),
          'search_items' => __( 'Search Players', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Players custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'players',
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

  add_action( 'init', 'player_post_type');

?>