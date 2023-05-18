<?php

namespace QuadLayers\WPMI\Api\Rest\Endpoints\Backend\Settings;

use QuadLayers\WPMI\Api\Rest\Endpoints\Backend\Base;
use \QuadLayers\WPMI\Models\Setting;

class Delete extends Base {
    protected static $route_path = 'settings';

    public function callback(\WP_REST_Request $request) {
        $setting_model = new Setting();

        $settings = $setting_model->delete_table();

        return $this->handle_response($settings);
    }

    public static function get_rest_method() {
        return \WP_REST_Server::DELETABLE;
    }

    public static function get_rest_args() {
        return array(); 
    }
}