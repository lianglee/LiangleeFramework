<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File lianglee.framework.url.php
 */
defined('_LEE_EXEC') or die ('Restricted access');  
 
/*
 * LiangLeeFramework Url , return true of url contain a sting
 *
 * @uses Lianglee_url_contain(array('string' => '<string>','value' => '<value>'));
 * @access system
 */
 
function Lianglee_url_contain($params = array()){
if(isset($params) && !empty($params)){
   if(strstr($params['string'], $params['value'])) { 
       return true;
} if(empty($params)){
  $error = 'params not be empty';
  return false;
   }
  }
} 