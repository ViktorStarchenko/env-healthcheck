<?php

namespace Healthcheck;

class Healthcheck {
    public function register_endpoint() {
        register_rest_route('custom/v1', '/healthcheck', [
            'methods'  => 'GET',
            'callback' => [$this, 'handle_healthcheck'],
        ]);
    }

    public function handle_healthcheck() {

        $mode = getenv('WP_ENV') === 'production' ? 'production' : 'development';

        $response = ['mode' => $mode];

        return new \WP_REST_Response($response, 200, ['Content-Type' => 'application/json']);
    }
}