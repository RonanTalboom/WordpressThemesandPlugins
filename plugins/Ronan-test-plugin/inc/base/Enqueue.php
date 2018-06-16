<?php

/**
 * @package RonanTestPlugin
 */

 namespace inc\base;
 use \inc\base\BaseController;
 class Enqueue extends BaseController{
    public function register(){
        add_action( 'admin_enqueue_scripts',  [$this, 'enqueue'] );
    }
    public function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/mystyles.css' );
		wp_enqueue_script( 'mypluginscript',  $this->plugin_url .  'assets/myscripts.js' );
	}
 }