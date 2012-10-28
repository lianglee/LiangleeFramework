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
* Defining Base url
*/
define('LiangleeFramework_BASEURL', elgg_get_site_url());

define('LiangleeFramework_WWWPLUGINS', elgg_get_plugins_path());

//define('LiangleeFramework_ROOT', elgg_get_plugins_path());

/*
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

}
