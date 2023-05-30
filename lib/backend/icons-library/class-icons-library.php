<?php

namespace QuadLayers\WPMI\Backend\Icons_Library;

class Icons_Library {

	protected static $_instance;

	protected $libraries = array();

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'load' ) ); // before init
		add_filter( 'upload_mimes', array( $this, 'upload_mimes' ), 99 );
	}


	public function load() {

		new Libraries\Defaults();

		error_log( 'this->libraries: ' . json_encode( $this->libraries, JSON_PRETTY_PRINT ) );

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

	public function get_libraries( $name = null ) {

		if ( ! $name ) {
			return $this->libraries;
		}

		if ( isset( $this->libraries[ $name ] ) ) {
			return $this->libraries[ $name ];
		}
	}

	public function register( $instance ) {
		if ( ! isset( $this->libraries[ $instance->get_name() ] ) ) {
			$this->libraries[ $instance->get_name() ] = $instance;
		}
	}

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}
