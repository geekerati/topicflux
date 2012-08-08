(function($) {
	function debugPrint(msg){if(typeof console == 'object' && typeof console.log == 'function'){console.log(msg)}};

	var $toolbarContainer = $('<div class="topiccast-toolbar-container"><button>EDIT</button></div>');

	$.topicflux = function() {
		$('.topiccast-controll-box').addClass('enable');
		$('.topiccast-container').each(function () {
			init(this);
		});
	};

	$.extend($.topicflux, {
	});

	$.fn.topicflux = function() {
	};

	function init(el)
	{
		var $_el = $(el);
		var $_toolbar = $toolbarContainer.clone();
		var _cast_id = $_el.data('cast-id');

		$_toolbar
			.on('click', 'button', function() {
				var _url = window.request_uri.setQuery('act', 'dispTopicfluxEditor').setQuery('cast_id', _cast_id);
				var _id = 'topicflux-castedit-' + _cast_id;
				window.open(_url, _id, 'width=900, height=600, location=0, status=0, scrollbars=1');
			})
			.addClass('editable');

		$_el.before($_toolbar.width($_el.width() - 2));
	}

	$(function() {
		var $pageControllBox = $('.topiccast-controll-box');

		if($pageControllBox.size())
		{
			$('.edit-enable', $pageControllBox).on('click', function() {
				$.topicflux();
				return false;
			});
		}
	});
}) (jQuery);
