<?php

namespace App\Http\Controllers\Hadmin;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Hmodels\MediaModel;
use App\Tools\Wechat;

class MediaController extends Controller
{
    public function media(){
        return view('hadmin.media.media');
    }
    public function add_do(Request $request){
        $data=$request->all();
        $file = $request->file('file');
        if(!$request->hasFile('file')){
            echo "没有文件被上传";exit;
        }
       // $path=$request->file->store('aa');
        $ext=$file->getClientOriginalExtension();//后缀名
        $filename=md5(uniqid()).".".$ext;
        $path = $request->file->storeAs('imgs', $filename,'local');
        $access_token=Wechat::get_access_token();
        $url="https://api.weixin.qq.com/cgi-bin/media/upload?access_token={$access_token}&type=image";
        $data['media']=new \CURLFile($path);
        $re=Wechat::curlpost($url,$data);
        $re=json_decode($re,1);
        $wechat_media_id=$re['media_id'];
        $res=MediaModel::insert([
            'media_name'=>$data['media_name'],
            'media_type'=>$data['media_type'],
            'media_format'=>$data['media_format'],
            'media_url'=>$path,
            'wechat_media_id'=>$wechat_media_id
        ]);
            dd($res);

    }


}
