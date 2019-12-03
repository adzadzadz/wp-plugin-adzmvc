<?php 

function pluginprefix_install() {
  // Add commands here
  // clear the permalinks after the post type has been registered
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'pluginprefix_install' );

function pluginprefix_deactivation() {
    // Add commands here
  // clear the permalinks to remove our post type's rules from the database
  flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivation' );

// Styles and Scripts
function enqueueAssets()
{
  wp_enqueue_style( 'sloBootstrapCss', plugins_url('src/assets/node_modules/bootstrap/dist/css/bootstrap-grid.min.css',__FILE__) ,false, '1.0.0', 'all');
  wp_enqueue_style( 'sloMainStyles', plugins_url('src/assets/css/styles.css',__FILE__) ,false, '1.0.0', 'all');
  wp_enqueue_script( 'adzMVCjs', plugins_url('src/assets/js/main.js', __FILE__), ['jquery'], '1.0.0', false);
  wp_localize_script('adzMVCjs', 'adzData', array(
    'pluginsUrl' => plugins_url(),
  ));
}
add_action( 'wp_enqueue_scripts', 'enqueueAssets' );
add_action( 'admin_enqueue_scripts', 'enqueueAssets' );