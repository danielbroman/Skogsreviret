<?php

// =============================================================================
// TEMPLATE NAME: Layout - Personal
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
          <?php $kontornamn = get_field('kontor_namn'); ?>
          <b><h1 class="page-heading"><?php echo $kontornamn; ?></h1></b>
        </div>
        </div>
      </div>


      <?php
      $kontor = get_field('valj_kontor');
      $location = get_field('google-maps');
      if($kontor == 'Borgå') {$category = 'borga-kontor';}
      else if($kontor == 'Ekenäs') {$category = 'ekenas-kontor';}
      else if($kontor == 'Esbo') {$category = 'esbo-kontor';}
      else if($kontor == 'Lovisa') {$category = 'lovisa-kontor';}
      else if($kontor == 'Ledningen') {$category = 'ledningen';}

      $args = array(
        'post_type' => 'contacts',
        'offices' => $category,
        'order' => 'ASC',
        'posts_per_page' => -1 );
      $loop = new WP_Query( $args );

      $loopcount = 0;

      echo '<div class="row">';
      while ( $loop->have_posts() ) : $loop->the_post();





        $email = get_field('email');
        $position = get_field('position');
        $position_fi = get_field('position-fi');
        $distrikt = get_field('distrikt');
        $distrikt_fi = get_field('distrikt-fi');
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

        <?php if($distrikt != "" || $distrikt != "") { ?>
          <?php if (get_locale() == 'sv_SE') { ?>
            <p class="position-text"><?php pll_e('Distrikt:'); ?> <?php echo $distrikt ?></p>
          <?php  } ?>

          <?php if (get_locale() == 'fi') { ?>
            <p class="position-text"><?php pll_e('Distrikt:'); ?> <?php echo $distrikt_fi ?></p>
          <?php  } ?>
        <?php } ?>
        <p class="phone-text"><?php pll_e('Telefon: '); ?> <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
        <p class="phone-text"><?php pll_e('Epost:'); ?>  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
        <?php
        echo '</div></div>';




      endwhile;


      ?>


    </div>

    <div class="row">

      <div class="col-md-12">


        <?php



        if(!empty($location) ):
        ?>
        <div class="acf-map">
          <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?> "><p class="address"><?php echo $location['address']; ?></p></div>

        </div>
      <?php endif; ?>
      </div>

    </div>


  </div>
  </div>


<?php get_footer(); ?>
<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW_1u0xdeLFJyaYuQA3e0AFmb2J09VZik&region=fi"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

	// var
	var $markers = $el.find('.marker');


	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};


	// create map
	var map = new google.maps.Map( $el[0], args);


	// add a markers reference
	map.markers = [];


	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );


	});


	// center map
	center_map( map );


	// return
	return map;
  google.maps.event.trigger(map, 'resize');

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>
