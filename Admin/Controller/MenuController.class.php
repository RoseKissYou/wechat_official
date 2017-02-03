<?php
namespace Admin\Controller;
use Think\Controller;
use \Model\GoodsModel;
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
    /*
     * 图片处理
     *
     * */
    public function img_deal(){
        $menu = D('Menu');
        if(!empty($_POST)){
            // 判断附件是否上传成功,有就上传到指定位置, 然后把路径名称返回存入$_POST
            if(!empty($_FILES)){
                print_r($_FILES);
            }
//            exit;
//            $goods ->create();
//            $z = $goods->add();
//            if($z){
//                $this->success('添加商品成功',U('Menu/img_deal'));
//            }
        }else{
            $this->display();
        }
    }
    public function upload() {
        $upload = new \Think\Upload();
// 实例化上传类
        $upload -> maxSize = 3145728;
// 设置附件上传大小
        $upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
// 设置附件上传类型
        $upload -> rootPath = IMGS_AURL;
// 设置附件上传根目录
        $upload -> savePath = '';
// 设置附件上传（子）目录
// 上传文件
        $info = $upload -> upload();
        if (!$info) {// 上传错误提示错误信息
            $this -> error($upload -> getError());
        } else {// 上传成功
            foreach($info as $file){
//$file_mini='./Public/'.$file['savepath'].'mini/'.$file['savename'];
                $file_path=IMGS_AURL.$file['savePath'].$file['savename'];
                $file_mini=IMGS_AURL.$file['savePath'].$file['savename'];
                var_dump($file_path);
                var_dump($file_mini);
                $image = new \Think\Image();
                $image->open($file_path);
// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $image->thumb(150, 150)->save($file_mini);

            }

            return $info;
        }
    }
//    public function _empty(){
//        //当访问不存在的方法的时候会默认调用该方法,
//        echo '<img style="width: 100%;height: 100%" src="'.IMGS_URL.'404.jpg">';
//        echo "";
//    }
}