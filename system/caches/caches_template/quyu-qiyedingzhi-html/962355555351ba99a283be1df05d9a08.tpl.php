<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><div class="span4">
    <div class="uc-nav-box">
        <div class="box-hd"><h3 class="title">个人中心</h3></div>
        <div class="box-bd">
            <ul class="uc-nav-list">
                <li><a href="<?php echo WEB_PATH; ?>/member/home">我的个人中心</a></li>
                <li class="current"><a href="<?php echo WEB_PATH; ?>/member/home/userfufen"><b></b>我的福分</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist">我的订单</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/orderlist">获得的商品</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/singlelist">我的晒单</a></li>
            </ul>
        </div>
    </div>
    <div class="uc-nav-box">
        <div class="box-hd"><h3 class="title">账户管理</h3></div>
        <div class="box-bd">
            <ul class="uc-nav-list">
				<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/userbalance">账户明细</a></li>
				<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge">账户充值</a></li>
            </ul>
        </div>
    </div>
	<!--div class="uc-nav-box">
        <div class="box-hd"><h3 class="title">圈子管理</h3></div>
        <div class="box-bd">
            <ul class="uc-nav-list">
                <li class=""><a href="<?php echo WEB_PATH; ?>/member/home/joingroup">加入的圈子</a></li>
				<li class=""><a href="<?php echo WEB_PATH; ?>/member/home/topic">圈子话题</a></li>
            </ul>
        </div>
    </div-->
    <div class="uc-nav-box">
        <div class="box-hd"><h3 class="title">邀请管理</h3></div>
        <div class="box-bd">
            <ul class="uc-nav-list">
                <li><a href="<?php echo WEB_PATH; ?>/member/home/invitefriends">邀请好友</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/commissions">佣金明细</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/cashout">申请提现</a></li>
				<li><a href="<?php echo WEB_PATH; ?>/member/home/record">提现记录</a></li>
            </ul>
        </div>
    </div>
</div>
<!--content left end-->