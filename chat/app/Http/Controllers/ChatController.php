<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(){
        return view("chat.chat");
    }
    public function chats(){
        return view("chat.chats");
    }
}
