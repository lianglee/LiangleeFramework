<?php
/** LiangLeeFramework
 * @package Liang Lee Framework
 * @subpackage LiangLeePage.Class
 * @author Liang Lee
 * @copyright LIANG LEE 2012
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File LiangLeeHtml.php
 */
 defined('C_LEE_EXEC') or die ('Restricted access');  

/**
 * A class show user data.
 * @uses: Examples;
 */
class LiangLeeHtml {
/**
* Create a html form data
* @uses  examples;
* @access: system;
*/
function lianglee_data(array $attrs) {
$attrs = $attrs; $attributes = array();
foreach ($attrs as $attr => $val) { $attr = strtolower($attr);
if ($val === TRUE) { $val = $attr; } if ($val !== NULL && $val !== false && (is_array($val) || !is_object($val))) { if (is_array($val)) {$val = implode(' ', $val);} $val = htmlspecialchars($val, ENT_QUOTES, 'UTF-8', false); $attributes[] = "$attr=\"$val\"";
}
	} 
	return implode(' ', $attributes);
}
/**
* Construct a css
* @uses  examples;
* @access: system;
*/
public function css($url, $arg = array(), $data = 0){
if(!isset($arg['type'])){
$type = 'type="text/css"';
}
$css = '<link rel="stylesheet" href="'.LiangLeeUrl::construct($url).'" '.$this->lianglee_data($arg).' '.$type.' />';
if($data == 1){
unset($css);
$css = '<link rel="stylesheet" href="'.$url.'" '.$this->lianglee_data($arg).' '.$type.' />';

}
return $css;
}  
/**
* Construct a js
* @uses  examples;
* @access: system;
*/
public function js($url, $arg = array(), $data){
if(!isset($arg['type'])){
$type = 'type="text/javascript"';
}
$js = '<script src="'.LiangLeeUrl::construct($url).'" '.$this->lianglee_data($arg).' '.$type.'></script>';
if($data == 1){
unset($js);
$js = '<script src="'.$url.'" '.$this->lianglee_data($arg).' '.$type.'></script>';
}
return $js;
}  
 /**
* Construct a js
* @uses  examples;
* @access: system;
*/
public function img($url, $arg = array(), $data = 0){
$img = '<img src="'.LiangLeeUrl::construct($url).'" '.$this->lianglee_data($arg).'/>';
if($data == 1){
unset($img);
$img = '<img src="'.$url.'" '.$this->lianglee_data($arg).'/>';
}
return $img;
}  
 
}