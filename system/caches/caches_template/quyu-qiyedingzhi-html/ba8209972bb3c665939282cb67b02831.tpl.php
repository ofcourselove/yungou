<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>个人中心</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
            <?php include templates("member","left");?>
            <div class="span16">
				<div class="xm-box uc-box">
					<div class="xm-line-box uc-info-box">
                        <div class="box-bd clearfix"><p style="width:80px;float:left;margin-right:30px;"><img class="uc-avatar" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('160160'); ?>" alt="<?php echo get_user_name(get_user_arr(),'username'); ?>"><a href="<?php echo WEB_PATH; ?>/member/home/userphoto" class="blue" style="margin-left:10px;">修改头像</a></p>
							<div class="uc-info">
								<h3 class="uc-welcome">
									<span class="user-name">
									<?php if($member['username']!=null): ?>
									<?php echo $member['username']; ?>
									<?php elseif ($member['mobile']!=null): ?>
									<?php echo $member['mobile']; ?>
									<?php  else: ?>
									<?php echo $member['email']; ?>
									<?php endif; ?>
									<?php if($member['username']!=null): ?>
									(
									<?php if($member['mobile']!=null): ?>
									<?php echo $member['mobile']; ?>
									<?php  else: ?>
									<?php echo $member['email']; ?>
									<?php endif; ?>
									)
									<?php endif; ?></span>您好～</h3>
								<div class="uc-info-detail">
									<div class="info-notice">
									<a href="<?php echo WEB_PATH; ?>/member/home/modify" class="blue fr">编辑资料</a>经验值：
										<span class="icon-common"></span> <?php echo $member['jingyan']; ?> <span class="sep">|</span>目前等级：<span class="icon-common"></span> <?php echo $dengji_1['name']; ?> <span class="sep">|</span>升级（<?php echo $dengji_2['name']; ?>）需要：<span class="icon-common"></span> <?php echo $dengji_x; ?> 点经验值 <span class="sep">|</span>
										<div class="notice-safe-tip uc-tooltip">
										如何获取经验值？
										<div class="uc-tooltip-popup hide" style="display: none;">
											<ol>
												<li><a href="<?php echo WEB_PATH; ?>/goods_list" target="_blank">购买商品</a>，完善个人帐户资料</li>
												<li><a href="#" target="_blank">绑定邮箱/手机</a>，邀请好友</li>
											</ol>
											<span class="arrow"></span>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="xm-line-box uc-home-box">
						<div class="box-hd"><h3 class="title">本帐户余额</h3></div>
						<div class="box-bd">
							<div class="cash-overall clearfix">
								<div class="balance"><span class="type">可用余额：<b><?php echo uidcookie('money'); ?></b>元</span></div>
								<div class="mobile">为了更好的体验，请保证可用余额： <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="我要充值">我要充值</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<?php include templates("index","foot");?>