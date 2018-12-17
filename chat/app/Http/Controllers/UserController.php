<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myInfo(){
        return view("users.myInfo");
    }
    public function myPurse(){
        return view("users.myPurse");
    }
    public function pendingPayment(){
        return view("users.pendingPayment");
    }
    public function bankCard(){
        return view("users.bankCard");
    }
    public function dib(){
        return view("users.dib");
    }
}
