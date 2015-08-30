<?php

  function team_post_type() {
    register_post_type( 'teams',
      array(
        'labels' => array(
          'name' => __( 'Teams', 'bonestheme' ),
          'singular_name' => __( 'Team', 'bonestheme' ),
          'all_items' => __( 'All Teams', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add Team', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Teams', 'bonestheme' ),
          'new_item' => __( 'New Team', 'bonestheme' ),
          'view_item' => __( 'View Team', 'bonestheme' ),
          'search_items' => __( 'Search Teams', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Teams custom post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'teams',
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


  add_action( 'init', 'team_post_type');

?>