<?php /* Smarty version Smarty-3.1.6, created on 2017-01-20 11:14:19
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Home/View\Menu\mouth_shows.html" */ ?>
<?php /*%%SmartyHeaderCode:11884587b563791cd89-89267277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eada79033ae1e35e19bacd97e397abd0a0834710' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Home/View\\Menu\\mouth_shows.html',
      1 => 1484881997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11884587b563791cd89-89267277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587b5637976b0',
  'variables' => 
  array (
    'user_info' => 0,
    'bg_img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587b5637976b0')) {function content_587b5637976b0($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>星座宣言</title>
    <link href="<?php echo @CSS_URL;?>
mouth_word_css.css" rel="stylesheet" type="text/css"  />
</head>
<body>
<div class="content">

    <h5 class="nick-name" style="text-align: center;height:40px;">昵称:<?php echo $_smarty_tpl->tpl_vars['user_info']->value['nickname'];?>
</h5>
    </br>
    <img class="logo-img" style=" width: 20%;height:20%;margin: 10px 40% auto;"  src="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['headimgurl'];?>
"></br>
    <img src="<?php echo @SITE_URL;?>
Home/Menu/mouth_img?bg_img=<?php echo $_smarty_tpl->tpl_vars['bg_img']->value;?>
&nick_name=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['nickname'];?>
&head_img=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['headimgurl'];?>
" >

</div>

<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1.12.3.min.js"></script>

<p id="page_footer" style="text-align: center;color: #a9a9a9;;">Copyright 2013 - 2017 广州百姓堂药业连锁有限公司,All rights reserved</p>
</body>
</html><?php }} ?>