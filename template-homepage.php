<?php

// =============================================================================
// TEMPLATE NAME: Layout - Homepage
// -----------------------------------------------------------------------------
// Skriver ut Första sidans template
// =============================================================================

?>

<?php

/*
=======ACF PARAMETERS=======
*/
$section2background = get_field('sektion-2-background');
$section4background = get_field('sektion-4-background');
?>

<?php get_header();
  /*
  =======Sektion 1=======
  */
  ?>
  <div id="section1">
  <?php    //get_template_part( '/template-parts/content-intro');
           get_template_part( '/template-parts/content-service');
   ?>
  </div>


  <?php
  /*
  =======Sektion 2=======
  */
  ?>

  <div id="section2" style="background-image: url(<?php echo $section2background; ?>);">
    <?php get_template_part( '/template-parts/content-aktuellt'); ?>
  </div>

  <?php
  /*
  =======Sektion 3=======
  */
  ?>



  <?php
  /*
  =======Sektion 4=======
  */
  ?>
  
  <div id="section4" style="background-image: url(<?php echo $section4background; ?>);">
    <?php get_template_part( '/template-parts/content-kontakt');  ?>
  </div>



<?php get_footer(); ?>
