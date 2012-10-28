<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File lianglee.framework.installdir.php
 */
 
/*
 * Get a LiangleeFramework_BASEURL (host, scheme, path)
 * @uses = Lianglee_get_my_elgg('host'); <= displays site name
 * @uses = Lianglee_get_my_elgg('scheme'); <= displays scheme
 * @uses = Lianglee_get_my_elgg('path'); <= displays installed subdirectory name if defined
 * use true to false if you don't wan't to show something
 * @access system
 */
function Lianglee_get_my_elgg($params){
$url = LiangleeFramework_BASEURL;
$fetch = parse_url(LiangleeFramework_BASEURL);
if($params == 'host'){
   if(isset($fetch)){
   $return = $fetch['host'];
   }
} if($params == 'scheme'){
     if(isset($fetch)){
     $return = $fetch['scheme'];
   }
} if($params == 'path'){
     if(isset($fetch)){
       $return = $fetch['path'];
   }
}

return $return;
}