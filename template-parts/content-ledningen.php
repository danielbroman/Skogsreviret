<?php
/*===============================
  Skriver ut lednigens personer
  ================================*/
 ?>
 <div class="col-md-12" style="padding:10px; background-color:#04623a; margin-top: 0px;">
   <div class="container"><h1 style="text-align: center; color: #fff; margin:20px;">  Ledningen </h1></div>
 </div>
 <div class="x-container max width offset">
   <div class="row">

   </div>
   <?php
   $args = array(
     'post_type' => 'contacts',
     'offices' => 'Ledningen',
     'posts_per_page' => 0 );
   $loop = new WP_Query( $args );
   echo '<div class="row">';
   while ( $loop->have_posts() ) : $loop->the_post();

       $email = get_field('email');
       $position = get_field('position');
       $phone = get_field('telefonnummer');
       $contactimage = get_field('personal-bild');
         echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">';
         echo '<div class="contact-box">';
         echo '<img src="'. $contactimage .'" class="contact-image">';
         echo '<p class="contact-name">'; the_title(); echo '</p>';
       ?>
         <b><p class="position-text"> <?php echo $position ?></p></b>
         <p class="phone-text">Telefon: <a class="phone-text" href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a></p>
         <p class="phone-text">Epost:  <a class="phone-text" href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
       <?php
       echo '</div></div>';
     endwhile;
     wp_reset_postdata(); ?>
   </div>
 </div>
