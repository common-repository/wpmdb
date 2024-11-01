<?php
/**
 * Wordpress IMDB
 *
 * @package           WordpressIMDB
 * @author            Ahmadreza Ebrahimi
 * @copyright         2020 Wordpress IMDB
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       wpmdb
 * Plugin URI:        https://wordpress.org/plugins/wpmdb
 * Description:       Get information from IMDB and set to your post, just active plugin, use shortcodes and enjoy from free deatils.
 * Version:           1.0
 * Author:            Ahmadreza Ebrahimi
 * Author URI:        https://skinche.ir/AHMAD_R3ZA
 * Text Domain:       wpmdb
 * Domain Path:       /languages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

define( 'WPMDB_FILE', __FILE__ );

define( 'WPMDB_DIR', plugin_dir_path( WPMDB_FILE ) );
define( 'WPMDB_URL', plugin_dir_url( WPMDB_FILE ) );

define( 'WPMDB_CSS', WPMDB_URL . 'assets/css' );
define( 'WPMDB_JS', WPMDB_URL . 'assets/js' );
define( 'WPMDB_IMG', WPMDB_URL . 'assets/img' );

define( 'WPMDB_TEMP', WPMDB_DIR . 'templates' . DIRECTORY_SEPARATOR );
define( 'WPMDB_INC', WPMDB_DIR . 'includes' . DIRECTORY_SEPARATOR );

define( 'WPMDB_API_KEY', 'test' );

require_once( WPMDB_INC . '/class-wpmdb.php' );
$wpmdb = WPMDB::getInstance();
$wpmdb->init();