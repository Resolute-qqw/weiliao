<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class IndexController extends Controller
{
    public function index(){
        // 获取当前用户的好友请求
        $data = Contacts::friends();
        // 将用户数据转成数组
        $users = $data['users']->toArray();
        $userdata = [];
        // 用户id为键 数据为值 保存在userdata 数组中传入页面
        foreach($users as $v){
            $userdata[$v->friend_id]=$v;
        }
        
        return view("index.index",[
            'data'=>json_encode($userdata) ,
            'names'=>json_encode($data['names'])
        ]);
    }
}
