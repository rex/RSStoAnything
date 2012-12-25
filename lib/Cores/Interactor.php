<?php

namespace Cores;

use Traits\GenericHelper;

abstract class Interactor implements Interfaces\ServiceInterface {

	public $service;

	public function __construct( $service ) {
		$this->service = $service;
	}

}