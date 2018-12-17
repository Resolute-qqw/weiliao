<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Validator;
use Hash;

class ActionController extends Controller
{
    // 登录
    public function login(){
        return view("action.login");
    }
    public function dologin(Request $req){
        // 判断用户名 或者 手机号 是否存在
        $user = User::select('id','password','username','iphone','account_number','face')
        ->where("account_number",$req->username)
        ->orwhere("iphone",$req->username)
        ->first();
        
        if($user){
            // Hash验证表单提交的密码是否与数据库一致
            if(Hash::check($req->password,$user->password)){
                session([
                    'user_id'=>$user->id,
                    'username'=>$user->username,
                    'face'=>$user->face,
                    'account_number'=>$user->account_number,
                    'iphone'=>$user->iphone
                ]);
                return redirect()->route('index')->with("tips","登录成功");
            }else{
                return redirect()->route('login')->with("tips","密码错误");
            }
        }else{
            return redirect()->route('login')->with("tips","账号不存在");
        }
    }
    // 注册
    public function register(){
        return view("action.register");
    }
    // 提交注册表单
    public function doregister(RegisterRequest $req){
        // 默认头像集合
        $face = [
            '00e93901213fb80e80c429b330d12f2eb93894b9.jpg',
            '5fdf8db1cb134954170fa100504e9258d1094a44.jpg',
            '8f322bf6905298220153d8b7daca7bcb0a46d471.jpg',
            '9e3df8dcd100baa18f950edf4110b912c8fc2e1c.jpg',
            '37d3d539b6003af3e0079504332ac65c1038b611.jpg',
            '42c5911d8701a18bce8bf33b932f07082838fe71.jpg',
            'a044ad345982b2b73d8370a037adcbef76099bb2.jpg',
            'c9fcc3cec3fdfc03d8ccaadcd23f8794a4c22619.jpg',
            'd8f9d72a6059252d04825360329b033b5bb5b939.jpg',
            'eac4b74543a98226b11f65438c82b9014b90ebfc.jpg'
        ];
        $number = rand(0,9);
        
        // RegisterRequest验证后
         // 添加到数据库
        $user = User::create([
            'username'=>$req->username,
            'password'=>bcrypt($req->password),
            'iphone'=>$req->iphone,
            'face'=>"/images/face/".$face[$number]
        ]);
        // 生成md5加密名后 修改微聊名
        $account = substr( md5(time().$user->id) , 8, 16);
        User::where('id',$user->id)->update(['account_number' => "wl_".$account]);

        return redirect()->route('login')->with("tips","注册成功");
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect()->route('login')->with("tips","退出成功");
    }

}
