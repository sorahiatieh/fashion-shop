$(document).ready(function(){

	$(".owl-carousel").owlCarousel({
		loop:true,
		rtl:true,
		margin:5,
		nav:true,
		responsive:{
			0:{
				items:1,
				dots:false,
				nav:false
			},
			480:{
				items:3,
				nav:false
			},
			768:{
				items:5
			}
		}
	});

});