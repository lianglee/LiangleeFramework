<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File lianglee.framework.pmatch.php
 */
 defined('_LEE_EXEC') or die ('Restricted access');  

/*
 * Liang Lee Framework Pregmatch Lib
 *
 * @uses Lianglee_pmatch_reg(array('regex' => <regexstring>, 'string' => <stringtomatch>));
 * @access system
 */
function Lianglee_pmatch_reg($params = array()){
  if(isset($params['regex'])){
     if(!empty($params['regex']) && !empty($params['string'])){
        if(preg_match ($params['regex'], $params['string'], $matches, PREG_OFFSET_CAPTURE)){
         return true;
        }
     }
  } 	
}  