<?php

namespace App\Http\Controllers\wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function event(){
        echo $_GET['echostr'];exit;
        //接受从微信服务器post过来的xml数据
        $info =file_get_contents("php://input");

        //处理xml数据 讲xml格式数据转换xml格式的对象
        $arr_obj=simplexml_load_string($info,"SimpleXMLElement",LIBXML_NOCDATA);
        $fromusername=$arr_obj->FromUserName;
        $tousername=$arr_obj->ToUserName;
        $time=time();
        //判断是推送事件 不是消息
        if($arr_obj->MsgType == 'event'){
            //判断试关注事件  不是其他事件
            if($arr_obj->Event=='subscribe'){
                $msgtype='text';
                $content="欢饮关注我的公众号";
                $textType= "<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><![CDATA[%s]]><CreateTime></CreateTime><MsgType><![CDATA[%s]]></MsgType><Content><![CDATA[%s]]></Content></xml>";
            //php格式化字符串
                $str=sprintf($textType,$fromusername,$tousername,$time,$msgtype,$content);
                echo $str;
            }
        }

    }
}
