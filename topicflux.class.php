<?php
require_once(_XE_PATH_.'modules/topicflux/class.TopicFluxObject.php');
require_once(_XE_PATH_.'modules/topicflux/class.TopicFluxCastObject.php');
require_once(_XE_PATH_.'modules/topicflux/class.TopicFluxItemObject.php');

class topicflux extends ModuleObject
{
	private $add_triggers = array(
		array('display', 'topicflux', 'controller', 'triggerDisplayBefore', 'before')
	);

	function moduleInstall()
	{
		$oModuleController = &getController('module');
		foreach($this->add_triggers as $trigger)
		{
			$oModuleController->insertTrigger($trigger[0], $trigger[1], $trigger[2], $trigger[3], $trigger[4]);
		}

		return new Object();
	}

	function checkUpdate()
	{
		$oModuleModel = &getModel('module');
		foreach($this->add_triggers as $trigger)
		{
			if(!$oModuleModel->getTrigger($trigger[0], $trigger[1], $trigger[2], $trigger[3], $trigger[4])) return true;
		}

		return false;
	}

	function moduleUpdate()
	{
		$oModuleModel = &getModel('module');
		$oModuleController = &getController('module');

		foreach($this->add_triggers as $trigger)
		{
			if(!$oModuleModel->getTrigger($trigger[0], $trigger[1], $trigger[2], $trigger[3], $trigger[4]))
			{
				$oModuleController->insertTrigger($trigger[0], $trigger[1], $trigger[2], $trigger[3], $trigger[4]);
			}
		}

		return new Object();
	}

}
