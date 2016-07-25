<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

	<head>
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




		<meta charset="utf-8">
		<!-- <title><?php echo $webname; ?>5666</title> -->
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet"  href="<?php echo G_TEMPLATES_CSS; ?>/mobile/mui.css">
		<link rel="stylesheet"  href="<?php echo G_TEMPLATES_CSS; ?>/mobile/app.css">
		<style>
			.mui-table-view-cell:after{
				height: 0;
			}
			.mui-grid-view.mui-grid-9 .mui-table-view-cell > a:not(.mui-btn){
				padding: 0;
			}
			.mui-grid-view.mui-grid-9 .mui-table-view-cell{
				padding:10px;
			}
		</style>
	</head>

	<body>
    <div class="h5-1yyg-v1" id="loadingPicBlock">
      <div class="mui-bar mui-bar-tab mui-bottom-part">

        <!-- <?php include templates("mobile/index","head");?> -->
      </div>
		<!--下拉刷新容器-->
		<div id="pullrefresh" class="mui-content mui-scroll-wrapper">

			<div class="mui-scroll">
				<!--数据列表-->
				<div id="slider" class="mui-slider">
				<div class="mui-slider-group mui-slider-loop">
					<!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
					<div class="mui-slider-item mui-slider-item-duplicate">
						<a href="#">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_banner_02.jpg">
						</a>
					</div>
					<!-- 第一张 -->
					<div class="mui-slider-item">
						<a href="#" id="mutual/fund_company_private_details">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_banner_02.jpg">
						</a>
					</div>
					<!-- 第二张 -->
					<div class="mui-slider-item" >
						<a href="#" id="static_bond">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_banner_02.jpg">
						</a>
					</div>
					<!-- 第三张 -->
					<div class="mui-slider-item" >
						<a id="static_plan">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_banner_02.jpg">
						</a>
					</div>
					<!-- 第四张 -->
					<div class="mui-slider-item" >
						<a id="static_plan">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_banner_02.jpg">
						</a>
					</div>
					<!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
					<div class="mui-slider-item mui-slider-item-duplicate">
						<a href="#">
							<img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_banner_02.jpg">
						</a>
					</div>
				</div>
				<div class="mui-slider-indicator">
					<div class="mui-indicator mui-active"></div>
					<div class="mui-indicator"></div>
					<div class="mui-indicator"></div>
					<div class="mui-indicator"></div>
				</div>
			</div>
				<ul class="mui-table-view mui-table-view-chevron">
					<li class="mui-table-view-cell indexListName">
						<h4>最新揭晓</h4>
						<span class="mui-icon mui-icon-forward"></span>
						<h5 style="float: right;">更多</h5>
					</li>
					<ul class="mui-table-view mui-grid-view mui-grid-9" style="background-color: #FFF;">
            <?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>
            <?php 
            $qishu['q_user'] = unserialize($qishu['q_user']);
             ?>
			            <li class="mui-table-view-cell mui-media mui-col-xs-6">
			            		<div class="index_imgBox">
												<div class="mui-bottom-part">
													<a id="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $qishu['id']; ?>">
														<img  src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>">
													</a>
												</div>
                        <ins class="u-promo">价值:￥<?php echo $qishu['money']; ?></ins>
                      </div>
                          <div class="mui-media-body" style="text-align: left;"><?php echo $qishu['title']; ?></div>
			                    <!-- <div class="progressBox">
			                    	<h5><?php echo $qishu['canyurenshu']/$qishu['zongrenshu']*100; ?>%</h5>
			                    	<div><span style="width: <?php echo $qishu['canyurenshu']/$qishu['zongrenshu']*100; ?>%;"></span></div>
			                    </div>
			                    <div class="index_imgBoxBottom">
			                    	<h4>共<?php echo $qishu['zongrenshu']; ?>份</h4>
			                    	<h4 style="float: right;">剩余<?php echo $renqi['zongrenshu']-$qishu['canyurenshu']; ?>份</h4>
			                    </div> -->
			            </li>
                  <?php  endforeach; $ln++; unset($ln); ?>
			            <!-- <li class="mui-table-view-cell mui-media mui-col-xs-6">
			            	<a href="#">
			            		<div class="index_imgBox"><img src="<?php echo G_TEMPLATES_IMAGE; ?>/mobile/index_pic_03.jpg"></div>
			                    <div class="mui-media-body" style="text-align: left;">全新路虎发现神行</div>
			                    <div class="progressBox">
			                    	<h5>81%</h5>
			                    	<div><span style="width: 81%;"></span></div>
			                    </div>
			                    <div class="index_imgBoxBottom">
			                    	<h4>共1000份</h4>
			                    	<h4 style="float: right;">剩余59份</h4>
			                    </div>
			            	</a>
			            </li> -->
			        </ul>
			        <li class="mui-table-view-cell indexListName">
						<a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist"><h4>热门商品</h4></a>
					</li>
					<ul class="mui-table-view mui-grid-view mui-grid-9" style="background-color: #FFF;">
						<a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $shoplistrenqi['id']; ?>">详情</a>
              <?php $ln=1;if(is_array($shoplistrenqi)) foreach($shoplistrenqi AS $renqi): ?>
			            <li class="mui-table-view-cell mui-media mui-col-xs-6">
			            		<div class="index_imgBox">
												<div class="mui-bottom-part">
													<a id="<?php echo WEB_PATH; ?>/mobile/mobile/item/<?php echo $renqi['id']; ?>">
														<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>">
													</a>
												</div>
											</div>
			                    <!-- <div class="mui-media-body" style="text-align: left;">全新路虎发现神行</div> -->
			                    <div class="progressBox">
			                    	<h5><?php echo $renqi['canyurenshu']; ?>份</h5>
			                    	<div><span style="width:<?php echo $renqi['canyurenshu']/$renqi['zongrenshu']*100; ?>%;"></span></div>
			                    </div>
			                    <div class="index_imgBoxBottom">
			                    	<h4>共<?php echo $renqi['zongrenshu']; ?>份</h4>
			                    	<h4 style="float: right;">剩余<?php echo $renqi['zongrenshu']-$renqi['canyurenshu']; ?>份</h4>
			                    </div>
			            </li>
			          <?php  endforeach; $ln++; unset($ln); ?>
			        </ul>
				</ul>
			</div>
		</div>
		<!-- <nav class="mui-bar mui-bar-tab mui-bottom-part">
					<a class="mui-tab-item mui-active" id="<?php echo WEB_PATH; ?>/mobile/mobile/init" >
						<span class="mui-icon logo01"></span>
						<span class="mui-tab-label">首页</span>
					</a>
					<a class="mui-tab-item" id="<?php echo WEB_PATH; ?>/mobile/mobile/glist">
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
				</nav> -->
				<?php include templates("mobile/index","foot");?>

		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
		<script>
			mui.init({
				pullRefresh: {
					container: '#pullrefresh',
					up: {
						contentrefresh: '正在加载...',
						callback: pullupRefresh
					}
				}
			});
			/**
			 * 下拉刷新具体业务实现
			 */
//			function pulldownRefresh() {
//				setTimeout(function() {
//					var table = document.body.querySelector('.mui-table-view');
//					var cells = document.body.querySelectorAll('.mui-table-view-cell');
//					for (var i = cells.length, len = i + 3; i < len; i++) {
//						var li = document.createElement('li');
//						li.className = 'mui-table-view-cell';
//						li.innerHTML = '<a class="mui-navigate-right">Item ' + (i + 1) + '</a>';
//						//下拉刷新，新纪录插到最前面；
//						table.insertBefore(li, table.firstChild);
//					}
//					mui('#pullrefresh').pullRefresh().endPulldownToRefresh(); //refresh completed
//				}, 1500);
//			}
			var count = 0;
			/**
			 * 上拉加载具体业务实现
			 */
			function pullupRefresh() {
				setTimeout(function() {
					mui('#pullrefresh').pullRefresh().endPullupToRefresh((++count > 2)); //参数为true代表没有更多数据了。
					var table = document.body.querySelector('.mui-table-view');
					var cells = document.body.querySelectorAll('.mui-table-view-cell');
					for (var i = cells.length, len = i + 20; i < len; i++) {
						var li = document.createElement('li');
						li.className = 'mui-table-view-cell';
						li.innerHTML = '<a class="mui-navigate-right">Item ' + (i + 1) + '</a>';
						table.appendChild(li);
					}
				}, 1500);
			}
			mui('.mui-bottom-part').on('tap', 'a', function() {
					//打开关于页面
						var _url = this.getAttribute("id");
						mui.openWindow({
							url: _url ,
							id:_url
						});
				});

//			if (mui.os.plus) {
//				mui.plusReady(function() {
//					setTimeout(function() {
//						mui('#pullrefresh').pullRefresh().pullupLoading();
//					}, 1000);
//
//				});
//			} else {
//				mui.ready(function() {
//					mui('#pullrefresh').pullRefresh().pullupLoading();
//				});
//			}


		</script>
  </div>
	</body>

</html>
