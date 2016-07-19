<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>获得的商品</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd"><h3 class="title">您在<?php echo _cfg("web_name_two"); ?>网成功获得了 <b id="goodsCount" class="orange"><?php echo count($record); ?></b> 个商品<a href="#" id="wuliu_select">查询物流</a></h3><div id="divPageNav" class="page_nav"><?php echo $page->show('one'); ?></div></div>
					<?php if(!member_get_dizhi($uid)): ?>
					<div class="box-bd">
						<div class="uc-order-list-box">
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item empty">您还没有填写收货信息,请填写收货信息！<a href="<?php echo WEB_PATH; ?>/member/home/address" style="font-weight:bold; color:#2af">去填写!</a></li>
							</ul>
						</div>
					</div>
					<?php endif; ?>

					<div class="box-bd">
						<div class="uc-order-list-box">
							<?php if(count($record)==0): ?>
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item empty">您帐户无相应的获得商品记录</a></li>
							</ul>
							<?php  else: ?>
							<ul class="uc-order-detail-list">
							<?php $ln=1;if(is_array($record)) foreach($record AS $recd): ?>
								<li class="uc-order-detail-item">
									<table class="order-detail-table">
										<thead>
											<tr>
												<th class="column-info column-t" colspan="3">
													<div class="column-content">
														<span class="order-status"><?php 
														$status=@explode(",",$recd['status']);
														if($status[2]=='未完成' || $status[2]=='待收货'){
															if($status[1]=='未发货'){
																echo "您获得的商品现已捡货，请耐心等待！如有疑问，请联系官方客服！";
															}
															if($status[1]=='已发货'){
																echo "您获得的商品现已经发出，请留意快递信息。";
															}
														}
														if($status[2]=='已完成'){
															echo "您的订单已完成交易，如商品存在质量问题，请联系客服进行处理！";
														}
														if($status[2]=='已作废'){
															echo "您的订单已作废";
														}
													 ?></span><?php if($recd['company']): ?><span class="sep">|</span><span>快递公司：<?php echo $recd['company']; ?></span><span class="sep">|</span>快递单号：<?php echo $recd['company_code']; ?><?php endif; ?>
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="column-detail column-l">
													<ul class="order-goods-list">
														<li class="first">
															<a target="_blank" class="pic" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $recd['shopid']; ?>"><img class="goods-thumb" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo yunjl($recd['shopid']); ?>"></a>
															<a target="_blank" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $recd['shopid']; ?>" class="goods-name">您获得了第<?php echo $recd['shopqishu']; ?>期：<?php echo $recd['shopname']; ?></a>
														</li>
													</ul>
												</td>
												<td class="column-price">
													<div class="order-info order-price">
														<?php 
														$status=@explode(",",$recd['status']);
														if($status[2]=='未完成' || $status[2]=='待收货'){
															if($status[1]=='未发货'){
																echo "等待发货";
															}
															if($status[1]=='已发货'){
																echo "已发货";
															}
														}
														if($status[2]=='已完成'){
															echo "已完成";
														}
														if($status[2]=='已作废'){
															echo "已作废";
														}
													 ?>
													</div>
												</td>
												<td class="column-action column-r">
													<div class="order-info order-action">
													<?php 
														$status=@explode(",",$recd['status']);
														if($status[2]=='未完成' || $status[2]=='待收货'){
															if($status[1]=='未发货'){
																echo '<a class="btn btn-primary btn-small">等待操作</a>';
															}
															if($status[1]=='已发货'){
																echo '<a class="btn btn-primary btn-small order_click" oid="'.$recd['id'].'" uid="'.$recd['uid'].'">确认收货</a>';
															}
														}
														if($status[2]=='已完成'){
															echo '<a href="http://wpa.qq.com/msgrd?v=3&uin=1810524351&site=qq&menu=yes" class="btn btn-primary btn-small" oid="'.$recd['id'].'" uid="'.$recd['uid'].'">申请售后</a>';
														}
														if($status[2]=='已作废'){
															echo "已作废";
														}
													 ?>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<?php  endforeach; $ln++; unset($ln); ?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div id="divPageNav" class="page_nav" style="margin-top:0px;"><?php echo $page->show('one'); ?></div>
			</div>
		</div>
	</div>
</div>
<style>
	#wuliu_select{ padding:5px 8px; width:80px; background-color:#F60;border-radius:2px;font-family: 微软雅黑; color:#fff; font-size:12px; margin-left:30px; }
	.wuliubtn{ padding:3px 5px;background-color:#2af;border-radius:2px; color:#fff; font-size:12px; }
	.wuliubtn:hover{ color:#fff; cursor:pointer}
	#paywindow{position:absolute;z-index:999; display:none}
	#paywindow_b{width:542px;height:360px;background:#2a8aba; filter:alpha(opacity=60);opacity: 0.6;position:absolute;left:0px;top:0px; display:block}
	#paywindow_c{width:530px;height:348px;background:#fff;display:block;position:absolute;left:6px;top:6px;}
	.p_win_title{ line-height:40px;height:40px;background:#f8f8f8;}
	.p_win_title b{float:left}
	.p_win_title a{float:right;padding:0px 10px;color:#f60}
	.p_win_content h1{font-size:25px;font-weight:bold;}
	.p_win_but,.p_win_mes,.p_win_ctitle,.p_win_text{ margin:10px 20px;}
	.p_win_mes{border-bottom:1px solid #eee;line-height:35px;}
	.p_win_mes span{margin-left:10px;}
	.p_win_ctitle{overflow:hidden;}
	.p_win_x_b{float:left; width:73px;height:68px;background-repeat:no-repeat;}
	.p_win_x_t{ font-size:18px; font-weight:bold;font-family: "Helvetica Neue",\5FAE\8F6F\96C5\9ED1,Tohoma;color:#f00; text-align:center}
	.p_win_but{ height:40px; line-height:40px;}
	.p_win_but a{ padding:8px 15px; background:#f60; color:#fff;border:1px solid #f50; margin:0px 15px;font-family: "Helvetica Neue",\5FAE\8F6F\96C5\9ED1,Tohoma; font-size:15px; }
	.p_win_but a:hover{ background:#f50}
	.p_win_text a{ font-size:13px; color:#f60}
	.pay_window_quit:hover{ color:#f00}
</style>
<div id="paywindow">
	<div id="paywindow_b"></div>
	<div id="paywindow_c">
		<div class="p_win_title"><a href="javascript:void();" class="pay_window_quit">[关闭]</a><b>　 物流查询</b></div>
		<div class="p_win_content">
            	<iframe name="kuaidi100" src="http://www.kuaidi100.com/frame/app/index2.html" width="527" height="300" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
</div>
<script>
$(function(){
	var width = ($(window).width()-542)/2;
	var height = ($(window).height()-360)/2;
	$("#paywindow").css("left",width);
	$("#paywindow").css("top",height);

	$(".pay_window_quit").click(function(){
		$("#paywindow").hide();
	});
	$("#wuliu_select").click(function(){
		$("#paywindow").show();
	});

	$(".order_click").click(function(){
		var uid = $(this).children("a").attr("uid");
		var oid = $(this).children("a").attr("oid");
		$.post("<?php echo WEB_PATH; ?>/api/dingdan/set",{"uid":uid,"oid":oid},function(sdata){
			if(sdata=='1'){
				alert("更新成功");
				location=location;
			}else{
				alert("更新失败");
			}
		});
	});
});
</script>
<?php include templates("index","foot");?>