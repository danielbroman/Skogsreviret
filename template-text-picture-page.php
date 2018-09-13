<?php

// =============================================================================
// TEMPLATE NAME: Layout - Text with picture
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

$bilden = get_field('bilden');
$titeln = get_field('titeln');
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
    <div class="col-md-12 information-area" role="main">
        <?php if($bilden && $titeln) { ?>
          <div class="entry-thumb-ovrigt">
              <div class="thecontainer">
              <img src="<?php echo $bilden ?>">
              <div class="overlay"></div>

              <div class="title-overlay">
                <h1 class="entry-title"><?php echo $titeln ?></h1>

              </div>
              <div class="transparent-background"></div>

            </div>
          </div>
        <?php } ?>
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>
    </div>

  </div>
  </div>
<?php get_footer(); ?>
