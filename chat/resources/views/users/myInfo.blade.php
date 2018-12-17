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
	
	<script src="/js/jquery.min.js"></script>
	<script src="/js/zepto.min.js"></script>
	<script src="/js/fontSize.js"></script>
	<script src="/js/swiper-3.4.1.min.js"></script>
	<script src="/js/wcPop/wcPop.js"></script>
	<style>
		.add-btn{
            text-align: center;
			margin-top: 5%;
        }
        .add-btn button{
            width: 92%;
            height: 7%;
        }
		.btn{
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
		}
		.btn-success {
			color: #fff;
			background-color: #d9534f;
    		border-color: #d43f3a;
		}
	</style>
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox">
					<a class="back splitline" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1">个人信息</h2>
				</div>
			</div>

			<!-- //个人信息页 -->
			<div class="wc__ucinfoPanel">
				<div class="wc__ucinfo-personal">
					<ul class="clearfix">
						<li>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">头像</label>
								<img class="uimg" src="{{session('face')}}" />
								<input class="chooseImg" type="file" accept="image/*" />
							</div>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">昵称</label>
								<div class="val">{{session('username')}}</div>
							</div>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">微聊号</label>
								<div class="val">{{session('account_number')}}</div>
							</div>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">更多</label>
							</div>
						</li>
						<li>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">我的地址</label>
							</div>
						</li>
					</ul>

					<div class="add-btn">
						<a href="{{route('logout')}}"><button type="button" id="add-friend" class="btn btn-success">退出登录</button></a>
					</div>
				</div>
			</div>

		</div>
	</div>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
