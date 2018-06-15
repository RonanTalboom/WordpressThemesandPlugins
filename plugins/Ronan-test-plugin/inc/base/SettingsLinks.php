<?php
/**
 * @package RonanTestPlugin
 */
 namespace Inc\base;

 class SettingsLinks{


     public function register(){
        add_filter( "plugin_action_links_" . PLUGIN, array( $this, 'settings_link' ) );
     }

     public function settings_link ( $links ) {
        $settings_link = '<a href="admin.php?page=ronan_test_plugin">Settings</a>';
        array_push( $links, $settings_link );
        return $links;
     }
 } 