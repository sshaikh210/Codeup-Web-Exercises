<?php
class person 
{
	public $firstName = "Sakib";
	public $lastName = "Shaikh";

	function sayHello()
	{
		return "Hi, my name is $this->firstName $this->lastName";
	}
}

$me = new Person();
echo $me->sayHello();