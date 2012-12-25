<?php

namespace Cores;

class RSSParser extends Application {

	use \GenericHelper;

	public $feed;
	public $feedContents;
	public $parsedFeed;

	public function __construct() {
		//
	}

	public function attach( $feed ) {
		print "Attaching new feed: $feed <br />";
		$this->feed[] = $feed;
		return $this;
	}

	public function parse() {
		foreach( $this->feed as $feed ) { 
			print "Parsing feed: $feed <br />";
			$this->feedContents[$feed] = file_get_contents( $feed );
		}

	}

}