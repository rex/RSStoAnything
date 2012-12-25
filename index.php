<?php

define("BASEPATH" , __DIR__ );

trait GenericHelper {

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

require_once( __DIR__ . "/lib/Cores/Application.php");

$app = new Cores\Application();
$app->configure( $config );
$app->addFeed("PHPMaster_feed.xml");
$app->init();
$app->explain();
