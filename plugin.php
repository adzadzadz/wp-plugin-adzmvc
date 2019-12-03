<?php 
/*
Plugin Name: Adz Updates
Plugin URI: https://www.adriansaycon.com
Description: Plugin Development Boilerplate to make my tough life a little easier :) 
Version: 0.0.1
Author: Adrian T. Saycon
Author URI: https://www.adriansaycon.com
*/
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include_once 'functions.php';

if(!function_exists('classAutoLoader')){
  function classAutoLoader($class){
      if ($class == 'Adz') {
        $classFile = plugin_dir_path(__FILE__) . "adzmvc/Adz" . '.php';
      } else {
        $classFile = plugin_dir_path(__FILE__) . str_replace('\\', '/', $class) . '.php';
      }
      if (
        is_file($classFile) &&
        !class_exists($class)
      ) { 
        include $classFile;
      }
  }
}
spl_autoload_register('classAutoLoader');

use adzmvc\View;

global $adzMVC;
$adzMVC['pluginPath'] = plugin_dir_path( __FILE__ );
$adzMVC['pluginUrl']  = plugin_dir_url( __FILE__ );

Class Plugin {

  function run()
  {
    $admin = new \src\controllers\AdminController;
    $changes = new \src\controllers\ChangesController;
  }

}

$plugin = new Plugin;
$plugin->run();