<?php
/** LiangLeeBlockUser
 * Block a username
 * @package LiangLeeFramework
 * @subpackage  LiangLeeBlockuser 
 * @author Liang Lee
 * @copyright Copyright 2013, Liang Lee
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File lee_ajax_api.php
 */
defined('_LEE_EXEC') or die ('Restricted access'); 
 
if(!isset($params['form_id'])){
$params['form_id'] = '';
} if(!isset($params['process_id'])){
$params['process_id'] = '';
} if(!isset($params['process_msg'])){
$params['process_msg'] = '';
}if(!isset($params['type'])){
$params['type'] = 'GET';
}
 ?>
<script type="text/javascript">
$(function(){$('<?php echo $params['form_id'];?>').submit(function(e){e.preventDefault();var form = $(this);var post_url = form.attr('action');var post_data = form.serialize();$('<?php echo $params['process_id'];?>', form).html('<img src="<?php echo lee_baseurl;?>mod/LiangleeFramework/media/ajax-loader.gif" /> <?php echo $params['process_msg'];?>');$.ajax({type: '<?php echo $params['type'];?>',url: post_url,data: post_data,success: function(msg) {$(form).fadeOut(500, function(){form.html(msg).fadeIn();});}});});});
</script>