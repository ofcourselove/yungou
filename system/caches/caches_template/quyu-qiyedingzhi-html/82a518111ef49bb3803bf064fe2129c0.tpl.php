<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/App/Css/Lottery.css"/>
<div class="container breadcrumbs"><a href="<?php echo WEB_PATH; ?>">首页</a><span class="sep">/</span>最新揭晓</div>
<div id="content">
<div class="coin-layout">
    <div class="coin-bg J_ModLayout"></div>
    <div class="coin-wrapper">
<div class="main-wrap">
	<div class="topicitem-mod common-layout">
<div class="container">
        <div class="xm-line-box filter-box">
        <div class="box-hd"><h3 class="title">最新揭晓 <span id="spTotalCount" style="font-size: 12px;color: #8c8c8c;">(到目前为止共揭晓商品<em class="orange"><?php echo $total; ?></em>件)</span></h3></div>
        <div class="box-bd">
		<div class="publishBor">
			<div class="publishCen" id="listDivTitle">
				<ul id="ProductList">
					<?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>
                    <?php 
                    	$qishu['q_user'] = unserialize($qishu['q_user']);
                     ?>
					<li class="clo">
						<a class="fl goodsimg" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" >
						<img alt="" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>">
						</a>
						<div class="publishC-Member gray02"><a class="fl headimg" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>" target="_blank" >
							
							<img id="imgUserPhoto" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['q_user']['img']; ?>" width="50" height="50" border="0"/>
							
							</a>
							<p>获得者：<a class="blue Fb" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>" target="_blank"><?php echo get_user_name($qishu['q_user']); ?></a></p>
							<p>抢拍：<em class="orange Fb"><?php echo get_user_goods_num($qishu['q_uid'],$qishu['id']); ?></em>人次</p>							
						</div>
						<div class="publishC-tit">
							<h3><a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="gray01">(第<?php echo $qishu['qishu']; ?>期)<?php echo $qishu['title']; ?></a></h3>
							<p class="money">商品价值：<span class="rmb"><?php echo $qishu['money']; ?></span>元</p>
							<p class="Announced-time gray02">揭晓时间：<?php echo microt($qishu['q_end_time'],'r'); ?></p>
						</div>
						<div class="details">
							<p class="fl details-Code">幸运拍码：<em class="orange Fb"><?php echo $qishu['q_user_code']; ?></em></p>
							<a class="fl details-A" href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" rel="nofollow" target="_blank">查看详情</a>
							
						</div>
					</li>	
					<?php  endforeach; $ln++; unset($ln); ?>
				</ul>
			</div>
			<?php if($total>$num): ?>
					<div class="pagesx"><?php echo $page->show('two'); ?></div>
			<?php endif; ?>
		</div>
	</div>
	<script>
		$(".clo").hover(
	　　function () {
	　　$(this).addClass("hover");
	　　},
	　　function () {
	　　$(this).removeClass("hover");
	　　}
	　　);
	</script>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include templates("index","footer");?>