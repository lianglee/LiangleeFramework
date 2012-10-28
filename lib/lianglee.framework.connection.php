<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File lianglee.framework.connection.php
 */
 
/*
 * Get a connection type hype text transfer protocol or hype text transfer protocol secure
 * @uses = Lianglee_get_connection(); or echo Lianglee_get_connection(); depends on you
 * @access system
 */

function Lianglee_get_connection(){
if(elgg_get_config('https_login')){
    $connection = array('connection' => 'https');
    } else {
    $connection =array('connection' => 'http');
}
 return $connection['connection'];
} 
 ?>