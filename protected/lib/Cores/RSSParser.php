<?php

namespace Cores;

class RSSParser extends Application {

	use \GenericHelper;

	public $feeds;
	public $feedContents;
	public $parsedFeed;

	public function __construct() {
		return $this;
	}

	public function attach( $type , $entity ) {
		switch ( $type ) {
			case 'url':
				$contents = file_get_contents( $entity );
				$this->feeds[$entity] = new \SimpleXmlElement( $contents );
				break;
			case 'file':
				$this->feeds[$entity] = simplexml_load_file( $entity );
				break;
			case 'string':
				$this->feeds["string"] = simplexml_load_string( $entity );
				break;
			default:
				break;
		}
		return $this;
	}

	public function parse() {
		foreach( $this->feeds as $name => $contents ) { 
			print "Parsing feed: $name <br />";
			var_dump( $contents->link );
			var_dump( $contents );
		}

	}

}