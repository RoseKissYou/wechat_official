<?php /* Smarty version Smarty-3.1.6, created on 2017-01-14 09:30:43
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23360587830d8a0a535-26541341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e86f9c65b1792b61ecf7353a6054465b03d9ab62' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Index\\index.html',
      1 => 1484311781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23360587830d8a0a535-26541341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587830d8a3933',
  'variables' => 
  array (
    'articles' => 0,
    'art' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587830d8a3933')) {function content_587830d8a3933($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>文章显示</title>
</head>
<body>
<div>显示博客新闻</div>
<!--<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>-->
<h2><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</h2>
<p><?php echo $_smarty_tpl->tpl_vars['art']->value['content'];?>
</p>
<!--<?php }
if (!$_smarty_tpl->tpl_vars['art']->_loop) {
?>-->
没有数据
<!--<?php } ?>-->

</body>
</html><?php }} ?>