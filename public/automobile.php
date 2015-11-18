<?php

class Automobile
{
	public $make = '';
	public $model = '';
	public $year = 'unknown year';

	public function __construct($make, $model)
	{
		$this->make = $make;
		$this->model = $model;
	}
	public function honk ()
	{
		echo "honk honk" . PHP_EOL;
	}

	public function revEngine($size = 'medium') 
	{
		if($size == 'small') {
			return 'put put put' . PHP_EOL;
		} else if ($size == 'large') {
			return 'VROOOM VROOOOOOM!!!!!!' . PHP_EOL;
		} else {
			return 'vroom vroom' . PHP_EOL;
		}
	}

	public function getDescription()
	{
		$message = "Your $this->model autombile was made by $this->make in $this->year" . PHP_EOL;
		return $message;
	}

	public function __destruct()
	{
		echo "object was destroyed and destruct runs automatically" . PHP_EOL;
	}
}