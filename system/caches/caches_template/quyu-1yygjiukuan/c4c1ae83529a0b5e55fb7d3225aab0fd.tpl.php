<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>﻿<?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/Home.css"/>
<style>
.g-frame-head,div{margin: 0;}
.u-txt {
z-index: 10;
}
.g-width {
width:1190px;
}
</style>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/layer/layer.min.js"></script>
<div id="index_desc" class="hide layer_pageContent" style="display: none;"><img src="<?php echo G_UPLOAD_PATH; ?>/banner/indexad.jpg"></div>
<script>
$(function(){
	var index_show = $.cookie('index_show');
	if(!index_show){
		$.layer({
	        type : 1,
	        title : false,
	        // time: 3,
	        fix : false,
	        offset:['50px' , ''],
	        border: [0],
	        area : ['580px','754px'],
	        page : {dom : '#index_desc'}
	    });
	    $.cookie('index_show','1',{expires: 7});
	}
});
</script>
<script type="text/javascript" >
  $(function(){
	    var _BuyList=$("#buyList");
        var Trundle = function () {
            _BuyList.prepend(_BuyList.find("li:last")).css('marginTop', '-85px');
            _BuyList.animate({ 'marginTop': '0px' }, 800);
        }
        var setTrundle = setInterval(Trundle, 3000);
        _BuyList.hover(function () {
            clearInterval(setTrundle);
            setTrundle = null;
        },function () {
            setTrundle = setInterval(Trundle, 3000);
        });
    });
	
	
	  $(function(){
	    var _BuyList=$("#ulReplyList");
        var Trundle = function () {
            _BuyList.prepend(_BuyList.find("li:last")).css('marginTop', '-85px');
            _BuyList.animate({ 'marginTop': '0px' }, 800);
        }
        var setTrundle = setInterval(Trundle, 3000);
        _BuyList.hover(function () {
            clearInterval(setTrundle);
            setTrundle = null;
        },function () {
            setTrundle = setInterval(Trundle, 3000);
        });
    });

</script>
  <!--中间内容-->
  	<div class="g-frame-content">
		<!--第一屏-->
		<div class="g-width g-hot">
			<!--左侧-->
			<div class="g-hot-left">
				<!--最新揭晓-->
				<div class="m-rolling">
					<div class="m-rolling-radius">
						<div class="u-rolling-txt">
							<s class="f-rolling-l"></s>
							<div class="m-rolling-content">
								<div class="m-rolling-tit Fl" id="divRaffList" style="margin-top: 0;width:920px;">
                                                                  <?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>
                                                                <?php 
                                                                        $qishu['q_user'] = unserialize($qishu['q_user']);
                                                                 ?>
                                                                        <div codeid="<?php echo $qishu['q_uid']; ?>" class="divls" last="">
                                                                                <div>
                                                                                        <span class="gray9">恭喜</span> 
                                                                                        <a        href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" class="blue mlr5"
                                                                                                target="_blank" title="<?php echo get_user_name($qishu['q_user']); ?>"><?php echo get_user_name($qishu['q_user']); ?></a> <span class="gray9"> 获得</span> <span><a
                                                                                                href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>"
                                                                                                target="_blank" class="gray6 mlr5" title="<?php echo $qishu['qishu']; ?><?php echo _strcut($qishu['title'],100); ?>">第(<?php echo $qishu['qishu']; ?>)期 <?php echo _strcut($qishu['title'],100); ?></a></span>
                                                                                          <a class="u-rolling-btn Fr orange" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>"> <span>立即围观</span> <i class="mod_dropmenu_arrow"></i></a>
                                                                                </div>
                                                                        </div>
                                                                 
                                                                <?php  endforeach; $ln++; unset($ln); ?>
                                                        
                                                           </div>
							</div>
							<i class="f-rolling-r"></i>
						</div>
					</div>
				</div>

				<!--新品推荐-->
				<div class="g-hot-tj Fl">
				<?php if($new_shop): ?>
					<div class="m-pic-txt">
						<s class="f-tj-tit"></s>

						<div class="u-txt">
							<h5>
								<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>"
									title="<?php echo $new_shop['title']; ?>" target="_blank" class="gray3"><?php echo _strcut($new_shop['title'],35); ?></a>
							</h5>
							<p class="gray9"><?php echo _strcut($new_shop['description'],30); ?></p>
						</div>
						<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>" target="_blank"
							title="<?php echo $new_shop['title']; ?>" class="u-img" rel="nofollow"> <img
							src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $new_shop['thumb']; ?>"
							border="0" alt="" width="100" height="100"></a>
					</div>					
				<?php endif; ?>
				
					<div class="g-good-faith">
						<p class="gray6">诚信保证 放心<?php echo _cfg('web_name_two'); ?></p>
						<ul class="m-good-size02">
							<li class="u-good01"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz1"target="_blank" 
								title="诚信网站认证" rel="nofollow"><s class="f-faith-img"></s>诚信网站<br>认证</a></li>
							<li class="u-good02"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz2" target="_blank" title="可信网站认证" rel="nofollow"><s
									class="f-faith-img"></s>可信网站<br>认证</a></li>
							<li class="u-good03"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz3" target="_blank" title="电子商务诚信认证" rel="nofollow"><s
									class="f-faith-img"></s>电子商务<br>诚信认证</a></li>
						</ul>
						<ul class="m-good-size01">
							<li class="u-good01"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#fw" target="_blank" title="100%公平公正" rel="nofollow"><s
									class="f-faith-img"></s>100%<br>公平公正</a></li>
							<li class="u-good02"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#fw" target="_blank" title="100%正品保证" rel="nofollow"><s
									class="f-faith-img"></s>100%<br>正品保证</a></li>
							<li class="u-good03"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#fw" target="_blank" title="全国免运费" rel="nofollow"><s
									class="f-faith-img"></s>全国<br>免运费</a></li>
						</ul>
						<ul class="m-good-size03">
							<li class="u-good01"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz4" target="_blank" title="安信宝认证" rel="nofollow"><s
									class="f-faith-img"></s>安信保<br>认证</a></li>
							<li class="u-good02"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz5" target="_blank" title="监督管理局认证" rel="nofollow"><s
									class="f-faith-img"></s>监督管理局<br>认证</a></li>
							<li class="u-good03"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification" >更多<span>&gt;&gt;</span></a></li>
						</ul><!--<?php echo WEB_PATH; ?>/go/index/qualification target="_blank"-->
					</div>
				</div>

				<!--广告与推荐-->
				<div class="g-hot-tu">
                <?php $slides=$this->DB()->GetList("select * from `@#_slide` where 1",array("type"=>1,"key"=>'',"cache"=>0)); ?>
				<div class="m-slides">
						<div id="div_guide" class="m-guide-con"	style="left: 0px; display: none;">
							<div class="m-guideBg"></div>
							<div class="m-guide">
									<ul id="ul_guide">
										<li class="f-step1" style="display: list-item;"><a
											href="javascript:;" title="30秒了解"></a> <img
											src="<?php echo G_UPLOAD_PATH; ?>/banner/step_01.gif?v=141113"></li>
										<li class="f-step2" style="display: none;"><a
											href="javascript:;" title="下一步"></a> <img
											src="<?php echo G_UPLOAD_PATH; ?>/banner/step_02.gif?v=141113"></li>
										<li class="f-step3" style="display: none;"><a
											href="javascript:;" title="下一步"></a> <img
											src="<?php echo G_UPLOAD_PATH; ?>/banner/step_03.gif?v=141113"></li>
										<li class="f-step4" style="display: none;"><a
											href="javascript:;" title="下一步"></a> <img
											src="<?php echo G_UPLOAD_PATH; ?>/banner/step_04.gif?v=141113"></li>
										<li class="f-step5" style="display: none;"><a
											href="javascript:;" title="下一步"></a> <img
											src="<?php echo G_UPLOAD_PATH; ?>/banner/step_05.gif?v=141113"></li>
										<li class="f-step6" style="display: none;"><a
											href="/?/single/newbie" target="_blank"
											title="继续了解详情"></a> <img
											src="<?php echo G_UPLOAD_PATH; ?>/banner/step_06.gif?v=141113"></li>
									</ul>
									<a id="guide_close" href="javascript:;" class="m-guide-close" title="关闭"></a>
							</div>
							<div class="u-guide-arrow">
									<a id="guide_pre" href="javascript:;" class="u-guide-prev" style="display: none;">
										<s></s>
									</a>
									<a id="guide_next" href="javascript:;" class="u-guide-next"><s></s></a>
							</div>
						</div>
                        <div id="slideImg" class="rslides" style="opacity: 1;">
							<ul id="slideul">
								 
								
								<?php $ln=1;if(is_array($slides)) foreach($slides AS $slide): ?>
								<?php if($ln == 1): ?>
								<li style="display:list-item;"><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>
								<?php  else: ?>
								<li style="display:none;"><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>
								<?php endif; ?>
								<?php  endforeach; $ln++; unset($ln); ?>
							</ul>
						</div>
                        <div id="posterBanner" style="display: none;"></div>
						 <a class="rslides_nav rslides1_nav pre" href="javascript:;" style="display: none;">Previous</a>
						 <a class="rslides_nav rslides1_nav next" href="javascript:;" style="display: none;">Next</a>
						 <ul class="rslides_tabs">
						<?php 					
							for($i=1;$i<=count($slides);$i++){
							echo '<li class=""><a href="javascript:;">'.$i.'</a></li>' ;
							}
						 ?>						
						</ul>
											</div>
				<style>
				.pcl{
				    margin-top:10px;
				    height: 6px;
					background: #DDD;
					position: relative;
					border-radius: 6px;
					font-size: 0;
					width: 108px;				
				}
				.scl{
					height: 6px;
					background: #F60;
					position: absolute;
					top: 0;
					left: 0;
					font-size: 0;
					border-radius: 6px;
					font-size: 0;				
				}
				</style>
					<div class="m-hot-pro">
						<ul>
						<?php $ln=1;if(is_array($ggshop)) foreach($ggshop AS $gshop): ?>
													<li>
								<div class="m-pic-txt">
									<div class="u-txt">
										<h5>
											<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gshop['id']; ?>"
												target="_blank" class="gray3"
												title="<?php echo $gshop['title']; ?>"><?php echo _strcut($gshop['title'],50); ?></a>
										</h5>
										<p class="gray9" title="<?php echo $gshop['description']; ?>"><?php echo _strcut($gshop['description'],20); ?>&nbsp;</p>
										
								 <p class="pcl" title="已完成<?php echo percent($gshop['canyurenshu'],$gshop['zongrenshu']); ?>">
									<span  class="scl" style="width:<?php echo percent($gshop['canyurenshu'],$gshop['zongrenshu']); ?>;"></span>
								</p>
										<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gshop['id']; ?>"
											target="_blank" rel="nofollow" title="立即购买"
											class="orange_btn">立即<?php echo _cfg('web_name_two'); ?></a>
									</div>
									<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gshop['id']; ?>"
										target="_blank" class="u-img" rel="nofollow"
										title="<?php echo $gshop['title']; ?>"> <img
										src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $gshop['thumb']; ?>"
										border="0" alt="<?php echo $gshop['title']; ?>"
										width="100" height="100"></a>
								</div>
							</li>
								 
							 <?php  endforeach; $ln++; unset($ln); ?>
								 
												</ul>
					</div>

				</div>
			</div>

			<!--右侧-->
			<div class="g-hot-right">
				<!--登录信息-->
				
				<?php if(get_user_arr()): ?>
				<div id="divIdxLogin" class="m-member">
				<div class="u-member-image">
				<a href="<?php echo WEB_PATH; ?>/member/home" target="_blank" title="<?php echo get_user_name(get_user_arr(),'username'); ?>">
				<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('3030'); ?>"></a>
				</div>
				<div class="u-member-info grayb"><p class="f-member-name"><span class="gray9">Hi，</span><a class="blue FB" href="<?php echo WEB_PATH; ?>/member/home" target="_blank" title="<?php echo get_user_name(get_user_arr(),'username'); ?>"><?php echo get_user_name(get_user_arr(),'username'); ?></a></p><p>经验值：<?php echo $member['jingyan']; ?></p><br/><p>积&nbsp;&nbsp;&nbsp;分：<?php echo $member['score']; ?></p></div>
				<div class="u-member-account"><span class="grayb">帐户余额：</span><span class="orange FB"><b></b><?php echo $member['money']; ?></span><a class="gray6 mlr5" href="<?php echo WEB_PATH; ?>/member/home/userrecharge" target="_blank">充值</a></div>
				</div>
				
				<?php  else: ?>
				   <div id="divIdxLogin" class="m-login">
						<p class="gray9">
							<em>Hi，</em>欢迎来到<?php echo _cfg('web_name_two'); ?>！
						</p>
						<a href="<?php echo WEB_PATH; ?>/login"
							class="f-login-btn">登录</a> <a
							href="<?php echo WEB_PATH; ?>/register"
							class="f-reg-btn">注册</a>
					</div>
				
				<?php endif; ?>													
				<div class="m-app-dow">
					<a id="what_1yyg" href="javascript:void(0);" title="什么是微众购？30秒了解" style="width:198px;height: 118px;display: block;">
                            <img src="<?php echo G_UPLOAD_PATH; ?>/banner/index-come.gif" alt="" style="width: 188px;">
					</a>
				</div>
				<div class="m-wx-gz">
					<s class="m-wx-img"><a target="_blank">
							<img src="<?php echo G_UPLOAD_PATH; ?>/banner/wx.jpg" border="0"
							alt="">
					</a></s>
					<div class="u-app-r">
						<a target="_blank"  class="gray6">关注官方微信</a>
						<p class="gray9">享微信专享服务</p>
						<p class="f-wx-tips"></p>
					</div>
				</div>
				<div class="m-notice">
					<div class="m-notice-tab">
						<ul id="myTab">
							<li class="f-notice-hover"><a href="javascript:;">公告</a></li>
							<li class=""><a href="javascript:;">常见问题</a></li>
						</ul>
					</div>
					<div id="myTab_Content0" class="m-notice-list u-block"
						style="display: block;">
						<ul>
							<!--获取圈子最新动态5条-->
											
							<?php $ln=1;if(is_array($ggtitle)) foreach($ggtitle AS $val): ?>				
							<li><span class="u-radius-point"></span><a href="<?php echo WEB_PATH; ?>/group/nei/<?php echo $val['id']; ?>" target="_blank" class="gray6" title="<?php echo $val['title']; ?>"> <?php echo _strcut($val['title'],40); ?></a></li>								
							<?php  endforeach; $ln++; unset($ln); ?>				
							 							
														<!--/获取圈子最新动态5条-->
						</ul>
					</div>
					<div class="m-notice-list u-block" style="display: none;">
						<ul>
										<li><span class="u-radius-point"></span><a class="gray6" href="<?php echo WEB_PATH; ?>/help/2" target="_blank" title="怎样查看我参与的商品有没有中奖">怎样查看我参与的商品有没有中奖</a></li>
							<li><span class="u-radius-point"></span><a class="gray6" href="<?php echo WEB_PATH; ?>/help/2" target="_blank" rel="nofollow" title="我获得了商品，我还需要支付其他费用吗">我获得了商品，我还需要支付其他费用吗</a></li>
							<li><span class="u-radius-point"></span><a class="gray6" href="<?php echo WEB_PATH; ?>/help/2" target="_blank" rel="nofollow" title="当我获得商品以后我该做什么">当我获得商品以后我该做什么</a></li>
							<li><span class="u-radius-point"></span><a class="gray6" href="<?php echo WEB_PATH; ?>/help/2" target="_blank" rel="nofollow" title="商品是正品吗？怎么保证"><?php echo _cfg('web_name_two'); ?>网的商品是正品吗？怎么保证</a></li>
							<li><span class="u-radius-point"></span><a class="gray6" href="<?php echo WEB_PATH; ?>/help/2" target="_blank" rel="nofollow" title="如何晒单分享">如何晒单分享</a></li>
						</ul>
					</div>
				</div>
				</div>
				</div>
			</div>
		</div>

		<!--即将揭晓-->
		<div class="g-width g-publish">
			<div class="g-publish-l">
				<div class="g-tit">
					<h2 class="gray3">最新揭晓</h2>
					<a href="<?php echo WEB_PATH; ?>/goods_lottery" target="_blank"
					class="g-tit-more"><em>更多</em><i class="mod_dropmenu_arrow"></i></a>
				</div>
				<div class="m-publish-list">
					<ul class="m-publish-list-hd" id="ulNewAwary">
					<?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>
            <?php 
            	$qishu['q_user'] = unserialize($qishu['q_user']);
             ?>
						  	<li class="new_li">
							<a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="pic"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" /></a>
							<a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="name">第<?php echo $qishu['qishu']; ?>期 <?php echo _strcut($qishu['title'],50); ?></a>
							<span class="winner" style="display: inline-block;">获得者：<strong><a rel="nofollow" class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>" target="_blank"><?php echo get_user_name($qishu['q_user']); ?></a></strong></span>
						</li>
						<?php  endforeach; $ln++; unset($ln); ?>
			 
										</ul>
					<!------>
						<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/GLotteryFun.js"></script>
						<script type="text/javascript">
							$(document).ready(function(){gg_show_time_init("ulNewAwary",'<?php echo WEB_PATH; ?>',0);});					
						</script>  
					<!------>
				</div>
			</div>
			<div class="g-publish-l">
				<div class="g-tit">
					<h2 class="gray3">即将揭晓</h2>
					<a href="<?php echo WEB_PATH; ?>/goods_list/0_0_1" target="_blank" class="g-tit-more"><em>更多</em><i class="mod_dropmenu_arrow"></i></a>
				</div>
				<div class="m-publish-list">
					<ul class="m-publish-list-hd">
						
						<?php $ln=1;if(is_array($shoplist)) foreach($shoplist AS $shop): ?>
						<li class="g-goods-list">
							<div class="pic">
								<a rel="nofollow" href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>"
									target="_blank" title="<?php echo $shop['title']; ?>"> <img
									alt="<?php echo $shop['title']; ?>"
									src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $shop['thumb']; ?>"></a>
							</div>
							<p class="name">
								<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>"
									target="_blank" title="<?php echo $shop['title']; ?>"><?php echo _strcut($shop['title'],50); ?></a>
							</p>
							<p class="F_money">
								价值：<span class="F_dig"><span class="rmb"></span><?php echo $shop['money']; ?></span>
							</p>
							<div class="Progress-bar">
								<p title="已完成<?php echo percent($shop['canyurenshu'],$shop['zongrenshu']); ?>">
									<span style="width:<?php echo percent($shop['canyurenshu'],$shop['zongrenshu']); ?>;"></span>
								</p>
								<ul class="Pro-bar-li">
									<li class="P-bar01"><em><?php echo $shop['canyurenshu']; ?></em>已参与</li>
									<li class="P-bar02"><em><?php echo $shop['zongrenshu']; ?></em>总需人次</li>
									<li class="P-bar03"><em><?php echo $shop['zongrenshu']-$shop['canyurenshu']; ?></em>剩余</li>
								</ul>
							</div>
							<div class="g_buybtn">
								<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>"
									target="_blank" rel="nofollow" title="立即购买"
									class="orange_btn">立即<?php echo _cfg('web_name_two'); ?></a>
							</div>
							<div class="goods_Curbor"></div>
						</li>
						<?php  endforeach; $ln++; unset($ln); ?>	
				 
										</ul>
				</div>
			</div>
			<div class="g-publish-r" style="height: 690px;">
				<div class="g-right-title">
					<h3 class="gray3">TA正在<?php echo _cfg('web_name_two'); ?></h3>
					<a href="<?php echo WEB_PATH; ?>/buyrecordbai" target="_blank"
						class="gray9 Fr"> <span>最新100条记录</span> <i
						class="mod_dropmenu_arrow"></i>
					</a>
				</div>
				<div class="g-share" >
					<input name="hidBuyID" type="hidden" id="hidBuyID" value="">
					<ul id="buyList" style="margin-top: 0px;">
											
						<?php $ln=1;if(is_array($go_record)) foreach($go_record AS $gorecord): ?>
						<li><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" target="_blank"
							class="f-pic" rel="nofollow" title="<?php echo get_user_name($gorecord); ?>"><img alt="" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo shopimg($gorecord['shopid']); ?>" width="40" height="40"></a>
							<div class="m-share-txt gray6">
								<a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($gorecord['uid']); ?>" class="f-name blue" target="_blank" title="<?php echo get_user_name($gorecord); ?>"><?php echo get_user_name($gorecord); ?></a><span class="f-share-tit"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" class="gray6" title="<?php echo $gorecord['shopname']; ?>"><?php echo $gorecord['shopname']; ?></a></span>
							</div>
						</li>
						<?php  endforeach; $ln++; unset($ln); ?>			   
										 
					</ul>
				</div>
			</div>
		</div>

		<!--热门推荐-->
		<div class="g-width g-recommend">
			<div class="g-recommend-l">
				<div class="g-tit">
					<h2 class="gray3">热门推荐</h2>
				</div>
				<div class="g-recommend-list">
					<div class="g-left-ad">
						<div id="divHotRec" class="m-position">
							<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shoplistrenqi['id']; ?>" title="<?php echo $shoplistrenqi['title']; ?>" target="_blank"><img
								src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $shoplistrenqi['posthumb']; ?>" alt=""
								width="206" height="370"></a>
						</div>
					</div>
					<div class="hotRecList">
						<ul id="ulHotRecList1" class="g-recommed-goods">
							
							<?php $ln=1;if(is_array($shoplistrenqi2)) foreach($shoplistrenqi2 AS $renqi): ?>
							<li class="g-goods-list"><div class="pic">
									<a rel="nofollow"
										href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank"
										title="<?php echo $renqi['title']; ?>"><img alt="<?php echo $renqi['title']; ?>"
										src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>"></a>
								</div>
								<p class="name">
									<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>"
										target="_blank" title="<?php echo $renqi['title']; ?>"><?php echo _strcut($renqi['title'],50); ?></a>
								</p>
								<p class="F_money">
									价值：<span class="F_dig"><span class="rmb"></span><?php echo $renqi['money']; ?></span>
								</p>
								<div class="goods_Curbor">
									<div class="pic">
										<a rel="nofollow"
											href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>"
											target="_blank" title="<?php echo $renqi['title']; ?>"><img
											alt="<?php echo $renqi['title']; ?>"
											src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>"></a>
									</div>
									<div class="Progress-bar">
										<p title="已完成<?php echo percent($renqi['canyurenshu'],$renqi['zongrenshu']); ?>">
											<span style="width:<?php echo percent($renqi['canyurenshu'],$renqi['zongrenshu']); ?>;"></span>
										</p>
										<ul class="Pro-bar-li">
											<li class="P-bar01"><em><?php echo $renqi['canyurenshu']; ?></em>已参与</li>
											<li class="P-bar02"><em><?php echo $renqi['zongrenshu']; ?></em>总需人次</li>
											<li class="P-bar03"><em><?php echo $renqi['zongrenshu']-$renqi['canyurenshu']; ?></em>剩余</li>
										</ul>
									</div>
									<div class="g_buybtn">
										<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>"
											title="立即购买" class="orange_btn">立即<?php echo _cfg('web_name_two'); ?></a>
									</div>
								</div></li>
								
								<?php  endforeach; $ln++; unset($ln); ?>
													 
													</ul>
													
													
													
							<ul id="ulHotRecList2" class="g-recommed-ad">
							<?php $ln=1;if(is_array($shoplistrenqi3)) foreach($shoplistrenqi3 AS $renqi): ?>
														<li><div class="m-pic-txt">
										<div class="u-txt">
											<h5 class="gray3" title="<?php echo $renqi['title']; ?>">
												<a class="gray6"
													href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>"
													target="_blank"><?php echo _strcut($renqi['title'],50); ?></a>
											</h5>
											<p class="orange" title="<?php echo $renqi['description']; ?>"><?php echo _strcut($renqi['description'],30); ?></p>
										</div>
										<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>"
											target="_blank" class="u-img"
											title="<?php echo $renqi['title']; ?>"><img
											src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>"
											border="0" alt=""></a>
									</div>
								</li>
								<?php  endforeach; $ln++; unset($ln); ?>			 
							</ul>
					</div>
				</div>
			</div>
			<div class="g-ranking-r">
				<div class="g-right-title">
					<h3 class="gray3">人气排行</h3>
				</div>
				<div class="g-right-ranking">
					<ul id="ulWeekRanking">
							 
						<?php $ln=1; if(is_array($hotshop)) foreach($hotshop AS $key => $hshop): ?>
						<?php 
						  $count=$key+1;
						 ?>
							 <li><div class="m-ranking-goods" style="display: none;">
								<span class="u-ranking-dig"><?php echo $count; ?></span>
								<div class="pic">
									<a rel="nofollow"
										href="<?php echo WEB_PATH; ?>/goods/<?php echo $hshop['id']; ?>" target="_blank"
										title="<?php echo $hshop['title']; ?>"><img alt="<?php echo $hshop['title']; ?>"
										src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $hshop['thumb']; ?>"></a>
								</div>
								<p class="name">
									<a class="gray6" href="<?php echo WEB_PATH; ?>/goods/<?php echo $hshop['id']; ?>"
										target="_blank" title="<?php echo $hshop['title']; ?>"><?php echo $hshop['title']; ?></a>
								</p>
								<p class="F_money gray9">
									价值：<span class="F_dig"><span class="rmb"></span><?php echo $hshop['money']; ?></span>
								</p>
							</div>
							<div class="m-ranking-tit" style="display: block;">
								<span class="u-ranking-dig"><?php echo $count; ?></span>
								<h4>
									<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $hshop['id']; ?>"
										target="_blank" class="gray6"><?php echo $hshop['title']; ?></a>
								</h4>
							</div></li>
																 
						<?php  endforeach; $ln++; unset($ln); ?>										 
						 </ul>
				</div>
			</div>
		</div>

		<!--新品上架-->
		<div class="g-width g-Newproduct">
			<div class="g-tit">
				<a href="<?php echo WEB_PATH; ?>/goods_list/0_0_4" target="_blank"
					class="g-tit-more"><em>更多</em><i class="mod_dropmenu_arrow"></i></a>
				<span class="g-tit-class"> 
				<?php 
		
					$two_cate_list = $this->db->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");
					
				 ?>
				<?php $ln=1;if(is_array($two_cate_list)) foreach($two_cate_list AS $catelist): ?>	
				<a
					href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0" target="_blank"
					title="<?php echo $catelist['name']; ?>"><?php echo $catelist['name']; ?></a>  
				<?php  endforeach; $ln++; unset($ln); ?>	
				</span>
				<h2 class="gray3">新品上架</h2>
			</div>
			<div class="g-recommend-list ">
				<div class="g-left-ad">
					<div id="divNewGoods" class="m-position">
						<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop1['id']; ?>" target="_blank"><img
							src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $new_shop1['posthumb']; ?>" alt="<?php echo $new_shop1['title']; ?>"
							width="206" height="370"></a>
					</div>
				</div>
				<div class="newRecList">
					<ul id="ulNewRecList1" class="g-recommed-goods">
					<?php $ln=1;if(is_array($new_shop2)) foreach($new_shop2 AS $newshop): ?>
											<li class="g-goods-list"><div class="pic">
								<a rel="nofollow" href="<?php echo WEB_PATH; ?>/goods/<?php echo $newshop['id']; ?>"
									target="_blank" title="<?php echo $newshop['title']; ?>"><img
									alt="<?php echo $newshop['title']; ?>"
									src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $newshop['thumb']; ?>"></a>
							</div>
							<p class="name">
								<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $newshop['id']; ?>"
									target="_blank" title="<?php echo $newshop['title']; ?>"><?php echo $newshop['title']; ?></a>
							</p>
							<p class="F_money">
								价值：<span class="F_dig"><span class="rmb"></span><?php echo $newshop['money']; ?></span>
							</p>
							<div class="goods_Curbor">
								<div class="pic">
									<a rel="nofollow"
										href="<?php echo WEB_PATH; ?>/goods/<?php echo $newshop['id']; ?>" target="_blank"
										title="<?php echo $newshop['title']; ?> "><img alt="<?php echo $newshop['title']; ?>"
										src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $newshop['thumb']; ?>"></a>
								</div>
								<div class="Progress-bar">
									<p title="已完成">
										<span style="width:<?php echo percent($newshop['canyurenshu'],$newshop['zongrenshu']); ?>;"></span>
									</p>
									<ul class="Pro-bar-li">
										<li class="P-bar01"><em><?php echo $newshop['canyurenshu']; ?></em>已参与</li>
										<li class="P-bar02"><em><?php echo $newshop['zongrenshu']; ?></em>总需人次</li>
										<li class="P-bar03"><em><?php echo $newshop['zongrenshu']-$newshop['canyurenshu']; ?></em>剩余</li>
									</ul>
								</div>
								<div class="g_buybtn">
									<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $newshop['id']; ?>"
										title="立即购买" class="orange_btn">立即<?php echo _cfg('web_name_two'); ?></a>
								</div>
							</div></li>
							  <?php  endforeach; $ln++; unset($ln); ?>
					   </ul>
					<ul id="ulNewRecList2" class="g-recommed-ad g-Newproduct-list">
						<?php $ln=1;if(is_array($new_shop3)) foreach($new_shop3 AS $newshop): ?>					
											<li><div class="m-pic-txt">
								<div class="u-txt">
									<h5 class="gray3" title="<?php echo $newshop['title']; ?>">
										<a class="gray6"
											href="<?php echo WEB_PATH; ?>/goods/<?php echo $newshop['id']; ?>"
											target="_blank"><?php echo _strcut($newshop['title'],30); ?></a>
									</h5>
									<p class="orange" title="<?php echo $newshop['description']; ?>"><?php echo _strcut($newshop['description'],30); ?></p>
								</div>
								<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $newshop['id']; ?>"
									target="_blank" class="u-img" title="<?php echo $newshop['title']; ?>"><img
									src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $newshop['thumb']; ?>"
									border="0" alt=""></a>
							</div></li>
							<?php  endforeach; $ln++; unset($ln); ?>				 
					 </ul>
				</div>
			</div>
		</div>

		<!--中间广告-->
		<div id="divMidBanner" class="g-width M-banner g-share-banner"
			style="">
			
		</div>

		<!--晒单分享-->
		<div class="g-width g-single-share">
			<div class="g-tit">
				<a href="<?php echo WEB_PATH; ?>/go/shaidan" target="_blank" class="g-tit-more"><em>更多</em><i
					class="mod_dropmenu_arrow"></i></a>
				<h2 class="gray3">晒单分享</h2>
			</div>
			<div class="g-single-l">
				<div class="m-single-hot"
					style="float: left; overflow: hidden; position: relative;">
					<ul id="ulPostRec"
						style="position: absolute; width: 840px; left: 0px;">
						
						<?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sd): ?>
						<li class="u-single-hover" idx="0"
							style="width: 280px; float: left; position: relative;"><div
								class="f-single-txt" style="display: none;">
								<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" class="white"
									target="_blank"><?php echo $sd['sd_title']; ?></a>
							</div>
							<div class="f-single-info">
								<a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($sd['sd_userid']); ?>" target="_blank"><img
									class="f-single-pic"
									src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['img']; ?>"
									width="40" height="40"></a><a class="f-name blue"
									href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($sd['sd_userid']); ?>" title="<?php echo get_user_name($sd['sd_userid']); ?>"
									target="_blank"><?php echo get_user_name($sd['sd_userid']); ?></a><span class="gray9 f-share-time"><?php echo date('Y-m-d H:i',$sd['sd_time']); ?></span><span class="f-share-tit mlr5"><a
									href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"
									class="white" title="<?php echo $sd['sd_title']; ?>"><?php echo $sd['sd_title']; ?></a></span>
							</div> <a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><img
								src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"
								border="0" alt="" width="280" height="314"></a></li>
						<?php  endforeach; $ln++; unset($ln); ?>		
						 
						</ul>
					<a href="javascript:;" class="silde-btn next-btn js_next"
						style="display: inline;"><i class="arrow next-arrow"></i></a> <a
						href="javascript:;" class="silde-btn pre-btn js_pre"
						style="display: inline;"><i class="arrow pre-arrow"></i></a>
				</div>
				<ul id="ulPostList" class="m-single-list">
				
				<?php $ln=1;if(is_array($shaidan_two)) foreach($shaidan_two AS $sd): ?>
									<li name="liPostList"><div class="f-single-txt"
							style="display: block;">
							<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" class="white"
								target="_blank"><?php echo $sd['sd_title']; ?></a>
						</div>
						<div class="f-single-info" style="display: none;">
							<a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($sd['sd_userid']); ?>" target="_blank"><img
								class="f-single-pic"
								src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['img']; ?>"
								width="40" height="40"></a><a class="f-name blue"
								href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($sd['sd_userid']); ?>" title="<?php echo get_user_name($sd['sd_userid']); ?>" target="_blank"><?php echo get_user_name($sd['sd_userid']); ?></a><span
								class="gray9 f-share-time"><?php echo date('Y年m月d日',$sd['sd_time']); ?></span><span
								class="f-share-tit mlr5"><a
								href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"
								class="white" title="<?php echo $sd['sd_title']; ?>"><?php echo $sd['sd_title']; ?></a></span>
						</div> <a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><img
							src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"
							border="0" alt="" width="280" height="315"></a></li>
						<?php  endforeach; $ln++; unset($ln); ?>					 
								</ul>
			</div>
			<div class="g-single-r g-single-ta">
				<div class="g-right-title">
					<h3 class="gray3">TA们都在说</h3>
				</div>
				<div class="g-share">
					<ul id="ulReplyList" style="margin-top: 0px;">
					 <?php $ln=1;if(is_array($shaidan_huifu)) foreach($shaidan_huifu AS $hf): ?>
					
						<li>
						<a href="<?php echo WEB_PATH; ?>/uname/<?php echo $hf['sdhf_userid']; ?>" class="f-pic" target="_blank" title="<?php echo get_user_name($hf['sdhf_userid']); ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $hf['img']; ?>" width="40" height="40"></a>
						
						<div class="m-share-txt gray6"><a class="f-name blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($hf['sdhf_userid']); ?>" title="<?php echo get_user_name($hf['sdhf_userid']); ?>" target="_blank"><?php echo get_user_name($hf['sdhf_userid']); ?></a><span class="f-share-tit"><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $hf['sdhf_id']; ?>" target="_blank" class="gray6" title="<?php echo $hf['sdhf_content']; ?>	"><?php echo $hf['sdhf_content']; ?></a></span></div>
						</li>
					<?php  endforeach; $ln++; unset($ln); ?>		
						
					</ul>
				</div>

			</div>
		</div>

		<!--圈子话题-->
		
		<!--end圈子话题-->
	</div>
  <!--end中间内容-->
 <script>
$(document).ready(function(){
      var ulpotxt = $("#ulPostList").html();
      var ulprec =  $("#ulPostRec");
      z(ulprec);
      $("#ulPostList").html(ulpotxt).find('li[name="liPostList"]').each(function() {
           $(this).hover(function() {
               $(this).children(".f-single-txt").hide().next(".f-single-info").show()
           }, function() {
               $(this).children(".f-single-txt").show().next(".f-single-info").hide()
           })
      });

});

var z = function(H) {
                var J = H;
                var N = 0;
                var M = 0;
                var I = 280;
                var L = J.children().length;
                M = L * I;
                N = I;
                J.width(M).css("left", "0px");
                var K = "500";
                J.show("fast");
                J.nextAll("a.js_pre").eq(0).show().bind("click", function() {
                    J.animate({
                        left: "-" + N + "px"
                    }, K, function() {
                        J.append(J.children().eq(0)).css("left", "0px")
                    })
                });
                J.nextAll("a.js_next").eq(0).show().bind("click", function() {
                    J.prepend(J.children().eq(L - 1)).css("left", "-" + N + "px");
                    J.animate({
                        left: "0px"
                    }, K, function() {})
                })
       };

	   $("li.g-goods-list").each(function() {
            $(this).hover(function() {
                $(this).addClass("goods_Cur")
            }, function() {
                $(this).removeClass("goods_Cur")
            })
        });
		var E = $("#ulWeekRanking").html();
		 $("#ulWeekRanking").html(E).children("li").hover(function() {
                        $(this).children("div.m-ranking-goods").show().next().hide();
                        $(this).siblings().children("div.m-ranking-goods").hide().next().show()
                    }, function() {
                        $(this).children("div.m-ranking-goods").hide().next().show();
                        $(this).parent().children("li").eq(0).children("div.m-ranking-goods").show().next().hide()
                    });

		$('.m-slides').hover(function() {
                $('.rslides1_nav').show();
            }, function() {
                $('.rslides1_nav').hide();
            });
			
			
</script>  
<script type="text/javascript">
$(function(){
        $("body").attr('class','index');
	var sw = 0;
	$(".m-slides .rslides_tabs li a").mouseover(function(){
		sw = $(".rslides_tabs a").index(this);
		myShow(sw);
	});
	function myShow(i){
		$(".m-slides .rslides_tabs li").eq(i).addClass("rslides_here").siblings("li").removeClass("rslides_here");
		$("#slideul li").eq(i).stop(true,true).fadeIn(600).siblings("li").fadeOut(600);
	}
	//滑入停止动画，滑出开始动画
	$("#slideImg,.rslides_nav").hover(function(){
		if(myTime){
		   clearInterval(myTime);
		}
	},function(){
		myTime = setInterval(function(){
		  myShow(sw)
		  sw++;
		  if(sw==<?php echo count($slides); ?>){sw=0;}
		} , 3000);
	});
	//自动开始
	var myTime = setInterval(function(){
	   myShow(sw)
	   sw++;
	   if(sw==<?php echo count($slides); ?>){sw=0;}
	} , 3000);
	$(".next").click(function(){
		myShow(sw)
		sw++;
 		if(sw==<?php echo count($slides); ?>){sw=0;}
	});
	$(".pre").click(function(){
		myShow(sw)
 		if(sw==0){sw=<?php echo count($slides); ?>;}
 		sw--;
	});

})
 var l = $("#myTab_Content0");
        $("#myTab").children().each(function(A, z) {
            var B = $(this);
            B.hover(function() {
                if (A == 0) {
                    B.attr("class", "f-notice-hover").next().attr("class", "");
                    l.show().next().hide()
                } else {
                    B.attr("class", "f-notice-hover").prev().attr("class", "");
                    l.hide().next().show()
                }
            }, function() {})
        });
</script>           
<script type="text/javascript">
  $(function(){
	F = 5;
	var _BuyList=$("#divRaffList");
        var Trundle = function () {
			F--;
				_BuyList.prepend(_BuyList.find("divls")).css('marginTop', '0px');
				_BuyList.animate({ 'marginTop': "-" + (F * 30) + "px"}, 800);
			if(F==0){
				F=5;
			}
        }
        var setTrundle = setInterval(Trundle, 5000);
    });
</script>

<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/IndexFun.js"></script> 

<?php include templates("index","footer");?>