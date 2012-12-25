<?php

namespace Interfaces;

interface NodeViewInterface {

	use \GenericHelper;

	public function __get( $key );

	public function __set( $key , $value );

	public function addElement( Interfaces\NodeViewInterface $node );

	public function removeElement( Interfaces\NodeViewInterface $node );

	public function render();

	public function explain();

}