<?php /* Smarty version Smarty-3.1.6, created on 2017-01-20 09:08:20
         compiled from "D:/php/www/ThinkPHP3/wechat_official/Admin/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1713158808e57298da3-65433850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb47534c4245d4a2fe9cf8b2c97f839be8f94202' => 
    array (
      0 => 'D:/php/www/ThinkPHP3/wechat_official/Admin/View\\User\\login.html',
      1 => 1484874497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713158808e57298da3-65433850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58808e573bdd2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58808e573bdd2')) {function content_58808e573bdd2($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo @CSS_AURL;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo @CSS_AURL;?>
admin.css">
    <script src="<?php echo @JS_AURL;?>
jquery.js"></script>
    <script src="<?php echo @JS_AURL;?>
pintuer.js"></script>
</head>
<body>
<div class="bg" style="background-image: url('<?php echo @IMGS_AURL;?>
bg.jpg')"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">
            </div>
            <form action="index.html" method="post">
                <div class="panel loginbox" style="background-image: url('<?php echo @IMGS_AURL;?>
tmbg-white.png')">
                    <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                    <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="text" class="input input-big" name="name" placeholder="登录账号" data-validate="required:请填写账号" />
                                <span class="icon icon-user margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                                <span class="icon icon-key margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field">
                                <input type="text" class="input input-big" name="code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                                <img src="<?php echo @SITE_URL;?>
Admin/User/verify_img" alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">

                            </div>
                        </div>
                    </div>
                    <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html><?php }} ?>