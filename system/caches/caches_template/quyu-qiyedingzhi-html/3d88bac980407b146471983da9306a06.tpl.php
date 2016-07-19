<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>账户福分</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd"><h3 class="title">账户福分</h3></div>
<link rel="stylesheet" type="text/css" href="/App/Css/layout-recharge.css"/>
<div class="R-content">
	<div class="last">
		<ul>
			<li><h3>可用福分：</h3><b class="orange"><?php echo $member['score']; ?></b></li>
		</ul>
	</div>
	<div id="divList0" class="list-tab recordList">
	<ul class="listTitle">
		<li class="leftTitle">时间</li>
		<li class="price">渠道</li>
		<li class="regard">获得/支出</li>
	</ul>
	<?php $ln=1;if(is_array($account)) foreach($account AS $at): ?>
	<ul>
		<li class="leftTitle fontAri"><?php echo date("Y-m-d H:i:s",$at['time']); ?></li>
		<li class="price"><?php echo $at['content']; ?></li>
		<li class="regard">
		<?php if($at['type']==1): ?>
			<font color="#0c0">+ <?php echo $at['money']; ?></font>
		<?php  else: ?>
			<font color="red">- <?php echo $at['money']; ?></font>
		<?php endif; ?>
		</li>
	</ul>
	<?php  endforeach; $ln++; unset($ln); ?>
	</div>
          <style>
			#divPageNav{ padding-top:10px;text-align:right}
			#divPageNav li a{ padding:5px;}
		</style>
	<div id="divPageNav0" class="page_nav" style="display: none;"></div>
	<div id="divList1" class="list-tab recordList" style="display:none;"></div>
	<div id="divPageNav1" class="page_nav" style="display:none;"></div>
	<div id="divDetailInfo" class="count" style="display:none;"></div>
	<div id="divbuyDetail" class="list-tab recordList buyDetail" style="display:none;"></div>
</div>
</div>
<div id="divPageNav" class="page_nav" style="margin-top:0px;"><?php echo $page->show('one'); ?></div>
</div>
</div>
</div>
</div>
<?php include templates("index","foot");?>