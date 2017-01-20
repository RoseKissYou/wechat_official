<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function index(){
        echo 'hhhhhhh';
        $answer_connet = new \Model\AnswersModel();
        $result = $answer_connet->select();
        $this->assign('results', $result);
        $this->display();
     //   $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
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
     * 星座宣言
     *
     * */
    public function mouth_words(){
        // 1 获取用户的头像 性别  昵称
//        $user_info = array(
//            'nickname'          =>$_GET['nickname']   ,
//            'sex'                =>$_GET['sex']         ,
//            'headimgurl'        =>$_GET['headimgurl']
//        );
        $user_info = array(
            'nickname'          =>'aeball'   ,
            'sex'                =>2         ,
            'headimgurl'        =>'http://tva2.sinaimg.cn/crop.3.0.634.634.1024/cd516b22jw8fa4mlfynwzj20hs0hm0tr.jpg'
        );
        $this->assign('user_info', $user_info);

        $this->display();
    }
    /*水印图片  ( 底图名字/路径, 水印图片名字/路径, 生成图片名字
 * @author xiongan
 * */
   public function water_image($back_img,$water_img,$head_name){
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
                imagegif($bg_img,IMGS_URL.$head_name.'.gif');     //生成图片
                header('Content-Type: image/gif');                  //显示图片到页面
                imagegif($bg_img);
                break;
            case 2://JPG
                imagejpeg($bg_img, IMGS_URL.$head_name.'.jpg');  //生成图片
                header('Content-Type: image/jpeg');
                imagejpeg($bg_img);
                break;
            case 3://PNG
                imagepng($bg_img, IMGS_URL.$head_name.'.png');  //生成图片
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
    public function mouth_shows(){
        $back_img = IMGS_URL.'contellation.jpg';   $water_img = IMGS_URL.'code.jpg'; $head_name= $_POST['nickname'].time();
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
                imagegif($bg_img,IMGS_URL.$head_name.'.gif');     //生成图片
                header('Content-Type: image/gif');                  //显示图片到页面
                imagegif($bg_img);
                break;
            case 2://JPG
                imagejpeg($bg_img, IMGS_URL.$head_name.'.jpg');  //生成图片
                header('Content-Type: image/jpeg');
                imagejpeg($bg_img);
                break;
            case 3://PNG
                imagepng($bg_img, IMGS_URL.$head_name.'.png');  //生成图片
                header('Content-Type: image/png');
                imagepng($bg_img);
                break;
            default:
                break;

        }
        //销毁图片
        imagedestroy($bg_img);
        imagedestroy($we_img);
        exit;
    }
    /*处理用户输入的信息,返回星座宣言
     *
     * */
    public function mouth_shows_bak(){

        $user_mouth = $_POST['txtBirth'];
        $user_day = $_POST['txtBirthday'];
        $constellation = 0;
            //生成星座宣言
            $mouth_type = '';
            $mouth_words = '';
            //水瓶座，双鱼座,  白羊座，金牛座，双子座，巨蟹座，狮子座，处女座，天秤座，天蝎座，射手座，摩羯座，
            switch($user_mouth){
                case 1: $constellation = ($user_day >= 20) ? 1 : 12; // 水瓶座(>=20) 1.20-2.18
                    break;
                case 2:$constellation = ($user_day >= 19) ? 2 : 1;  //双鱼座 (>=19) 2.19-3.20
                    break;
                case 3:$constellation = ($user_day >=21) ? 3 : 2;  //白羊座 (>=21) 3.21-4.19
                    break;
                case 4:$constellation = ($user_day >=20) ? 4 : 3;  //金牛座 (>=20) 4.20-5.20
                    break;
                case 5:$constellation = ($user_day >=21) ? 5 : 4;  //双子座 (>=21) 5.21-6.21
                    break;
                case 6:$constellation = ($user_day >=22) ? 6 : 5;  //巨蟹座 (>=22) 6.22-7.22
                    break;
                case 7:$constellation = ($user_day >=23) ? 7 : 6;  //狮子座 (>=23) 7.23-8.22
                    break;
                case 8: $constellation = ($user_day >=23) ? 8 : 7;  //处女座 (>=23 8.23-9.22
                    break;
                case 9: $constellation = ($user_day >=23) ? 9 : 8;  //天秤座 (>=23) 9.23-10.23
                    break;
                case 10: $constellation = ($user_day >=24) ? 10: 9;  //天蝎座 (>=24)10.24-11.22
                    break;
                case 11: $constellation = ($user_day >=23) ? 11: 10;  //射手座 (>=23) 11.23-12.21
                    break;
                case 12: $constellation = ($user_day >=22) ? 12: 11;  //摩羯座 (>=22)12.22-1.19
                    break;

                default:
                    echo '星座不存在';
                    break;
            }

        switch($constellation){
            case 1:{
                // 选择显示底图文件
//                $water_code =  self::water_image(IMGS_URL.'contellation.jpg',IMGS_URL.'code.jpg',$_POST['nickname'].time());
                $back_img = IMGS_URL.'contellation.jpg';   $water_img = IMGS_URL.'code.jpg'; $head_name= $_POST['nickname'].time();
                $bg_img =  imagecreatefromstring(file_get_contents($back_img));
                $we_img = imagecreatefromstring(file_get_contents($water_img));
                //2 获取底图和水印图片高度
                list($bg_img_w,$bg_img_h) = getimagesize($back_img);
                list($we_img_w,$we_img_h) = getimagesize($water_img);
                //3 合并图片   $water_bool = imagecopymerge($bg_img,$we_img,$bg_img_w - $we_img_w - 92,$bg_img_h - $we_img_h - 32, 0,0,$we_img_w,$we_img_h,60);
                $water_bool = imagecopymerge($bg_img,$we_img,$bg_img_w - $we_img_w - 110,$bg_img_h - $we_img_h - 52, 0,0,165,165,90);
                list($bg_img_w,$bg_img_h,$bg_img_type) = getimagesize($back_img);
                imagejpeg($bg_img, IMGS_URL.$head_name.'.jpg');  //生成图片
                header('Content-Type: image/jpeg');
                imagejpeg($bg_img);
//销毁图片
                imagedestroy($bg_img);
                imagedestroy($we_img);


//                $mouth_words = '水瓶座的人很聪明，他们最大的特点是创新，追求独一无二的生活，个人主义色彩很浓重的星座。他们对人友善又注重隐私。水瓶座绝对算得上是“友谊之星”，他喜欢结交每一类朋友，但是确很难与他们交心，那需要很长的时间。他们对自己的家人就显得冷淡和疏远很多了。';
//                $mouth_type = '水瓶座';
            }
                break;
            case 2:{
                $mouth_words = '双鱼座是十二宫最后一个星座，他集合了所有星座的优缺点于一身，同时受水象星座的情绪化影响，使他们原来复杂的性格又添加了更复杂的一笔。双鱼座的人最大的优点是有一颗善良的心，他们愿意帮助别人，甚至是牺牲自己。';
                $mouth_type = '双鱼座';
            }
                break;
            case 3:  {
                $mouth_words = '白羊座的人热情冲动、爱冒险、慷慨、天不怕地不怕而且一旦下定决心，不到黄河心不死，排除万难的要达到目的。大部分属于白羊座的人的脾气都很差，不过只是炮仗颈，绝对不会放在心上，的天蝎座便正好是白羊座的相反。';
                $mouth_type = '白羊座';
            }
                break;
            case 4:{
                $mouth_words = '金牛座是很保守的星座，喜欢稳定，不爱变动。在性格上则比较慢热，对工作、生活、环境都需要比较长的适应期。金牛座又往往是财富的向征，他们在投资理财方面常常有很独到的见解。金牛座的男人往往有大男人的倾向，而金牛女生则喜欢打扮自己，谁让金牛的守护神是维纳斯呢？';
                $mouth_type = '金牛座';
            }
                break;
            case 5: {
                $mouth_words = '双子座的人往往喜好新鲜事物，他们有着小聪明，但做事常常不太专一。与双子座的人聊天也许会让你觉得很兴奋，因为他们脑子中那些新鲜的、稀奇古怪的东西会让有充满好奇。也许是对新鲜事物的追求和好奇，会让人觉得他们很花心，其实不然，他们仅仅是喜欢新鲜而已。';
                $mouth_type = '双子座';
            }

                break;
            case 6:{
                $mouth_words = '巨蟹座的人往往充满了爱心，他们将母性的本质发挥到了极限。对他们来说，最重要的东西是家庭。他们往往就像蟹一样，在充满坚硬的外壳下面是柔软的内心。巨蟹座是最执着的星座，他们对朋友、对家人的忠实，做事会一直坚持到底。';
                $mouth_type = '巨蟹座';
            }
                break;
            case 7:{
                $mouth_words = '狮子座的人热情、阳光、大方是他们性格上最大的特色。与他们性格上的优点不同，他们爱面子、自信得有点儿自大，常常会很在乎别人对自己的看法，也常常会因此而使自己不快乐。';
                $mouth_type = '狮子座';
            }
                break;
            case 8: {
                $mouth_words = '处女座追求完美，吹毛求疵是他们的特性。多数的处女座都很谦虚，但也因此给自己造成很大的压力。处女座的人不喜欢闲着，对别人常常乐于服务。缺乏自信的处女座有时候组织能力较差，需要家人与朋友们的鼓励去推动他们。';
                $mouth_type = '处女座';
            }
                break;
            case 9: {
                $mouth_words = '天秤座常常追求和平和谐的感觉，他们善于交谈，沟通能力极强是他们最大的优点。但他们最大的缺点，往往是犹豫不决。天秤座的人容易将自己的想法加诸到别人身上，天秤座的人要小心这点。天秤座女生常常希望他们的伴侣会时刻陪伴着她';
                $mouth_type = '天秤座';
            }
                break;
            case 10: {
                $mouth_words = '天蝎座的人精力旺盛、热情、善妒，占有欲极强。他们想要每天过得非常充实，如果失去了目标，他们很难认真地投入精力。天蝎是记仇的，会不顾一切地打击仇人。他们的一个成功优点，就是他们一旦定了目标，就会不达目的誓不罢休。';
                $mouth_type = '天蝎座';
            }
                break;
            case 11: {
                $mouth_words = '射手座的人就像那只在弦上的箭一样，他们主动出击。为人乐观、诚实、热情、喜欢挑战。射手是十二星座中的冒险家，热爱旅行、喜欢赌博。意志力薄弱是射手座天生的弱点，如果沉迷赌博与游戏，后果不堪设想。';
                $mouth_type = '射手座';
            }
                break;
            case 12: {
                $mouth_words = '摩羯座是十二星座中最有耐心，为事最小心、也是最善良的星座。他们做事脚踏实地，也比较固执，不达目的是不会放手的。他们的忍耐力也是出奇的强大，同时也非常勤奋。他们心中总是背负着很多的责任感，但往往又很没有安全感，不会完全地相信别人';
                $mouth_type = '摩羯座';
            }
                break;

            default:
                echo '星座不存在';
                break;
        }
            $this->assign('mouth_type', $mouth_type);
            $this->assign('mouth_words',$mouth_words);
            $this->assign('mouth_info', $_POST);
            $this->display('');

    }


    public function img_deal(){
        $image = new \Think\Image();
        $image->open('./code.jpg');
//        $image->open(IMGS_URL.'contellation.jpg');

//        $ae_img = new \Think\Image();
//        $img_path = IMGS_URL.'contellation.jpg';
//        var_dump($img_path);exit;
//        $ae_img->open(IMGS_URL.'contellation.jpg');
//
//        $width = $ae_img->width(); // 返回图片的宽度
//        $height = $ae_img->height(); // 返回图片的高度
//        $type = $ae_img->type(); // 返回图片的类型
//        $mime = $ae_img->mime(); // 返回图片的mime类型
//        $size = $ae_img->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
//        var_dump($size);
        $this->display('index');
    }


    public function get_redirect(){
      //  $input_get = filter_input_array(INPUT_GET, FILTER_UNSAFE_RAW);
        echo $_GET['nickname'];
        echo $_GET['sex'];
        echo $_GET['headimgurl'];

        $this->display('index');
    }




//    public function _empty(){
//        //当访问不存在的方法的时候会默认调用该方法,
//        echo '<img style="width: 100%;height: 100%" src="'.IMGS_URL.'404.jpg">';
//        echo "";
//    }
}