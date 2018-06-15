<?php

/**
 * @package RonanTestPlugin
 */

 namespace inc\base;

 class Enqueue {
     public function register(){
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
     }
    private function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'mypluginstyle', PLUGIN_URL . 'assets/mystyles.css', __FILE__  );
		wp_enqueue_script( 'mypluginscript',  PLUGIN_URL .  'assets/myscripts.js', __FILE__ );
	}
 }