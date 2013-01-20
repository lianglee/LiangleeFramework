<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File lianglee.framework.requrl.php
 */
defined('_LEE_EXEC') or die ('Restricted access');  

/*
 * Get a current url
 * @uses  Lianglee_requested_url_full(true); or echo Lianglee_requested_url_full(true); depends on you
 * @access system
 */
function Lianglee_requested_url_full($params){
   if(isset($params)){
       if($params == true){
        $url = Lianglee_get_connection().LiangLee_server('SERVER_NAME').LiangLee_server('REQUEST_URI');
        return $url;
       }
	}   
}