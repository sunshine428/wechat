<?php

namespace App\Http\Controllers\Hadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChannelController extends Controller
{
    public function channel(){
        return view('hadmin.channel.channel');
    }
    public function channel_do(Request $request){

    }
}
