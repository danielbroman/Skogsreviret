<?php

// =============================================================================
// VIEWS/GLOBAL/_FOOTER-WIDGET-AREAS.PHP
// -----------------------------------------------------------------------------
// Outputs the widget areas for the footer.
// =============================================================================

$n = x_get_option( 'x_footer_widget_areas' );

?>
<div class="topbar-footer">
<div class="x-container max width">
<div class="row">
  <div class="col-md-12">
    <img class="footer-image" style="width: 250px;" src="/wp-content/uploads/2017/12/logo-white-new.png">
  </div>
</div>
</div>
</div>

<?php if ( $n != 0 ) : ?>

  <footer class="x-colophon top" role="contentinfo">
    <div class="x-container max width">


      <?php

      $i = 0; while ( $i < $n ) : $i++;

        $last = ( $i == $n ) ? ' last' : '';

        echo '<div class="x-column x-md x-1-' . $n . $last . '">';
          dynamic_sidebar( 'footer-' . $i );
        echo '</div>';

      endwhile;

      ?>

    </div>
  </footer>

<?php endif; ?>
