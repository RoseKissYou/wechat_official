<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function index(){
        $answer_connet = new \Model\AnswersModel();
        $result = $answer_connet->select();
        $this->assign('results', $result);
        $this->display();

    }

    /* 2017 01 14
     * 修改回复信息
     * @author xiongan
     * */
    public function mutify(){

    }

    /* 2017 01 14
     * 添加回复信息
     * @author xiongan
     * */
    public function add_answer(){
       // $input_get = filter_input_array(INPUT_GET, FILTER_UNSAFE_RAW);
        $this->display();
    }

    public function save_answer(){
        $answer_connet = new \Model\AnswersModel();
        $input_get = filter_input_array(INPUT_GET, FILTER_UNSAFE_RAW);
        if(!empty($input_get['answer'])){
            //存储到数据库中
            $data = array(
                'content'=>$input_get['answer']
            );
            $result = $answer_connet->data($data)->add();
            if($result){
                $this->success('新增成功', 'Menu/index');
                //添加成功
              //  redirect('index.php?m=Admin&c=Menu&a=index');
            }else{
                //添加失败
                echo '添加失败,请重试';
            }
        }
    }
    public function dddd(){

    }
//    public function _empty(){
//        //当访问不存在的方法的时候会默认调用该方法,
//        echo '<img style="width: 100%;height: 100%" src="'.IMGS_URL.'404.jpg">';
//        echo "";
//    }
}