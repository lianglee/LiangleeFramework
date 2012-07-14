<?php
/* LiangLee Framework
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * FrameWork for Liang Lee Plugins
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeFramework.php
 */
if (elgg_is_active_plugin('LiangleeFramework')) {
if(count($_SESSION['msg']['error'])>0)	
{					
	foreach($_SESSION['msg']['error'] as $error)
		echo "<p style='font-weight: bold;'>$error</p>";
	echo '</div>';
}
unset($_SESSION['msg']['error']);
}
?>