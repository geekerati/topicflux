<?php
class TopicFluxObject
{
	private $variables = null;

	function add($key, $val) {
		$this->variables->$key = $val;
	}

	function adds($object)
	{
		if(is_object($object))
		{
			$object = get_object_vars($object);
		}

		if(is_array($object))
		{
			foreach($object as $key => $val) $this->variables->$key = $val;
		}
	}

	function get($key) {
		return $this->variables->$key;
	}

	function gets() {
		$num_args = func_num_args();
		$args_list = func_get_args();

		$result = null;
		for($i = 0; $i < $num_args; $i++) {
			$key = $args_list[$i];
			$result->{$key} = $this->get($key);
		}

		return $result;
	}

	function getVariables() {
		return $this->variables;
	}
}
