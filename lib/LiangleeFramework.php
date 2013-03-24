<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeFramework.php
 */
 
/*
* Give Access to libs
*/ 
     define('_LEE_EXEC', 1);
/*
* Define base url
*/
     define('lee_baseurl', elgg_get_site_url());
/*
* Define mod direcroty path
*/
     define('lee_wwwmod', elgg_get_plugins_path());
/*
* Define root directory path
*/
    define('lee_www', elgg_get_root_path());
/*
* Get loggedin user guid
*/
    define('lee_loggedin_entity_guid', elgg_get_logged_in_user_entity()->guid);
/*
* Get loggedin user name
*/
   define('lee_loggedin_entity_name', elgg_get_logged_in_user_entity()->name);
/*
* Get loggedin user entity username
*/
   define('lee_loggedin_entity_username', elgg_get_logged_in_user_entity()->username);
/*
* Check if admin logged in
*/
   define('lee_loggedin_admin', elgg_is_admin_logged_in());
/*
* Get loggedin normal user logged in
*/
   define('lee_loggedin_user', elgg_is_logged_in());
/*
* Get loggedin user guid
*/
   define('lee_loggedin_user_guid', elgg_get_logged_in_user_guid());

/**
 * Remove a word from a string
 *
 * @access system
 */
function lee_framework_remove($data = '', $remove = ''){
if(!empty($data) && !empty($remove)){
$result =  str_replace($remove,'',$data);
return $result;
  }
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
/*
* Register Liang Lee Page Stetup Library
*/
elgg_register_library('lianglee:framework:pages', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.pagesetup.php
");
/*
* Register Liang Lee froms Library
*/
elgg_register_library('lianglee:framework:form', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.form.php");

/*
* Register Liang Lee Install direcroty Library
*/
elgg_register_library('lianglee:framework:installdir', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.instaldir.php");
/*
* Register Liang Lee Current Connection Library
*/
elgg_register_library('lianglee:framework:connection', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.connection.php");
/*
* Register Liang Lee Requested url Library
*/	  
elgg_register_library('lianglee:framework:requrl', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.requrl.php");
/*
* Register Liang Lee String Match Library
*/	  
   
elgg_register_library('lianglee:framework:pmatch', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.pmatch.php");
/*
* Register Liang Lee Url Library
*/
elgg_register_library('lianglee:framework:url', LiangLee_plugin_path('LiangleeFramework','lib')."lianglee.framework.url.php");

}
/*
 * Setup to load Liangleeframework core libs
 *
 * @access system
 */
function Lianglee_setup_load_libs(){
/*
* Load Liang Lee Page Stetup Library
*/
      elgg_load_library('lianglee:framework:pages');
/*
* Load Liang Lee Url Library
*/	  
      elgg_load_library('lianglee:framework:url');
/*
* Load Liang Lee Url Library
*/
      elgg_load_library('lianglee:framework:requrl');
/*
* Load Liang Lee Current Connection Library
*/
      elgg_load_library('lianglee:framework:connection');
/*
* Load Liang Lee Install direcroty Library
*/
      elgg_load_library('lianglee:framework:installdir');
/*
* Load Liang Lee String Match Library
*/	  
      elgg_load_library('lianglee:framework:pmatch');
/*
* Load Liang Lee froms Library
*/
      elgg_load_library('lianglee:framework:form');

}
