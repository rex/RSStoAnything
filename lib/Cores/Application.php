<?php

namespace Cores;

class Application {

	use \GenericHelper;

	public $feed;
	public $loader;
	public $app;
	public $config;
	public $parsedFeed;

	public function __construct() {
		require_once("AppLoader.php");
		$this->loader = new AppLoader();
	}

	public function __get( $key ) {
		if( is_string( $key ) || isset( $this->config->{ $key } ) ) {
			return $this->config->{$key};
		}
	}

	public function __set( $key , $value ) {
		if( !is_string( $key ) || empty( $value ) ) {
			return false;
		}
		$this->config->{$key} = $value;
	}

	public function configure( $config ) {
		$this->config = new Configurator( $config );
	}

	public function init( $feed ) {
		$this->feed = $feed;
		$this->parsedFeed = new RSSParser( $this->feed );
	}

}