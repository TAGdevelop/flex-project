<?php
/**
* Plugin Name: ZEUS Modified Plugins Reminder
* Plugin URI: https://tagdisgitalmarketing.com
* Description: This plugin will simply add css to distinguish any plugins that have had their code modified. An active modified plugin will have a yellow-ish background behind the name, when deactivated the modified plugin will have a solid orange-ish tab stripe and be slightly more visible. The Zeus Pro link will explain how to make the modification(s).
* Author: tag digital marketing
* Version: 1.0.0
* Author URI: https://tagdigitalmarketing.com
 * Copyright: (c) 2020 tagdigital
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ibx-dwe
**/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if( is_multisite ()) {
add_action( 'network_admin_menu', 'zeus_multisite_options_page' );
function zeus_multisite_options_page() {
    add_submenu_page(
      'plugins.php',
        'Zeus Pro Plugin Modifications',
        'Zeus Pro',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php', 
        null,
        // plugin_dir_url(__FILE__) . 'images/icon_zeus.png', 20
        null        
        );
 }
} else {
    add_action( 'admin_menu', 'zeus_options_page' );
    function zeus_options_page() {
    add_submenu_page(
      'plugins.php',
        'Zeus Pro Plugin Modifications',
        'Zeus Pro',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php', 
        null,
        // plugin_dir_url(__FILE__) . 'images/icon_zeus.png', 20
        null        
        );
 }
}


function add_zeus_stylesheet() 
{
   global $pagenow;
    if ($pagenow != 'plugins.php') {
        return;
    }
    wp_enqueue_style( 'zeusCSS', plugins_url( '/css/zeus.css', __FILE__ ) );
}

add_action('admin_print_styles', 'add_zeus_stylesheet');


