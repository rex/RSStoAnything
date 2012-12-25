<?php

namespace Cores;

class Application {

	use \GenericHelper;

	public $feeds;
	public $loader;
	public $config;
	public $parser;
	public $parsedFeeds;

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
		$this->parser = new RSSParser();
	}

	public function addFeed( $feed ) {
		$this->feeds[$feed] = $feed;
		$this->parser->attach( $feed );
	}

	public function init() {
		$this->parser->parse();
	}

}