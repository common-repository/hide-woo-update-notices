<?

/*
Plugin Name: Hide Woo Update Notices
Plugin URI: http://www.vanmeerdervoort.nl/no-more-woo-update-notices
Description: Hides those irritating WooThemes and IginiteWoo update notices on top of your admin screen.
Author: vanMeerdervoort
Version: 1.0
Author URI: http://www.vanmeerdervoort.nl/no-more-woo-update-notices
Contributors: vanMeerdervoort
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: WooCommerce, WooThemes, IginteWoo, Admin notices
Requires at least: 3.0
Tested up to: 4.0.1
Stable tag: 1.0
*/

add_action('after_setup_theme', 'vm_remove_woo_notices');

function vm_remove_woo_notices() {
	global $wp_filter;
	remove_action( 'admin_notices', 'woothemes_updater_notice',10 );
	remove_action( 'admin_notices', 'ignitewoo_updater_notice',10 );
	return;
}

/*

That's all folks! Really easy huh? But if you do this in your functions.php file, you have to redo it every time you update your theme.
So here's this handy little plugin :) Enjoy!

*/

?>