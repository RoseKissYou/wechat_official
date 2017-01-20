<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/19
 * Time: 16:44
 */


/*水印图片  ( 底图名字/路径, 水印图片名字/路径, 生成图片名字
 * @author xiongan
 * */
function water_image($back_img,$water_img,$head_name){
    //1 获取底图和水印图片
    $bg_img =  imagecreatefromstring(file_get_contents($back_img));
    $we_img = imagecreatefromstring(file_get_contents($water_img));
    //2 获取底图和水印图片高度
    list($bg_img_w,$bg_img_h) = getimagesize($back_img);
    list($we_img_w,$we_img_h) = getimagesize($water_img);
    //3 合并图片   $water_bool = imagecopymerge($bg_img,$we_img,$bg_img_w - $we_img_w - 92,$bg_img_h - $we_img_h - 32, 0,0,$we_img_w,$we_img_h,60);
    $water_bool = imagecopymerge($bg_img,$we_img,$bg_img_w - $we_img_w - 110,$bg_img_h - $we_img_h - 52, 0,0,165,165,90);
    list($bg_img_w,$bg_img_h,$bg_img_type) = getimagesize($back_img);
    switch($bg_img_type){
        case 1://GIF
            imagegif($bg_img, './Home/imgs/'.$head_name.'.gif');     //生成图片
            header('Content-Type: image/gif');                  //显示图片到页面
            imagegif($bg_img);
            break;
        case 2://JPG
            imagejpeg($bg_img, './Home/imgs/'.$head_name.'.jpg');  //生成图片
            header('Content-Type: image/jpeg');
            imagejpeg($bg_img);
            break;
        case 3://PNG
            imagepng($bg_img, './Home/imgs/'.$head_name.'.png');  //生成图片
            header('Content-Type: image/png');
            imagepng($bg_img);
            break;
        default:
            break;

    }
    //销毁图片
    imagedestroy($bg_img);
    imagedestroy($we_img);

    return $water_bool;
}

$orignal_img = './Home/imgs/contellation.jpg';
// 1 水印文字模板  传入星座编号

$water_code = water_image($orignal_img,'./Home/imgs/code.jpg','user_name3');