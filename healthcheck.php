<?php
/**
 * Plugin Name: Healthcheck for WordPress
 * Plugin URI: https://github.com/viktor-starchenko/env-healthcheck
 * Description: A simple ENV healthcheck endpoint for WordPress.
 * Version: 1.0.0
 * Author: Viktor Starchenko
 * License: MIT
 * Text Domain: env-healthcheck
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once __DIR__ . '/vendor/autoload.php';

use Healthcheck\Healthcheck;

// Registering an endpoint for the REST API
add_action('rest_api_init', function () {
    $healthcheck = new Healthcheck();
    $healthcheck->register_endpoint();
});
