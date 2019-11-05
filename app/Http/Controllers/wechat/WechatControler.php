<?php

namespace App\Http\Controllers\wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WechatControler extends Controller
{
    public function event(){
        //接受从微信服务器post过来的xml数据
        $info =file_get_contents("php://input");
        dd($info);
        //处理xml数据 讲xml格式数据转换xml格式的对象
        $arr_obj=simplexml_load_string($info,"SimpleXMLElement",LIBXML_NOCDATA);
        $fromusername=$info->FromUserName;
        $tousername=$info->ToUserName;
        $time=time();
        //判断是推送事件 不是消息

    }
}
