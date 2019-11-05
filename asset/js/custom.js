// custom js
$(document).ready(function(){

//wow js
//new WOW().init();

//Banner slider
$('.banner-slider').slick({
	dots: true,
	infinite: true,
	speed: 500,
	lazyLoad: 'progressive',
	fade: true,
	cssEase: 'linear',
	responsive:[
	{
		breakpoint: 767,
		settings: {
			arrows: false
		}
	}
	]
}).slickAnimation();



// document ready end 
});


