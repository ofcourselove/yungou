<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet"  href="<?php echo G_TEMPLATES_CSS; ?>/mobile/mui.css">
		<link rel="stylesheet"  href="<?php echo G_TEMPLATES_CSS; ?>/mobile/app.css">

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

			.mui-bar~.mui-content .mui-fullscreen {
				top: 50px;
				height: auto;
			}
			.mui-pull-top-tips {
				position: absolute;
				top: -20px;
				left: 50%;
				margin-left: -25px;
				width: 40px;
				height: 40px;
				border-radius: 100%;
				z-index: 1;
			}
			.mui-bar~.mui-pull-top-tips {
				top: 24px;
			}
			.mui-pull-top-wrapper {
				width: 42px;
				height: 42px;
				display: block;
				text-align: center;
				background-color: #efeff4;
				border: 1px solid #ddd;
				border-radius: 25px;
				background-clip: padding-box;
				box-shadow: 0 4px 10px #bbb;
				overflow: hidden;
			}
			.mui-pull-top-tips.mui-transitioning {
				-webkit-transition-duration: 200ms;
				transition-duration: 200ms;
			}
			.mui-pull-top-tips .mui-pull-loading {
				/*-webkit-backface-visibility: hidden;
				-webkit-transition-duration: 400ms;
				transition-duration: 400ms;*/

				margin: 0;
			}
			.mui-pull-top-wrapper .mui-icon,
			.mui-pull-top-wrapper .mui-spinner {
				margin-top: 7px;
			}
			.mui-pull-top-wrapper .mui-icon.mui-reverse {
				/*-webkit-transform: rotate(180deg) translateZ(0);*/
			}
			.mui-pull-bottom-tips {
				text-align: center;
				background-color: #efeff4;
				font-size: 15px;
				line-height: 40px;
				color: #777;
			}
			.mui-pull-top-canvas {
				overflow: hidden;
				background-color: #fafafa;
				border-radius: 40px;
				box-shadow: 0 4px 10px #bbb;
				width: 40px;
				height: 40px;
				margin: 0 auto;
			}
			.mui-pull-top-canvas canvas {
				width: 40px;
			}
			.mui-slider-indicator.mui-segmented-control {
				background-color: #efeff4;
			}
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav" >
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title">晒单</h1>
		</header>
    <?php include templates("mobile/index","foot");?>

		<div class="mui-content" >
			<div id="slider" class="mui-slider mui-fullscreen" style="background-color: #FFF;">
				<a href="<?php echo WEB_PATH; ?>/mobile/home/postsingle/<?php echo $sdhf_userid; ?>"class="addBtn"><span class="mui-icon mui-icon-plusempty"></span></a>
				<div class="mui-slider-group">
					<div id="item1mobile" class="mui-slider-item mui-control-content mui-active" >
						<div id="scroll1" class="mui-scroll-wrapper" >
							<div class="mui-scroll"  style="padding: 15px; padding-bottom: 100px;">
                <?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sd): ?>
								<div class="listBox" style="height: auto; padding-bottom: 15px; border-bottom: 1px solid #eee;">
									<div class="show_allBox">
										<div class="show_allBoxLeft"><img src="<?php echo G_UPLOAD_PATH; ?>/photo/member.jpg"></div>
										<div class="show_allBoxRight">
											<h4>	<?php echo $sd['sdhf_username']; ?></h4>
											<h5><?php echo date('Y-m-d H:i:s',$sd['sdhf_time']); ?></h5>
										</div>
									</div>
									<div style="overflow: hidden;">
										<div class="list_imgBox" style="width: 30%; margin-right: 5%; height: 100px;"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sdhf_img']; ?>"></div>
									</div>
									<h4 class="show_h4" style="color: #FF9A15;"><?php echo $sd['sdhf_content']; ?></h4>
								</div>
							  	<?php  endforeach; $ln++; unset($ln); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.pullToRefresh.js"></script>
		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.pullToRefresh.material.js"></script>
		<script>

		mui('.mui-scroll-wrapper').scroll();



			mui.init();
			(function($) {
				//阻尼系数
				var deceleration = mui.os.ios?0.003:0.0009;
				$('.mui-scroll-wrapper').scroll({
					bounce: false,
					indicators: true, //是否显示滚动条
					deceleration:deceleration
				});
				$.ready(function() {
					//循环初始化所有下拉刷新，上拉加载。
					$.each(document.querySelectorAll('.mui-slider-group .mui-scroll'), function(index, pullRefreshEl) {
						$(pullRefreshEl).pullToRefresh({
//							down: {
//								callback: function() {
//									var self = this;
//									setTimeout(function() {
//										var ul = self.element.querySelector('.mui-table-view');
//										ul.insertBefore(createFragment(ul, index, 10, true), ul.firstChild);
//										self.endPullDownToRefresh();
//									}, 1000);
//								}
//							},
							up: {
								callback: function() {
									var self = this;
									setTimeout(function() {
										var ul = self.element.querySelector('.mui-table-view');
										ul.appendChild(createFragment(ul, index, 5));
										self.endPullUpToRefresh();
									}, 1000);
								}
							}
						});
					});
					var createFragment = function(ul, index, count, reverse) {
						var length = ul.querySelectorAll('li').length;
						var fragment = document.createDocumentFragment();
						var li;
						for (var i = 0; i < count; i++) {
							li = document.createElement('li');
							li.className = 'mui-table-view-cell';
							li.innerHTML = '第' + (index + 1) + '个选项卡子项-' + (length + (reverse ? (count - i) : (i + 1)));
							fragment.appendChild(li);
						}
						return fragment;
					};
				});
			})(mui);



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
