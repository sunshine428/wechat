<?php

namespace App\Http\Controllers\wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tools\Wechat;
use App\Hmodels\MediaModel;

class WeekController extends Controller
{
    public function week_one(){
        //echo $_GET['echostr'];exit;
        $info=file_get_contents("php://input");

        file_put_contents("week.txt",$info);

        $arr_obj=simplexml_load_string($info,'SimpleXMLElement',LIBXML_NOCDATA);
        /** 关注回复 */
        if($arr_obj->MsgType=='event' && $arr_obj->Event=='subscribe'){
            $openid=$arr_obj->FromUserName;
            $data=Wechat::get_wechat_user($openid);
            $nickname=$data['nickname'];
            if($data['sex'] == 1){
                $sex="帅哥";
            }else{
                $sex="美女";
            }
            $msg="欢迎".$nickname.$sex."关注公众号";
            echo "<xml>
              <ToUserName><![CDATA[".$arr_obj->FromUserName."]]></ToUserName>
              <FromUserName><![CDATA[".$arr_obj->ToUserName."]]></FromUserName>
              <CreateTime>".time()."</CreateTime>
              <MsgType><![CDATA[text]]></MsgType>
              <Content><![CDATA[".$msg."]]></Content>
            </xml>";
        }
        /** 普通消息 */
        if($arr_obj->MsgType='text'){
            if($arr_obj->Content==1){
                $msg='您好';
                echo Wechat::responseType($msg,$arr_obj);
            }else if(mb_strpos($arr_obj->Content,'建议+') !==false){
                $str=ltrim($arr_obj->Content,"建议+");
                //$res=\DB::table('suggest')->insert(['msg'=>$str]);
                $res=SuggestModel::insert(['msg'=>$str]);
                echo Wechat::responseType("已收到",$arr_obj);
            }
        }
        /** 斗图 */
        if($arr_obj->MsgType=='image'){
//               $access_token=Wechat::get_access_token();
//               $url="https://api.weixin.qq.com/cgi-bin/media/upload?access_token={$access_token}&type=image";
//               $img="/data/wwwroot/default/wechat/1565951548832700.jpg";
//               $data['media']=new \CURLFile($img);
//               $re=Wechat::curlpost($url,$data);
//               $msg="RBVoNIQYwNvyHeAcc_pWq9sGzrKAV_WpJp8XLu2MHmcaRoC4qyLTC-iyCm98H68i";
            $mediaData= MediaModel::inRandomOrder()->first();
             $media_id=$mediaData['media_id'];
            echo "<xml>
                  <ToUserName><![CDATA[".$arr_obj->FromUserName."]]></ToUserName>
                  <FromUserName><![CDATA[".$arr_obj->ToUserName."]]></FromUserName>
                  <CreateTime>".time()."</CreateTime>
                  <MsgType><![CDATA[image]]></MsgType>
                  <Image>
                    <MediaId><![".$media_id."]]></MediaId>
                  </Image>
                </xml>";
        }
    }
}
