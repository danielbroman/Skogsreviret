<?php
/*===============================
  Skriver ut Service sektion
  ================================*/
 ?>

 <?php
 $service_rubrik1 = get_field('service_1_rubrik');
 $service_rubrik2 = get_field('service_2_rubrik');
 $service_rubrik3 = get_field('service_3_rubrik');
 $service_rubrik4 = get_field('service_4_rubrik');
 $service_rubrik5 = get_field('service_5_rubrik');
 $service_rubrik6 = get_field('service_6_rubrik');
 $service_rubrik7 = get_field('service_7_rubrik');
 $service_rubrik8 = get_field('service_8_rubrik');

 $service_bild1 = get_field('service_bild1');
 $service_bild2 = get_field('service_bild2');
 $service_bild3 = get_field('service_bild3');
 $service_bild4 = get_field('service_bild4');
 $service_bild5 = get_field('service_bild5');
 $service_bild6 = get_field('service_bild6');
 $service_bild7 = get_field('service_bild7');
 $service_bild8 = get_field('service_bild8');


 ?>
 <div class="col-md-12" style="padding:10px; background-color:#04623a; margin-top: 0px;">
   <div class="container"><h1 class="page-heading" style="text-align: center; color: #fff; margin:20px;"> <?php pll_e('Revirets tjänster'); ?> </h1></div>
 </div>
 <div class="container">
   <div class="row">
     <div class="col-md-12">
     </div>
   </div>

   <div id="first-service-row" class="row service-icon-row">


     <div id="service-1" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon">
         <div class="service-icon-wrap">
           <img class="service-picture" src="<?php echo $service_bild1; ?>">
         </div>
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik1['url']; ?>" target="<?php echo $service_rubrik1['target']; ?>"><?php echo $service_rubrik1['title']; ?></a></p>

     </div>

     <div id="service-2"class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon ">
         <img class="service-picture" src="<?php echo $service_bild2; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik2['url']; ?>" target="<?php echo $service_rubrik2['target']; ?>"><?php echo $service_rubrik2['title']; ?></a></p>

     </div>

     <div id="service-3" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon ">
         <img class="service-picture" src="<?php echo $service_bild3; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik3['url']; ?>" target="<?php echo $service_rubrik3['target']; ?>"><?php echo $service_rubrik3['title']; ?></a></p>

     </div>

     <div id="service-4" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon ">
         <img class="service-picture" src="<?php echo $service_bild4; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik4['url']; ?>" target="<?php echo $service_rubrik4['target']; ?>"><?php echo $service_rubrik4['title']; ?></a></p>

     </div>




     <div id="service-5" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon ">
         <img class="service-picture" src="<?php echo $service_bild5; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik5['url']; ?>" target="<?php echo $service_rubrik5['target']; ?>"><?php echo $service_rubrik5['title']; ?></a></p>
     </div>

     <div id="service-6" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon">
         <img class="service-picture" src="<?php echo $service_bild6; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik6['url']; ?>" target="<?php echo $service_rubrik6['target']; ?>"><?php echo $service_rubrik6['title']; ?></a></p>
     </div>
     <div class="col-xl-0 col-lg-2 col-md-0 service-placeholder"></div>

     <div id="service-7" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon ">
         <img class="service-picture" src="<?php echo $service_bild7; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik7['url']; ?>" target="<?php echo $service_rubrik7['target']; ?>"><?php echo $service_rubrik7['title']; ?></a></p>
     </div>

     <div id="service-8" class="col-xl-3 col-lg-4 col-md-6">
       <div class="service-icon">
         <img class="service-picture" src="<?php echo $service_bild8; ?>">
       </div>
         <p class="service-heading"><a href="<?php echo $service_rubrik8['url']; ?>" target="<?php echo $service_rubrik8['target']; ?>"><?php echo $service_rubrik8['title']; ?></a></p>
     </div>
     <div class="col-xl-0 col-lg-2 col-md-0 service-placeholder"></div>

 </div>
 </div>
