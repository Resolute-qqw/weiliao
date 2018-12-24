<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'relationships';
    public $timestamps = false;
    protected $fillable = ['user_id','request_id'];

    public static function newFriend(){
        // 连接user表 查询当前用户 被发送的请求 
        $data = DB::table('relationships as r')
        ->select('u.username','u.account_number','u.face','r.user_id','r.remarks','r.state','r.send_time')
        ->join('users as u','r.user_id','u.id')
        ->where("r.request_id",session('user_id'))
        ->get();
        return $data;
    }   
}
