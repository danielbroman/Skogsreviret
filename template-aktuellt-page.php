<?php

// =============================================================================
// TEMPLATE NAME: Layout - Aktuellt
// -----------------------------------------------------------------------------
// Skriver ut nyheter
// =============================================================================
?>

<?php get_header(); ?>

<div class="container information-area-container">
  <div class="row">
    <div class="col-md-12 information-outer">
      <div class="information-page-header">
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?></h1>
      <?php endwhile; ?>
      </div>
  </div>
  </div>
  <div class="row">
<div class="col-md-12 information-area" role="main">

<?php

$args = array(
  'post_type' => 'post',
  'posts_per_page' => -1 );
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <?php $aktuelltimg = get_field('aktuellt_bild'); ?>
    <div class="news-box">
    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '"%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>">
    <div class="entry-thumb ">
        <div id="markberedning" class="thecontainer">
         <img src="<?php echo $aktuelltimg ?>">
        <p class="overlay-text"> <?php pll_e('Läs mera'); ?></p>
        <div class="overlay"></div>

        <div class="title-overlay">
          <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '"%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        </div>
        <div class="transparent-background"></div>
      </div>
    </div>
    </a>
      <?php the_excerpt(); ?>
      </div>
      <hr>
    <?php
  endwhile;

?>
<?php wp_reset_postdata(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>
