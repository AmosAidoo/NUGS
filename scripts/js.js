$(function(){

	//Do this when the page loads
	$("#mainNavbar").removeClass("bg-white");
	$("#mainNavbar").addClass("bg-transparent");

	if($(window).scrollTop() > $("#nugs-first").offset().top){
		$("#mainNavbar").removeClass("bg-transparent");
		$("#mainNavbar").addClass("bg-white");
	}

	// JavaScript
	window.sr = ScrollReveal();
	sr.reveal('#welcome-section', { duration: 1000 });
	sr.reveal('.left-carousel',{duration: 2000});

	 $('#arrow-down').click(function() {
	 	var pos = $("#welcome-section").offset().top - 100
	  $('html, body').animate({
	    scrollTop: pos
	  }, 1000);

	});

	 //Scroll Events
	 $(window).scroll(function(){
	 	
	 	
		if($(window).scrollTop() > $("#nugs-first").offset().top){
			$("#mainNavbar").removeClass("bg-transparent");
			$("#mainNavbar").addClass("bg-white");
			$("#scroll-to-top").fadeIn();
			$("#scroll-to-top").removeClass("d-none");
		} else {
			$("#mainNavbar").removeClass("bg-white");
			$("#mainNavbar").addClass("bg-transparent");
			$("#scroll-to-top").fadeOut();
			$("#scroll-to-top").removeClass("d-block");
		}
	});

	//Scroll to top
	$("#scroll-to-top").click(function (event) {
		event.preventDefault();

		$("html, body").animate({
			scrollTop:0
		},800);
	});


	
	/*var navTopPadding = parseInt($("#mainNavbar").css("padding-top"));
	$(window).scroll(function(){
		//Variables
		var windowPosition = $(window).scrollTop();
		
		var temp = navTopPadding;

		$("#mainNavbar").css("padding-top", temp--);



		if(windowPosition > navTopPadding ){
			$("#mainNavbar").removeClass("shadow-sm");
			$("#mainNavbar").addClass("fixed-top shadow-lg");
			$("#mainNavbar").css("padding-top", 0);
			$(".navbar-brand").addClass("pt-4");
		} else {
			$("#mainNavbar").addClass("shadow-sm");
			$("#mainNavbar").removeClass("fixed-top shadow-lg");
			$("#mainNavbar").css("padding-top", navTopPadding);
			$(".navbar-brand").removeClass("pt-4");
			temp = navTopPadding;
		}
	});*/
});