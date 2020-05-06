<?php

namespace core;

class Reflection {

	private $reflection;

	public function __construct($object){
		$this->reflection = new \ReflectionObject($object);
	}

	private function getNamespace() {
		return $this->reflection->getNamespaceName();
	}

	public function folder() {
		$namespace = $this->getNamespace($object);

		$explode = explode('\\', $namespace);
		return array_pop($explode);
	}

	private function methods(){
	
	}

?>