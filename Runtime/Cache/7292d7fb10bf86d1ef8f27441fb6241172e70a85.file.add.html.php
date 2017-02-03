<?php /* Smarty version Smarty-3.1.6, created on 2017-02-03 15:00:33
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\Goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1199558819887c744a8-87496574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7292d7fb10bf86d1ef8f27441fb6241172e70a85' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\Goods\\add.html',
      1 => 1486105222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199558819887c744a8-87496574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58819887caafa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58819887caafa')) {function content_58819887caafa($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加图片</title>
</head>
<body>
<form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <th style="width: 30%">商品货号:</th>
            <td style="width: 50%">
                <input type="text" name="goods_sn">
            </td>
        </tr></br>
        <tr>
            <th style="width: 30%">商品名称:</th>
            <td style="width: 50%">
                <input type="text" name="goods_name">
            </td>
        </tr></br>
        <tr>
            <th style="width: 30%">商品价格:</th>
            <td style="width: 50%">
                <input type="text" name="goods_price">
            </td>
        </tr></br>


        <tr>
            <th style="width: 30%"> goods_img:</th>
            <td style="width: 50%">
                <input type="file" name="goods_img">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="upload-img">
            </td>
        </tr>
    </table>

</form>

</body>
</html><?php }} ?>