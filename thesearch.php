
<?php get_header(); ?>
<div class="container">
<div class="row">
  <div class="col-md-12" style="padding:10px; background-color:#04623a; margin-top: 20px;">
    <div class="container"><h1 class="banner-text" style="text-align: center; color: #fff; margin:20px;"> <?php pll_e('Sökning'); ?></h1></div>
  </div>

</div>

<div class="row personal-search">
<div class="col-md-6">

  <form role="search" method="get" class="form-search" action="<?php echo home_url( '/' ); ?>">
  <label>
      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Sök personal …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="hidden" name="post_type" value="all" />
  </label>
  </div>
</div>
<div class="row personal-submit">
  <div class="col-md-3">
  <input type="submit" class="form-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
</div>
</div>

<div class="row">
<?php



$search_term = $_GET['s'];
$search_criteria = $_GET['post_type'];


$query = new WP_Query( array( 's' => $search_term,
                              'post_type' => 'contacts') );





?>
<?php if ($query->have_posts()) : ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>



             <?php
             echo the_title(); ?>



<?php endwhile; else: ?>

/* What to display if there are no results. */
<?php wp_reset_postdata(); ?>

<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
