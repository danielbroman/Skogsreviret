<?php

// =============================================================================
// TEMPLATE NAME: Layout - Styrelsen
// -----------------------------------------------------------------------------
// Handles output the portfolio index page.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "template-archive-x-portfolio.php," where you'll
// be able to find the appropriate output.
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

      <?php endwhile;

      $args = array(
        'post_type' => 'styrelsen',
        'order' => 'ASC',
        'posts_per_page' => -1 );
      $loop = new WP_Query( $args );

      $loopcount = 0;

      echo '<div class="row">';
      while ( $loop->have_posts() ) : $loop->the_post();





        $email = get_field('email');
        $position = get_field('position');
        $adress = get_field('adress');
        $phone = get_field('telefonnummer');
        $contactimage = get_field('personal-bild');
        echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">';
        echo '<div class="styrelsen-box">';
        echo '<img src="'. $contactimage .'" class="contact-image">';
        echo '<p class="contact-name">'; the_title(); echo '</p>';
        ?>
        <b><p class="position-text"> <?php echo $position ?></p></b>
        <p class="position-text"><?php echo $adress ?></p>
        <?php if (get_locale() == 'sv_SE') { ?>
        <p class="phone-text">Telefon: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
        <p class="phone-text">Epost:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
        <?php } ?>

        <?php if (get_locale() == 'fi') { ?>
        <p class="phone-text">Puhelin: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
        <p class="phone-text">Sähköposti:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
        <?php }
        echo '</div></div>';




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
