$(document).ready(function() {

	$(".popup").magnificPopup({
		type: "image"
	});

	$(".top_text h1").animated("fadeInDown", "fadeOutUp");
	$(".top_text p, .section_header").animated("fadeInUp", "fadeOutDown");

	$(".animation_1").animated("flipInY", "flipOutY");
	$(".animation_2").animated("fadeInLeft", "fadeOutLeft");
	$(".animation_3").animated("fadeInRight", "fadeOutRight");

	$(".right .resume_item").animated("fadeInLeft", "fadeOutLeft");
	$(".left .resume_item").animated("fadeInRight", "fadeOutRight");

	heightDetect();

	$(".top_mnu>ul>li>a").click(function () {
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
	});

	$(".toggle-mnu").click(function () {
		$(".sandwich").toggleClass("active");
		if($(".top_mnu").is(":visible")) {
			$(".top_text").removeClass("h_opacify");
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top_text").addClass("h_opacify");
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li a").addClass("fadeInUp animated");
		}
	});

});

$(window).load(function() {
	$(".loaderInner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
});

$(window).resize(function () {
	heightDetect();
});

function heightDetect() {
	$(".main-head").css("height", $(window).height());
}