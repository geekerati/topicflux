<?php
class topicfluxController extends topicflux
{
	function init()
	{
	}

	/**
	 * @brief 위젯 편집 컨트롤 출력용 트리거
	 **/
	function triggerDisplayBefore(&$output)
	{
		if(Context::get('module') == 'admin') return;
		if(Context::get('act') == 'dispPageAdminContentModify') return;
		$current_module_info = Context::get('current_module_info');
		if($current_module_info->module_type != 'view') return;

		debugPrint('TOPICFLUX TRIGGER');
		if(strpos($output, 'widget="topiccast"') != FALSE || strpos($output, 'class="topiccast-container') != FALSE)
		{
			debugPrint('발견');
			Context::addJsFile('./modules/topicflux/tpl/js/topicflux.common.js');
			Context::addCssFile('./modules/topicflux/tpl/css/topicflux.common.css');
		}
	}
}
