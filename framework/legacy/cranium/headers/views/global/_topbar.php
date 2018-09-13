<?php

// =============================================================================
// VIEWS/GLOBAL/_TOPBAR.PHP
// -----------------------------------------------------------------------------
// Includes topbar output.
// =============================================================================

?>

<?php if ( x_get_option( 'x_topbar_display' ) == '1' ) : ?>

  <div class="x-topbar">
    <div class="x-topbar-inner x-container max width">
      <div class="row topbar-information">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <span class="topbar-information"><?php pll_e('Tel:'); ?> <a style="font-weight: 900;" href="">019 580 993</a></span>

    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

        <span class="topbar-information"><?php pll_e('Epost:'); ?> <a style="font-weight: 900;" href="">lovisa@revir.org</a></span>

</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
  <?php if(get_locale() == 'sv_SE') { ?>
  <form role="search" method="get" class="form-search" action="<?php echo home_url( '/' ); ?>">
  <label>
      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
      <input type="search" class="search-field" placeholder="<?php pll_e('Sök...'); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="hidden" name="post_type" value="all" />
  </label>
</form>
<?php }
else if(get_locale() == 'fi') { ?>
  <form role="search" method="get" class="form-search" action="<?php echo home_url( '/fi/' ); ?>">
  <label>
      <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
      <input type="search" class="search-field" placeholder="<?php pll_e('Sök...'); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="hidden" name="post_type" value="all" />
  </label>
  </form>

<?php } ?>

      </div>
    </div>
    </div>
  </div>

<?php endif; ?>
