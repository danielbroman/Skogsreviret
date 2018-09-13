<?php

// =============================================================================
// TEMPLATE NAME: Layout - Kontorsida
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

?>

<?php get_header(); ?>
<?php
$borga_link = get_field('borga_kontor_lank');
$borga_adress = get_field('borga_adress');
$borga_tel = get_field('borga_telefonnummer');

$ekenas_link = get_field('ekenas_kontor_lank');
$ekenas_adress = get_field('ekenas_adress');
$ekenas_tel = get_field('ekenas_telefonnummer');

$esbo_link = get_field('esbo_kontor_lank');
$esbo_adress = get_field('esbo_adress');
$esbo_tel = get_field('esbo_telefonnummer');

$lovisa_link = get_field('lovisa_kontor_lank');
$lovisa_adress = get_field('lovisa_adress');
$lovisa_tel = get_field('lovisa_telefonnummer');

$maps_embed = get_field('maps-embed');

 ?>
<div class="container">
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
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Etsi henkilökuntaa …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
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
    <div class="col-md-6">
      <div class="inner-office">
        <div class="office-header">
          <a href=" <?php echo $borga_link['url'] ?> "> <h2 class="kontor-rubrik"><?php echo $borga_link['title'] ?></h2></a>
        </div>

        <div class="office-text">
          <p class="office-info"><strong><?php pll_e('Adress: '); ?></strong> <?php echo $borga_adress ?> </p>
          <p class="office-info"><strong><?php pll_e('Telefon: '); ?></strong> <?php echo $borga_tel ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="inner-office">
        <div class="office-header">
          <a href=" <?php echo $ekenas_link['url'] ?> "> <h2 class="kontor-rubrik"><?php echo $ekenas_link['title'] ?></h2></a>
        </div>

        <div class="office-text">
          <p class="office-info"><strong><?php pll_e('Adress: '); ?></strong> <?php echo $ekenas_adress ?></p>
          <p class="office-info"><strong><?php pll_e('Telefon: '); ?></strong> <?php echo $ekenas_tel ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="inner-office">
        <div class="office-header">
          <a href=" <?php echo $esbo_link['url'] ?> "> <h2 class="kontor-rubrik"><?php echo $esbo_link['title'] ?></h2></a>
        </div>

        <div class="office-text">
          <p class="office-info"><strong><?php pll_e('Adress: '); ?></strong> <?php echo $esbo_adress ?></p>
          <p class="office-info"><strong><?php pll_e('Telefon: '); ?></strong> <?php echo $esbo_tel ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="inner-office">
        <div class="office-header">
          <a href=" <?php echo $lovisa_link['url'] ?> "> <h2 class="kontor-rubrik"><?php echo $lovisa_link['title'] ?></h2></a>
        </div>

        <div class="office-text">
          <p class="office-info"><strong><?php pll_e('Adress: '); ?></strong> <?php echo $lovisa_adress ?></p>
          <p class="office-info"><strong><?php pll_e('Telefon: '); ?></strong> <?php echo $lovisa_tel ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 google-maps-area">
      <?php echo($maps_embed); ?>
    </div>
  </div>

</div>


<?php get_footer(); ?>
