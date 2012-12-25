<?php

define("BASEPATH", __DIR__ );
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

require_once( BASEPATH . "/lib/Cores/Application.php");

$app = new Cores\Application();
$app->configure( $config );
$app->addFeed("file", "PHPMaster_feed.xml");
//$app->addFeed("url","http://feeds.feedburner.com/PHPMaster_feed");
$app->init();
$app->explain();