<?php

// =============================================================================
// TEMPLATE NAME: Layout - Text with Form
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

$form = get_field('form-id');

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

    </div>
    <div class="col-lg-4 sidebar-form">
      <div class="form-inner">
        <?php echo do_shortcode($form); ?>
      </div>
  </div>
  </div>
  </div>
<?php get_footer(); ?>
