<?php

namespace Cores;

use Traits\GenericHelper;

class Suite {

	protected $config;

	function __construct( $feedurl = false , $config = false ) {
		$this->config = new \stdClass;
		$this->config->feed = $feedurl;
	}

	function __get( $key ) {
		if( is_string( $key ) || isset( $this->config->{ $key } ) ) {
			return $this->config->{$key};
		}
	}

	function __set( $key , $value ) {
		if( !is_string( $key ) || empty( $value ) ) {
			return false;
		}
		$this->config->{$key} = $value;
	}

}
