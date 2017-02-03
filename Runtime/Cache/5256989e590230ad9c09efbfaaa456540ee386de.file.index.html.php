<?php /* Smarty version Smarty-3.1.6, created on 2017-02-03 15:21:47
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:14362588186acd9d2a5-82228963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5256989e590230ad9c09efbfaaa456540ee386de' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Goods\\index.html',
      1 => 1486106504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14362588186acd9d2a5-82228963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588186acddf92',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588186acddf92')) {function content_588186acddf92($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>商品列表</title>

</head>
<body>
<h2>商品显示列表</h2>

<a href="<?php echo U('/Admin/Goods/add');?>
">添加商品</a>
<table width="100%" cellspacing="0" class="dataTable">

    <tr class="tatr1">

        <td width="10%">商品id</td>
        <td width="10%" >商品icon</td>
        <td width="20%">商品货号</td>
        <td width="30%">商品名称</td>
        <td width="20%">商品价格</td>
        <td width="10%">操作</td>
    </tr>
    <!--<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>-->

    <tr class="tatr1">

        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['result']->value['goods_id'];?>
</td>
        <td>
            <img width="60px" height="60px" src="<?php echo @PUBLIC_URL;?>
<?php echo $_smarty_tpl->tpl_vars['result']->value['goods_img'];?>
">
        </td>
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['result']->value['goods_sn'];?>
</td>
        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['result']->value['goods_name'];?>
</td>
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['result']->value['goods_price'];?>
</td>
        <td width="10%">操作</td>
    </tr>


<!--<?php }
if (!$_smarty_tpl->tpl_vars['result']->_loop) {
?>-->
没有数据
<!--<?php } ?>-->
</table>
</body>
</html><?php }} ?>