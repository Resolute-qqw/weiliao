<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['login'])->group(function(){
    // 首页及基础页面（微聊,通讯录,探索,我）
    Route::get("/","IndexController@index")->name("index");

    // 私聊
    Route::get("/chat","ChatController@chat")->name("chat");
    // 群聊
    Route::get("/chats","ChatController@chats")->name("chats");

    // 个人信息
    Route::get("/my-info","UserController@myInfo")->name("myInfo");
    // 我的钱包
    Route::get("/my-purse","UserController@myPurse")->name("myPurse");
    // 待付款
    Route::get("/pending-payment","UserController@pendingPayment")->name("pendingPayment");
    // 零钱
    Route::get("/dib","UserController@dib")->name("dib");
    // 银行卡
    Route::get("/bank-card","UserController@bankCard")->name("bankCard");

    // 好友主页
    Route::get("/friend-info","FriendController@friendInfo")->name("friendInfo");
    // 微友圈
    Route::get("/friends","FriendController@friends")->name("friends");

    // 添加好友
    Route::get("/add-friend","FriendController@addFriends")->name("addFriend");
    // ajax查询好友
    Route::get("/ajax-friend","FriendController@ajaxFriend")->name("ajaxFriend");
    // ajax添加好友
    Route::get("/ajax-addfriend","FriendController@ajaxAddFriend")->name("ajaxAddFriend");
    // 新的朋友
    Route::get("/new-friend","FriendController@newFriend")->name("newFriend");
    // 同意好友
    Route::get("/agree-friend","FriendController@ajaxAgreeFriend")->name("ajaxAgreeFriend");


    // 退出登录
    Route::get("/logout","ActionController@logout")->name("logout");
});

// 登录
Route::get("/login","ActionController@login")->name("login");
Route::post("/login","ActionController@dologin")->name("dologin");
// 注册
Route::get("/register","ActionController@register")->name("register");
Route::post("/register","ActionController@doregister")->name("doregister");
