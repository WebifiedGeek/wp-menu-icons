<?php

namespace QuadLayers\WPMI\Models;

use QuadLayers\WPMI\Models\Models_Base as Models_Base;
/**
 * Models_Setting Class
 */
class Models_Settings extends Models_Base {

	/**
	 * Table name
	 *
	 * @var string
	 */
	protected $table = 'menu_icons_pro_settings';

	/* CRUD */

	/**
	 * Function to get default args
	 *
	 * @return array
	 */
	public function get_args() {
		$models_libraries = Models_Libraries::instance();
		return array(
			'active_libraries' => array_keys($models_libraries->get_libraries()),
		);
	}

	/**
	 * Function to get all settings
	 *
	 * @return array
	 */
	public function get() {
		$settings = wp_parse_args( $this->get_all(), $this->get_args() );
		return $settings;
	}

	/**
	 * Function to save settings
	 *
	 * @param array $settings Settings to be saved.
	 * @return boolean
	 */
	public function save( $settings = null ) {
		return $this->save_all( $settings );
	}

	/**
	 * Function to delete table
	 *
	 * @return void
	 */
	public function delete_table() {
		$this->delete_all();
	}
}
