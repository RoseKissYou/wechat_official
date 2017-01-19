<?php /* Smarty version Smarty-3.1.6, created on 2017-01-13 14:28:17
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Index\user.html" */ ?>
<?php /*%%SmartyHeaderCode:28266587852b824ddb5-62306564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9d42b5b68af9bf6fe7285b1160d90c6a9a6773' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Index\\user.html',
      1 => 1484284336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28266587852b824ddb5-62306564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587852b82af83',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587852b82af83')) {function content_587852b82af83($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php\\www\\ThinkPHP3\\ThinkPHP\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>用户列表</title>
</head>
<body>

<div>显示用户列表</div>
<!--<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>-->
<h2><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</h2>
<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['create_time'],"%Y-%m-%d %T");?>
</p>

<!--<?php }
if (!$_smarty_tpl->tpl_vars['user']->_loop) {
?>-->
没有数据
<!--<?php } ?>-->

</body>
</html><?php }} ?>