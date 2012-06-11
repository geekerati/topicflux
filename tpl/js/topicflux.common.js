(function($) {
	function debugPrint(msg){if(typeof console == 'object' && typeof console.log == 'function'){console.log(msg)}};
	$.fn.topicflux = function() {

	};

	$(function() {
		var $pageControllBox = $('.topiccast-controll-box');

		if($pageControllBox.size())
		{
			var $widgetContainer = $('.topiccast-container');
			var $toolbarContainer = $('<div class="topiccast-toolbar-container"><button>EDIT</button></div>');
			var $btnEdit = $('.edit-enable', $pageControllBox);

			$btnEdit.on('click', function() {
				$pageControllBox.triggerHandler('edit-enable');
				return false;
			});

			/* !편집 툴바 */
			$pageControllBox.on('edit-enable', function() {
				$pageControllBox.addClass('enable');
				$widgetContainer.each(function() {
					var $_this = $(this);
					var $_toolbar = $toolbarContainer.clone();

					$_toolbar.on('click', 'button', function() {
						var _url = window.request_uri.setQuery('act', 'dispTopicfluxEditor')
						window.open(_url, 'id', 'width=900, height=600, location=0, status=0, scrollbars=1');
					});

					$_this.before($_toolbar.width($_this.width() - 2));
				});
				$widgetContainer.triggerHandler('edit-enable');
			});

			/* !위젯 컨테이너 */
			$widgetContainer.on('edit-enable', function() {
				$widgetContainer.addClass('editable');
			});
			$widgetContainer.on('edit-disable', function() {
				var $_this = $(this);
			});
		}
	});
}) (jQuery);
