<?php

namespace wp_gdpr\controller;

use wp_gdpr\lib\Gdpr_Container;

class Controller_Form_Submit {

	/**
	 * Controller_Form_Submit constructor.
	 */
	public function __construct( $list_of_inputs ) {
		$this->handle_form_submition( $list_of_inputs );
	}

	/**
	 * pass list of inputs to Request form
	 */
	public function handle_form_submition( $list_of_inputs ) {
		Gdpr_Container::make( 'wp_gdpr\model\Request_Form', $list_of_inputs );
	}
}