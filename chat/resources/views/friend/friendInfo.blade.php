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
	
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/zepto.min.js"></script>
	<script src="/js/fontSize.js"></script>
	<script src="/js/swiper-3.4.1.min.js"></script>
	<script src="/js/wcPop/wcPop.js"></script>
	
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox">
					<a class="back splitline" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1">详细资料</h2>
				</div>
			</div>

			<!-- //好友详细资料页 -->
			<div class="wc__ucinfoPanel">
				<div class="wc__ucinfo-detail">
					<ul class="clearfix" id="J__ucinfoPanel">
						<li>
							<div class="item flexbox flex-alignc wc__material-cell">
								<img class="uimg" src="/images/uimg/u__chat-img14.jpg" />
								<label class="lbl flex1">
									<em>Nice奶思</em><i>微聊号：Nice2018</i>
								</label>
							</div>
						</li>
						<li>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">设置备注和标签</label>
							</div>
						</li>
						<li>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl">地区</label>
								<div class="cnt flex1 c-999">安道尔</div>
							</div>
							<div class="item flexbox flex-alignc wc__material-cell" routeUrl="{{route('friends')}}">
								<label class="lbl">个人相册</label>
								<div class="cnt flex1">
									<img src="/images/placeholder/wcZone-img01.jpg" /><img src="/images/placeholder/wchat__img01.jpg" />
								</div>
							</div>
							<div class="item flexbox flex-alignc wc__material-cell">
								<label class="lbl flex1">更多</label>
							</div>
						</li>
					</ul>
				</div>
				<div class="wc__btns-panel">
					<a class="wc__btn-primary" href="javascript:;">发消息</a>
					<a class="wc__btn-default mt20" href="#">视频聊天</a>
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
