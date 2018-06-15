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

// if(! function_exists('add_action')) {
//     echo 'Unable to access file.'
//     exit;
// }

class RonanTestPlugin 
{

    protected function create_post_type(){
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }
	function activate() {
		// generated a CPT
		$this->custom_post_type();
		// flush rewrite rules
		flush_rewrite_rules();
    }
    
    function register(){
        add_action( 'admin_enqueue_scripts', array($this, 'enqueue'));
    }
	function deactivate() {
		// flush rewrite rules
		flush_rewrite_rules();
	}
	function custom_post_type() {
		register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }
    function enqueue(){
        // enqeue all our scripts
        wp_enqueue_style( 'mypluginstyle', plugins_url('/assets/mystyles.css', __FILE__));
        wp_enqueue_style( 'mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
    }
}

if ( class_exists( 'RonanTestPlugin' ) ) {
    $RonanTestPlugin = new RonanTestPlugin();
    $RonanTestPlugin->register();
}
// activation
register_activation_hook( __FILE__, array( $RonanTestPlugin, 'activate' ) );
// deactivation
register_deactivation_hook( __FILE__, array( $RonanTestPlugin, 'deactivate' ) );