<?php
/*===============================
  Skriver ut Kontakt sektion
  ================================*/
 ?>

 <?php

 $kontakt_rubriken = get_field('kontakt_rubrik');
 $kontakt_adress = get_field('kontakt_adress');
 $kontakt_telefon = get_field('kontakt_telefon');
 $kontakt_epost = get_field('kontakt_epost');
 $kontakt_lank = get_field('kontakt_lank');
 $location = get_field('google-maps');
 $theform = get_field('kontakt-form');
 ?>
 <div class="col-md-12" style="padding:10px; background-color:#04623a; margin-top: 0px;">
   <div class="container"><h1 class="page-heading" style="text-align: center; color: #fff; margin:20px;">  <?php pll_e('Ge respons:'); ?> </h1></div>
 </div>
 <div class="container">
   <div class="row contact-section-row">
     <div class="col-lg-6 col-md-12">
       <div class="frontpage-form">
         <?php echo do_shortcode($theform); ?>
       </div>
     </div>
   <div class="col-lg-6 col-md-12">
     <div class="frontpage-form">
         <h5 class="contact-heading2"><?php echo $kontakt_rubriken; ?></h5>
         <p class="intro-text"> <?php echo $kontakt_adress; ?> </p>
         <p class="intro-text"><?php pll_e('Telefon: '); ?><?php echo $kontakt_telefon; ?> </p>
         <p class="intro-text"><?php pll_e('Epost: '); ?> <?php echo $kontakt_epost; ?> </p>
         <p class="intro-text"><a href="<?php echo $kontakt_lank; ?>"> <?php pll_e('Våra kontor >>'); ?></a></p>
       </div>
       <?php if(!empty($location) ):
       ?>
       <div class="acf-map frontpage-map">
         <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"><p class="address"><?php echo $location['address']; ?></p></div>
       </div>
     <?php endif; ?>
   </div>
   </div>
 </div>



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
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW_1u0xdeLFJyaYuQA3e0AFmb2J09VZik"></script>
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
