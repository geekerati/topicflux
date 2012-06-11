<?php
class topicfluxModel extends topicflux
{
	/**
	 * @brief 토픽 목록 반환
	 **/
	public function getListTopic($args = null)
	{
		if($args->site_srl) $cond->site_srl = $args->site_srl;
		$output = executeQueryArray('topicflux.getListTopic', $cond);
		if(!$output->data) $output->data = array();

		return $output;
	}
}
