<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $webname; ?></title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/touch-icon.png" rel="apple-touch-icon-precomposed" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/index.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
	<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/Index.js" language="javascript" type="text/javascript"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="stylesheet"  href="<?php echo G_TEMPLATES_CSS; ?>/mobile/mui.css">
		<link rel="stylesheet"  href="<?php echo G_TEMPLATES_CSS; ?>/mobile/app.css">
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title">一元夺宝</h1>
		</header>
		<nav class="mui-bar mui-bar-tab mui-bottom-part">
			<a id="defaultTab" class="mui-tab-item mui-active" href="index.html">
				<span class="mui-icon logo01"></span>
				<span class="mui-tab-label">首页</span>
			</a>
			<a class="mui-tab-item" id="testt" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist">
				<span class="mui-icon logo02"></span>
				<span class="mui-tab-label">全部商品</span>
			</a>
			<a class="mui-tab-item" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist">
				<span class="mui-icon logo03"></span>
				<span class="mui-tab-label">晒单</span>
			</a>
			<a class="mui-tab-item" href="account/account_app.html">
				<span class="mui-icon logo04"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>
		<div class="mui-content" style="background-color: transparent;">





		</div>

		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
		<script>
		mui.init({
			gestureConfig:{
				doubletap:true
			},
			subpages:[{
				url:'<?php echo WEB_PATH; ?>/mobile/mobile/index_inner',
				id:'index_inner.html',
				styles:{
					top: '50px',
					bottom: '70px',
				}
			}]
		});

		var contentWebview = null;
		document.querySelector('header').addEventListener('doubletap',function () {
			if(contentWebview==null){
				contentWebview = plus.webview.currentWebview().children()[0];
			}
			contentWebview.evalJS("mui('#pullrefresh').pullRefresh().scrollTo(0,0,100)");
		});



		mui('.mui-table-view-cell').on('tap', 'a', function() {
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
