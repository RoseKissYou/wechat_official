<?php /* Smarty version Smarty-3.1.6, created on 2017-01-15 16:09:03
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Menu\index.html" */ ?>
<?php /*%%SmartyHeaderCode:31625878aa7f1349b5-14349358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672370f76b0a073513b33684f0cba64ae0db8e6b' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Menu\\index.html',
      1 => 1484366018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31625878aa7f1349b5-14349358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5878aa7f1c90b',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5878aa7f1c90b')) {function content_5878aa7f1c90b($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>回复列表</title>
</head>
<body>

<a href="<?php echo U('/Menu/add_answer');?>
">新增回复</a>

<div>回复列表</div>

<table >
    <tr>
        <td>回复id</td>
        <td>回复内容</td>
    </tr>
    <!--<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>-->
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['an_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>
</td>
    </tr>
</table>
<!--<?php }
if (!$_smarty_tpl->tpl_vars['result']->_loop) {
?>-->
没有数据
<!--<?php } ?>-->
</body>
</html><?php }} ?>