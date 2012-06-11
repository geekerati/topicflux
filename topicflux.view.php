<?php
class topicfluxView extends topicflux
{
	function init()
	{
		$this->setTemplatePath($this->module_path.'tpl');
		$this->setTemplateFile(str_replace('dispTopicflux', '', $this->act));
	}
	
	/**
	 * @brief 
	 **/
	function dispTopicfluxEditor()
	{
		$this->setLayoutFile('default_layout');
	}
}
