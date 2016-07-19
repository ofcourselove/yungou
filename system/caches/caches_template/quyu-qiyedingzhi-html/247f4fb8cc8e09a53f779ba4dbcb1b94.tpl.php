<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>账户明细</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd">
						<h3 class="title">账户明细</h3>
						<!--div class="more">
							<div class="subMenu">
								<a href="javascript:;" class="current">已晒单</a>
								<span class="sep">|</span>
								<a href="javascript:;" class="">未晒单</a>
							</div>
						</div-->
					</div>
					<div class="xm-line-box uc-home-box">
						<div class="box-hd"><h3 class="title">您的账户可用余额</h3></div>
						<div class="box-bd">
							<div class="cash-overall clearfix">
								<div class="balance"><span class="type">可用余额：<b><?php echo uidcookie('money'); ?></b>元</span></div>
								<div class="mobile">为了更好的体验，请保证可用余额： <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="我要充值">我要充值</a></div>
							</div>
						</div>
					</div>
					<div class="box-bd topic">
						<div class="uc-order-list-box">
							<?php $ln=1;if(is_array($account)) foreach($account AS $at): ?>
							<ul class="uc-order-detail-list">
								<li class="uc-order-detail-item">
									<table class="order-detail-table">
										<thead>
											<tr>
												<th class="column-info column-t" colspan="3">
													<div class="column-content"><span class="order-status">为了更好的体验，请保证可用余额</span></div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="column-detail column-l">
													<ul class="order-goods-list">
														<li class="first" style="padding: 0 20px;min-height:0px;">您于 <?php echo date("Y-m-d H:i:s",$at['time']); ?> <?php echo $at['content']; ?> <?php if($at['type'] == 1): ?> 支出￥<?php echo $at['money']; ?>元<?php  else: ?> 支出￥<?php echo $at['money']; ?>元<?php endif; ?></li>
													</ul>
												</td>
												<td class="column-price"><div class="order-info order-price">帐户剩余<br /><?php echo uidcookie('money'); ?>元</div></td>
											</tr>
										</tbody>
									</table>
								</li>
							</ul>
							<?php  endforeach; $ln++; unset($ln); ?>
						</div>
					</div>
				<div id="divPageNav" class="page_nav" style="margin-top: 0px;"><?php echo $page->show('one'); ?></div>
			</div>
		</div>
	</div>
</div>
</div>
<?php include templates("index","foot");?>