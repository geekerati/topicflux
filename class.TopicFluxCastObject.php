<?php
class TopicFluxCastObject extends TopicFluxObject
{
	/**
	 * @brief 
	 **/
	function __construct($cast_id = null)
	{
	}
	
	function getCastId()
	{
		return $this->get('cast_id');
	}
}
