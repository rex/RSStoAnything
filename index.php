<?php

use lib\Traits\GenericHelper;

class App {

	public $feed;
	public $loader;
	public $app;
	public $config;

	public function __construct() {
		require_once( __DIR__ . "/lib/Cores/AppLoader.php");
		$this->loader = new Cores\AppLoader();
	}

	public function configure( Cores\Configurator $config ) {
		$this->config = $config;
	}

	public function init( $feed ) {
		$this->feed = $feed;
		$this->app = new Cores\Suite( $this->feed );
	}
	
	public function explain() {
		var_dump( $this );
	}

}

$config = array(
	'defaults' => array (

	),
	'services' => array(
		"Dropbox" => array(
			"api_key" => "",
			"api_secret" => ""
		),
		"Evernote" => array(

		),
		"LocalFile" => array(

		),
		"LocalDirectory" => array(

		)
	)
);

$app = new \App();
$app->configure( new Cores\Configurator( $config ) );
$app->init("PHPMaster_feed.xml");
$app->explain();
