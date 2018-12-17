<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>微友圈</title>
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
					<h2 class="barTit flex1">微友圈</h2>
				</div>
			</div>

			<!-- //微友圈 -->
			<div class="wc__friendZone">
				<div class="head">
					<img class="cover J__covers" src="/images/placeholder/wcZone-bg.jpg" />
					<p class="uname">张小龙</p>
					<a class="avator" href="#"><img src="/images/uimg/u__chat-img04.jpg" /></a>
				</div>
				<!-- //列表区 -->
				<div class="cont">
					<div class="inner">
						<ul class="wc__cmtlist clearfix" id="J__cmtList">
							<li>
								<div class="wrap-avt fl"><img src="/images/uimg/u__chat-img14.jpg" /></div>
								<div class="wrap-cmt">
									<div class="cmt-hd">
										<h2 class="u-name">Nice奶思</h2>
										<div class="post__cnt clearfix">
											<p>打卡！早上好哇，大家看这漂亮吗。</p>
											<p>
												<img class="list-img" src="/images/placeholder/wcZone-img01.jpg" />
												<img class="list-img" src="/images/placeholder/wchat__img01.jpg" />
											</p>
										</div>
										<div class="reply__box clearfix">
											<label class="time fl c--999">刚刚</label>
											<a class="btn-reply fr" href="javascript:;"></a>
											<!-- 评论弹窗 -->
											<div class="wc__cmtbox">
												<a class="like" href="javascript:;" id="J__btnLike"><i></i>赞</a>
												<a class="cmt" href="javascript:;" id="J__btnCmt"><i></i>评论</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="wrap-avt fl"><img src="/images/uimg/u__chat-img04.jpg" /></div>
								<div class="wrap-cmt">
									<div class="cmt-hd">
										<h2 class="u-name">张小龙</h2>
										<div class="post__cnt clearfix">
											<p>那一年我发誓一定要出人头地，希望能一统互联网江湖，拯救天下苍生！！！<br />如今：<br />微信已家喻户晓<br />微信支付已打败银行</p>
											<p>
												<img class="list-img" src="/images/placeholder/wcZone-img02.jpeg" />
												<img class="list-img" src="/images/placeholder/wcZone-img03.jpeg" />
												<img class="list-img" src="/images/placeholder/wcZone-img04.jpeg" />
											</p>
										</div>
										<div class="reply__box clearfix">
											<label class="time fl c--999">8分钟前</label>
											<a class="btn-reply fr" href="javascript:;"></a>
											<!-- 评论弹窗 -->
											<div class="wc__cmtbox">
												<a class="like" href="javascript:;" id="J__btnLike"><i></i>赞</a>
												<a class="cmt" href="javascript:;" id="J__btnCmt"><i></i>评论</a>
											</div>
										</div>
									</div>
									<div class="arr"></div>
									<div class="cmt-bd">
										<div class="like">
											习大大，奥巴马，赵薇，杨幂，王思聪，刘德华，邓超，范冰冰，史玉柱...
										</div>
										<div class="reply-list">
											<p><span>习大大：</span>像你们这些推动社会进步的人事表示感谢~</p>
											<p><span>马云：</span>微信能有今天，确认厉害。</p>
											<p><span>张小龙</span>回复<span>马云</span>谢谢，您的淘宝也很强大。</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="wrap-avt fl"><img src="/images/uimg/u__chat-img01.jpg" /></div>
								<div class="wrap-cmt">
									<div class="cmt-hd">
										<h2 class="u-name">马云(电商大王)</h2>
										<div class="post__cnt clearfix">
											<p>那一年我发誓一定要让电商火遍大江南北，让天下没有难做的生意。<br />如今：<br />淘宝已家喻户晓<br />支付宝已打败银行<br />天猫双11销售额让你无法想象</p>
											<p>
												<img class="list-img" src="/images/placeholder/wcZone-img05.jpg" />
												<img class="list-img" src="/images/placeholder/wcZone-img06.jpg" />
											</p>
										</div>
										<div class="reply__box clearfix">
											<label class="time fl c--999">3小时前</label>
											<a class="btn-reply fr" href="javascript:;"></a>
											<!-- 评论弹窗 -->
											<div class="wc__cmtbox">
												<a class="like" href="javascript:;" id="J__btnLike"><i></i>赞</a>
												<a class="cmt" href="javascript:;" id="J__btnCmt"><i></i>评论</a>
											</div>
										</div>
									</div>
									<div class="arr"></div>
									<div class="cmt-bd">
										<div class="like">
											李克强，黄渤，张小龙，周杰伦，黄晓明...
										</div>
										<div class="reply-list">
											<p><span>李克强：</span>马总不错，好样哒！推动社会经济。</p>
											<p><span>王健林：</span>我的万达也不错喔！</p>
											<p><span>马云</span>回复<span>王健林：</span>有笔大生意找你聊聊。</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
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
			// 赞封面
			$(".J__covers").on("click", function(){
				var coverIdx = wcPop({
					id: 'receivableIntro',
					skin: 'androidSheet',

					btns: [
						{
							text: '赞一下这个封面',
							style: 'line-height: 50px;',
							onTap() {
								wcPop.close(coverIdx);
							}
						},
					]
				});
			});

			// 显示点赞、评论框
			$("#J__cmtList li").on("click", ".btn-reply", function(){
				$(this).siblings(".wc__cmtbox").fadeIn(300);
				$(this).parents("li").siblings().find(".wc__cmtbox").hide();
			});
			// 隐藏点赞、评论框
			$(window).on("scroll", function () {
				$(".wc__cmtbox").hide();
			});

			// 评论
			$("#J__cmtList li").on("click", "#J__btnCmt", function(){
				alert(9)
			});
		});
	</script>
	
</body>
</html>
