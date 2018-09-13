<?php

function wpdocs_custom_excerpt_length( $length ) {
  return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function x_child_theme_setup() {
	// override parent theme's 'more' text for excerpts
	remove_filter( 'excerpt_more', 'x_excerpt_string' );
	remove_filter( 'the_content_more_link', 'x_content_string' );
}
add_action( 'after_setup_theme', 'x_child_theme_setup' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
  if (get_locale() == 'sv_SE') {
	   return '<p class="read-more-link"><a class="moretag" href="'. get_permalink($post->ID) . '"> Läs Mera</a></p>';
  }
  else if(get_locale() == 'fi') {
     return '<p class="read-more-link"><a class="moretag" href="'. get_permalink($post->ID) . '"> Lue lisää</a></p>';
  }
}
add_filter('excerpt_more', 'new_excerpt_more');

function foobar_func( $atts ){
	get_search_form();
}
add_shortcode( 'foobar', 'foobar_func' );


 ?>
