$(document).ready(function(){

	$(".dropdown").on("hover",function() {
        $(this)
          .find(".dropdown-menu")
          .stop(true, true)
          .delay(100)
          .fadeIn(500);
      },
      function() {
        $(this)
          .find(".dropdown-menu")
          .stop(true, true)
          .delay(100)
          .fadeOut(500);
      });
	  $(".pop-link").on('click',function(e) {
		$(".popup").removeClass("none");
		$(".popup").addClass("animated zoomIn");
		});
	
    $(".single-image").click(function() {
		var imgSrc = $("img", this).attr("src");
		var currentImg = $(".single-img img").attr("src");
  
		$("img", this).attr("src", currentImg);
		$(".single-img img").attr("src", imgSrc);
  
	  });



	  $(".popup").on("click",function(e) {
		if ($(e.target).closest(".contact-form").length === 0) {
		  $(".popup").toggleClass("none");
		}
	  });

$('.owl-carousel').owlCarousel({
  items:4,
  lazyload:true,
  loop:false,
  margin:10,
  nav:true,
  navText:["<div class='nav-btn prev-slide'><i class='fa fa-chevron-left'></i></div>","<div class='nav-btn next-slide'> <i class='fa fa-chevron-right'></i></div>"],
  responsive:{
    0:{
        items:1
    },
    600:{
        items:2
    },
    1000:{
        items:3
    }
}
});
//Preloader
preloaderFadeOutTime = 1000;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
  });

  document.addEventListener(
    "play",
    function (e) {
      // get all <audio> tag elements in the page.
      var allAudios = document.getElementsByTagName("audio");
      e.target.classList.add("audioClass");
      // Iterate through all players and pause them, except for
      // the one who fired the "play" event ("target")
      for (var i = 0; i < allAudios.length; i++) {
        if (allAudios[i] != e.target) {
          allAudios[i].classList.remove("audioClass");
          allAudios[i].pause();
        }
      }

    },
    true
  );
