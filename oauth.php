<?php
$code = $_GET['code'];
$state = $_GET['state'];
//换成自己的接口信息
$appid = 'wxf3fe799737d9c242';
$appsecret = '09f1b1d12ab05224084515dfdfb1d5a0';
if (empty($code)) $this->error('授权失败');
$token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
$token = json_decode(file_get_contents($token_url));
if (isset($token->errcode)) {
    echo '<h1>错误：</h1>'.$token->errcode;
    echo '<br/><h2>错误信息：</h2>'.$token->errmsg;
    exit;
}
$access_token_url = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.$appid.'&grant_type=refresh_token&refresh_token='.$token->refresh_token;
//转成对象
$access_token = json_decode(file_get_contents($access_token_url));
if (isset($access_token->errcode)) {
    echo '<h1>错误：</h1>'.$access_token->errcode;
    echo '<br/><h2>错误信息：</h2>'.$access_token->errmsg;
    exit;
}
$user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token->access_token.'&openid='.$access_token->openid.'&lang=zh_CN';
//转成对象
$user_info = json_decode(file_get_contents($user_info_url));
if (isset($user_info->errcode)) {
    echo '<h1>错误：</h1>'.$user_info->errcode;
    echo '<br/><h2>错误信息：</h2>'.$user_info->errmsg;
    exit;
}
/*打印用户信息  测试案例
 * */
$nickname = $user_info->nickname;
$sex  = $user_info->sex;
$headimgurl = $user_info->headimgurl;
$user_url = 'http://weixing.lazhuwang.com.cn/Home/Menu/mouth_words?nickname='.$nickname.'&sex='.$sex.'&headimgurl='.$headimgurl;
echo '';
echo '<meta http-equiv="refresh" content="0.1;url= '.$user_url.'">';
//echo '<pre>';
//print_r($user_info);
//echo '</pre>';


//跳转到网页
//跳转到星座宣言  传递用户昵称 nickname 性别 sex (1/2) 头像  headimgurl
//if(!empty($user_info)){
//    $this->redirect('Home/Menu/mouth_words',$user_info);
//}
//if(!empty($user_info)){
//    $this->redirect('http://weixing.lazhuwang.com.cn/Home/Menu/mouth_words',$user_info);
//}








?>