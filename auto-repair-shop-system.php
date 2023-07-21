<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress or ClassicPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://racmanuel.dev
 * @since             1.0.0
 * @package           Auto_Repair_Shop_System
 *
 * @wordpress-plugin
 * Plugin Name:       Auto Repair Shop System
 * Plugin URI:        https://plugin.com/auto-repair-shop-system-uri/
 * Description:       Plugin to convert WordPress into a System for Auto Repair Workshop, it has a customer module, quotes, invoices, pdf and more...
 * Version:           1.0.0
 * Author:            racmanuel.dev
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Tested up to:      6.2
 * Author URI:        https://racmanuel.dev/
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       auto-repair-shop-system
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//Include Composer Autoload
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AUTO_REPAIR_SHOP_SYSTEM_VERSION', '1.0.0' );

/**
 * Define the Plugin basename
 */
define( 'AUTO_REPAIR_SHOP_SYSTEM_BASE_NAME', plugin_basename( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 *
 * This action is documented in includes/class-auto-repair-shop-system-activator.php
 * Full security checks are performed inside the class.
 */
function auto_repair_shop_system_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-repair-shop-system-activator.php';
	Auto_Repair_Shop_System_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 *
 * This action is documented in includes/class-auto-repair-shop-system-deactivator.php
 * Full security checks are performed inside the class.
 */
function auto_repair_shop_system_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-repair-shop-system-deactivator.php';
	Auto_Repair_Shop_System_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'auto_repair_shop_system_activate' );
register_deactivation_hook( __FILE__, 'auto_repair_shop_system_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-auto-repair-shop-system.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * Generally you will want to hook this function, instead of callign it globally.
 * However since the purpose of your plugin is not known until you write it, we include the function globally.
 *
 * @since    1.0.0
 */
function auto_repair_shop_system_run() {

	$plugin = new Auto_Repair_Shop_System();
	$plugin->run();

}
auto_repair_shop_system_run();
