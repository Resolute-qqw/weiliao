</body>
</html>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>详细资料</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="/css/reset.css" />
	<link rel="stylesheet" href="/css/animate.css" />
	<link rel="stylesheet" href="/css/swiper-3.4.1.min.css" />
    <link rel="stylesheet" href="/css/layout.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />

	
	<script src="/js/jquery.min.js"></script>
	<script src="/js/zepto.min.js"></script>
	<script src="/js/fontSize.js"></script>
	<script src="/js/swiper-3.4.1.min.js"></script>
	<script src="/js/wcPop/wcPop.js"></script>
    <style>
        @font-face{
            font-family: 'qqwfont'; 
            src: url('/font/glyphicons-halflings-regular.eot');
            src:url('/font/glyphicons-halflings-regular.woff') format('woff'),
                url('/font/glyphicons-halflings-regular.ttf') format('truetype'),
                url('/font/glyphicons-halflings-regular.woff2') format('woff2'),
                url('/font/glyphicons-halflings-regular.svg') format('svg');
        }
        .search{
            margin-top: 20px;
            position: relative;
        }
        .wechat__panel{
            background-color: #eee;
        }
        #search-span{
            display: inline-block;
            position: absolute;
            right: 2%;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            color: #aaa;
            font-size: 20px;
        }
        .wc__scrolling-panel{
            background-color: #eee;
        }
        .tips-info{
            margin-top: 20px;
        }
        #J__ucenterList:first-child li{
            margin-top: 0px;
        }
        #J__ucenterList li {
            margin-bottom: 20px;
        }
        .loading{
            margin-top: 40px;
            text-align: center;
        }
        .add-btn{
            text-align: center;
        }
        .add-btn button{
            width: 92%;
            height: 7%;
        }
        
        .btn-success{
            background-color: #16A215;
        }
    	#getVerifyCode{cursor: pointer; outline: none;}
    	.alert {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 200px;
            margin-left: -100px;
            z-index: 99999;
            padding: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
            text-align: center;
            opacity : 0.8;
        }
        
        .alert-success {
            color: #fff;
            background-color: #666;
            border-color: #666;
        }
        .address{
            margin-left: 5%;
            color : #ccc;
        }
        .autograph{
            margin-left: 5%;
            color : #ccc;
        }
    </style>
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column" id="search-box">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox">
					<a class="back splitline" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1" style="line-height:0.2rem">添加好友</h2>
				</div>
			</div>
            <div class="search">
                <input type="text" id="account" class="form-control" placeholder="请输入对方的微聊号或者手机号">
                <span class="glyphicon glyphicon-search" id="search-span" aria-hidden="true"></span>
            </div>            

            <div class="tips-info">
                
            </div>
            <div class="alert alert-success"></div>
            
		</div>
	</div>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        // 搜索按钮
        $("#search-span").click(function(){
            let account = $("#account").val();
            // 显示loading图
            let loading = `<div class="loading">
                                <img style="width:20px;height:20px" src="/images/5-121204194027-50.gif" alt="">
                            </div>`
            $(".tips-info").html(loading)
            // 通过ajax查询数据
            $.ajax({
                type:"GET",
                url:"{{route('ajaxFriend')}}",
                data:{account:account},
                success:function(data){
                    if(data){
                        // 根据后台查询到的结构生成数据结构并追加到页面中
                        let str =`<div id="user-info" class="swiper-slide swiper-slide-active" style="width: 375px;">
                                <div class="wc__scrolling-panel">
                                    <div class="wc__ucenter-list" id="J__ucenterList">
                                        <ul class="clearfix" style="margin-bottom: 0px;">
                                            <li>
                                                <div class="item flexbox flex-alignc wc__material-cell" routeurl="微聊-我(个人信息).html">
                                                    <img class="uimg" src="`+data.face+`">
                                                    <span class="txt flex1">
                                                        <em>`+data.username+`</em><i>微聊号：`+data.account_number+`</i>
                                                    </span>
                                                    {{-- <div class="qrcode wc__arr"><img src="/images/placeholder/u__qrcode-img.png"></div> --}}
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item flexbox flex-alignc wc__material-cell" routeurl="微聊-我(钱包).html">
                                                    设置注释及备注
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item flexbox flex-alignc wc__material-cell">
                                                    地区
                                                    <span class="address">`+data.address+`</span>
                                                </div>
                                                <div class="item flexbox flex-alignc wc__material-cell">
                                                    个性签名
                                                    <span class="autograph">`+data.autograph+`</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="add-btn">
                                            <button type="button" id="add-friend" class="btn btn-success">添加到通讯录</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;
                        if(data.relationship=="friend"){
                            str=str.replace(`<div class="add-btn">
                                            <button type="button" id="add-friend" class="btn btn-success">添加到通讯录</button>
                                        </div>`
                                        ,
                                        `<div class="add-btn">
                                            <button type="button" id="send-message" class="btn btn-success">发送消息</button>
                                        </div>`);
                        }
                        
                        $(".tips-info").html(str);
                        // 添加到通讯录
                        $("#add-friend").click(function(){
                            // 显示发送成功
                            $('.alert').html('微聊 : 已发送').show().delay(1500).fadeOut(); 
                            // ajax发送数据到后台进行添加
                            $.ajax({
                                type:"GET",
                                url:"{{route('ajaxAddFriend')}}",
                                data:{user_id:"{{session('user_id')}}" , request_id:data.id},
                                success:function(data){
                                    if(data){
                                        console.log(data)
                                    }
                                }
                            })
                        })
                    }else{
                        // 未查询到时 提示未找到
                        let str = `<div class="panel panel-warning">
                                    <div class="panel-heading">用户不存在</div>
                                </div>`
                        $(".tips-info").html(str);
                    }
                }
            })
        })
        
    </script>
</body>
</html>
