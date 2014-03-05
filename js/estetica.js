$(document).ready(function () {

	scorriBarra();
});

function scorriBarra() {
	var length = $('.header').height();

	$(window).scroll(function () {

		var scroll = $(this).scrollTop();

	   if (scroll > length) {

			$('.topBar').css({
				'position': 'fixed',
				'top': '0'
			});
		}

		else {
			$('.topBar').css({
				'position': 'relative',
				'top': '0'
			});
		}
	});
}