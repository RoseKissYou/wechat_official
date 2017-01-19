<?php
namespace Home\Controller;
use Model\UserModel;
use Think\Controller;
class UserController extends Controller {

    public function _initialize(){
        header("content-type:text/html;charset=utf-8");
        $this->appid='wxf3fe799737d9c242'; //此处修改为自己的参数
        $this->secret='09f1b1d12ab05224084515dfdfb1d5a0';
    }
    public function index(){
        $appid = 'wxf3fe799737d9c242';
        $redirect_url = urlencode('http://weixing.lazhuwang.com.cn/');
        //官方网址  https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect
        header('location:https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri='.$redirect_url.'oauth.php&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect');

    }
    // 测试连接
    //   https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxf3fe799737d9c242&redirect_uri=http%3a%2f%2fweixing.lazhuwang.com.cn%2foauth.php&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect

    public function index_bak(){
        $sql_user = new \Model\UserModel();
        $select_user = $sql_user->select();
        var_dump($select_user);
        $this->display();

    }
    public function add_answer(){

    }

}