<?php

/**
 * Plugin Name: WPVR
 * Plugin URI: https://github.com/tvqqq/wordpress-plugin-vue-rest
 * Description: WordPress Plugin Vue Rest
 * Version: 1.0.0
 * Author: <your_name>
 * Author URI: <your_url>
 * License: GPL v3
 * Text Domain: wpvr
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses/.
 */

use Wpvr\Base\Activate;
use Wpvr\Base\Deactivate;
use Wpvr\Init;

if (!defined('ABSPATH')) {
    exit;
}

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * Version.
 */
if (!defined('WPVR_PLUGIN_VERSION')) {
    define('WPVR_PLUGIN_VERSION', '1.0.0');
}

/**
 * Plugin URL.
 */
if (!defined('WPVR_PLUGIN_URL')) {
    define('WPVR_PLUGIN_URL', plugin_dir_url(__FILE__));
}

/**
 * The code that runs during plugin activation
 */
function wpvr_activate_plugin()
{
    Activate::activate();
}

register_activation_hook(__FILE__, 'wpvr_activate_plugin');

/**
 * The code that runs during plugin deactivation
 */
function wpvr_deactivate_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'wpvr_deactivate_plugin');

/**
 * Register services for plugin.
 */
Init::registerServices();
