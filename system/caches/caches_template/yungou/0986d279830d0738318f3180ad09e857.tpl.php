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
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title">XX夺宝</h1>
		</header>
		<nav class="mui-bar mui-bar-tab mui-bottom-part">
			<a class="mui-tab-item" id="index" >
				<span class="mui-icon logo01"></span>
				<span class="mui-tab-label">首页</span>
			</a>
			<a class="mui-tab-item mui-active" id="list">
				<span class="mui-icon logo02"></span>
				<span class="mui-tab-label">全部商品</span>
			</a>
			<a class="mui-tab-item" id="show_all">
				<span class="mui-icon logo03"></span>
				<span class="mui-tab-label">晒单</span>
			</a>
			<a class="mui-tab-item" id="account">
				<span class="mui-icon logo04"></span>
				<span class="mui-tab-label">我的</span>
			</a>
		</nav>
		<div class="mui-content">
			<div id="slider" class="mui-slider mui-fullscreen" style="background-color: #FFF;">
				<div style=" background-color: #FFF; height: 40px; padding-top: 5px; border-bottom: 1px solid #eee;">
					<div id="segmentedControl" class="mui-segmented-control">
						<a class="mui-control-item mui-active" href="#item1mobile">正在进行</a>
						<a class="mui-control-item" href="#item2mobile">最新揭晓</a>
						<a class="mui-control-item" href="#item3mobile">往期夺宝</a>
					</div>
				</div>
				<div class="mui-slider-group">
					<div id="item1mobile" class="mui-slider-item mui-control-content mui-active" >
						<div id="scroll1" class="mui-scroll-wrapper">
							<div class="mui-scroll"  style="padding: 15px; padding-bottom: 120px;">
								<?php $ln=1;if(is_array($shoplist_ing)) foreach($shoplist_ing AS $list): ?>
	 								 <?php 
	 									 $list['q_user'] = unserialize($list['q_user']);
	 								  ?>
								<div class="listBox">
									<a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $list['id']; ?>">
									<div class="list_imgBox"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $list['thumb']; ?>"></div>
								  </a>
									<div class="list_rightBox">
										<div class="mui-media-body" style="text-align: left;"><?php echo $lsit['title']; ?></div>
										<div class="mui-media-body" style="text-align: left; font-size: 12px; color: #999;">期号：<?php echo $list['qishu']; ?></div>
					                    <div class="progressBox">
					                    	<h5 style="margin: 0;"><?php echo $list['canyurenshu']; ?>份</h5>
					                    	<div style="margin-top: 5px;"><span style="width:<?php echo $list['canyurenshu']/$list['zongrenshu']*100; ?>%;"></span></div>
					                    </div>
					                    <div class="index_imgBoxBottom" style="padding-top: 5px;">
					                    	<h4>共<?php echo $list['zongrenshu']; ?>份</h4>
					                    	<h4 style="float: right;">剩余<?php echo $list['zongrenshu']-$list['canyurenshu']; ?>份</h4>
					                    </div>
					                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block" style="padding:0; background-color: #ff9a15; margin-top: 10px; border: none 0; font-size: 16px; height: 25px;">立即夺宝</button>
									</div>
								</div>
                <?php  endforeach; $ln++; unset($ln); ?>
							</div>
						</div>
					</div>
					<div id="item2mobile" class="mui-slider-item mui-control-content">
						<div class="mui-scroll-wrapper">
							<div class="mui-scroll"  style="padding: 15px; padding-bottom: 120px;">
								<?php $ln=1;if(is_array($shoplist_new)) foreach($shoplist_new AS $lnew): ?>
										<?php 
											$lnew['q_user'] = unserialize($lnew['q_user']);
										 ?>
										<div class="listBox">
											<a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $lnew['id']; ?>">
											<div class="list_imgBox"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $lnew['thumb']; ?>"></div>
										  </a>
											<div class="list_rightBox">
												<!-- <div class="mui-media-body" style="text-align: left;"><?php echo $lnew['title']; ?></div> -->
												<div class="mui-media-body" style="text-align: left; font-size: 12px; color: #999;">期号：<?php echo $lnew['qishu']; ?></div>
							                    <div class="progressBox">
							                    	<h5 style="margin: 0;"><?php echo $lnew['canyurenshu']; ?>份</h5>
							                    	<div style="margin-top: 5px;"><span style="width:<?php echo $lnew['canyurenshu']/$lnew['zongrenshu']*100; ?>%;"></span></div>
							                    </div>
							                    <div class="index_imgBoxBottom" style="padding-top: 5px;">
							                    	<h4>共<?php echo $lnew['zongrenshu']; ?>份</h4>
							                    	<h4 style="float: right;">剩余<?php echo $lnew['zongrenshu']-$lnew['canyurenshu']; ?>份</h4>
							                    </div>
							                    <button type="button" class="mui-btn mui-btn-warning mui-btn-block" style="padding:0; background-color: #ff9a15; margin-top: 10px; border: none 0; font-size: 16px; height: 25px;">立即夺宝</button>
											</div>
										</div>
                <?php  endforeach; $ln++; unset($ln); ?>
							</div>
						</div>
					</div>
					<div id="item3mobile" class="mui-slider-item mui-control-content">
						<div class="mui-scroll-wrapper">
							<div class="mui-scroll"  style="padding: 15px; padding-bottom: 120px;">

								<?php $ln=1;if(is_array($shoplist_lottery)) foreach($shoplist_lottery AS $lottery): ?>
										<?php 
											$lottery['q_user'] = unserialize($lottery['q_user']);
										 ?>
								<div class="listBox">
									<a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $lottery['id']; ?>">
									<div class="list_imgBox"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $lottery['thumb']; ?>"><span>揭晓时间：<?php echo microt($lottery['q_end_time'],'r'); ?></span></div>
									</a>
									<div class="list_rightBox" style="padding-top: 0px;">
										<!-- <div class="mui-media-body" style="text-align: left;"><?php echo $lottery['title']; ?><span style="font-size: 12px; color: #999; float: right;">已揭晓</span></div> -->
										<div class="mui-media-body" style="text-align: left; font-size: 12px; color: #999; ">期号：<span style="color: #999;"><?php echo $lottery['qishu']; ?></span></div>
										<div class="mui-media-body" style="text-align: left; font-size: 12px;">获得者：<span><?php echo get_user_name($lottery['q_user']); ?></span></div>
										<div class="mui-media-bod" style="text-align: left; font-size: 12px;">幸运代码：<b class="orange"><?php echo $lottery['q_user_code']; ?></b></div>
									</div>
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
