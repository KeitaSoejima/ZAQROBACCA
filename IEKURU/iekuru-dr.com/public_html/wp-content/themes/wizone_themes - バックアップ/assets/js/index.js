$(function () {
	$(".js-toggle-menu").on("click", function () {
		$(this).toggleClass("active"),
			$(".js-toggle-menu-target").toggleClass("active");
	}),
	$(".js-close-menu").on("click", function () {
		$(".js-toggle-menu").removeClass("active"),
			$(".js-toggle-menu-target").removeClass("active");
	}),
	$(".js-ac-btn").on("click", function () {
		$(this).find(".js-ac-target").slideToggle(),
			$(this).find(".js-ac-title").toggleClass("active");
	}),
	$(".inspection__btn1").on("click", function () {
		$(".inspection__btn1").addClass("active"),
			$(".inspection1").addClass("active"),
			$(".inspection__btn2").removeClass("active"),
			$(".inspection2").removeClass("active");
	}),
	$(".inspection__btn2").on("click", function () {
		$(".inspection__btn2").addClass("active"),
			$(".inspection2").addClass("active"),
			$(".inspection__btn1").removeClass("active"),
			$(".inspection1").removeClass("active");
	});
});



