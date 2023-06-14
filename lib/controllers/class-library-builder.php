<?php

namespace QuadLayers\WPMI\Controllers;

use QuadLayers\WPMI\Entities\Libraries\Library_Interface;

class Library_Builder {
	protected $libraries = [];

	public function __construct() {
		add_filter( 'upload_mimes', [ $this, 'upload_mimes' ] );
	}

	public function add_library( Library_Interface $library ) {
		$this->libraries[ $library->name ] = $library;
		return $this;
	}

	public function get_libraries() {
		return $this->libraries;
	}

	/*
	Allow SVG file upload
	*/
	function upload_mimes( $mimes = array() ) {
		if ( current_user_can( 'edit_theme_options' ) ) {
			$mimes['zip'] = 'application/zip';
			$mimes['gz']  = 'application/x-gzip';
		}

		return $mimes;
	}
}
