<?php
/*
Plugin Name: ENV Healthcheck
Description: A simple ENV healthcheck endpoint for WordPress Bedrock sites.
Version: 1.0
Author: Viktor Starchenko
*/

// Direct access blocking
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once plugin_dir_path(__FILE__) . 'src/Healthcheck.php';

// Registering an endpoint
add_action('rest_api_init', function () {
    $healthcheck = new \Healthcheck\Healthcheck();
    $healthcheck->register_endpoint();
});
