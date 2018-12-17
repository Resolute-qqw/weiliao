<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>注册</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="/css/reset.css" />
	<link rel="stylesheet" href="/css/animate.css" />
	<link rel="stylesheet" href="/css/layout.css" />
	
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/zepto.min.js"></script>
	<script src="/js/fontSize.js"></script>
	<script src="/js/wcPop/wcPop.js"></script>
	
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //注册页面 -->
			<div class="wc__lgregPanel flex1">
				<h2 class="hdtips">微聊号注册</h2>

				<div class="forms">
					@if ($errors->any())
						<div class="errors">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form action="{{route('doregister')}}" method="POST" id="lgregForms">
						@csrf
						<ul class="clearfix">
							<li><label class="lbl flexbox"><em>昵称</em><input class="iptxt flex1" type="text" name="username" placeholder="请填写昵称" /></label></li>
							<li><label class="lbl flexbox"><em>手机号</em><input class="iptxt flex1" type="text" name="iphone" placeholder="请填写手机号" /></label></li>
							<li><label class="lbl flexbox"><em>密码</em><input class="iptxt flex1" type="password" name="password" placeholder="请填写密码" /></label></li>
						</ul>
						<div class="lgway"><a href="{{route('login')}}">已有账号？点击登录</a></div>
						<div class="btns"><a class="wc__btn-primary btn__login" id="J__btnLogin" href="javascript:;">注册</a></div>
					</form>
				</div>
			</div>
			<!-- //底部 -->
			<div class="wc__lgregFoot">
				<ul class="clearfix">
					<li><a href="#">找回密码</a></li>
					<li><a href="#">更多</a></li>
				</ul>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		/** __公共函数 */
		$(function(){
			// ...
		});
		
		/** __自定函数 */
		$(function(){
			// 登录验证
			$("#J__btnLogin").on("click", function(){
				var username = $("#lgregForms input[name='username']").val();
				var password = $("#lgregForms input[name='password']").val();
				var iphone = $("#lgregForms input[name='iphone']").val();
				
				if(username == ''){
					wcPop({content: '用户名不能为空！', time: 2000});
				}else if(username.length<3){
					wcPop({content: '用户名长度不能小于3！', time: 2000});
				}
				else if(iphone == ''){
					wcPop({ content: '手机号不能为空！', time: 2000 });
					
				}else if(iphone.length<7){
					wcPop({content: '手机号长度不能小于7！', time: 2000});
				}else if(password == ''){
					wcPop({ content: '密码不能为空！', time: 2000 });
				}else if(password.length<6){
					wcPop({ content: '密码长度不能小于6！！', time: 2000 });
				}else{
					$("#lgregForms").submit();
				}
			})
		});
	</script>
	
</body>
</html>
