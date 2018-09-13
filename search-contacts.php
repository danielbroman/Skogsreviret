
<?php get_header(); ?>
<div class="container">
<div class="row">
  <div class="col-md-12" style="padding:10px; background-color:#04623a; margin-top: 20px;">
    <div class="container"><h1 class="banner-text" style="text-align: center; color: #fff; margin:20px;"> <?php pll_e('Sökresultat'); ?></h1></div>
  </div>

</div>

<div class="row personal-search">
<div class="col-md-6">

  <?php if(get_locale() == 'sv_SE') { ?>

  <form role="search" method="get" class="form-search" action="<?php echo home_url( '/' ); ?>">
  <label>
      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Sök personal …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="hidden" name="post_type" value="contacts" />
  </label>
  </div>
</div>
<div class="row personal-submit">
  <div class="col-md-3">
  <input type="submit" class="form-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

<?php }
else if(get_locale() == 'fi') { ?>
  <form role="search" method="get" class="form-search" action="<?php echo home_url( '/fi/' ); ?>">
  <label>
      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Sök personal …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="hidden" name="post_type" value="contacts" />
  </label>
  </div>
</div>
<div class="row personal-submit">
  <div class="col-md-3">
  <input type="submit" class="form-button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
<?php } ?>
</div>
</div>

<div class="row">
<?php



$search_term = $_GET['s'];
$search_criteria = $_GET['post_type'];


$q1 = new WP_Query( array(
    'post_type' => 'contacts',
    'posts_per_page' => 20,
    's' => $search_term
));

$q2 = new WP_Query( array(
    'post_type' => 'contacts',
    'posts_per_page' => 20,
    'meta_query' => array(
      'relation'		=> 'OR',
        array(
           'key' => 'position',
           'value' => $search_term,
           'compare' => 'LIKE'
        ),
        array(
           'key' => 'distrikt',
           'value' => $search_term,
           'compare' => 'LIKE'
        ),
        array(
           'key' => 'telefonnummer',
           'value' => $search_term,
           'compare' => 'LIKE'
        ),
        array(
           'key' => 'email',
           'value' => $search_term,
           'compare' => 'LIKE'
        ),
     ),
));



$query = new WP_Query();
$query->posts = array_unique( array_merge( $q1->posts, $q2->posts ), SORT_REGULAR );
$query->post_count = count( $query->posts );

if ($query->have_posts()) : ?>
<?php while ($query->have_posts()) : $query->the_post();
     $email = get_field('email');
     $position = get_field('position');
     $position_fi = get_field('position-fi');
     $distrikt = get_field('distrikt');
     $phone = get_field('telefonnummer');
     $contactimage = get_field('personal-bild');
       echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">';
       echo '<div class="contact-box">';
       echo '<img src="'. $contactimage .'" class="contact-image">';
       echo '<p class="contact-name">'; the_title(); echo '</p>';
       ?>
       <?php if (get_locale() == 'sv_SE') { ?>
         <b><p class="position-text"> <?php echo $position ?></p></b>
       <?php  } ?>

       <?php if (get_locale() == 'fi') { ?>
         <b><p class="position-text"> <?php echo $position_fi ?></p></b>
       <?php  } ?>
       <?php if($distrikt != "") { ?>
         <p class="position-text"><?php pll_e('Distrikt:'); ?><?php echo $distrikt ?></p>
       <?php } ?>
        <p class="phone-text"><?php pll_e('Telefon: '); ?> <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
        <p class="phone-text"><?php pll_e('Epost:'); ?>  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
       <?php
       echo '</div></div>'; ?>



<?php endwhile; else: ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
