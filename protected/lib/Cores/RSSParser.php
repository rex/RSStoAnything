<?php

namespace Cores;

class RSSParser {

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
				$contents = new \SimpleXmlElement( file_get_contents( $entity ) );
				$this->feeds[$entity] = new \Classes\Feed( $contents );
				break;
			case 'file':
				$this->feeds[$entity] = new \Classes\Feed( simplexml_load_file( $entity ) );
				break;
			case 'string':
				$this->feeds["string"] = new \Classes\Feed( simplexml_load_string( $entity ) );
				break;
			default:
				break;
		}
		return $this;
	}

	public function parse() {
		foreach( $this->feeds as $feed => $contents ) { 
			print "Parsing feed: $contents->title <br />";
			$this->feeds[ $feed ] = $contents;
		}

	}

}