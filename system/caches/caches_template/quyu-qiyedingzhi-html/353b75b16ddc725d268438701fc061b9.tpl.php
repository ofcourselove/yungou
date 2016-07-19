<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>我的订单</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd"><h3 class="title">我的订单</h3><div id="divPageNav" class="page_nav"><?php echo $page->show('one'); ?></div></div>
					<div class="box-bd">
						<div class="uc-order-list-box">
							<ul class="uc-order-detail-list">
							<?php $ln=1;if(is_array($record)) foreach($record AS $rt): ?>
							<?php 
								$jiexiao = get_shop_if_jiexiao($rt['shopid']);
							 ?>
							<?php if($jiexiao['q_uid']): ?>
								<li class="uc-order-detail-item">
									<table class="order-detail-table">
										<thead>
											<tr>
												<th class="column-info column-t" colspan="3">
													<div class="column-content">
														<span class="order-status">本期已揭晓</span><span class="sep">|</span>获得者：<a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($jiexiao['q_uid']); ?>" target="_blank"><?php echo get_user_name($jiexiao['q_user']); ?></a><span class="sep">|</span>揭晓时间：<?php echo microt($rt['time']); ?>
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="column-detail column-l">
													<ul class="order-goods-list">
														<li class="first">
															<a title="" target="_blank" class="pic" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $rt['shopid']; ?>_<?php echo $rt['shopqishu']; ?>"><img class="goods-thumb" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $jiexiao['thumb']; ?>"></a>
															<a target="_blank" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $rt['shopid']; ?>_<?php echo $rt['shopqishu']; ?>" class="goods-name"><?php echo $rt['shopname']; ?></a>
															<span class="goods-price">您当前购买的是第<?php echo $rt['shopqishu']; ?>期，共<em style="color:#ff4a00;"><?php echo $rt['gonumber']; ?></em>人次，小计：<?php echo $rt['gonumber']; ?>元</span>
															<span class="goods-link"></span>
														</li>
													</ul>
												</td>
												<td class="column-price"><div class="order-info order-price">已揭晓</div></td>
												<td class="column-action column-r">
													<div class="order-info order-action"><a href="<?php echo WEB_PATH; ?>/member/home/userbuydetail/<?php echo $rt['id']; ?>" class="btn btn-primary btn-small" title="揭晓详情">揭晓详情</a></div>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<?php  else: ?>
								<li class="uc-order-detail-item">
									<table class="order-detail-table">
										<thead>
											<tr>
												<th class="column-info column-t" colspan="3">
													<div class="column-content">
														<span class="order-status">本期正在进行中</span><span class="sep">|</span>购买时间：<?php echo microt($rt['time']); ?>
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="column-detail column-l">
													<ul class="order-goods-list">
														<li class="first">
															<a title="" target="_blank" class="pic" href="<?php echo WEB_PATH; ?>/goods/<?php echo $rt['shopid']; ?>"><img class="goods-thumb" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $jiexiao['thumb']; ?>"></a>
															<a target="_blank" href="<?php echo WEB_PATH; ?>/goods/<?php echo $rt['shopid']; ?>" class="goods-name"><?php echo $rt['shopname']; ?></a>
															<span class="goods-price">您当前购买的是第<?php echo $rt['shopqishu']; ?>期，共<em style="color:#ff4a00;"><?php echo $rt['gonumber']; ?></em>人次</span>
															<span class="goods-link"></span>
														</li>
													</ul>
												</td>
												<td class="column-price"><div class="order-info order-price">正在进行...</div></td>
												<td class="column-action column-r">
													<div class="order-info order-action"><a href="<?php echo WEB_PATH; ?>/member/home/userbuydetail/<?php echo $rt['id']; ?>" class="btn btn-primary btn-small" title="查看拍码">查看<?php echo _cfg('web_name_two'); ?></a></div>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<?php endif; ?>
							<?php  endforeach; $ln++; unset($ln); ?>
							</ul>
						</div>
					</div>
				</div>
				<div id="divPageNav" class="page_nav" style="margin-top:0px;"><?php echo $page->show('one'); ?></div>
			</div>
		</div>
	</div>
</div>
<?php include templates("index","foot");?>