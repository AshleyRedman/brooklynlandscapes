<?php

/**
 * https://developer.wordpress.org/rest-api/
 * https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/
 */

class Digital_Studio_REST_Controller extends WP_REST_Controller
{
    public $namespace = 'digitalstudio/v1';

    public function register_routes()
    {
        register_rest_route($this->namespace, '/myroute', [
            'methods' => 'GET',
            'callback' => function (WP_REST_Request $request) {
                $name = $request->get_param('name');

                return new WP_REST_Response($name, 200);
            },
            'permission_callback' => [],
        ]);
    }
}

add_action('rest_api_init', function () {
    $digital_studio_rest_controller = new Digital_Studio_REST_Controller();
    $digital_studio_rest_controller->register_routes();
});
