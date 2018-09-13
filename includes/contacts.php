<?php

function contact_post_type() {
  register_post_type( 'contacts',
    array(
      'labels' => array(
        'name' => __( 'Personal' ),
        'singular_name' => __( 'Personal' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title'),
      'query_var' => true,
      'exclude_from_search' => false,
    )
  );

  register_post_type( 'fullmaktige',
    array(
      'labels' => array(
        'name' => __( 'Fullmäktige' ),
        'singular_name' => __( 'Fullmäktige' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title'),
      'exclude_from_search' => false,
    )
  );

  register_post_type( 'styrelsen',
    array(
      'labels' => array(
        'name' => __( 'Styrelsen' ),
        'singular_name' => __( 'Styrelsen' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-businessman',
      'supports' => array('title'),
      'exclude_from_search' => false,
    )
  );

  register_post_type( 'revirtidning',
    array(
      'labels' => array(
        'name' => __( 'Revirtidningar' ),
        'singular_name' => __( 'Revirtidning' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-media-default',
      'supports' => array('title'),
      'exclude_from_search' => false,
    )
  );



}
add_action( 'init', 'contact_post_type' );


function awesome_custom_taxonomies() {

  $labels = array(
    'name' => 'Offices',
    'singular_name' => 'Office',
    'search_items' => 'Search Offices',
    'all_items' => 'All Offices',
    'parent_item' => 'Parent Office',
    'parent_item_colon' => 'Parent Office:',
    'edit_item' => 'Edit Office',
    'update_item' => 'Update Office',
    'add_new_item' => 'Add New Office',
    'new_item_name' => 'New Office Name',
    'menu_name' => 'Offices'
  );

  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'offices')
  );
  register_taxonomy('offices', array('contacts'), $args);




  $labels = array(
    'name' => 'Kategori',
    'singular_name' => 'Kategori',
    'search_items' => 'Sök Kategorier',
    'all_items' => 'Alla Kategorier',
    'parent_item' => 'Över Kategori',
    'parent_item_colon' => 'Över Kategori:',
    'edit_item' => 'Editera Kategori',
    'update_item' => 'Uppdatera Kategori',
    'add_new_item' => 'Lägg till ny Kategori',
    'new_item_name' => 'Ny Kategori ',
    'menu_name' => 'Kategorier'
  );

  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'kategori')
  );
  register_taxonomy('kategori', array('fullmaktige'), $args);

}
add_action('init', 'awesome_custom_taxonomies');

/*
function office_post_type() {
  register_post_type( 'offices',
    array(
      'labels' => array(
        'name' => __( 'Kontor' ),
        'singular_name' => __( 'Kontor' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-home',
      'supports' => array('title','author','thumbnail','excerpt','comments'),
      'taxonomies' => array('category'),
    )
  );
}
add_action( 'init', 'office_post_type' );
*/
