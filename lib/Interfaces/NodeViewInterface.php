<?php

namespace Interfaces;

use Traits\GenericHelper;

interface NodeViewInterface {

	public function __get( $key );

	public function __set( $key , $value );

	public function addElement( Interfaces\NodeViewInterface $node );

	public function removeElement( Interfaces\NodeViewInterface $node );

	public function render();

	public function explain();

}