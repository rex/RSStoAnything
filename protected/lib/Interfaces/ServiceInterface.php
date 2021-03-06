<?php

namespace Interfaces;

interface ServiceInterface {

	use \GenericHelper;

	public function __construct();

	public function __get( $key );

	public function __set( $key , $value );

	public function attach( Views\NodeView $node );

	public function detach( Views\NodeView $node );

	public function authenticate();

	public function save();



}