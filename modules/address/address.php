<?php if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Bootstrap file
 *
 * @author Development team <dev@eoxia.com>
 * @version 1.0
 */

/**
 * Define the current version for the plugin. Interresting for clear cache for plugin style and script
 * @var string Plugin current version number
 */
DEFINE('DIGI_ADDRESS_VERSION', '1.0');

/**
 * Get the plugin main dirname. Allows to avoid writing path directly into code
 * @var string Dirname of the plugin
 */
DEFINE( 'DIGI_ADDRESS_DIR', basename(dirname(__FILE__)));
DEFINE( 'DIGI_ADDRESS_PATH_TO_MODULE', str_replace( str_replace( "\\", "/", WP_PLUGIN_DIR ), "", str_replace( "\\", "/", plugin_dir_path( __FILE__ ) ) ) );
DEFINE( 'DIGI_ADDRESS_PATH', str_replace( "\\", "/", plugin_dir_path( __FILE__ ) ) );
DEFINE( 'DIGI_ADDRESS_URL', str_replace( str_replace( "\\", "/", ABSPATH), site_url() . '/', DIGI_ADDRESS_PATH ) );

/**	Define the templates directories	*/
DEFINE( 'DIGI_ADDRESS_TEMPLATES_MAIN_DIR', DIGI_ADDRESS_PATH . '/templates/' );

/** Plugin initialisation */
require_once( DIGI_ADDRESS_PATH . '/controller/address.controller.01.php' );
require_once( DIGI_ADDRESS_PATH . '/action/address.action.01.php' );
