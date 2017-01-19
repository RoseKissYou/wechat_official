<?php
namespace Home\Controller;
use Model\ArticlesModel;
use Model\IndexModel;
use Think\Controller;
class IndexController extends Controller {
    //进行微信测试,跳过验证
    public function index(){
//        $this->display();
        self::responseMsg();
    }


    public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }
    public function responseMsg_demo()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr)){

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $type = $postObj->MsgType;
            $event=$postObj->Event;
            $EventKey=$postObj->EventKey;

            $latitude  = $postObj->Location_X;
            $longitude = $postObj->Location_Y;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[text]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
            if ($event=="CLICK" and $EventKey=="V1001_BRAND")
            {
                $contentStr="自定义菜单教程";

            }
            elseif ($event=="CLICK" and $EventKey=="V1001_SUPPLY")
            {
                $contentStr="谢谢你的赞扬";
            }
            elseif ($event=="CLICK" and $EventKey=="V1001_CHECK")
            {
                $contentStr="你好我也好";
            } elseif ($event=="CLICK" and $EventKey=="V1001_ANTI_FAKE")
            {
                $contentStr="谢谢你的赞扬";
            }
            elseif ($event=="CLICK" and $EventKey=="V1001_PROMOTE")
            {
                $contentStr="你好我也好";
            }
            $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr);
            echo $resultStr;



        }

    }

    //消息回复
    public function responseMsg()
    {

        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr)) {

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $input_type = $postObj->MsgType;   // 分类获取不同的输入信息
            $loc_x = $postObj->Location_X;
            $loc_y = $postObj->Location_Y;
            // 自定义菜单
            //  $ev = $postObj->Event;
            $event = $postObj->Event;
            $EventKey = $postObj->EventKey;

            $time = time();
            $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";

                if ($event=="CLICK" and $EventKey=="V1001_HELLO")
                {
                    $contentStr="感谢访问百姓堂公众号,很高兴见到您";

                }
                elseif ($event=="CLICK" and $EventKey=="V1003_CONNECT")
                {
                    $contentStr="留下您的宝贵意见,还您一份满意";
                }
                elseif ($event=="CLICK" and $EventKey=="V1001_CHECK")
                {
                    $contentStr="你好我也好";
                } elseif ($event=="CLICK" and $EventKey=="V1001_ANTI_FAKE")
                {
                    $contentStr="谢谢你的赞扬";
                }
                elseif ($event=="CLICK" and $EventKey=="V1001_PROMOTE")
                {
                    $contentStr="你好我也好";
                }
                if(!empty($contentStr)){
                    $msgType = 'text';
                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                    echo $resultStr;
                }


            // 1 获取关注后的动作

            if ($event == "subscribe")
            {
                $msgType = "text";
                $contentStr = "感谢你的关注百姓堂公众号,只为给您更好更健康的身体而存在!";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
            // 2 分类解析不同类型的输入信息
            // 2.1 文本消息

            if($input_type == "image") {
                $msgType = "text";
                $rand_num = rand(1,100);
                //根据数字去数据库查询对应的内容

                $contentStr = "掐指一算,你今天缺我";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;

            }

            //1  发送定位返回附件的酒店
            if($input_type=="location")
            {
                $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							 <MsgType><![CDATA[news]]></MsgType>
							 <ArticleCount>4</ArticleCount>
							 <Articles>
							 <item>
							 <Title><![CDATA[你周边附近的酒店如下]]></Title>
							 <Description><![CDATA[s]]></Description>
							 <PicUrl><![CDATA[http://www.youzuole.com.cn/bxt_logo.png]]></PicUrl>
							 <Url><![CDATA[http://map.baidu.com/]]></Url>
							 </item>
							 <item>
							 <Title><![CDATA[%s]]></Title>
							 <Description><![CDATA[s]]></Description>
							 <PicUrl><![CDATA[url]]></PicUrl>
							 <Url><![CDATA[http://map.baidu.com/]]></Url>
							 </item>
							 <item>
							 <Title><![CDATA[%s]]></Title>
							 <Description><![CDATA[s]]></Description>
							 <PicUrl><![CDATA[url]]></PicUrl>
							 <Url><![CDATA[http://map.baidu.com/]]></Url>
							 </item>
							 <item>
							 <Title><![CDATA[%s]]></Title>
							 <Description><![CDATA[s]]></Description>
							 <PicUrl><![CDATA[url]]></PicUrl>
							 <Url><![CDATA[http://map.baidu.com/]]></Url>
							 </item>
							 </Articles>
							 <FuncFlag>1</FuncFlag>
							</xml>";
                $url="http://api.map.baidu.com/telematics/v2/local?location={$loc_y},{$loc_x}&keyWord=酒店&number=3&ak=1a3cde429f38434f1811a75e1a90310c";
                $fa=file_get_contents($url);
                $f=simplexml_load_string($fa);
                $d1=$f->poiList->point[0]->name;
                $d2=$f->poiList->point[1]->name;
                $d3=$f->poiList->point[2]->name;
                $w1=$f->poiList->point[0]->address;
                $w2=$f->poiList->point[1]->address;
                $w3=$f->poiList->point[2]->address;
                $p1=$f->poiList->point[0]->telephone;
                $p2=$f->poiList->point[1]->telephone;
                $p3=$f->poiList->point[2]->telephone;
                $q1=$f->poiList->point[0]->distance;
                $q2=$f->poiList->point[1]->distance;
                $q3=$f->poiList->point[2]->distance;
                $m1="{$d1}地址{$w1}电话{$p1}距离{$q1}米";
                $m2="{$d2}地址{$w2}电话{$p2}距离{$q2}米";
                $m3="{$d3}地址{$w3}电话{$p3}距离{$q3}米";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time,$m1,$m2,$m3);
                echo $resultStr;
            }


            if(!empty( $keyword ))
            {
                $msgType = "text";

                switch ($keyword)
                {
                    case '测试数据库连接':
                        //测试调用数据库 显示数据
                        $sql_articles = new \Model\ArticlesModel();
                        $articles = $sql_articles->select();
                        $contentStr = '';
                        foreach($articles as $article){

                            $contentStr .=  $article['title'].'   ';
                        }
                        //编写插入数据, 这里调用
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;

                        break;
                    case '显示用户':
                        $sql_user = new \Model\UserModel();
                        $users = $sql_user->select();
                        $contentStr = '';
                        foreach($users as $user){

                            $contentStr .=  '用户名:'.$user['user_name'].'创建时间: '.date('Y-m-d H:i:s',$user['create_time']);
                        }
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;
                    case '插入用户':
                        $contentStr = '';
                        $sql_user = new \Model\UserModel();
                        //插入用户
                        $data = array(
                            'user_name'     =>$fromUsername,
                            'create_time'   =>time()
                        );
                        //检查用户名是否存在  "  user_name =  $data['user_name'] "
                        $check_user_name = $sql_user->where(" user_name = '%s'",array($data['user_name']))->select();

                        if(empty($check_user_name)){
                            $contentStr = '用户名不存在,可以创建';
                            $insert_user = $sql_user->data($data)->add();
                            if($insert_user){
                                $contentStr .= '--创建成功--';
                            }else{
                                $contentStr = '创建失败';
                            }
                        }else{
                            $contentStr = '用户名已经存在';
                        }

                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;

                        break;

                    case '1';
                        $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[music]]></MsgType>
							 <Music>
							 <Title><![CDATA[年轮]]></Title>
							 <Description><![CDATA[张碧晨-年轮]]></Description>
							 <MusicUrl><![CDATA[http://weixing.lazhuwang.com.cn/Public/music/张碧晨-年轮.mp3]]></MusicUrl>
							 <HQMusicUrl><![CDATA[http://weixing.lazhuwang.com.cn/Public/music/张碧晨-年轮.mp3]]></HQMusicUrl>
							 </Music>
							<FuncFlag>0</FuncFlag>
							</xml>";
                        // $contentStr = "请搜索小程序 百姓堂 允许获取定位来使用该功能";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time);
                        echo $resultStr;
                        break;
                    case '2':
                        $contentStr = "您有什么健康问题呢?请发送关键词,或者关注公众号: hello kitty 获取更多相关健康问题";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;
                    case '3':
                        $contentStr = "请发送定位信息给我";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;
                    case '5':
                        $contentStr = "发送你的靓照给我,立刻给你算算鸿运,道破吉凶";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;

                    case "6";
                        $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[news]]></MsgType>
							 <ArticleCount>1</ArticleCount>
							 <Articles>
							 <item>
							 <Title><![CDATA[易企秀]]></Title>
							 <Description><![CDATA[合作和进度]]></Description>
							 <PicUrl><![CDATA[http://weixing.lazhuwang.com.cn/Public/imgs/2017yiqixiu.png]]></PicUrl>
							 <Url><![CDATA[http://x.eqxiu.com/s/WnecAXQ0]]></Url>
							 </item>
							 						 </Articles>
							 <FuncFlag>1</FuncFlag>
							</xml>";

                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time);
                        echo $resultStr;
                        break;
                    case '7':
                        $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[news]]></MsgType>
							 <ArticleCount>1</ArticleCount>
							 <Articles>
							 <item>
							 <Title><![CDATA[新年贺卡]]></Title>
							 <Description><![CDATA[新年新气象]]></Description>
							 <PicUrl><![CDATA[http://weixing.lazhuwang.com.cn/Public/imgs/new_year.png]]></PicUrl>
							 <Url><![CDATA[http://weixin.wertp.cn/Admin/Index/heka]]></Url>
							 </item>
                        </Articles>
							 <FuncFlag>1</FuncFlag>
							</xml>";

                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time);
                        echo $resultStr;
                        break;
                    case '8':
                        $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[text]]></MsgType>
							 <Content>&lt;a href=&quot;http://m.lengxiaohua.com/&quot;&gt;爱讲冷笑话&lt;/a&gt;\n\n\n&lt;a href=&quot;http://map.baidu.com/mobile/webapp/index/index&quot;&gt;百度地图&lt;/a&gt;\n\n\n&lt;a href=&quot;http://h.lexun.com/game/DouDiZhu/play.aspx&quot;&gt;斗地主&lt;/a&gt;\n\n\n&lt;a href=&quot;http://m.xinli001.com/info&quot;&gt;心理杂志&lt;/a&gt;\n\n\n&lt;a href=&quot;http://m.meishij.net/tizhi/&quot;&gt;中医体质测试&lt;/a&gt;\n\n\n&lt;a href=&quot;http://m.qidian.com/&quot;&gt;起点读书&lt;/a&gt;</Content>
							 <FuncFlag>0</FuncFlag>
							</xml>";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time);//                                                                                                                                                                                                                                                                    http://m.xinli001.com/info   心理杂志   http://m.meishij.net/tizhi/   中医体质测试
                        echo $resultStr;
                        break;
                    case '9':
                        $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[news]]></MsgType>
							 <ArticleCount>1</ArticleCount>
							 <Articles>
							 <item>
							 <Title><![CDATA[AeballRock]]></Title>
							 <Description><![CDATA[关注发送'城市名天气'查询天气情况]]></Description>
							 <PicUrl><![CDATA[http://weixing.lazhuwang.com.cn/Public/imgs/aeball.jpg]]></PicUrl>
							 <Url><![CDATA[http://weixing.lazhuwang.com.cn/Public/imgs/aeball.jpg]]></Url>
							 </item>
                        </Articles>
							 <FuncFlag>1</FuncFlag>
							</xml>";

                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time);
                        echo $resultStr;
                        break;
                    case 'a':
                        $contentStr = "发送你的靓照给我,立刻给你算算鸿运,道破吉凶";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;
                    case '测试信息':
                        $contentStr = "发送人:$fromUsername 接收人:$toUsername 发送时间:$time";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;

                    default:
                        $contentStr = <<< MESG
欢迎访问百年臻阳方,本公众号由广东泓然堂医药有限公司提供,为您的健康提供全方位保障,点击关注有惊喜.
1  歌曲 张碧晨-年轮
2  咨询健康问题
3  发送定位寻找附件的酒店 指导您来到本店
5  发送相片给我,半仙帮你看相
6  易企秀
7  贺卡制作
8  web应用
9  天气查询

MESG;
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                        echo $resultStr;
                        break;
                }

//                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
//                echo $resultStr;
            }else{
                echo "Input something...";
            }

        }else {
            echo "";
            exit;
        }
    }
    //  微信验证
    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
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