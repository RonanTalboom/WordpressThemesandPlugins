<?php
/**
 * @package RonanTestPlugin
 */

 class RonanTestPluginDeactivate{
     public static function deactivate(){
         flush_rewrite_rules();
     }
 } 