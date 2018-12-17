<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>我的钱包</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="/css/reset.css" />
	<link rel="stylesheet" href="/css/animate.css" />
	<link rel="stylesheet" href="/css/swiper-3.4.1.min.css" />
	<link rel="stylesheet" href="/css/layout.css" />
	
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/zepto.min.js"></script>
	<script src="/js/fontSize.js"></script>
	<script src="/js/swiper-3.4.1.min.js"></script>
	
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox wc__theme01">
					<a class="back" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1">我的钱包</h2>
				</div>
			</div>

			<!-- //我的钱包页面 -->
			<div class="wc__ucinfoPanel">
				<!-- 快捷操作 -->
				<div class="wc__wallet-quick wc__theme01">
					<ul class="flexbox clearfix">
						<li class="flex1 wc__material-cell" routeUrl="{{route('pendingPayment')}}">
							<img class="icon" src="/images/wallet/icon__wallet-shoukuan.png" />
							<div class="txt">收付款</div>
						</li>
						<li class="flex1 wc__material-cell" routeUrl="{{route('dib')}}">
							<img class="icon" src="/images/wallet/icon__wallet-lingqian.png" />
							<div class="txt">零钱<span class="num">￥1280.50</span></div>
						</li>
						<li class="flex1 wc__material-cell" routeUrl="{{route('bankCard')}}">
							<img class="icon" src="/images/wallet/icon__wallet-bankcard.png" />
							<div class="txt">银行卡</div>
						</li>
					</ul>
				</div>
				<!-- 微服务 -->
				<div class="wc__wallet-services">
					<h2 class="tit">微服务</h2>
					<ul class="flexbox flex-alignc clearfix">
						<li class="flex1 wc__material-cell">
							<img class="icon" src="/images/wallet/icon__service01.png" />
							<div class="txt">手机充值</div>
						</li>
						<li class="flex1 wc__material-cell">
							<img class="icon" src="/images/wallet/icon__service02.png" />
							<div class="txt">吃喝玩乐</div>
						</li>
						<li class="flex1 wc__material-cell">
							<img class="icon" src="/images/wallet/icon__service03.png" />
							<div class="txt">微优选</div>
						</li>
						<li class="flex1 wc__material-cell">
							<img class="icon" src="/images/wallet/icon__service04.png" />
							<div class="txt">微购商城</div>
						</li>
						<li class="flex1 wc__material-cell">
							<img class="icon" src="/images/wallet/icon__service05.png" />
							<div class="txt">京东</div>
						</li>
						<li class="flex1 wc__material-cell">
							<img class="icon" src="/images/wallet/icon__service06.png" />
							<div class="txt">淘宝</div>
						</li>
					</ul>
				</div>
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
			// 跳转链接
			$(".wechat__panel").on("click", "*[routeUrl]", function (e) {
				var routeurl = $(this).attr('routeUrl');
				if (!routeurl) return;
				window.location.href = routeurl;
			});
		});
	</script>
	
</body>
</html>
