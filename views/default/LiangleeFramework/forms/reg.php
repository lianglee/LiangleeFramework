<?php
/* LiangLee Framework
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework 
 * @author Liang Lee
 * @copyright Copyright (c) 2012, Liang Lee
 * @File lefw_registrationform.php
 */
 
if (elgg_is_active_plugin('LiangleeFramework')) {
$forward_url = '/activity';

$title = elgg_echo('register');

$body = elgg_view_form('register', array('action' => "{$login_url}action/register"));

echo elgg_view_module('aside', $title, $body);
if (elgg_is_logged_in()) {

	forward($forward_url);
}
echo ("<script type='text/javascript'>\n");
echo ("elgg.register_hook_handler('init', 'system', function() {\n");
echo ("$('input[name=username]').focus();\n");
echo ("});\n");
echo ("</script>\n");
}
?>