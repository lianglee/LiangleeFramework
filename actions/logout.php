<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Framework
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @File logout.php
 */
defined('_LEE_EXEC') or die ('Restricted access'); 
 
$logout = elgg_view('output/url', array(
	'href' => 'action/logout',
	'text' => elgg_echo('logout'),
	'is_trusted' => true,
));
?>