<?php 

namespace src\controllers;

use adzmvc\Controller;
use adzmvc\View;

/**
 * Set menus in admin
 * Update file for admin controls and functions
 */
class AdminController extends Controller {

  public function init()
  {
    // add_action( 'admin_menu', [$this, 'setMenu'] );
  }

//   public function setMenu()
//   {
//     add_menu_page('Live Odds Dashboard', 'Live Odds', 'manage_options', 'slo-menu-page', [$this, 'actionDashboard']);
//     add_submenu_page( 'slo-menu-page', 'Database Update', 'Update Database', 'manage_options', 'slo-update-db', [$this, 'actionUpdateDB'] );
//     add_submenu_page( 'slo-menu-page', 'Data Update', 'Update Sports Data', 'manage_options', 'slo-update-data', [$this, 'actionUpdateSportsData'] );
//     return true;
//   }

//   public function actionDashboard()
//   {
//     if ( !current_user_can( 'manage_options' ) )  {
//       wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
//     }
//     include "$this->pluginPath/config.php";
//     $view = new View;
//     $view->config = $config;
//     $view->pluginPath = $this->pluginPath;
//     echo $view->render('admin/optionsmenu.php');
//   }

}