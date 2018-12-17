<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>微聊</title>
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
	@if(session('tips'))
		<script>alert('{{session('tips')}}');</script>
	@endif
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox">
					<h2 class="barTit barTitLg flex1">微聊<em class="ff-ar">(12)</em></h2>
					<a class="barIco sear" href="javascript:;" id="J__topbarSear"></a>
					<a class="barIco add" href="javascript:;" id="J__topbarAdd"></a>
				</div>
			</div>

			<!-- //4个tabBar滑动切换 -->
			<div class="wc__swiper-tabBar flex1">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<!-- //1、）微聊主页-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<!-- //聊天记录信息 -->
								<div class="wc__recordChat-list" id="J__recordChatList">
									<ul class="clearfix">
										<li class="flexbox wc__material-cell" routeUrl="{{route('chats')}}">
											<div class="img"><img src="./images/uimg/u__chat-img01.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">马云(老子天下第一)(60)</h2>
												<p class="desc clamp1">阿里集团：4家o2o商家已经入驻天猫平台，打响开年第一炮~~~</p>
											</div>
											<label class="time">14:42</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chats')}}">
											<div class="img"><img src="./images/uimg/u__chat-img01.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">马云(老子天下第一)(40)</h2>
												<p class="desc clamp1">阿里集团：4家o2o商家已经入驻天猫平台，打响开年第一炮~~~</p>
											</div>
											<label class="time">14:42</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img02.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">马蓉 ▪ ☀☼㈱</h2>
												<p class="desc clamp1">就喜欢你们看不惯我的样子</p>
											</div>
											<label class="time">昨天</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img03.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">周杰伦-Jay</h2>
												<p class="desc clamp1">新专辑正式于08.21日发行了，大家可以去支持下</p>
											</div>
											<label class="time">3月23日</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img04.jpg" /><em class="wc__badge">10</em></div>
											<div class="info flex1">
												<h2 class="title">张小龙</h2>
												<p class="desc clamp1">九大“门派”围攻小程序，马化腾：“莫慌”</p>
											</div>
											<label class="time">2月28日</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img05.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">雷军</h2>
												<p class="desc clamp1">我有小米，难度还怕你们不成？</p>
											</div>
											<label class="time">2月19日</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img06.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">李彦宏-Robin</h2>
												<p class="desc clamp1">大家看喜庆不，高颜值又来搞事情啦。</p>
											</div>
											<label class="time">2月15日</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img14.jpg" /><em class="wc__badge">2</em></div>
											<div class="info flex1">
												<h2 class="title">Nice奶思</h2>
												<p class="desc clamp1">好无聊哇，你们有木有想我啊❤❤❤</p>
											</div>
											<label class="time">昨天</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img08.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">杨幂幂</h2>
												<p class="desc clamp1">新剧终于杀青了，好嗨森~</p>
											</div>
											<label class="time">22:50</label>
										</li>
										<li class="flexbox wc__material-cell" routeUrl="{{route('chat')}}">
											<div class="img"><img src="./images/uimg/u__chat-img15.jpg" /></div>
											<div class="info flex1">
												<h2 class="title">李嘉诚</h2>
												<p class="desc clamp1">人要坚持走好每一步，充实每一天！</p>
											</div>
											<label class="time">08:00</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- //2、通讯录-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<div class="wc__addrFriend-list" id="J__addrFriendList">
									<ul class="clearfix">
										<li>
											<a href="{{route('newFriend')}}">
												<div class="row flexbox flex-alignc wc__material-cell">
													<img class="uimg" src="./images/icon__addrFriend-img01.jpg" /><span class="name flex1">新的朋友</span>
												</div>
											</a>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/icon__addrFriend-img02.jpg" /><span class="name flex1">群聊</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/icon__addrFriend-img03.jpg" /><span class="name flex1">标签</span>
											</div>
										</li>
										<li id="A">
											<h2 class="initial wc__borT">A</h2>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img09.jpg" /><span class="name flex1">Aster</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img01.jpg" /><span class="name flex1">Alibaba-马云</span>
											</div>
										</li>
										<li id="B">
											<h2 class="initial wc__borT">B</h2>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img02.jpg" /><span class="name flex1">马蓉 ▪ ☀☼㈱</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img03.jpg" /><span class="name flex1">周杰伦-Jay</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img10.jpg" /><span class="name flex1">Bear</span>
											</div>
										</li>
										<li id="C">
											<h2 class="initial wc__borT">C</h2>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img15.jpg" /><span class="name flex1">CC_李嘉诚</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img05.jpg" /><span class="name flex1">雷军</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img04.jpg" /><span class="name flex1">张小龙</span>
											</div>
										</li>
										<li id="D">
											<h2 class="initial wc__borT">D</h2>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img06.jpg" /><span class="name flex1">李彦宏-Robin</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img07.jpg" /><span class="name flex1">刘强东</span>
											</div>
										</li>
										<li id="E">
											<h2 class="initial wc__borT">E</h2>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img08.jpg" /><span class="name flex1">Lm杨幂幂</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img11.jpg" /><span class="name flex1">Wqq_王巧巧</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img12.jpg" /><span class="name flex1">杨迪</span>
											</div>
										</li>
										<li id="F">
											<h2 class="initial wc__borT">F</h2>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img13.jpg" /><span class="name flex1">wuli凡凡</span>
											</div>
											<div class="row flexbox flex-alignc wc__material-cell">
												<img class="uimg" src="./images/uimg/u__chat-img14.jpg" /><span class="name flex1">Nice奶思</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- //字母显示 -->
							<div class="wc__addrFriend-showletter">A</div>
							<!-- //26字母 -->
							<div class="wc__addrFriend-floatletter">
								<em>A</em>
								<em>B</em>
								<em>C</em>
								<em>D</em>
								<em>E</em>
								<em>F</em>
								<em>G</em>
								<em>H</em>
								<em>I</em>
								<em>J</em>
								<em>K</em>
								<em>L</em>
								<em>M</em>
								<em>N</em>
								<em>O</em>
								<em>P</em>
								<em>Q</em>
								<em>R</em>
								<em>S</em>
								<em>T</em>
								<em>U</em>
								<em>V</em>
								<em>W</em>
								<em>X</em>
								<em>Y</em>
								<em>Z</em>
							</div>
						</div>
						<!-- //3、探索-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<div class="wc__explore-list" id="J__exploreList">
									<ul class="clearfix">
										<li>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="微友圈.html">
												<img class="icon" src="./images/icon__explore-img01.png" /><span class="txt flex1">朋友圈</span><div class="notice wc__arr"><img src="./images/uimg/u__chat-img14.jpg" /><em class="wc__badge wc__badge-dot"></em></div>
											</div>
										</li>
										<li>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__explore-img02.png" /><span class="txt flex1">看一看</span>
											</div>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__explore-img03.png" /><span class="txt flex1">找一找</span>
											</div>
										</li>
										<li>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__explore-img04.png" /><span class="txt flex1">小心跳</span>
											</div>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__explore-img05.png" /><span class="txt flex1">好友力</span><span class="fs-20 ff-vd c-ccc mt-5">^-^测测您和谁最能聊</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- //4、我-->
						<div class="swiper-slide">
							<div class="wc__scrolling-panel">
								<div class="wc__ucenter-list" id="J__ucenterList">
									<ul class="clearfix">
										<li>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="{{route('myInfo')}}">
												<img class="uimg" src="{{session('face')}}" />
												<span class="txt flex1">
													<em>{{session('username')}}</em><i>微聊号：{{session('account_number')}}</i>
												</span> 
												<div class="qrcode wc__arr"><img src="./images/placeholder/u__qrcode-img.png" /></div>
											</div>
										</li>
										<li>
											<div class="item flexbox flex-alignc wc__material-cell" routeUrl="{{route('myPurse')}}">
												<img class="icon" src="./images/icon__uc-img01.png" /><span class="txt flex1">钱包</span>
											</div>
										</li>
										<li>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__uc-img02.png" /><span class="txt flex1">收藏</span>
											</div>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__uc-img03.png" /><span class="txt flex1">相册</span>
											</div>
										</li>
										<li>
											<div class="item flexbox flex-alignc wc__material-cell">
												<img class="icon" src="./images/icon__uc-img04.png" /><span class="txt flex1">设置</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- //底部tabbar -->
			<div class="wechat__tabBar">
				<div class="bottomfixed wc__borT">
					<ul class="flexbox flex-alignc wechat-pagination">
						<li class="flex1 on"><i class="ico i1"><em class="wc__badge">12</em></i><span>微聊</span></li>
						<li class="flex1"><i class="ico i2"></i><span>通讯录</span></li>
						<li class="flex1"><i class="ico i3"><em class="wc__badge wc__badge-dot"></em></i><span>探索</span></li>
						<li class="flex1"><i class="ico i4"></i><span>我</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- …… 顶部快捷弹窗.Start -->
	<div class="wc__popup-topbar" id="J__popupTopBar">
		<div class="wrap__topbar-mask"></div>
		<div class="wrap__topbar-menu">
			<ul class="clearfix animated anim-zoomInDownSmall">
				<li class="wc__material-cell"><i class="ico i1"></i><span>发起群聊</span></li>
			<li class="wc__material-cell"><a href="{{route('addFriend')}}"><i class="ico i2"></i><span>添加朋友</span></a></li>
				<li class="wc__material-cell"><i class="ico i3"></i><span>帮助与反馈</span></li>
			</ul>
		</div>
	</div>
	
	<!-- 左右滑屏切换.Start -->
	<script type="text/javascript"> 
		var chatSwiper = new Swiper('.swiper-container',{
			pagination: '.wechat-pagination',
			paginationClickable: true,
			paginationBulletRender: function (chatSwiper, index, className) {
				switch (index) {
					case 0:
						name='<i class="ico i1"><em class="wc__badge">12</em></i><span>微聊</span>';
						break;
					case 1:
						name='<i class="ico i2"></i><span>通讯录</span>';
						break;
					case 2:
						name='<i class="ico i3"><em class="wc__badge wc__badge-dot"></em></i><span>探索</span>';
						break;
					case 3:
						name='<i class="ico i4"></i><span>我</span>';
						break;
					default: name='';
				}
				return '<li class="flex1 ' + className + '">' + name + '</li>';
			}
		})
	</script>
	<!-- 左右滑屏切换 end -->

	<script type="text/javascript">
		/** __公共函数 */
		$(function(){
			// 顶部添加按钮
			$(".wc__headerBar").on("click", "#J__topbarAdd", function () {
				$("#J__popupTopBar").show();
			});
			$("#J__popupTopBar").on("click", ".wrap__topbar-mask", function () {
				$(this).parent().hide();
			});
			// 禁止长按弹出系统菜单
			$(".wechat__panel").on("contextmenu", function(e){
				e.preventDefault();
			});
		});
		
		/** __自定函数 */
		$(function(){
			//***1、微聊-------------------------
			// 聊天记录页面（长按操作）
			$("#J__recordChatList").on("longTap", "li", function(e){
				var _this = $(this);
				wcPop({
					skin: 'androidSheet',
					shadeClose: true,

					btns: [
						{text: '标为未读', style: 'line-height:50px;'},
						{text: '置顶聊天', style: 'line-height:50px;'},
						{
							text: '删除该聊天',
							style: 'line-height:50px;',
							onTap() {
								wcPop({
									skin: 'android',
									content: '删除后，将会清空该聊天记录',

									btns: [
										{
											text: '取消',
											onTap() {
												wcPop.close();
											}
										},
										{
											text: '删除',
											style: 'color:#ffba00',
											onTap() {
												_this.remove();
												wcPop.close();
											}
										}
									]
								});
							}
						}
					]
				});
			});
			// 跳转链接
			$(".wechat__panel").on("click", "*[routeUrl]", function(e){
				var routeurl = $(this).attr('routeUrl');
				if(!routeurl) return;
				window.location.href = routeurl;
			});

			//***2、通讯录-------------------------
			// 右侧浮动条
			$(".wc__addrFriend-floatletter").on("click", "em", function() {
				var letter = $(this).text();
				if($("#" + letter).length > 0){
					// 滚动到指定位置
					//$("#J__addrFriendList").parent().animate({ scrollTop: $("#" + letter).position().top}, 300);
					document.getElementById(letter).scrollIntoView();
				}
				$(".wc__addrFriend-showletter").text(letter).fadeIn(300);

				setTimeout(function(){
					$(".wc__addrFriend-showletter").fadeOut(300);
				}, 500);
			});

			// 通讯录（长按操作）
			$("#J__addrFriendList li:not(:first-child)").on("longTap", ".row", function(e){
				var _this = $(this);
				wcPop({
					skin: 'androidSheet',
					shadeClose: true,

					btns: [
						{
							text: '设置备注及标签',
							style: 'line-height:50px;',
							onTap() {
								wcPop.close();
							}
						}
					]
				});
			});
		});
	</script>
	
</body>
</html>
