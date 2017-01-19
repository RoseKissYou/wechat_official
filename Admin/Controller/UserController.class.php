<?php
namespace Admin\Controller;
use Model\UserModel;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $appid = 'wxf3fe799737d9c242';
        // header('location:https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri=http%3a%2f%2fweixing.lazhuwang.com.cn%2fAdmin%2fUser%2fcheck_user&response_type=code&scope=snsapi_userinfo&state=123&connect_redirect=1#wechat_redirect');
        //     https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxf3fe799737d9c242&redirect_uri=http%3a%2f%2fweixing.lazhuwang.com.cn%2fAdmin%2fUser%2fcheck_user&response_type=code&scope=snsapi_base&state=123#wechat_redirect
        header('location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxf3fe799737d9c242&redirect_uri=http%3a%2f%2fweixing.lazhuwang.com.cn%2fGetWxUserInfo.php&response_type=code&scope=snsapi_base&state=123#wechat_redirect');

    }
    public function show_users(){
        $sql_user = new \Model\UserModel();
        $select_user = $sql_user->select();
        var_dump($select_user);
        $this->display('index');
    }
    public function hello(){
        $this->display('index');
    }

    public function check_user(){
        //获取state=123 和  code
        $code = $_GET['code'];
        $state = $_GET['state'];

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
//打印用户信息
        echo '<pre>';
        print_r($user_info);
        echo '</pre>';

    }

}