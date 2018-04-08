
// Homepage Slider
$('.basicslider').flexslider({
	slideshow: true, // Change to "false" to make the slides not slide automatically
	animation: "slide",
	animationLoop: false,
	pauseOnHover: true,
	controlNav: false,
	directionNav: true,
	prevText: "&#x3c;",
	nextText: "&#x3e;",
	smoothHeight: true,
	
	start: function(slider) {
		$('body').removeClass('loading');
	}
});