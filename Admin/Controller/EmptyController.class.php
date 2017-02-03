<?php
/**
 * Created by PhpStorm.
 * 空控制器,用于解决空控制器问题
 * User: Administrator
 * Date: 2017/1/14
 * Time: 8:54
 */
namespace Admin\Controller;
use Think\Controller;

class EmptyController extends Controller {

    public function _empty(){
        //当访问不存在的方法的时候会默认调用该方法,  IMAGES_URL
//        echo '<img style="width: 100%;height: 100%" src="'.IMAGES_URL.'404.jpg">';
        $img_path = IMGS_URL.'404.jpg';

        echo '<img style="width: 100%;height: 100%" src="'.IMGS_URL.'404.jpg">';
//        echo "";
    }
}