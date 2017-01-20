<?php
namespace Admin\Controller;
use Model\UserModel;
use Think\Controller;
use Think\Think;

class UserController extends Controller {
    public function index(){
        $this->assign('lang',L());
        $this->display();
    }
    /*
     * 用户登陆
     * @author xiongan
     * */
    public function login(){
        $this->display();
    }
    /*
     * 验证码
     * */
    public function verify_img(){
        $verify = new \Think\Verify();
        $verify->entry();
        // 查看是否存在该类
//        var_dump($verify);

    }
    /*
     * 图片处理
     * */
    public function img_deal(){
        $image_deal = new \Think\Image();
        $image_path = '';
        $image_deal->open(IMGS_URL.'bg.jpg');

        var_dump($image_deal);
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