<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================


update_option( 'siteurl', 'http://www.revir.org' );
update_option( 'home', 'http://www.revir.org' );


add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'personal-image', 240, 300, true ); // Hard Crop Mode
function custom_script_enqueue() {

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '3.3.4', 'all');


    //wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.4', true);

    if ( is_page_template( 'template-text-sidebar-page.php' ) || is_page_template( 'template-kontorsida-page.php' ) || is_page_template( 'template-styrelsen.php' ) ||
    is_page_template( 'template-form-sidebar-page.php' ) || is_page_template( 'template-card-page.php' ) || is_page_template( 'template-revirtidning-page.php' ) ||
    is_page_template( 'template-aktuellt-page.php' ) || is_page_template( 'template-contact-personal.php' ) || is_singular( 'post' )  ||
    is_page_template( 'template-text-picture-page.php' ) || is_page_template('template-fullmaktige.php')) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/page-template.css' );
    }

    if ( is_page_template( 'template-homepage.php')) {
      wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/home-css.css' );
    }

    wp_enqueue_script('isVisible', get_stylesheet_directory_uri() . '/js/jquery.visible.min.js');
    wp_enqueue_script('mainjs', get_stylesheet_directory_uri() . '/js/main.js');


  }
  add_action( 'wp_enqueue_scripts', 'custom_script_enqueue');

// Additional Functions
// =============================================================================

require_once( __DIR__ . '/includes/contacts.php');
require_once( __DIR__ . '/includes/admin-settings.php');


function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyBW_1u0xdeLFJyaYuQA3e0AFmb2J09VZik');
}

add_action('acf/init', 'my_acf_init');

add_filter('theme_x_topbar_content','x_topbar_do_shortcode');

function x_topbar_do_shortcode($content) {
 return do_shortcode( [foobar] );
}

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Nyheter';
    $submenu['edit.php'][5][0] = 'Alla Nyheter';
    $submenu['edit.php'][10][0] = 'Skapa Nyhet';
    $submenu['edit.php'][16][0] = 'Nyhets taggar';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Nyheter';
    $labels->singular_name = 'Nyhet';
    $labels->add_new = 'Skapa Nyhet';
    $labels->add_new_item = 'Skapa Nyhet';
    $labels->edit_item = 'Editera Nyhet';
    $labels->new_item = 'Nyhet';
    $labels->view_item = 'Visa Nyhet';
    $labels->search_items = 'Sök Nyhet';
    $labels->not_found = 'Inga nyheter hittades';
    $labels->not_found_in_trash = 'Inga nyheter i skräpkorgen';
    $labels->all_items = 'Alla Nyheter';
    $labels->menu_name = 'Nyheter';
    $labels->name_admin_bar = 'Nyheter';
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );


function custom_menu_page_removing() {
    remove_menu_page( 'edit.php?post_type=x-portfolio' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );



pll_register_string('Aktuellt', 'Aktuellt');
pll_register_string('Revirets tjänster', 'Revirets tjänster');
pll_register_string('Tel:', 'Tel:');
pll_register_string('Epost:', 'Epost:');
pll_register_string('Ge respons:', 'Ge respons:');
pll_register_string('Sök...', 'Sök...');
pll_register_string('Telefon: ', 'Telefon: ');
pll_register_string('Epost: ', 'Epost: ');
pll_register_string('Våra kontor >>', 'Våra kontor >>');
pll_register_string('Distrikt:', 'Distrikt:');
pll_register_string('Läs mera', 'Läs mera');
pll_register_string('Adress: ', 'Adress: ');
pll_register_string('Sökresultat', 'Sökresultat');
pll_register_string('Ordinarie medlemmar', 'Ordinarie medlemmar');
pll_register_string('Ersättare', 'Ersättare');
pll_register_string('Sidan du sökte efter kunde inte hittas.', 'Sidan du sökte efter kunde inte hittas.');
pll_register_string('Någonting gick fel.', 'Någonting gick fel.');

?>
