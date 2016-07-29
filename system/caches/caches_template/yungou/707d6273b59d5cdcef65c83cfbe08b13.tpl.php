<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/mui.css">
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/app.css">
		<style>
			.mui-segmented-control .mui-control-item{
				line-height: 36px;
			}
			.mui-segmented-control .mui-control-item.mui-active{
				background-color: #FFF;
				color: #ff9a15;
			}
			.mui-segmented-control.mui-scroll-wrapper .mui-control-item{
				padding: 0 10px;
				margin: 0 10px;
			}
			.mui-bar .mui-segmented-control{
				width: 50%;
				margin-top: 2px;
			}
			.mui-segmented-control .mui-control-item{
				line-height: 30px;
				border-color: #eee;
   				border-left: 1px solid #eee;
   				color: #333;
			}
			.mui-segmented-control{
				font-size: 16px;
				border:none 0;
    			border-radius: 0px;
			}
			#funnelChart02 div{
				width: 100%;
			}
			/*.mui-control-content.mui-active {
				display: initial;

			}
			.mui-control-content {
				display: initial;
			    position: relative;
			}*/
			.mui-table-view-cell:after{
				left: 0;
			}
			.mui-table-view-radio .mui-table-view-cell .mui-navigate-right:after{
				color: #FF9A15;
			}
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title">购买</h1>
		</header>
		<div class="mui-content">
			<div id="scroll" class="mui-scroll-wrapper" style="padding-top: 50px; padding-bottom:70px;">
				<div class="mui-scroll">

					<div class="finishBox">
						<p>我的订单：<?php echo $title; ?></p>
						<p>订单金额：¥<?php echo $num; ?>.00</p>
					</div>


					<div class="finishBox" style="margin-top: 15px;">
						<p>还需支付：<span style="color: #e73434;">¥<?php echo $num; ?>.00</span></p>
						<ul class="mui-table-view mui-table-view-radio">
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" style="background: url(images/buy_03.png) no-repeat 0 center; padding-left: 30px; background-size: calc(24px);">
									支付宝支付
								</a>
							</li>
							<li class="mui-table-view-cell mui-selected">
								<a class="mui-navigate-right" style="background: url(images/buy_06.png) no-repeat 0 center; padding-left: 30px; background-size: calc(24px);">
									微信支付
								</a>
							</li>
							<li class="mui-table-view-cell">
								<a class="mui-navigate-right" style="background: url(images/buy_08.png) no-repeat 0 center; padding-left: 30px; background-size: calc(24px);">
									银行卡支付
								</a>
							</li>

						</ul>
						<p style="margin-top: 10px;">* 客服电话：400-8888-0000</p>
					</div>
          <a href="<?php echo WEB_PATH; ?>/mobile/cart/paysubmit">
						<button type="button" class="mui-btn mui-btn-warning mui-btn-block" style="padding: 10px 0; width: 90%; margin: 0 auto; margin-top: 15px; background-color: #FF9A15; border: none 0;">立即支付</button>
					</a>

				</div>
			</div>
		</div>

		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
		<script>

		mui('.mui-scroll-wrapper').scroll();

//			document.body.addEventListener('touchmove', function (event) {
//		    event.preventDefault();
//		}, false);
		</script>
	</body>

</html>
