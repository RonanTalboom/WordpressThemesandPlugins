<?php
/**
 * @package RonanTestPlugin
 */

namespace inc;
final class Init {
    public static function get_services(){
        return [
            pages\Admin::class,
            base\Enqueue::class,
            base\SettingsLinks::class
        ];
    }
    public static function register_services(){
        foreach ( self::get_services() as $class){
            $service = self::instantiate( $class );
            if( \method_exists($service, 'register')){
                $service->register();
            }
        }   
    }
    private static function instantiate( $class ){
        return new $class();
    }
}


// use inc\Activate;
// use inc\Deactivate;

// if ( !class_exists( 'RonanTestPlugin' ) ) {
// 	class RonanTestPlugin
// 	{
// 		public $plugin;
// 		function __construct() {
// 			$this->plugin = plugin_basename( __FILE__ );
// 		}
// 		function register() {
// 			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
// 			add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
// 			add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
// 		}
// 		public function settings_link( $links ) {
// 			$settings_link = '<a href="admin.php?page=ronan_test_plugin">Settings</a>';
// 			array_push( $links, $settings_link );
// 			return $links;
// 		}
// 		public function add_admin_pages() {
// 			add_menu_page( 'Ronan Test Plugin', 'Ronan', 'manage_options', 'ronan_test_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
// 		}
// 		public function admin_index() {
// 			require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
// 		}
// 		protected function create_post_type() {
// 			add_action( 'init', array( $this, 'custom_post_type' ) );
// 		}
// 		function custom_post_type() {
// 			register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
// 		}
// 		function enqueue() {
// 			// enqueue all our scripts
// 			wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyles.css', __FILE__ ) );
// 			wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscripts.js', __FILE__ ) );
// 		}
// 		function activate() {
// 			// require_once plugin_dir_path( __FILE__ ) . 'inc/class.ronan-test-plugin-activate.php';
// 			Activate::activate();
// 		}
// 	}
// 	$ronanTestPlugin = new RonanTestPlugin();
// 	$ronanTestPlugin->register();
// 	// activation
// 	register_activation_hook( __FILE__, array( $ronanTestPlugin, 'activate' ) );
// 	// deactivation
// 	// require_once plugin_dir_path( __FILE__ ) . 'inc/class.ronan-test-plugin-deactivate.php';
//     register_deactivation_hook( __FILE__, array( 'Deactivate', 'deactivate' ) );

// }