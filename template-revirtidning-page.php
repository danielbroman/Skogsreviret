<?php

// =============================================================================
// TEMPLATE NAME: Layout - Revirtidningen
// -----------------------------------------------------------------------------
// Skriver ut Revirtidningen.
// =============================================================================

?>

<?php get_header(); ?>
<div class="container information-area-container">
  <div class="row">
    <div class="col-md-12 information-outer">
      <div class="information-page-header">
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?></h1>
      </div>
  </div>
  </div>
  <div class="row">
        <div class="col-lg-8 information-area" role="main">
          <p><?php the_content(); ?></p>
          <?php endwhile; ?>

          <?php

          $args = array(
            'post_type' => 'revirtidning',
            'order' => 'ASC',
            'posts_per_page' => -1 );
          $loop = new WP_Query( $args );


          $loopcount = 0;

          echo '<div class="row">';
          while ( $loop->have_posts() ) : $loop->the_post();

          $rubrik = get_field('rubrik');
          $pdf_fil = get_field('pdf_fil');
          $pdf_bild = get_field('pdf_bild');
          echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">';

          echo '<div class="tidning-shadow">';
          echo '<p class="tidningsrubrik">' . $rubrik . '</p>';
          echo '<div class="tidning-box">';

          echo '<a target="blank" href="'. $pdf_fil .'"><img src="'. $pdf_bild .'" class="tidning-image"></a>';
          ?>

          <?php

          echo '</div></div></div>';
        endwhile;


        ?>



        </div>
      </div>
    <div class="col-lg-4 sidebar-menu">
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>

<?php get_footer(); ?>
