<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 16:32:16
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Home/View\Menu\mouth_words.html" */ ?>
<?php /*%%SmartyHeaderCode:31273587b37bf197108-80008063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d4ba817ddb73b33f37411d4cd0e7ec06924e01' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Home/View\\Menu\\mouth_words.html',
      1 => 1484785988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31273587b37bf197108-80008063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587b37bf1c9d8',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587b37bf1c9d8')) {function content_587b37bf1c9d8($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>星座宣言</title>
    <link href="<?php echo @CSS_URL;?>
mouth_word_css.css" rel="stylesheet" type="text/css"  />

    <!-- jqueryMobile的css文件  -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
jqueryMobile.css">
    <!-- 加载jquery文件 -->
    <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery.js"></script>
    <!-- 加载jqueryMobile文件 -->
    <script type="text/javascript" src="<?php echo @JS_URL;?>
jqueryMobile.js"></script>

    <!--mobiscroll日期插件-->
    <link href="<?php echo @CSS_URL;?>
mobiscroll.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo @JS_URL;?>
mobiscroll.js" type="text/javascript"></script>


</head>
<body>

<form method="post" action="<?php echo U('Menu/mouth_shows');?>
">
    <div class="content" style="text-align: center;margin-top: 100px;width:90%;">
        <label class="con-title" style="">星座物语</label></br>

        <input placeholder="请输入出生月份(阳历)" style="text-align: center;height:40px;" class="txt-birth" type="text"   name="txtBirth" /><br/>
        <input placeholder="请输入出生月份(阳历)"  style="text-align: center;height:40px;" class="txt-birthday" type="text"   name="txtBirthday" /><br/>
        <input  hidden="hidden"  name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['nickname'];?>
"><br/>
        <input hidden="hidden"   name="sex" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sex'];?>
"><br/>
        <input hidden="hidden"   name="headimgurl" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['headimgurl'];?>
"><br/>

        <input  class="submit-btn" style="text-align: center;height:40px;"  type="submit"  value="提交" />
    </div>




</form>




<p id="page_footer" style="text-align: center;color: #a9a9a9;;">Copyright 2013 - 2017 广州百姓堂药业连锁有限公司,All rights reserved</p>


</body>
</html><?php }} ?>