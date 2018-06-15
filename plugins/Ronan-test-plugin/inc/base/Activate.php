<?php
/**
 * @package RonanTestPlugin
 */
 namespace Inc\base;

 class Activate{
     public function activate(){
         flush_rewrite_rules();
     }
 } 