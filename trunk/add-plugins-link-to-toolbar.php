<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://devinvinson.com
 * @since             1.0.0
 * @package           Add_Plugins_Link_To_Toolbar
 *
 * @wordpress-plugin
 * Plugin Name:       Add Plugins Link to Admin Toolbar
 * Plugin URI:        http://devinvinson.com/add-plugins-link-to-toolbar
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Devin Vinson
 * Author URI:        http://devinvinson.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       add-plugins-link-to-toolbar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-add-plugins-link-to-toolbar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_add_plugins_link_to_toolbar() {

	$plugin = new Add_Plugins_Link_To_Toolbar();
	$plugin->run();

}
run_add_plugins_link_to_toolbar();
