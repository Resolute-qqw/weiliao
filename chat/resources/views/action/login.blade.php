<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>登录</title>
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
	@if(session('tips'))
		<script>alert('{{session('tips')}}');</script>
	@endif
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //登录页面 -->
			<div class="wc__lgregPanel flex1">
				<h2 class="hdtips">微聊号/邮箱登录</h2>
				<div class="forms">
					<form action="{{route('dologin')}}" method="POST" id="lgregForms">
						@csrf
						<ul class="clearfix">
							<li><label class="lbl flexbox"><em>账号</em><input class="iptxt flex1" type="text" name="username" placeholder="请填写微聊号/手机号" /></label></li>
							<li><label class="lbl flexbox"><em>密码</em><input class="iptxt flex1" type="password" name="password" placeholder="请填写密码" /></label></li>
						</ul>
						<div class="lgway"><a href="{{route('register')}}">没有账号?点击注册</a></div>
						<div class="btns"><a class="wc__btn-primary btn__login" id="J__btnLogin" href="javascript:;">登录</a></div>
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
				var account = $("#lgregForms input[name='account']").val();
				var pass = $("#lgregForms input[name='password']").val();

				if(account == ''){
					wcPop({content: '用户名不能为空！', time: 2000});
				}else if(pass == ''){
					wcPop({ content: '密码不能为空！', time: 2000 });
				}else{
					$("#lgregForms").submit();
				}
			})
		});
	</script>
	
</body>
</html>
