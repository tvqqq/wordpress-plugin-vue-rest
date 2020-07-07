<?php

namespace Wpvr\Base;

class Menu
{
    public function register()
    {
        add_action('admin_menu', [$this, 'buildMenu']);
    }

    public function buildMenu()
    {
        add_menu_page(Constants::DISPLAY_NAME, Constants::DISPLAY_NAME, 'manage_options', Constants::HYPHEN_NAME, [$this, 'buildApp'], 'dashicons-rest-api');
    }

    public function buildApp()
    {
        echo '<div id="wpvr-app"><app></app></div>';
    }
}
