<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8" />
	<title>零钱</title>
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
	<script src="./js/wcKeyBoard.js"></script>
	
</head>
<body>
	
	<!-- <>微聊主容器 -->
	<div class="wechat__panel clearfix">
		<div class="wc__home-wrapper flexbox flex__direction-column">
			<!-- //顶部 -->
			<div class="wc__headerBar fixed">
				<div class="inner flexbox wc__theme01">
					<a class="back" href="javascript:;" onclick="history.back(-1);"></a>
					<h2 class="barTit flex1">零钱</h2>
					<a class="barTxt" href="javascript:;">零钱明细</a>
				</div>
			</div>

			<!-- //我的钱包页面 -->
			<div class="wc__ucinfoPanel">
				<!-- 零钱 -->
				<div class="wc__wallet-lingqian">
					<img class="icon" src="/images/wallet/icon__wallet-lingqian2.png" />
					<p>我的零钱</p>
					<p class="num">￥1280.50</p>
					<div class="wc__btns-panel">
						<a class="wc__btn-primary" href="javascript:;" id="J__wcRecharge">充值</a>
						<a class="wc__btn-default mt20" href="#" id="J__wcDeposit">提现</a>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- …… 充值弹窗模板.Start -->
	<div class="wc__walletPanel-tmpl">
		<!-- //充值模板.begin -->
		<div id="J__popupTmpl-Recharge" style="display:none;">
			<div class="wc__popupTmpl tmpl-recharge">
				<i class="wc-xclose"></i>
				<ul class="clearfix">
					<li class="item">
						<div class="itembox flexbox wc__borB" id="J__selectBank">
							<label class="txt bankLbl">储蓄卡</label>
							<div class="flex1"><p class="bankName">中国银行</p><p class="bankQuota">单日交易限额￥20000.00</p></div>
						</div>
					</li>
					<li class="item">
						<div class="itembox wc__borB">
							<label class="txt">充值金额</label>
							<div class="pt-15 flexbox"><b class="unit">￥</b><input class="ipt-txt flex1" type="text" name="rechargeAmount" readonly /></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //充值模板.end -->
	</div>
	<script type="text/javascript">
		/* ...充值事件.start */
		$("#J__wcRecharge").on("click", function(){
			var rechargeIdx = wcPop({
				id: 'bankRecharge',
				skin: 'ios',
				content: $("#J__popupTmpl-Recharge").html(),
				style: 'background-color: #fff; max-width: 320px; width: 95%;',
				shadeClose: false,

				btns: [
					{
						text: '下一步',
						style: 'background:#ffba00;color:#fff;font-size:18px;',
						onTap() {
							var money = $("#bankRecharge input[name='rechargeAmount']").val();
							if(!money) return;
							alert(money);
							wcPop.close(rechargeIdx);
						}
					}
				]
			});
		});
		// 选择银行
		$("body").on("click", ".wc__popupTmpl #J__selectBank", function () {
			var bankIdx = wcPop({
				id: 'bankChoose',
				skin: 'androidSheet',
				title: '选择银行卡',
				shadeClose: true,

				btns: [
					{
						text: '<span class="bankType01" name="中国邮政" quota="单日交易限额￥10000.00">中国邮政储蓄卡(9918)</span>',
						style: 'line-height: 50px;',
						onTap(e) {
							var _bankName = $("#bankChoose .bankType01").attr('name'), _bankQuota = $("#bankChoose .bankType01").attr('quota');
							$("#bankRecharge .bankName").text(_bankName);
							$("#bankRecharge .bankQuota").text(_bankQuota);
							wcPop.close(bankIdx);
						}
					},
					{
						text: '<span class="bankType02" name="招商银行" quota="单日交易限额￥50000.00">招商银行储蓄卡(1369)</span>',
						style: 'line-height: 50px;',
						onTap() {
							var _bankName = $("#bankChoose .bankType02").attr('name'), _bankQuota = $("#bankChoose .bankType02").attr('quota');
							$("#bankRecharge .bankName").text(_bankName);
							$("#bankRecharge .bankQuota").text(_bankQuota);
							wcPop.close(bankIdx);
						}
					},
					{
						text: '使用新卡充值',
						style: 'line-height: 50px;',
						onTap() {
							alert("使用新卡充值");
						}
					}
				]
			});
		});
		// 充值金额
		$("body").on("click", "#bankRecharge input[name='rechargeAmount']", function (e) {
			var obj = $(this);
			wcKeyBoard({resId: obj});
			document.activeElement.blur();
		});
		/* ...充值事件.end */

		// ...关闭
		$("body").on("click", ".wc__popupTmpl .wc-xclose", function () {
			wcPop.close();
		});
	</script>
	<!-- …… 充值弹窗模板.End -->

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
