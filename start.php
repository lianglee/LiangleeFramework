<?php
/* LiangLee Framework
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright Copyright 2012, Liang Lee
 * @File Start.php
 */

 
elgg_register_event_handler('init', 'system', 'LiangleeFramework_init');
/*
 * Register Plugin Settings
 *
 * @access admin
 */
function LiangleeFramework_init() {

elgg_extend_view('css/elgg', 'LiangleeFramework/css');

elgg_register_plugin_hook_handler("register", "all", 'LiangLee_class');

elgg_register_plugin_hook_handler("register", "all", 'LiangLee_view');


}
/*
 * Inlude a view file
 *
 * @param Directory or path
 * @plugin Plugin Name
 * @access admin
 */
function LiangLee_view($plugin, $params) {
        if (isset($plugin) || isset($params)) {
	    include(elgg_get_plugins_path()."/".$plugin."/views/default/".$plugin."/".$params.".php");
	    } else {
		    if (elgg_is_admin_logged_in()) {
            register_error(elgg_echo('lianglee:cant:load:view'));
        } else {
        register_error(elgg_echo('lianglee:cant:load:view:code'));	
            }
        }
}
/*
 * Inlude a custom file
 *
 * @param Directory or path
 * @path Path to a file
 * @access admin
 */
function LiangLee_include($params, $path){
    include(elgg_get_plugins_path()."/".$params."/".$path.".php");

}
/*
 * Get Version 
 * @return returen if values does not match
 * @param Plugin Name
 * @access admin
 */
function LiangLee_version($params){
    static $LiangLee_version;
	if (!isset($LiangLee_version)) {
			if (!include(elgg_get_plugins_path() . $params."/version.php")) {
				return false;
			}
		}
	return $LiangLee_version;
}
/*
 * Get release
 * @return returen if values does not match
 * @param Plugin Name
 */
function LiangLee_release($params){
    static $LiangLee_release;
	if (!isset($LiangLee_release)) {
			if (!include(elgg_get_plugins_path() . $params."/version.php")) {
				return false;
			}
		}
	return $LiangLee_release;
}

/*
 * Inlcuding a class
 *
 * @filename File Name
 */
function LiangLee_class($params, $name) {
    if (isset($params, $name)) {
      include(elgg_get_plugins_path().$params."/classes/".$name.".php");
	 } else {
	 if (elgg_is_admin_logged_in()) {
     register_error(elgg_echo('lianglee:class:bad'));
     } else {
        register_error(elgg_echo('lianglee:class:bad:code'));	
          }
    }
}
/**
 * Adding js to pages 
 *
 * @jsname Name of specfic js file
 * @access public
 */
function LiangLee_inc_js($params,$jsname) {
    if (isset($params,$jsname)) {
      $path = "mod/".$params."/vendors/";
      echo "<script type=\"text/javascript\" src=\"".elgg_get_site_url().$path.$jsname."\"></script>\n";
	  } else {
	 if (elgg_is_admin_logged_in()) {
     register_error(elgg_echo('lianglee:cant:load:js'));
     } else {
        register_error(elgg_echo('lianglee:cant:load:js:code'));	
          }
	  }
} 
/**
 * Adding css to pages 
 *
 * @cssname Name of specfic css file
 * @access public
 */
function LiangLee_inc_css($params ,$cssname) {
    if (isset($params,$cssname)) {
    $path = "mod/".$params."/";
    echo "<link rel=\"stylesheet\" href=\"".elgg_get_site_url().$path.$cssname."\" type=\"text/css\" />\n";
	 } else {
	 if (elgg_is_admin_logged_in()) {
     register_error(elgg_echo('lianglee:cant:load:css'));
     } else {
        register_error(elgg_echo('lianglee:cant:load:css:code'));	
        }

   }
}
/**
 * Adding img in html
 *
 * @imgname Name of specfic image file
 * @access public
 */
function LiangLee_img($params,$picname){
        if (isset($params,$picname)) {
        $path = "mod/".$params."/media/";
        echo "<img src=\"".elgg_get_site_url().$path.$picname."\">\n";
		} else {
	    if (elgg_is_admin_logged_in()) {
        register_error(elgg_echo('lianglee:cant:load:img'));
        } else {
        register_error(elgg_echo('lianglee:cant:load:img:code'));	
        }

   }
}
?>