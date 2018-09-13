<?php

// =============================================================================
// 404.PHP
// -----------------------------------------------------------------------------
// Handles errors when pages do not exist.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "wp-404.php," where you'll be able to find the
// appropriate output.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-container max width offset">
    <div class="x-main full" role="main">
      <div class="entry-wrap entry-404">

        <p class="center-text"><?php pll_e('Sidan du sökte efter kunde inte hittas.'); ?></p>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
