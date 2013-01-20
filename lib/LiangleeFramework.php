<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeFramework.php
 */
 
define('_LEE_EXEC', 1);
define('lee_baseurl', elgg_get_site_url());
define('lee_wwwmod', elgg_get_plugins_path());
define('lee_www', elgg_get_root_path());

define('lee_loggedin_entity_guid', elgg_get_logged_in_user_entity()->guid);
define('lee_loggedin_entity_name', elgg_get_logged_in_user_entity()->name);
define('lee_loggedin_entity_username', elgg_get_logged_in_user_entity()->username);
define('lee_loggedin_admin', elgg_is_admin_logged_in());
define('lee_loggedin_user', elgg_is_logged_in());
define('lee_loggedin_user_guid', elgg_get_logged_in_user_guid());

define('lee_pown_entity', elgg_get_page_owner_entity());
define('lee_pown_entity_guid', elgg_get_page_owner_entity()->guid);
define('lee_pown_entity_name', elgg_get_page_owner_entity()->name);
define('lee_pown_entity_username', elgg_get_page_owner_entity()->username);


function lee_framework_remove($data = '', $remove = ''){
if(!empty($data) && !empty($remove)){
$result =  str_replace($remove,'',$data);
return $result;
  }
 } 
function lee_framework_encode_64($data = ''){ 
if(!empty($data)){
$data = base64_encode($data);
return lee_framework_remove($data, '=');
 }
} 
/**
 * Make a array from input
 *
 * @access system
 */

function lee_framework_get_options($settings){
if (is_string($settings)) {$options = explode(",", $settings);$options = array_map('trim', $options);
$options = array_filter($options, 'is_not_null');
  } return $options;	 
}	

/**
 * Setup the LiangLeeFramework
 *
 * @access system
 */
function LiangleeFramework_setup(){
Lianglee_setup_libs();
Lianglee_setup_load_libs();
}
/*
 * Setup the LiangLeeFramework core libs
 *
 * @access system
 */
function Lianglee_setup_libs(){

elgg_register_library('lianglee:framework:form', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.form.php");

elgg_register_library('lianglee:framework:installdir', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.instaldir.php");

elgg_register_library('lianglee:framework:connection', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.connection.php");

elgg_register_library('lianglee:framework:requrl', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.requrl.php");

elgg_register_library('lianglee:framework:pmatch', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.pmatch.php");

elgg_register_library('lianglee:framework:url', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.url.php");

}
/*
 * Setup to load Liangleeframework core libs
 *
 * @access system
 */
function Lianglee_setup_load_libs(){

elgg_load_library('lianglee:framework:url');
elgg_load_library('lianglee:framework:requrl');
elgg_load_library('lianglee:framework:connection');
elgg_load_library('lianglee:framework:installdir');
elgg_load_library('lianglee:framework:pmatch');
elgg_load_library('lianglee:framework:form');

}
