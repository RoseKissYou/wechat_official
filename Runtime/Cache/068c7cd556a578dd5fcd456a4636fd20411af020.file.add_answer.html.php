<?php /* Smarty version Smarty-3.1.6, created on 2017-01-13 19:25:50
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Menu\add_answer.html" */ ?>
<?php /*%%SmartyHeaderCode:11285878b683d36d32-02347350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '068c7cd556a578dd5fcd456a4636fd20411af020' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Menu\\add_answer.html',
      1 => 1484306617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11285878b683d36d32-02347350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5878b683d793b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5878b683d793b')) {function content_5878b683d793b($_smarty_tpl) {?><!DOCTYPE html>
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