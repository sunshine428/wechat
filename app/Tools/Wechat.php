<?php
namespace App\Tools;

class Wechat
{
    /**
     * 回复文本消息
     * @param $msg
     * @param $arr_obj
     */
    public static function responseType($msg, $arr_obj)
    {
        $Type = "<xml>
                  <ToUserName><![CDATA[" . $arr_obj->FromUserName . "]]></ToUserName>
                  <FromUserName><![CDATA[" . $arr_obj->ToUserName . "]]></FromUserName>
                  <CreateTime>" . time() . "</CreateTime>
                  <MsgType><![CDATA[text]]></MsgType>
                  <Content><![CDATA[" . $msg . "]]></Content>
                </xml>";
        return $Type;
    }
}