<?php

abstract class Animal {
	private $height;
	private $weight;

	function __construct($height, $weight) {
		$this->height = $height;
		$this->weight = $weight;
	}
	
	function get($key) {
		return $this->$key;
	}
	
	function set($key, $value) {
		$this->$key = $value;
	}
}

