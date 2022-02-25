
$(window).on('load', function () {　//window読み込み時

	if ($('#pc').length) {　//pcの場合

		if ($('#roundslider').length) {　//roudsliderの場合

			var oh = $('.outer').outerHeight() + $('.outer').offset().top; //ohに値を代入
			window.parent.postMessage({ name: window.name, outer_height: oh }, "*");  //親ページに送信　nameに該当のiframeのname（これでどのiframeかを判別させる）、outer_heightがiframeに設定する高さの値

		} else { //roundslider以外の場合


			if ($('.titleArea').length) {
				const MAX_RETRY_COUNT_FIND_DIFF_CONTAINER = 10;
				var retry_counter = 0;
				var set_interval_id = setInterval(findTargetElement, 1000);

				function findTargetElement() {
					retry_counter++;
					// 要素がMAXリトライ値になっても見つからない場合、インターバルを削除
					if (retry_counter > MAX_RETRY_COUNT_FIND_DIFF_CONTAINER) {
						clearInterval(set_interval_id);
					}
					if ($('.titleArea').outerHeight() > 0) {
						clearInterval(set_interval_id);
						var oh = $('html').outerHeight();
						window.parent.postMessage({ name: window.name, outer_height: oh }, "*");
					}
				}
			} else {
				var oh = $('html').outerHeight();
				window.parent.postMessage({ name: window.name, outer_height: oh }, "*");
			}

		}

	}
});


$(window).on('load resize', function () {

	if ($('#sp').length) {　//スマホ時の処理（スマホ時はresize（landscapeを考慮してリサイズイベント時も作動するように））

		if ($('#roundslider').length) {

			if ($('.arrowArea').css('display') == 'flex') {

				var oh = $('.arrowArea').outerHeight() + $('.arrowArea').offset().top;
				window.parent.postMessage({ name: window.name, outer_height: oh }, "*");


			} else {

				var oh = $('.outer').outerHeight() + $('.outer').offset().top;
				window.parent.postMessage({ name: window.name, outer_height: oh }, "*");

			}

		} else {

			if ($('.titleArea').length) {
				const MAX_RETRY_COUNT_FIND_DIFF_CONTAINER = 10;
				var retry_counter = 0;
				var set_interval_id = setInterval(findTargetElement, 1000);

				function findTargetElement() {
					retry_counter++;
					// 要素がMAXリトライ値になっても見つからない場合、インターバルを削除
					if (retry_counter > MAX_RETRY_COUNT_FIND_DIFF_CONTAINER) {
						clearInterval(set_interval_id);
					}

					if ($('.titleArea').outerHeight() > 0) {
						clearInterval(set_interval_id);
						var oh = $('html').outerHeight();
						window.parent.postMessage({ name: window.name, outer_height: oh }, "*");
					}
				}
			} else {
				var oh = $('html').outerHeight();
				window.parent.postMessage({ name: window.name, outer_height: oh }, "*");
			}


		}
	}

});


