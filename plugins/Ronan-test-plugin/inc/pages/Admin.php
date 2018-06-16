<?php
/**
 * @package RonanTestPlugin
 */
 namespace inc\pages;
use \inc\base\BaseController;
use \inc\api\SettingsAPI;
use \inc\api\callbacks\AdminCallbacks;
class Admin extends BaseController{
	
	public $settings;
	public $callbacks;
	public $pages = [];
	public $subpages = [];
	
    public function register() {
		$this->settings = new SettingsAPI();
		$this->callbacks = new AdminCallbacks();
		$this->setPages();
		$this->setSubpages();
		$this->settings->addPages( $this->pages )->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
	}
	public function setPages(){
		$this->pages = [
			[
				'page_title' => 'Ronan Test Plugin', 
				'capability' => 'manage_options', 
				'menu_slug' => 'ronan_test_plugin', 
				'menu_title' => 'Ronan', 
				'callback' => [$this->callbacks, 'adminDashboard'], 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			]
		];
	}
	public function setSubpages(){
		$this->subpages = [
			[
				'parent_slug' => 'ronan_test_plugin',
				'page_title' => 'Custom Post types', 
				'menu_title' => 'CPT', 
				'capability' => 'manage_options', 
				'menu_slug' => 'ronan_test_plugin_cpt', 
				'callback' => function() { echo '<h1>CPT</h1>'; }, 
			],
			[
				'parent_slug' => 'ronan_test_plugin',
				'page_title' => 'Custom Taxonomies', 
				'menu_title' => 'Taxonomies', 
				'capability' => 'manage_options', 
				'menu_slug' => 'ronan_test_plugin_taxonomies', 
				'callback' => function() { echo '<h1>Taxonomies</h1>'; }, 
			],
			[
				'parent_slug' => 'ronan_test_plugin',
				'page_title' => 'Custom Widgets', 
				'menu_title' => 'Widgets', 
				'capability' => 'manage_options', 
				'menu_slug' => 'ronan_test_plugin_widgets', 
				'callback' => function() { echo '<h1> Widgets</h1>'; }, 
			],
		];
	}
}