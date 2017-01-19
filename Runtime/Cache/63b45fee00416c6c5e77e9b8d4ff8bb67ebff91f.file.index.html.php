<?php /* Smarty version Smarty-3.1.6, created on 2017-01-15 16:11:43
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Home/View\Menu\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3052258797ed0c20525-38465843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b45fee00416c6c5e77e9b8d4ff8bb67ebff91f' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Home/View\\Menu\\index.html',
      1 => 1484467887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3052258797ed0c20525-38465843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58797ed0cc07a',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58797ed0cc07a')) {function content_58797ed0cc07a($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>回复列表</title>
</head>
<body>

<a href="<?php echo U('/Home/Menu/add_answer');?>
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