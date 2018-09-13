jQuery(document).ready(function() {
  if (jQuery(document).width() < 767) {
    jQuery('.entry-title').each(function(){
    if(jQuery(this).height() > 30) {
      jQuery(this).css('transform','translateY(0%)');
     }
     });
  }
  else {

  }

   jQuery(".entry-thumb").mouseenter(function() {
     jQuery(this).find(".overlay").css("opacity", "0.4");
     jQuery(this).find(".overlay-text").css("opacity", "1");
     jQuery(this).find('img').addClass('zoomin');
  }).mouseleave(function() {
      jQuery(this).find(".overlay").css("opacity", "0");
      jQuery(this).find(".overlay-text").css("opacity", "0");
      jQuery(this).find('img').removeClass('zoomin');
  });

  jQuery(".overlay-text").mouseenter(function() {
    jQuery(this).css("background-color", "#fff");
    jQuery(this).css("color", "#04623a");
 }).mouseleave(function() {
    jQuery(this).css("background-color", "#04623a");
    jQuery(this).css("color", "#fff");
 });

});
