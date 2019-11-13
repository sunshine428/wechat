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
    public function add_do(Request $request)
    {
        $data = $request->all();
        $file = $request->file('file');
        if (!$request->hasFile('file')) {
            echo "没有文件被上传";
            exit;
        }
        // $path=$request->file->store('aa');
        $ext = $file->getClientOriginalExtension();//后缀名
        $filename = md5(uniqid()) . "." . $ext;
        $path = $request->file->storeAs('imgs', $filename, 'local');

        $wechat_media_id=Wechat::getMediaTmp($path);

        $res = MediaModel::insert([
            'media_name' => $data['media_name'],
            'media_type' => $data['media_type'],
            'media_format' => $data['media_format'],
            'media_url' => $path,
            'wechat_media_id' => $wechat_media_id
        ]);
        if ($res) {
            return view("hadmin.media.mediaIndex");
        }

    }

    public function index(Request $request){
        $req=$request->all();
        !isset($req['type'])? $type=1 : $type = $req['type'];
        $info=MediaModel::where(['type'=>$type])->paginate(10);
        return view("hadmin.media.mediaIndex",['info'=>$info]);
    }

}
