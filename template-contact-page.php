<?php

// =============================================================================
// TEMPLATE NAME: Layout - Kontakter
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

  <div class="x-container max width offset">
    <div class="x-main full" role="main">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-heading">
          <b><p class="office-heading">Borgå Kontor</p></b>
        </div>
        </div>
      </div>
      <?php
      $args = array(
        'post_type' => 'contacts',
        'category_name' => 'borga-kontor',
        'posts_per_page' => 4 );
      $loop = new WP_Query( $args );
      echo '<div class="row">';

      while ( $loop->have_posts() ) : $loop->the_post();
        $email = get_field('email');
        $position = get_field('position');
        $phone = get_field('telefonnummer');
        $contactimage = get_field('personal-bild');
        echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">';
        echo '<div class="contact-box">';
        echo '<img src="'. $contactimage .'" class="contact-image">';
        echo '<p class="contact-name">'; the_title(); echo '</p>';
        ?>
        <b><p class="position-text"> <?php echo $position ?></p></b>
        <p class="phone-text">Telefon: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
        <p class="phone-text">Epost:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
        <?php
        echo '</div></div>';
      endwhile;
      ?>


</div>

<div class="row">
  <div class="col-md-12">
    <div class="contact-heading">
    <b><p class="office-heading">Ekenäs Kontor</p></b>
  </div>
  </div>
</div>

  <?php
  $args = array(
    'post_type' => 'contacts',
    'category_name' => 'ekenas-kontor',
    'posts_per_page' => 4 );
  $loop = new WP_Query( $args );
  echo '<div class="row">';

  while ( $loop->have_posts() ) : $loop->the_post();
    $email = get_field('email');
    $position = get_field('position');
    $phone = get_field('telefonnummer');
    $contactimage = get_field('personal-bild');
    echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">';
    echo '<div class="contact-box">';
    echo '<img src="'. $contactimage .'" class="contact-image">';
    echo '<p class="contact-name">'; the_title(); echo '</p>';
    ?>
    <b><p class="position-text"> <?php echo $position ?></p></b>
    <p class="phone-text">Telefon: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
    <p class="phone-text">Epost:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
    <?php
    echo '</div></div>';
  endwhile;
  ?>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="contact-heading">
    <b><p class="office-heading">Esbo Kontor</p></b>
  </div>
  </div>
</div>

  <?php
  $args = array(
    'post_type' => 'contacts',
    'category_name' => 'esbo-kontor',
    'posts_per_page' => 4 );
  $loop = new WP_Query( $args );
  echo '<div class="row">';

  while ( $loop->have_posts() ) : $loop->the_post();
    $email = get_field('email');
    $position = get_field('position');
    $phone = get_field('telefonnummer');
    $contactimage = get_field('personal-bild');
    echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">';
    echo '<div class="contact-box">';
    echo '<img src="'. $contactimage .'" class="contact-image">';
    echo '<p class="contact-name">'; the_title(); echo '</p>';
    ?>
    <b><p class="position-text"> <?php echo $position ?></p></b>
    <p class="phone-text">Telefon: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
    <p class="phone-text">Epost:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
    <?php
    echo '</div></div>';
  endwhile;
  ?>

</div>

<div class="row">
  <div class="col-md-12">
    <div class="contact-heading">
    <b><p class="office-heading">Lovisa Kontor</p></b>
  </div>
  </div>
</div>

  <?php
  $args = array(
    'post_type' => 'contacts',
    'category_name' => 'lovisa-kontor',
    'posts_per_page' => 4 );
  $loop = new WP_Query( $args );
  echo '<div class="row">';

  while ( $loop->have_posts() ) : $loop->the_post();
    $email = get_field('email');
    $position = get_field('position');
    $phone = get_field('telefonnummer');
    $contactimage = get_field('personal-bild');
    echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">';
    echo '<div class="contact-box">';
    echo '<img src="'. $contactimage .'" class="contact-image">';
    echo '<p class="contact-name">'; the_title(); echo '</p>';
    ?>
    <b><p class="position-text"> <?php echo $position ?></p></b>
    <p class="phone-text">Telefon: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
    <p class="phone-text">Epost:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
    <?php
    echo '</div></div>';
  endwhile;
  ?>

</div>
    </div>
  </div>

<?php get_footer(); ?>
