<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contacts extends Model
{
    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = ['user_id','friend_id','remarks','label'];
    public static function friends(){
        // 连接user表 查询当前用户 被发送的请求 
        $data = DB::table('contacts as c')
        ->join('users as u','c.friend_id','u.id')
        ->select('c.friend_id','u.username','u.face')
        ->where('c.user_id',session('user_id'))
        ->get();
        // 单独取出每一个用户名放入数组
        $names = [];
        foreach($data as $v){
            $names[] = $v->username."_".$v->friend_id;
        }

        return [
            'users'=>$data,
            'names'=>$names
        ];
    }
}
