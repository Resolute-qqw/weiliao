<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    public function chat(Request $req){
        // 获取自己和对方的信息
        
        $user = User::select('id','username','face')->where("id",$req->friend_id)->first();
        $me = User::select('id','username','face')->where("id",session('user_id'))->first();

        return view("chat.chat",[
            'user'=>$user,
            'me'=>$me
        ]);
    }
    public function chats(){
        return view("chat.chats");
    }
}
