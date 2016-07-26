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
			<h1 class="mui-title">收货地址</h1>
		</header>
		<div class="mui-content">
			<div id="scroll" class="mui-scroll-wrapper" style="padding-top: 50px; padding-bottom:70px;">
				<div class="mui-scroll">


					<ul class="mui-table-view mui-table-view-chevron" style="margin-top: 15px;">
						<li class="mui-table-view-cell indexListName" >
							<h4 style="border: none 0; width: 20%;">姓名：</h4>
							<input type="text" placeholder="请输入姓名">
						</li>
						<li class="mui-table-view-cell indexListName" >
							<h4 style="border: none 0; width: 20%;">手机号：</h4>
							<input type="text" placeholder="请输入手机号">
						</li>
						<li class="mui-table-view-cell indexListName" >
							<h4 style="border: none 0; width: 20%;">省份：</h4>
							<input type="text" placeholder="请输入省份">
						</li>
						<li class="mui-table-view-cell indexListName" >
							<h4 style="border: none 0; width: 20%;">城市：</h4>
							<input type="text" placeholder="请输入城市">
						</li>
						<li class="mui-table-view-cell indexListName" >
							<h4 style="border: none 0; width: 20%;">区县：</h4>
							<input type="text" placeholder="请输入区县">
						</li>
						<li class="mui-table-view-cell indexListName" >
							<h4 style="border: none 0; width: 20%;">邮编：</h4>
							<input type="text" placeholder="请输入邮编">
						</li>
						<li class="mui-table-view-cell indexListName" >
							<textarea placeholder="请输入详细地址" style="margin: 0; padding: 0; height: 80px; border: none 0;"></textarea>
						</li>
					</ul>
					<button type="button" class="mui-btn mui-btn-warning mui-btn-block" style="padding: 10px 0; width: 90%; margin: 0 auto; margin-top: 15px; background-color: #FF9A15; border: none 0;">确认添加</button>
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
				    url: _url + '.html',
				    id:_url
			    });
			});
//			document.body.addEventListener('touchmove', function (event) {
//		    event.preventDefault();
//		}, false);
		</script>
	</body>

</html>
