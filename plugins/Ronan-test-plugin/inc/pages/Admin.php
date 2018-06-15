<?php
/**
 * @package RonanTestPlugin
 */


namespace inc\pages;
use \inc\base\BaseController;
class Admin extends BaseController{


    public function register() {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
    }
    public function add_admin_pages() {
		add_menu_page( 'Ronan Test Plugin', 'Ronan', 'manage_options', 'ronan_test_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
	}
	public function admin_index() {
		require_once $this->plugin_path . 'templates/admin.php';
	}

}