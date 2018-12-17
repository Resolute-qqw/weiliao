<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>银行卡</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<link rel="stylesheet" href="./css/reset.css" />
	<link rel="stylesheet" href="./css/animate.css" />
	<link rel="stylesheet" href="./css/swiper-3.4.1.min.css" />
	<link rel="stylesheet" href="./css/layout.css" />
	
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/zepto.min.js"></script>
	<script src="./js/fontSize.js"></script>
	<script src="./js/swiper-3.4.1.min.js"></script>
	<script src="./js/wcPop/wcPop.js"></script>
	
</head>
<body class="bg-373a3f">
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox wc__theme01">
					<a class="back" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1">银行卡</h2>
				</div>
			</div>

			<!-- //银行卡页面 -->
			<div class="wc__ucinfoPanel">
				<!-- 银行卡列表 -->
				<div class="wc__bankCard-list">
					<ul class="clearfix">
						<li class="flexbox">
							<img class="bklogo" src="/images/bank/bank_china.png" />
							<div class="bkinfo flex1">
								<h2>中国银行</h2>
								<h5>储蓄卡</h5>
								<label class="bknum">**** **** **** 9918</label>
							</div>
						</li>
						<li class="flexbox">
							<img class="bklogo" src="/images/bank/bank_cmb.png" />
							<div class="bkinfo flex1">
								<h2>招商银行</h2>
								<h5>储蓄卡</h5>
								<label class="bknum">**** **** **** 1369</label>
							</div>
						</li>
					</ul>
				</div>
				<div class="wc__bankCard-add flexbox flex-alignc wc__material-cell wc__borB">添加银行卡</div>
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
			// ...
		});
	</script>
	
</body>
</html>
