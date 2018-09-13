<?php

// =============================================================================
// TEMPLATE NAME: Layout - Fullmäktige
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

?>

<?php get_header(); ?>
<div class="container information-area-container">
  <div class="row">
    <div class="col-md-12  information-outer">
      <div class="information-page-header">
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?></h1>
      </div>
  </div>
  </div>
  <div class="row">
        <div class="col-lg-8 col-md-12 information-area" role="main">

      <?php endwhile; ?>
      <b><h3><?php pll_e('Ordinarie medlemmar'); ?> </h3></b>
      <table class="desktop-visible">
      <tbody>
      <?php


      $args = array(
        'post_type' => 'fullmaktige',
        'kategori' => 'ordinarie',
        'orderby'=> 'title',
        'order' => 'ASC',
        'posts_per_page' => -1 );
      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post();


        $yrke = get_field('yrke');
        $kommun = get_field('kommun');
        $yrke_fi = get_field('yrke_finska');
        $kommun_fi = get_field('kommun_finska');
        echo '<div class="row" style="margin-bottom:20px;">';
        echo '<div class="col-md-4"><p class="contact-name">'; the_title(); echo '</p></div>';
        ?>
        <?php if(get_locale() == 'sv_SE') { ?>
          <div class="col-md-4"><b><p class="position-text"> <?php echo $yrke ?></p></b></div>
          <div class="col-md-1 col-sm-0"></div>
          <div class="col-md-3"><b><p class="position-text"> <?php echo $kommun ?></p></b></div>

        <?php }
        else if(get_locale() == 'fi') { ?>
          <div class="col-md-4"><b><p class="position-text"> <?php echo $yrke_fi ?></p></b></div>
          <div class="col-md-1 col-sm-0"></div>
          <div class="col-md-3"><b><p class="position-text"> <?php echo $kommun_fi ?></p></b></div>

        <?php } ?>
      </div>
        <?php
        echo '</div></div>';




      endwhile;

?>
</tbody>
</table>
<b><h3><?php pll_e('Ersättare'); ?> </h3></b>
<table>
<tbody>
<?php


$args = array(
  'post_type' => 'fullmaktige',
  'kategori' => 'ersattare',
  'orderby'=> 'title',
  'order' => 'ASC',
  'posts_per_page' => -1 );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();


  $yrke = get_field('yrke');
  $kommun = get_field('kommun');
  $yrke_fi = get_field('yrke_finska');
  $kommun_fi = get_field('kommun_finska');
  echo '<div class="row" style="margin-bottom:20px;">';
  echo '<div class="col-md-4"><p class="contact-name">'; the_title(); echo '</p></div>';
  ?>
  <?php if(get_locale() == 'sv_SE') { ?>
    <div class="col-md-4"><b><p class="position-text"> <?php echo $yrke ?></p></b></div>
    <div class="col-md-1 col-sm-0"></div>
    <div class="col-md-3"><b><p class="position-text"> <?php echo $kommun ?></p></b></div>
  <?php }
  else if(get_locale() == 'fi') { ?>
    <div class="col-md-4"><b><p class="position-text"> <?php echo $yrke_fi ?></p></b></div>
    <div class="col-md-1 col-sm-0"></div>
    <div class="col-md-3"><b><p class="position-text"> <?php echo $kommun_fi ?></p></b></div>
  <?php } ?>
</div>
  <?php
  echo '</div></div>';




endwhile;

?>
</tbody>
</table>
    </div>
    <div class="col-lg-4 col-md-12 sidebar-menu">
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
<?php get_footer(); ?>
