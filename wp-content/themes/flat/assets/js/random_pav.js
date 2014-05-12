 $(".hover").hover( function() {
		var currentImage = $(this).attr("src");
		$(this).attr("src", $(this).attr("hover"));
		$(this).attr("hover", currentImage);
		//css("background-position", "-50px 0");
	}, function() {
		var currentImage = $(this).attr("src");
		$(this).attr("src", $(this).attr("hover"));
		$(this).attr("hover", currentImage);
	});
 /*
 $(document).ready(function(){
  $("img").hide();
  var speed = 200; //speed in ms
   $(window).load(function() {
      $("#image img").hide();
      timer= setInterval(function(){
      $notLoaded = $("#image img").not(".loaded");
      $notLoaded.eq(Math.floor(Math.random()*$notLoaded.length))
     .fadeIn()
     .addClass("loaded");
  if ($notLoaded.length == 0) {
     clearInterval(timer);
  }
}
, speed);
});
});
*/