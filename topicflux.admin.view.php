<?php
class topicfluxAdminView extends topicflux
{
	function init()
	{
		$this->setTemplatePath($this->module_path.'tpl');
		$this->setTemplateFile(str_replace('dispTopicfluxAdmin', '', $this->act));
	}
	
	/**
	 * @brief 
	 **/
	function dispTopicfluxAdminIndex()
	{
	}
}
