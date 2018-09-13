<?php

// =============================================================================
// TEMPLATE NAME: Layout - Text with sidebar
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

?>
<?php $maps_embed = get_field('maps-embed'); ?>
<?php $theform = get_field('the-form'); ?>
<?php $theformside = get_field('the-form-side'); ?>

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
    <div class="col-lg-8 nopadding" role="main">
      <div class="information-area">
      <p><?php the_content(); ?></p>
        <?php endwhile; ?>
        <?php wp_reset_postdata; ?>
        <?php echo($maps_embed); ?>
    </div>
    <?php
    if($theform) { ?>
    <div class="information-area">

      <?php echo do_shortcode($theform); ?>

    </div>
    <?php
    }
  ?>
  </div>
    <div class="col-lg-4 sidebar-menu">
      <?php get_sidebar(); ?>
      <?php
      if($theformside) { 
        echo do_shortcode($theformside);
      }
      ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
