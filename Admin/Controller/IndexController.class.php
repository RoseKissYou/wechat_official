<?php
namespace Admin\Controller;
use Model\ArticlesModel;
use Model\IndexModel;
use Think\Controller;
class IndexController extends Controller {
    //进行微信测试,跳过验证
    public function index(){

        $sql_articles = new \Model\ArticlesModel();
        $articles = $sql_articles->select();
        foreach($articles as $article){
            echo $article['title'];
        }
        $this->assign('articles', $articles);
        $this->display();
    }

    public function sql_test(){
        $sql_articles = new \Model\ArticlesModel();
        $articles = $sql_articles->select();
        foreach($articles as $article){
            echo $article['title'];
        }
        $this->assign('articles', $articles);
     //   var_dump($articles);
        $this->display('index');
    }

    public function user_sql(){
        $sql_user = new \Model\UserModel();
        $select_user = $sql_user->select();
        //显示所有的用户列表
        $this->assign('users', $select_user);
       // var_dump($select_user);
        $this->display('user');
    }
    public function user_add(){
        $sql_user = new \Model\UserModel();
        //插入用户
        $data = array(
            'user_name'     =>'mock1',
            'create_time'   =>time()
        );
        //检查用户名是否存在  "  user_name =  $data['user_name'] "
        $check_user_name = $sql_user->where(" user_name = '%s'",array($data['user_name']))->select();

        if(empty($check_user_name)){
            echo '用户名不存在,可以创建';
            $insert_user = $sql_user->data($data)->add();
            if($insert_user){
                echo '创建成功';
            }else{
                echo '创建失败';
            }
        }else{
            echo '用户名已经存在';
        }


        $this->display('index');
    }



}