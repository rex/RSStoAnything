<?php

namespace Classes;

class Feed extends \Cores\RSSParser {

	public $meta;
	public $nodes;
	public $title;
	public $subtitle;
	public $generator;
	public $link;
	public $updated;

	function __construct( $feed ) {
		foreach( $feed as $key => $value ) {
			if( $key != "entry" ) {
				$this->{$key} = $value;
			} else {
				foreach( $value as $node ) {
					$this->nodes[] = $node;
				}
			}
		}
	}

}