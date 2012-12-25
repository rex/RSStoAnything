<?php

namespace Cores;

abstract class Interactor implements Interfaces\ServiceInterface {

	use \GenericHelper;

	public $service;

	public function __construct( $service ) {
		$this->service = $service;
	}

}