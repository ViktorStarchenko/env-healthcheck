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
        // Checking the environment
        $is_production = getenv('WP_ENV') === 'production';

        if (!$is_production) {
            return new \WP_REST_Response([
                'status'  => 'fail',
                'message' => 'Site is NOT in production mode',
                "mode" => "development"
            ], 200);
        }

        return new \WP_REST_Response([
            'status'  => 'success',
            'message' => 'Site is up and running in PRODUCTION mode',
            "mode" => "production"
        ], 200);
    }
}
