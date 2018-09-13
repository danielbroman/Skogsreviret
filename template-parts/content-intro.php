<?php
/*===============================
  Skriver ut Intro sektion
  ================================*/
 ?>

 <?php

 /*
 =======ACF PARAMETERS=======
 */
 $intro_header = get_field('intro_rubrik');
 $intro_text = get_field('intro_text');
 
 ?>


 <div class="x-container max width offset">
   <div class="x-main full" role="main">
     <div class="row">
       <div class="col-md-6 intro-text">
         <h1 class="intro-rubrik"><?php echo $intro_header ?></h1>
         <p><?php echo $intro_text ?></p>
       </div>
       <div class="col-md-1"></div>
       <div class="col-md-5">
         <div class="intro-contact-info">
           <h5><?php echo $kontakt_rubrik; ?></h5>
           <p class="intro-text"> <?php echo $kontakt_adress; ?> </p>
           <p class="intro-text">Telefon: <?php echo $kontakt_telefon; ?> </p>
           <p class="intro-text">Epost: <?php echo $kontakt_epost; ?> </p>
           <p class="intro-text"><a href="<?php echo $kontakt_lank; ?>"> Våra kontor >> </a></p>
         </div>
       </div>
     </div>
   </div>
 </div>
