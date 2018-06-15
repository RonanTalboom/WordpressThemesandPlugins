<?php

/**
 * @package RonanTestPlugin
 */

 /**
  Plugin Name: Ronan Test Plugin
  Plugin URI: https://github.com/RonanTalboom/TestingWordpress/wiki/Plugins 
  Description: This is a test plugin
  Version: 1.0.0
  Author: Ronan Talboom
  Author URI: http://www.ronantalboom.com
  License: GPLV2
  Text Domain: Ronan-test-plugin
  */
/* 
licesnse
*/

defined ('ABSPATH') or die('Unable to access file.');

if (file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}
use inc\base\Activate;
use inc\base\Deactivate;

function activate_ronan_test_plugin(){
	Activate::activate();
}
register_activation_hook( __FILE__, 'activate_ronan_test_plugin' );

function deactivate_ronan_test_plugin(){
	Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_ronan_test_plugin' );

if(class_exists( 'inc\\Init' )){
	inc\init::register_services();
}