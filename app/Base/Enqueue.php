<?php

namespace Wpvr\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue($hook)
    {
        // Only load script inside this plugin
        if ($hook !== 'toplevel_page_' . Constants::HYPHEN_NAME) {
            return;
        }

        wp_enqueue_script(
            Constants::HYPHEN_NAME . '-js',
            WPVR_PLUGIN_URL . 'dist/bundle.js',
            null,
            WPVR_PLUGIN_VERSION,
            true // Load JS in footer so that templates in DOM can be referenced.
        );

        // Add initial data to plugin so it can be rendered without fetch.
        $data = [
            'data' => [
                'base_url' => esc_url_raw(rest_url(Constants::HYPHEN_NAME))
            ],
            'nonce' => wp_create_nonce('wp_rest')
        ];
        wp_localize_script(Constants::HYPHEN_NAME . '-js', 'WpvrJs', $data);
    }
}
