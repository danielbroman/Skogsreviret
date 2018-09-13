<?php

// =============================================================================
// SINGLE.PHP
// -----------------------------------------------------------------------------
// Handles output of individual posts.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's posts, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "wp-single.php," where you'll be able to find the
// appropriate output.
// =============================================================================

?>

<?php get_header(); ?>
<?php $aktuelltimg = get_field('aktuellt_bild'); ?>
<div class="container">
  <div class="row">
  <div class="col-md-12 information-area" role="main">


      <div class="news-box">
      <div class="entry-image ">
          <div id="markberedning" class="thecontainer">
           <img src="<?php echo $aktuelltimg ?>">
          <p class="overlay-text"> <?php pll_e('Läs mera'); ?></p>
          <div class="overlay"></div>

          <div class="news-overlay">
            <h1 class="news-title"><?php the_title(); ?></h1>
          </div>
          <div class="transparent-newsbar"></div>
        </div>
      </div>
      </a>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile;

      endif;
      ?>
        </div>
        <hr>


  </div>
</div>
</div>
<?php get_footer(); ?>
