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
		<!-- <header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title">个人中心</h1>
		</header> -->
    <?php include templates("mobile/index","foot");?>
		<div class="mui-content">
			<div id="scroll" class="mui-scroll-wrapper" style="padding-top: 1px; padding-bottom:70px;">
				<div class="mui-scroll">

					<div class="accountBox">
						<div class="accountLeft"><img src="<?php echo $userinfo['headimgurl']; ?>"></div>
						<div class="accountRight">
							<p>微信昵称：<span><?php echo $userinfo['nickname']; ?></span></p>
							<p>地区：<span><?php echo $userinfo['province']; ?>   <?php echo $userinfo['city']; ?></span></p>
							<!-- <p>会员ID：<span>1000087</span></p> -->
						</div>

					</div>

					<ul class="mui-table-view mui-table-view-chevron" style="margin-top: 15px;">
						<li class="mui-table-view-cell indexListName" style="background: url(images/account_img_07.png) no-repeat 15px center; background-size: calc(25px); padding-left: 45px;">
              <a href="<?php echo WEB_PATH; ?>/mobile/home/record_list/<?php echo $userid['id']; ?>">
								<h4 style="border: none 0; ">夺宝记录</h4>
								<span class="mui-icon mui-icon-forward"></span>
							</a>
						</li>
						<li class="mui-table-view-cell indexListName" style="background: url(images/account_img_10.png) no-repeat 15px center; background-size: calc(25px); padding-left: 45px;">
              <a href="<?php echo WEB_PATH; ?>/mobile/home/orderlist/<?php echo $userid['id']; ?>">
								<h4 style="border: none 0;">中奖记录</h4>
								<span class="mui-icon mui-icon-forward"></span>
							</a>

						</li>
						<li class="mui-table-view-cell indexListName" style="background: url(images/account_img_12.png) no-repeat 15px center; background-size: calc(25px); padding-left: 45px;">
								<a href="<?php echo WEB_PATH; ?>/mobile/shaidan/my_shaidan/<?php echo $userid['id']; ?>">
									<h4 style="border: none 0;">我的晒单</h4>
									<span class="mui-icon mui-icon-forward"></span>
								</a>
						</li>
						<li class="mui-table-view-cell indexListName" style="background: url(images/account_img_14.png) no-repeat 15px center; background-size: calc(25px); padding-left: 45px;">
							<!-- <div class="mui-bottom-part"> -->
								<a href="<?php echo WEB_PATH; ?>/mobile/user/address">
									<h4 style="border: none 0;">收货地址</h4>
									<span class="mui-icon mui-icon-forward"></span>
								</a>
									<!-- </div> -->
						</li>
					</ul>

				</div>
			</div>
		</div>

	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
		<script>

		mui('.mui-scroll-wrapper').scroll();


		mui('.mui-bottom-part').on('tap', 'a', function() {
			  //打开关于页面
			    var _url = this.getAttribute("id");
			    mui.openWindow({
				    url: _url ,
				    id:_url
			    });
			});
//			document.body.addEventListener('touchmove', function (event) {
//		    event.preventDefault();
//		}, false);
		</script>
	</body>

</html>
