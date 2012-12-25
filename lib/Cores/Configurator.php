<?php

namespace Cores;

use Traits\GenericHelper;

class Configurator {

	public $config;
	public $services;

	public function __construct( $config = null ) {
		$this->config = $config;
		$this->init();
	}

	public function __get( $key ) {
		if( isset( $this->config[ $key ] ) ) {
			return $this->config[ $key ];
		}
	}

	public function __set( $key , $value ) {
		$this->config[ $key ] = $value;
	}

	protected function init() {
		foreach( $this->config['services'] as $service => $config ) {
			$this->attach( $service , $config );
		}
	}

	public function attach( $service , $config ) {
		if( !isset( $this->services[ $service ] ) ) {
			$this->services[ $service ] = $config;
		}
	}

	public function service( $service ) {
		if( isset( $this->services[ $service ] ) ) {
			return $this->services[ $service ];
		}
	}

}