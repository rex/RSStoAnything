<?php

namespace Cores;

class AppLoader {

	use \GenericHelper;

	public $classes,$cores,$interfaces,$services,$traits,$views;

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
		print "New class loaded: $class. <br />";
	}

	private function getPath( $className ) {
		return BASEPATH . "/lib/" . str_replace( "\\" , "/" , $className ) . ".php";
	}

}