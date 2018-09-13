<?php

// =============================================================================
// TEMPLATE NAME: Layout - Cardpage
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

$markberedningimg1 = get_field('markberedning_bild');
$markberedningtitel1 = get_field('markberedning_titel');
$markberedningimg2 = get_field('plantering_bild');
$markberedningtitel2 = get_field('plantering_titel');
$markberedningimg3 = get_field('rojning_bild');
$markberedningtitel3 = get_field('rojning_titel');

$form = get_field('form_id');

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
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php if($markberedningimg1 && $markberedningtitel1) { ?>
          <div class="entry-thumb ">
              <a href="<?php echo $markberedningtitel1['url'] ?>">
        	    <div id="markberedning" class="thecontainer">
        			<img src="<?php echo $markberedningimg1 ?>">
              <p class="overlay-text"> <?php pll_e('Läs mera'); ?></p>
        			<div class="overlay"></div>

              <div class="title-overlay">
                <a href="<?php echo $markberedningtitel1['url'] ?>"><h1 class="entry-title"><?php echo $markberedningtitel1['title'] ?></h1></a>
        			</div>
              <div class="transparent-background"></div>
        		</div>
          </a>
        	</div>
          <?php }

          if($markberedningimg2 && $markberedningtitel2) { ?>
          <div class="entry-thumb ">
            <a href="<?php echo $markberedningtitel2['url'] ?>">
        	    <div id="plantering" class="thecontainer">
        			<img src="<?php echo $markberedningimg2 ?>">
              <p class="overlay-text"> <?php pll_e('Läs mera'); ?></p>
        			<div class="overlay"></div>

              <div class="title-overlay">
                <a href="<?php echo $markberedningtitel2['url'] ?>"><h1 class="entry-title"><?php echo $markberedningtitel2['title'] ?></h1></a>
        			</div>
              <div class="transparent-background"></div>
        		</div>
            </a>
        	</div>
          <?php }
          if($markberedningimg3 && $markberedningtitel3) { ?>
          <div class="entry-thumb ">
            <a href="<?php echo $markberedningtitel3['url'] ?>">
        	    <div id="röjning" class="thecontainer">
        			<img src="<?php echo $markberedningimg3 ?>">
              <p class="overlay-text"> <?php pll_e('Läs mera'); ?></p>
        			<div class="overlay"></div>

              <div class="title-overlay">
                <a href="<?php echo $markberedningtitel3['url'] ?>"><h1 class="entry-title"><?php echo $markberedningtitel3['title'] ?></h1></a>
        			</div>
              <div class="transparent-background"></div>
        		</div>
            </a>
        	</div>
        <?php } ?>
        </div>
    <div class="col-lg-4 sidebar-menu">
      <?php get_sidebar(); ?>
      <?php echo do_shortcode($form); ?>
    </div>
  </div>
  </div>
<?php get_footer(); ?>
