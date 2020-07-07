<?php

namespace Wpvr\Base;

use Wpvr\Api\Home;
use WP_REST_Server;

class Routes
{
    /**
     * Defines all routes of application here.
     * @return array[]
     */
    private function routes()
    {
        return [
            // Home
            [
                'slug' => 'home',
                'method' => WP_REST_Server::READABLE,
                'callback' => [new Home(), 'index']
            ],
            [
                'slug' => 'home',
                'method' => WP_REST_Server::CREATABLE,
                'callback' => [new Home(), 'store']
            ],
            // ...
        ];
    }

    public function register()
    {
        add_action('rest_api_init', [$this, 'registerRoutes']);
    }

    /**
     * Register the routes for the objects of the controller.
     */
    public function registerRoutes()
    {
        foreach (self::routes() as $route) {
            register_rest_route(Constants::HYPHEN_NAME, '/' . $route['slug'], [
                [
                    'methods' => $route['method'],
                    'callback' => $route['callback'],
                ]
            ]);
        }
    }
}
