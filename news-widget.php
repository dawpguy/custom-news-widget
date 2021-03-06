<?php
/**
 * Plugin Name: Custom News Widget
 * Plugin URI: #
 * Description: News Widget Plugin for WordPress
 * Author: Sujit
 * Author URI: #
 * version: 1.0
 * license: gplv3
 */

if(!defined('ABSPATH')){
	exit;
}

define( 'PLUGIN_ROOT_DIR', plugin_dir_path( __FILE__ ) );

require_once ( PLUGIN_ROOT_DIR . 'includes/class-news-cpt.php' );
require_once ( PLUGIN_ROOT_DIR . 'includes/class-news-widget.php' );
