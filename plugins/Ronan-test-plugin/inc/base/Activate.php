<?php
/**
 * @package RonanTestPlugin
 */
 namespace inc\base;

 class Activate{
     public static function activate(){
         flush_rewrite_rules();
     }
 } 