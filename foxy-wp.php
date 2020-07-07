<?php
/*
Plugin Name: Foxy Ecommerce
Plugin URI: https://github.com/zgordon/wp-fast-comments
Description: Adds support for FoxyCart for WordPress
Version: 1.0.0
Contributors: zgordon
Author: Zac Gordon
Author URI: https://zacgordon.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: foxywp
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/enqueue-scripts.php');


?>