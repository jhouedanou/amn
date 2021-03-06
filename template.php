<?php
/**
 * Implements hook_module_implements_alter().
 */
function mymodule_module_implements_alter(&$implementations, $hook) {
  if ($hook == 'library_alter') {
    if(isset($implementations['jquery_update'])) {
      // Move jquery update to the end. This will make sure our hook_library_alter
      // is always called before the jquery_update.
      $jquery_update = $implementations['jquery_update'];
      unset($implementations['jquery_update']);
      $implementations['jquery_update'] = $jquery_update;
    }
  }
}
/**
 * Implements hook_library_alter().
 */
function mymodule_library_alter(&$libraries, $module) {
  // If it is the admin theme all we want to do is change the global $conf
  // variable so when jquery_update runs right after us it will use 1.5.
  // We are not using path_is_admin(current_path()) because some admin path can use
  // the frontend theme like node edit page
  global $theme_key;
  if (variable_get('admin_theme') == $theme_key) {
    // Modifying global $conf variable, can be dangerous. Be carefull.
    global $conf;
    $conf['jquery_update_jquery_version'] = '1.5';
  }
}
?>
<?php
	if (drupal_is_front_page()) {

    drupal_add_js(drupal_get_path('theme', 'amn') . '/js/jquery.nicescroll.min.js');
    drupal_add_js(drupal_get_path('theme', 'amn') . '/js/jquery.anystretch.min.js');
    drupal_add_js(drupal_get_path('theme', 'amn') . '/js/jquery.localscroll-1.2.7-min.js');
   drupal_add_js(drupal_get_path('theme', 'amn') . '/js/jquery.parallax-1.1.3.js');
   drupal_add_js(drupal_get_path('theme', 'amn') . '/js/greensock/TweenMax.min.js');
   drupal_add_js(drupal_get_path('theme', 'amn') . '/js/ScrollToPlugin.min.js');
   drupal_add_js(drupal_get_path('theme', 'amn') . '/js/jquery.scrollmagic.min.js');
   drupal_add_js(drupal_get_path('theme', 'amn') . '/js/functions.js');
   	  }else{
	  }

?>
