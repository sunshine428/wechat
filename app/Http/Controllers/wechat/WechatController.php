<?php

namespace App\Http\Controllers\wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tools\Wechat;

class WechatController extends Controller
{
    public function event(){
//        echo $_GET['echostr'];exit;
        //接受从微信服务器post过来的xml数据
        $info =file_get_contents("php://input");
//        file_put_contents("1.txt",$info);
        file_put_contents(storage_path('logs/wechat/'.date(  "Y-m-d").'.log'),"<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n",FILE_APPEND);
        file_put_contents(storage_path('logs/wechat/'.date("Y-m-d").'.log'),"$info\n",FILE_APPEND);
        //处理xml数据 讲xml格式数据转换xml格式的对象
        $arr_obj=simplexml_load_string($info,"SimpleXMLElement",LIBXML_NOCDATA);
        /** @var  $fromusername
        $fromusername=$arr_obj->FromUserName;
        $tousername=$arr_obj->ToUserName;
        $time=time();
         */
        //判断是推送事件 不是消息
        if($arr_obj->MsgType == 'event' && $arr_obj->Event=='subscribe'){
            $content="欢迎关注我的公众号";
            echo "<xml>
                      <ToUserName><![CDATA[".$arr_obj->FromUserName."]]></ToUserName>
                      <FromUserName><![CDATA[".$arr_obj->ToUserName."]]></FromUserName>
                      <CreateTime>".time()."</CreateTime>
                      <MsgType><![CDATA[text]]></MsgType>
                      <Content><![CDATA[".$content."]]></Content>
                    </xml>";exit;
        }
        if($arr_obj->MsgType=='text'){
            if($arr_obj->Content==1){
                $msg="李昊荣,王云霄，王兆兰";
                echo Wechat::responseType($msg,$arr_obj);
            }
        }
    }


}
