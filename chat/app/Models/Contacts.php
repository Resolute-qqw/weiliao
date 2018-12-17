<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = ['user_id','friend_id','remarks','label'];

}
