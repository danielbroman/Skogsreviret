<?php
/*===============================
  Skriver ut Aktuellt
  ================================*/
 ?>

 <div class="col-md-12" style="padding:10px; background-color:#04623a; margin-top: 20px;">
   <div class="container"><h1 class="page-heading" style="text-align: center; color: #fff; margin:20px;"> <?php pll_e('Aktuellt'); ?></h1></div>
 </div>
 <div class="container">
   <div class="row">
     <?php
       $latestNews = new WP_Query('type=post&posts_per_page=3');
       if($latestNews->have_posts()):
         while($latestNews->have_posts()): $latestNews->the_post();
         $aktuelltimg = get_field('aktuellt_bild');
           $thelink = get_permalink($latestNews); ?>
             <div class="col-lg-4 col-md-12 outer-box">
               <div class="inner-box">
                 <div class="frontpage-post-image">
                 <img src="<?php echo $aktuelltimg ?>">
                 </div>
                 <h5 class="frontpage-post-heading"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php x_the_alternate_title(); ?></a></h5>
                 <p><?php the_excerpt(); ?></p>
               </div>
             </div>
           <?php endwhile;
           endif;
           wp_reset_postdata();  ?>
   </div>
 </div>
