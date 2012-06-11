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
	
		$oTopicfluxModel = &getModel('topicflux');
		$topicList = $oTopicfluxModel->getListTopic();

		Context::set('topicList', $topicList->data);
		Context::set('page_navigation', $topicList->page_navigation);
	}
}
