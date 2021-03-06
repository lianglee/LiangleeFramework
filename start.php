<?php
/* LiangLee Framework
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright Copyright 2012, Liang Lee
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File Start.php
 */
  
elgg_register_event_handler('init', 'system', 'LiangleeFramework_init'); 

/*
 * Register Plugin Settings
 *
 * @access admin
 */
function LiangleeFramework_init() {

/*
 * Register Css
 *
 * @access public
 */
elgg_extend_view('css/elgg', 'LiangleeFramework/css');

elgg_register_library('elgg:LiangleeFramework', LiangLee_plugin_path('LiangleeFramework','lib')."LiangleeFramework.php");

elgg_load_library('elgg:LiangleeFramework');

LiangleeFramework_setup();
}

/*
 * Inlude a view file
 *
 * @param Directory or path
 * @plugin Plugin Name
 * @access admin
 */  
function LiangLee_view($plugin, $params) {
if(is_file(elgg_get_plugins_path().$plugin.'/views/default/'.$plugin.'/'.$params.'.php')){
          include(elgg_get_plugins_path().$plugin.'/views/default/'.$plugin.'/'.$params.'.php');
          } else {
          if (elgg_is_admin_logged_in()){ 
          register_error(elgg_echo('lianglee:cant:load:view'));
          } else{
          register_error(elgg_echo('lianglee:cant:load:view:code'));	
        }           
    }
}

function LiangLeeClasses(){
$array = array('LiangLeeForm.php','LiangLeeSite.php','LiangLeeUrl.php','LiangLeeUser.php','LiangLeePage.php','LiangLeeHtml.php','LiangLeePath.php','LiangLeeFile.php');
foreach($array as $class){
require_once(elgg_get_plugins_path()."LiangleeFramework/classes/{$class}");
   }
}
define('C_LEE_EXEC', 1);
LiangLeeClasses();


/*
 * Inlude a custom file
 *
 * @param Directory or path
 * @path Path to a file
 * @access admin
 */
function LiangLee_include($params, $path){
if(is_file(elgg_get_plugins_path().$params.'/'.$path.'.php')){
          include(elgg_get_plugins_path().$params.'/'.$path.'.php');
	      } else {
          if (elgg_is_admin_logged_in()){ 
          register_error(elgg_echo('lianglee:requested:file:not:found'));
          } else {
          register_error(elgg_echo('lianglee:requested:file:not:found:code'));	
        }           
    }
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
 * Adding js to pages 
 *
 * @jsname Name of specfic js file
 * @access public
 */
function LiangLee_inc_js($params,$jsname) {
if (isset($params) || isset($jsname)) {
      $path = "mod/".$params."/vendors/";
      $javas = "<script type=\"text/javascript\" src=\"".elgg_get_site_url().$path.$jsname."\"></script>\n";
	  return $javas;
	  } else {
	 if (elgg_is_admin_logged_in()) {
     register_error(elgg_echo('lianglee:cant:load:js'));
     } else {
        register_error(elgg_echo('lianglee:cant:load:js:code'));	
          }
	  }
} 
/*
 * Adding css to pages 
 *
 * @cssname Name of specfic css file
 * @access public
 */
function LiangLee_inc_css($params ,$cssname) {
if (isset($params) || isset($cssname)) {
    $path = "mod/".$params."/";
    $style ="<link rel=\"stylesheet\" href=\"".elgg_get_site_url().$path.$cssname."\" type=\"text/css\" />\n";
	 return $style;
	 } else {
	 if (elgg_is_admin_logged_in()) {
     register_error(elgg_echo('lianglee:cant:load:css'));
     } else {
        register_error(elgg_echo('lianglee:cant:load:css:code'));	
        }

   }
}
/*
 * Adding img in html
 *
 * @imgname Name of specfic image file
 * @access public
 */
function LiangLee_img($params,$picname){
if (isset($params) || isset($picname)) {
        $path = "mod/".$params."/media/";
		$image = "<img src=\"".elgg_get_site_url().$path.$picname."\">\n";
        return $image;
		} else {
	    if (elgg_is_admin_logged_in()) {
        register_error(elgg_echo('lianglee:cant:load:img'));
        } else {
        register_error(elgg_echo('lianglee:cant:load:img:code'));	
        }

   }
}
/*
 * Server and execution environment information
 *
 * $HTTP_SERVER_VARS contains the same initial information, but is not a superglobal. (Note that
 * $HTTP_SERVER_VARS and $_SERVER are different variables and that PHP handles them as such).
 * @method server method
 * @access public
 */
function LiangLee_server($param){
if(isset($param)){
         $exe = $_SERVER[$param];
         return $exe;
         } else {
         if (elgg_is_admin_logged_in()) { 
         register_error(elgg_echo('lianglee:server:method:error'));
		 } else {
         register_error(elgg_echo('lianglee:server:method:error:code'));	
            }
		}  
}	
/*
 * Get Plugin Path 
 *
 * @pluginname a name of plugin or mod
 * @access system
 */	 
function LiangLee_plugin_path($mod, $method){
if(!isset($method)){
if (elgg_is_admin_logged_in()) { 
         register_error(elgg_echo('lianglee:method:error'));
} else {
         register_error(elgg_echo('lianglee:server:method:error:code'));	
}
} else {
         $path = elgg_get_plugins_path().$mod."/";
/*
 * Get Css Folder 
 *
 * @method a name of dir
 * @access system
 */		
if($method == 'css'){
    $action = $path.'css/';
    return $action;
}
/*
 * Get lib Folder 
 *
 * @method a name of dir
 * @access system
 */		 
if($method == 'lib'){
    $action = $path.'lib/';
    return $action;
 }
/*
 * Get actions Folder 
 *
 * @method a name of dir
 * @access system
 */		    
if($method == 'actions'){
    $action = $path.'actions/';
    return $action;
} 
/*
 * Get Pages Folder 
 *
 * @method a name of dir
 * @access system
 */	
if($method == 'pages'){
    $action = $path.'pages/';
    return $action;
}
/*
 * Get vendors Folder 
 *
 * @method a name of dir
 * @access system
 */		   
if($method == 'vendors'){
    $action = $path.'vendors/';
    return $action;
}
/*
 * Get documentation Folder 
 *
 * @method a name of dir
 * @access system
 */			 
if($method == 'documentation'){
    $action = $path.'documentation/';
    return $action;
} 
/*
 * Get Classes Folder 
 *
 * @method a name of dir
 * @access system
 */	    
if($method == 'classes'){
    $action = $path.'classes/';
    return $action;
}
/*
 * Get media(images) Folder 
 *
 * @method a name of dir
 * @access system
 */		   
if($method == 'media'){
    $action = $path.'media/';
    return $action;
}
/*
 * Get Previews  Folder 
 *
 * @method a name of dir
 * @access system
 */		   
if($method == 'previews'){
    $action = $path.'previews/';
    return $action;
}
/*
 * Get views Folder 
 *
 * @method a name of dir
 * @access system
 */	 
if($method == 'views'){
    $action = $path.'views/';
    return $action;
        }     
    }
}
/*
 * Get time at diffrent formats
 *
 * @type type of time to display
 * @string date ( string $format [, int $timestamp = time() ] )
 * @php 5.4  getdate ([ int $timestamp = time() ] )
 * @param $display
 * @access system
 */	
function LiangLee_time($type, $output){
/*
 * @format Get $type
 */	
$format = $type;

/*
 * @format 21/08/2012 - 02:31am
 */	  
if($format == 1){
$action = date('d/m/Y - H:ia');
}
/*
 * @format Tuesday 21st August 2012
 */	 
if($format == 2){
$action = date('l dS F Y');
}
/*
 * Execute custom date output
 */	
if(isset($type) || isset($output)){
   if($format == 'custom'){
    $action = date($output);
   }
}
/*
 * Get Output if it is availabe
 */	
return $action;
}
/*
 * Get Apache Modules Status
 *
 * @params type of module
 * @access system
 * @todo check comments
 */	  
function LiangLee_apache($params, $mname){
/*
 * $info Get $params
 */	
$param = $params;
/*
 * Get Modules
 */	
$extname = $mname;
if($param == 'custom'){
    if(isset($extname)){
    $module = apache_get_modules($mname);
    return $module;
  } else {
  //@todo Add error message
  return false;
 }  
} 
if($param == 'all'){
    $apache = apache_get_modules();
    return $apache;
  } else {
  //@todo add error message 
  return false; 
   }
}
/*
 * Put File Contents
 *
 * @params File
 * @data the data that is to be replaced
 * @access system
 */	
function LiangLee_putconents($file, $data) {
  if ( is_array($data)){
    foreach ($data as $item) {
      if (is_array( $item )) {
        LiangLee_putconents($file, $item);
      } else {
        file_put_contents($file, $item);
      }
    }
  } else {
    file_put_contents($file, $data);
   }
}
/*
 * Check if url is match the return true
 *
 * $params get array
 * @access system
 */	
function LiangLee_url($params){

$get = $params;
if(isset($params)){
$requrl =  elgg_get_site_url().$get['url'];
$url = $get['connection'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
if($url == $requrl) {
return true;
       }
     }
}
/*
 * Copy file
 *
 * $params get array
 * @access system
 */	
function LiangLee_backup($get){
$lianglee = $get;
if(isset($get)){
    $file = $lianglee['path'].$lianglee['file'];
    $renamefile = $lianglee['path'].$lianglee['newfile'];
    $error = $lianglee['file'];
    if (!copy($file, $renamefile)) {
    register_error( "Failed to copy $error \n");	
     } 
  } 
}  
?>