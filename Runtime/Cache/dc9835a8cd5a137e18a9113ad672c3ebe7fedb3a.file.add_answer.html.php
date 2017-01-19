<?php /* Smarty version Smarty-3.1.6, created on 2017-01-15 16:11:47
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Home/View\Menu\add_answer.html" */ ?>
<?php /*%%SmartyHeaderCode:26040587b2ec329cc80-27232978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9835a8cd5a137e18a9113ad672c3ebe7fedb3a' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Home/View\\Menu\\add_answer.html',
      1 => 1484306617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26040587b2ec329cc80-27232978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587b2ec32f6a0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587b2ec32f6a0')) {function content_587b2ec32f6a0($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加回复</title>
</head>
<body>
<h1>添加回复</h1>
<form method="post" action="<?php echo U('Menu/save_answer');?>
">
    <input name="answer">
    <input type="submit" class="formbtn" value="提交" />
    </form>

</body>
</html><?php }} ?>