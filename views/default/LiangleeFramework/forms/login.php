<?php
/* LiangLee Framework
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework( LEFW )
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @subpackage LiangLeeFramework( LEFW )
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @file lefw_loginbox.php
 */
if (elgg_is_active_plugin('LiangleeFramework')) {
if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
	} else {
     $login_box = elgg_view('core/account/login_box');
}
echo $login_box;
}
?>