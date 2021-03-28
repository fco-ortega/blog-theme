$(document).ready(function () {

	$(window).scroll(function () {
		if ($(this).scrollTop() > 1) {
			$('.page-title').addClass("sticky");
		}
		else {
			$('.page-title').removeClass("sticky");
		}
	});

	$('.home-slider').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		dots: false,
		pauseOnHover: false,
		zIndex: -1
	});
});