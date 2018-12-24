<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Relationship;
use App\Models\Contacts;

class FriendController extends Controller
{
    public function friendInfo(){
        return view("friend.friendInfo");
    }
    public function friends(){
        return view("friend.friends");
    }
    public function addFriends(){
        return view("friend.addfriend");
    }
    // ajax查询用户
    public function ajaxFriend(Request $req){
        
        // 查询手机号和微聊号是否有相同的
        $user = User::select('id','username','account_number','face','address','autograph','sex')->where("account_number",$req->account)->orwhere("iphone",$req->account)->first();
        
        if($user){
            if($req->account == session('account_number') || $req->account == session('iphone')){
                $user->relationship  = "friend";
            }else{
                $user->relationship  = "stranger";
            }
            return $user;
        }
        return $user;
        
    }
    // ajax添加用户
    public function ajaxAddFriend(Request $req){
        // 查询用户和请求对方的状态
        $data = Relationship::select("state")->where("user_id",$req->user_id)->where("request_id",$req->request_id)->first();
        // 判断是否已经发送过请求 或者 被拒绝过
        if(!$data || $data->state==2){
            $state = Relationship::create([
                'user_id'=>$req->user_id,
                'request_id'=>$req->request_id
            ]);
            return $state;
        }

    }

    // 好友请求
    public function newFriend(){
        // 获取当前用户的好友请求
        $data = Relationship::newFriend();

        return view("friend.newFriend",[
            'data'=>$data
        ]);
    }
    
    // 同意好友
    public function ajaxAgreeFriend(Request $req){
        // 添加成功
        // 更改数据库好友请求状态 user_id 发送人ID  request_id 接受人ID
        $state = Relationship::where('user_id', $req->user_id)
        ->where('request_id', $req->request_id)
        ->update(['state' => 1]);
        // 查询 自己是否给对方发过消息 
        $user = Relationship::where('user_id', $req->request_id)
        ->where('request_id', $req->user_id)
        ->first();
        // 如果有 则将消息状态改为通过
        if($user){
            Relationship::where('user_id',$req->request_id)->where('request_id',$req->user_id)->update(['state' => 1]); 
        }

        // 查询好友表是否已经有了关系
        $contacts = Contacts::where("user_id",$req->user_id)->where("friend_id",$req->request_id)->first();
        
        if(!$contacts){
            // 如果没有任何数据 直接添加数据
            Contacts::create([
                'user_id' => $req->user_id,
                'friend_id' => $req->request_id,
                'state'=>1
            ]);
            
        }else{
            
            if($contacts->state !=3 && $contacts->state==0){
                // 更新Contacts表 state状态改为好友(1)
                Contacts::where('user_id',$contacts->user_id)->where('friend_id',$contacts->friend_id)->update(['state' => 1]);
            }
        }
        
        // 查询好友表是否已经有了关系
        $contacts2 = Contacts::where("friend_id",$req->user_id)->where("user_id",$req->request_id)->first();
        if(!$contacts2){
            // 如果没有任何数据 直接添加数据
            Contacts::create([
                'user_id' => $req->request_id,
                'friend_id' => $req->user_id,
                'state'=>1
            ]);
            
        }else{
            if($contacts2->state!=3&&$contacts2->state==0){
                // 更新Contacts表 state状态改为好友(1)
                Contacts::where('user_id',$contacts2->user_id)->where('friend_id',$contacts2->friend_id)->update(['state' => 1]);
            }
        }
        return $state;
    }
   
}