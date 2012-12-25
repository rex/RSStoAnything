<?php

namespace Cores;

class RSSParser extends Application {

	use \GenericHelper;

	public $feed;

	public function __construct( $feed ) {
		$this->feed = $feed;
	}

}