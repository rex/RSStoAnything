<?php

namespace Views;

use Traits\GenericHelper;

class NodeView implements Interfaces\NodeViewInterface {

	public function __get( $key );

	public function __set( $key , $value );

	public function addElement( Interfaces\NodeViewInterface $node );

	public function removeElement( Interfaces\NodeViewInterface $node );

	public function render();

	public function explain();
	
}