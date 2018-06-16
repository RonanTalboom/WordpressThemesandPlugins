<?php
/**
 * @package RonanTestPlugin
 */


 namespace inc\api\callbacks;
 use \inc\base\BaseController;

 class AdminCallbacks extends BaseController{

    public function adminDashboard(){
        return require_once("$this->plugin_path/templates/admin.php");
    }
 }