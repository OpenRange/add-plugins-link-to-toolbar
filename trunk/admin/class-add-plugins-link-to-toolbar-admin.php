<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://devinvinson.com
 * @since      1.0.0
 *
 * @package    Add_Plugins_Link_To_Toolbar
 * @subpackage Add_Plugins_Link_To_Toolbar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Add_Plugins_Link_To_Toolbar
 * @subpackage Add_Plugins_Link_To_Toolbar/admin
 * @author     Devin Vinson <devinvinson@gmail.com>
 */
class Add_Plugins_Link_To_Toolbar_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $add_plugins_link_to_toolbar    The ID of this plugin.
	 */
	private $add_plugins_link_to_toolbar;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $add_plugins_link_to_toolbar       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $add_plugins_link_to_toolbar, $version ) {

		$this->add_plugins_link_to_toolbar = $add_plugins_link_to_toolbar;
		$this->version = $version;

	}

	public function add_plugins_link_to_admin_toolbar( $wp_admin_bar ) {

		$args = array(
		'id'    => 'plugins',
		'title' => 'Plugins',
		'href'  => admin_url('plugins.php'),
		'parent'=> 'appearance',
	);
	$wp_admin_bar->add_node( $args );

	}

}
