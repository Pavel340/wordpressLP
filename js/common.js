$(document).ready(function() {

	heightDetect();

	$(".toggle-mnu, .menu_item").click(function () {
		$(".sandwich").toggleClass("active");
	});

	$(".toggle-mnu").click(function () {
		if($(".top_mnu").is(":visible")) {
			$(".top_mnu").fadeOut(600);
		} else {
			$(".top_mnu").fadeIn(600);
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