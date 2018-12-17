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
        .wechat__panel{
            background-color: #eee;
        }
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
        .information{
            margin-top: 1%;
        }
        .information li {
            background: #fff;
            font-family: 'Microsoft Yahei';
            padding: .15rem .3rem;
            position: relative;
            border-bottom: 1px solid #d9d9d9;
        }
        .information li img{
            margin-right: .2rem;
            height: .7rem;
            width: .7rem;
        }
        .information li button{
            float: right;
            padding: 4px 12px;
            margin-top: 3px;
        }
        .refuse{
            float: right;
            color: #ccc;
            display: inline-block;
            line-height: .7rem;
            margin-right: 2%;
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
					<h2 class="barTit flex1" style="line-height:0.2rem">新的朋友</h2>
				</div>
			</div>
           
            <div class="information">
                <ul>
                    @foreach($data as $v)
                    <li>
                        <div>
                            <img src="{{$v->face}}" alt="">
                            <span>{{$v->username}}</span>
                            <input type="hidden" name="request_id" value="{{$v->user_id}}">
                            <span id="btn-state">
                                @if($v->state==1)
                                    <span class="refuse">已同意</span>
                                @else
                                    <button id="up-state" type="button" class="btn btn-success">同意</button>
                                @endif
                            </span>

                        </div>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
            <div class="alert alert-success"></div>
		</div>
	</div>
    <script src="/js/bootstrap.min.js"></script>
    <script>

        $("#up-state").click(function(){
            let request_id = $(this).parent().siblings('input[name=request_id]').val()
            $.ajax({
                type:"GET",
                url:"{{route('ajaxAgreeFriend')}}",
                data:{request_id:"{{session('user_id')}}" , user_id:request_id},
                success:function(data){
                    if(data){
                        console.log(data)
                        // 改变按钮样式 显示为已同意
                        let str= '<span class="refuse">已同意</span>'
                        $("#btn-state").html(str)
                        $('.alert').html('微聊 : 已同意').show().delay(1500).fadeOut(); 
                    }
                }
            })
        })
    </script>
</body>
</html>
