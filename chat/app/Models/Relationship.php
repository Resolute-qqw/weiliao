<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'relationships';
    public $timestamps = false;
    protected $fillable = ['user_id','request_id'];

    public function newFriend(){
        // 连接user表 查询当前用户 被发送的请求 
        $data = DB::table('relationships as r')
        ->select('username','account_number','face','user_id','remarks','state','send_time')
        ->where("request_id",session('user_id'))
        ->join('users as u','r.user_id','u.id')
        ->get();
        return $data;
    }   
}
