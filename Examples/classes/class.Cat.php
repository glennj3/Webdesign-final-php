<?php

class Cat extends Animal {
	protected $declawed;
	
	function __construct($height, $weight, $declawed) {
		$this->declawed = $declawed;
		parent::__construct($height, $weight);
	}
	
	function speak() {
		return 'Meow';
	}
}

