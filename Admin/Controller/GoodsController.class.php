<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/20
 * Time: 11:34
 */
namespace Admin\Controller;
use Model\GoodsModel;
use Think\Controller;

class GoodsController extends Controller{
    //商品首页
    public function index(){
        $sql_goods = new \Model\GoodsModel();
        $result = $sql_goods->select();
//        var_dump($result);
        //默认给图片加上前缀

        $this->assign('results', $result);
        $this->display();
    }

    public function add(){
        $goods = D('Goods');
        if(!empty($_POST)){
            //判断附件是否有上传,如果有则实例化Upload ,把附件上传到服务器指定位置,然后把附件的路径名获取,存入$_POST
            if(!empty($_FILES)){
                // 附件被上传到路径:根目录／保存路径／创建日期目录
                $config = array(
                    'rootPath'          =>      './public/',        //根目录
                    'savePath'          =>      'upload/'                   // 保存路径
                );

               // print_r($_FILES);
                //准备上传图片
                $upload = new \Think\Upload($config);
                $z =    $upload -> uploadOne($_FILES['goods_img']);
                if($z){
                    echo 'successful';
                    //上传成功后返回附件的路径 : 根目录/
                    $big_img = $z['savepath'].$z['savename'];
                    $_POST['goods_img'] = $big_img;
                    //把已经上传好的图片制作成缩略图
                    $image = new \Think\Image();
                    // open 打开图像资源
                    $src_img = $upload->rootPath.$big_img;  //拼接图像资源
                    $image->open($src_img);
                    //制作缩略图
                    $image->thumb(60,60);  // 图片会按照比例自动缩小
                    //保存图片
                    $small_img =$z['savepath'].'small_'.$z['savename'];
                    $image->save($upload->rootPath.$small_img); // 要保存到指定的目录
                    // 把缩略图的名称传入数据库
                    $_POST['goods_small_img'] = $small_img;
                }else{
                    echo 'fail';
                    // 显示上传附件的错误信息
                    var_dump($upload->getError());
                }

            }
            $goods->create();
            $z = $goods->add();
            if($z){
                echo 'upload successful';
            }

        }else{
            $this->display();
        }
    }
    // 图片处理
    public function upd_img(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     UPLOAD_AURL; // 设置附件上传目录// 上传文件
        $upload ->autoSub  = true;
        $upload ->subName  = array('date','Ymd');
        //设置上传文件规则
        $upload->saveRule           = 'uniqid';
        $info   =   $upload->uploadOne($_FILES['photo']);
        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        }else {
            // 上传成功 获取上传文件信息
            $img = $info['savepath'] . $info['savename'];
            $image = new \Think\Image();
            $BinImg = $upload->rootPath . "$img"; // 获得原图绝对路径
            $image->open($BinImg); // 打开原图
            // 添加水印
            $image ->water($upload->rootPath."logo.jpg")-> save($upload ->rootPath.$img);
            // 生成一张
            // $image ->thumb(278,206,2);  // 设置宽高和缩略类型

            // 设置缩略图宽、高、前缀
            $thumb = array(
                1 => array('w' => 278, 'h' => 206, 'n' => '278x206_'),
                2 => array('w' => 178, 'h' => 106, 'n' => '178x106_')
            );
            foreach ($thumb as $k => $v){
                $image->thumb($v['w'],$v['h'], 2);  // 设置宽高和缩略类型
                // 保存缩略图片
                $smallimg[$k]= $info['savepath'] . "$v[n]" . $info['savename'];

                $image->save($upload->rootPath . $smallimg[$k]);
                $_POST['small'.$k] = $smallimg[$k];
            }
            $_POST['goods_img'] = $img;

        }
        var_dump($_POST);exit;

    }

}