<?php
namespace App\Tools;

class Wechat
{
    /**
     * 回复文本消息
     * @param $msg
     * @param $arr_obj
     */
    const appId='wx11872538a7dc69ad';
    const appSecret ='652c55528c551a597b6d2d764b8df1c8';
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
    public static function get_access_token(){
        $access_token=\Cache::get('access_token');;
        if(empty($access_token)){
            $url=file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.Self::appId.'&secret='.Self::appSecret);
            $data=json_decode($url,1);
            $access_token=$data['access_token'];
            \Cache::put('access_token',$access_token,7200);
        }
        return $access_token;
    }
    /**
     * 获取用户基本信息
     */
    public static function get_wechat_user($openid){
        $data=self::get_access_token();
        $url='https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$data.'&openid='.$openid.'&lang=zh_CN';
        $re=file_get_contents($url);
        dd($re);
    }
}