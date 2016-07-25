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
		</style>
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title">商品详情</h1>
		</header>
		<nav class="mui-bar mui-bar-tab mui-bottom-part" style="background-color: #FFF; border-top: 1px solid #f2f2f2; height: 50px;">
			<div class="bottom_left">
				<span style="line-height: 50px; margin-right: 5px; padding-left: 15px;">份数:</span>
				<div class="mui-numbox" data-numbox-min='1' data-numbox-max='9'>
					<button class="mui-btn mui-btn-numbox-minus" type="button">-</button>
					<input id="test" class="mui-input-numbox" type="number" value="5" />
					<button class="mui-btn mui-btn-numbox-plus" type="button">+</button>
				</div>
			</div>
			<button type="button" class="mui-btn mui-btn-warning" style="background-color: #ff9a15; border: none 0; margin-top: 3px; float: right; margin-right: 15px;">
					立即夺宝
				</button>
		</nav>
		<div class="mui-content">
			<div id="scroll" class="mui-scroll-wrapper" style="padding-top: 50px; padding-bottom:70px;">
				<div class="mui-scroll">
					<div style="padding: 15px; background-color: #FFF;">
	            		<div class="index_imgBox"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $item['thumb']; ?>"></div>
	                    <div class="mui-media-body" style="text-align: left; "><span style="color: #E73434;">[进行中]</span><?php echo $item['title']; ?></div>
	                    <div class="mui-media-body" style="text-align: left; font-size: 12px; color: #999; ">期号：<span style="color: #999;"><?php echo $item['qishu']; ?></span></div>
	                    <div class="progressBox">
                        <h5 style="margin: 0;"><?php echo $item['canyurenshu']; ?>份</h5>
                        <div style="margin-top: 5px;"><span style="width:<?php echo $item['canyurenshu']/$item['zongrenshu']*100; ?>%;"></span></div>
	                    </div>
	                    <div class="index_imgBoxBottom">
	                    	<h4>共<?php echo $item['zongrenshu']; ?>份</h4>
	                    	<h4 style="float: right;">剩余<?php echo $item['zongrenshu']-$item['canyurenshu']; ?>份</h4>
	                    </div>
	                    <div class="details_passage">商品详情：<?php echo $item['title2']; ?></div>
              	<ul class="mui-table-view">
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#" style="font-size: 16px; border-left: 3px solid #FF9A15;">中奖计算说明</a>
								<div class="mui-collapse-content">
									<h5 style="font-size: 15px; line-height: 20px; ">中奖计算说明中奖计算说明中奖计算说明中奖计算说明</h5>
								</div>
							</li>
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#" style="font-size: 16px; border-left: 3px solid #ffc983;">往期揭晓</a>
								<div class="mui-collapse-content">
									<h5 style="font-size: 300;">小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库是小金库</h5>
								</div>
							</li>
							<li class="mui-table-view-cell mui-collapse">
								<a class="mui-navigate-right" href="#" style="font-size: 16px; border-left: 3px solid #FF9A15;">谁参与了</a>
                <?php $ln=1;if(is_array($cords)) foreach($cords AS $c): ?>
								<div class="mui-collapse-content">
									<div class="details_content">
										<div class="details_contentImg"><img src="<?php echo G_UPLOAD_PATH; ?>/photo/member.jpg"></div>
										<div class="details_contentLeft">
											<p><?php echo userid($c['uid'],'username'); ?><span></span></p>
											<h5>购买了8份</h5>
										</div>
										</div>
										<div class="details_contentRight">2016-06-12 13:06:35</div>
									</div>
                  <?php  endforeach; $ln++; unset($ln); ?>
								</div>
							</li>
						</ul>

					</div>

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
