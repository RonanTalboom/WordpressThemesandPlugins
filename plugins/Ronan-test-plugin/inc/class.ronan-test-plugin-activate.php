<?php
/**
 * @package RonanTestPlugin
 */

 class RonanTestPluginActivate{
     public static function activate(){
         flush_rewrite_rules();
     }
 } 