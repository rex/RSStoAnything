<?php

namespace Cores;

use Traits\GenericHelper;

class AppLoader {

	public $classes;
	public $cores;
	public $interfaces;
	public $services;
	public $traits;
	public $views;

	public function __construct() {
		spl_autoload_register( array( $this, "load" ) );
	}

	public function load( $class ) {
		$split = explode( "\\", $class );
		include $this->getPath( $class );
		$namespace = $split[0];
		$className = $split[1];
		$this->{$namespace}[] = $className;
		//var_dump( array( $split , $class , $namespace , $className , $this ) );
		var_dump( $class );
	}

	private function getPath( $className ) {
		return "lib/" . str_replace( "\\" , "/" , $className ) . ".php";
	}

}