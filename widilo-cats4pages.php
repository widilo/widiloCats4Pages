<?php

/**
 * widilo®Cats4Pages Plugin for WordPress
 *
 * @link              https://muennecke-vollmers.de
 * @since             1.0.0
 * @package           Widilo_Cats4pages
 *
 * @wordpress-plugin
 * Plugin Name:       widilo®Cats4Pages
 * Plugin URI:        https://widilo.de
 * Description:       Add categories and tags to WordPress pages
 * Version:           1.0.1
 * Author:            Münnecke & Vollmers GbR
 * Author URI:        https://muennecke-vollmers.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       widilo-cats4pages
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * widilo®Cats4Pages // Currently plugin version.
 */
define( 'WIDILO_CATS4PAGES', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-widilo-cats4pages-activator.php
 */
function activate_widilo_cats4pages() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-widilo-cats4pages-activator.php';
	Widilo_Cats4pages_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-widilo-cats4pages-deactivator.php
 */
function deactivate_widilo_cats4pages() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-widilo-cats4pages-deactivator.php';
	Widilo_Cats4pages_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_widilo_cats4pages' );
register_deactivation_hook( __FILE__, 'deactivate_widilo_cats4pages' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-widilo-cats4pages.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_widilo_cats4pages() {

	$plugin = new Widilo_Cats4pages();
	$plugin->run();

}
run_widilo_cats4pages();

/*
 * widilo®Cats4Pages // add tags and categories to WordPress pages
 * @see		https://widilo.de/freebie-wie-du-schlagwoerter-und-kategorien-zu-deinen-wordpress-seiten-hinzufuegen-kannst/
 * @since   1.0.0
 */
function widilo_add_cats_to_pages() {
       register_taxonomy_for_object_type( 'post_tag', 'page' );
       register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'widilo_add_cats_to_pages' );

/*
 * widilo®Cats4Pages // include all tags and categories in wp_query
 * @see		https://widilo.de/freebie-wie-du-schlagwoerter-und-kategorien-zu-deinen-wordpress-seiten-hinzufuegen-kannst/
 * @since    1.0.1
 */
function widilo_add_cats_to_pages_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
	if ($wp_query->get('category_name')) $wp_query->set('post_type', 'any');
}
add_action('pre_get_posts', 'widilo_add_cats_to_pages_query');