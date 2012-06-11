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

	/**
	 * @brief 토픽 정보 반환
	 **/
	public function getTopicInfo($topic_srl)
	{
		$cond->topic_srl = $topic_srl;
		$output = executeQuery('topicflux.getTopic', $cond);

		return $output->data;
	}

	/**
	 * @brief cast 정보 반환
	 **/
	function getCastInfo($cast_id)
	{
		$cond->cast_id = $cast_id;
		$output = executeQuery('topicflux.getCast', $cond);
		if(!$output->data) $output->data = array();
		$output->data->setting = unserialize($output->data->setting);

		return $output->data;
	}
}
