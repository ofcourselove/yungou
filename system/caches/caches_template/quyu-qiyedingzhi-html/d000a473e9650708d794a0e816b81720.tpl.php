<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>我的晒单</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd">
						<h3 class="title">我的晒单</h3>
						<div class="more">
							<div class="subMenu">
								<a href="javascript:;" class="" id="share_yes">已晒单</a>
								<span class="sep">|</span>
								<a href="javascript:;" class="current" id="share_none">未晒单</a>
							</div>
						</div>
					</div>
					<div class="box-bd topic" style="display: none;">
						<div class="uc-order-list-box">
							<?php if($shaidan==null): ?>
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item empty">暂无记录！</a></li>
							</ul>
							<?php  else: ?>
							<?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sd): ?>
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item">
									<table class="order-detail-table">
										<thead>
											<tr>
												<th class="column-info column-t" colspan="3">
													<div class="column-content">晒单发布时间：<span class="order-status"><?php echo date("Y-m-d H:i:s",$sd['sd_time']); ?></span></div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="column-detail column-l">
													<ul class="order-goods-list">
														<li class="first">
															<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><img class="goods-thumb" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"/></a>
															<a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank" class="goods-name"><?php echo $sd['sd_title']; ?></a>
														</li>
													</ul>
												</td>
												<td class="column-action column-r">
													<div class="order-info order-action"><a class="btn btn-primary btn-small">不可修改</a></div>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
							</ul>
							<?php  endforeach; $ln++; unset($ln); ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="box-bd topic" style="display: block;">
						<div class="uc-order-list-box">
							<?php if($record==null): ?>
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item empty">暂无记录！</a></li>
							</ul>
							<?php  else: ?>
							<?php $ln=1;if(is_array($record)) foreach($record AS $sd): ?>
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item">
									<table class="order-detail-table">
										<thead>
											<tr>
												<th class="column-info column-t" colspan="3">
													<div class="column-content"><span class="order-status">偷偷告诉你：晒单有积分送的哦~</span></div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="column-detail column-l">
													<ul class="order-goods-list">
														<li class="first">
															<img class="goods-thumb" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo shoplisext($sd['shopid'],'thumb'); ?>"/>
															<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $sd['shopid']; ?>" target="_blank" class="goods-name"><?php echo shoplisext($sd['shopid'],'title'); ?></a>
														</li>
													</ul>
												</td>
												<td class="column-action column-r">
													<div class="order-info order-action"><a href="<?php echo WEB_PATH; ?>/member/home/singleinsert/<?php echo $sd['id']; ?>" class="btn btn-primary btn-small">添加晒单</a></div>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
							</ul>
							<?php  endforeach; $ln++; unset($ln); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
#foucs_big{background:#999; filter:alpha(opacity=30); position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:100; display:none;}
#foucs_min{background:#999; filter:alpha(opacity=50); position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:100; display:none;}

#w3foucs{position:absolute;width:200px; overflow:hidden; left:50%; top:50%; height:auto; z-index:100;background-color:#fff; border:1px #999 solid; padding:1px;}
#w3foucs #foucs_close{
	width:22px;
	height:22px;
	position:absolute;
	z-index:100;
	right:10px;
	top:10px;
	background: url(/statics/templates/06/images/message.png) -80px -70px no-repeat;
	display: block;
	cursor: pointer;
}
#w3foucs #page_close{
	width:30px;
	height:30px;
	position:absolute;
	z-index:100;
	right:-15px;
	top:-15px;
	display: block;
	cursor: pointer;
	background:url(fancy_close.png) no-repeat;
}
#w3foucs #foucs_main{}
#w3foucs #foucs_main div.title{
    background-color: #F2F2F2;
    color: #666666;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    line-height: 30px;
    padding-left: 10px;
    padding-top: 3px;
}
#w3foucs #foucs_main div.content{
    padding: 5px;overflow:hidden;z-index:100;
}
#w3foucs #foucs_main .content img{
    z-index:200;
}
.PopMsgC {
    color: #999999;
    font-size: 14px;
    padding: 15px 0;
    text-align: center;
}
.PopMsgC s {
	background:url(/statics/templates/06/images/new-admin.png) -57px -96px no-repeat;
    display: inline-block;
    height: 21px;
    margin-right: 5px;
    vertical-align: top;
    width: 21px;
}
.PopMsgbtn {
    height: 30px;
    text-align: center;
}
.orangebut {
    background: none repeat scroll 0 0 #FF6600;
    border: 1px solid #F65802;
    color: #FFFFFF;
	height: 23px;
    line-height: 23px;
}
.cancelBtn {
    background: none repeat scroll 0 0 #F4F4F4;
    border: 1px solid #DDDDDD;
    color: #747474;
	height: 23px;
    line-height: 23px;
}
.orangebut, .bluebut, .graybut, .cancelBtn, .greenbut {
    border-radius: 2px 2px 2px 2px;
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    padding: 0 19px;
    text-align: center;
}
#foucs_big,#foucs_min,#w3foucs,#foucs_close,#page_close,#foucs_main{display:block;}
.current{color: #ff4a00;}
</style>
<script>
$(function(){
	$(".subMenu a").click(function(){
		var id=$(".subMenu a").index(this);
		$(".subMenu a").removeClass().eq(id).addClass("current");
		$(".span16 .topic").hide().eq(id).show();
	});
})
</script>
</div>
<?php include templates("index","foot");?>