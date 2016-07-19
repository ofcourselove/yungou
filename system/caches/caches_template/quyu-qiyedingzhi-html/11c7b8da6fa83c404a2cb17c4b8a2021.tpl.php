<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<meta name ="keywords" content="品牌,名品折扣,限时,特卖,VIP,尾品" />
<title>新用户注册验证-<?php echo _cfg('web_name_two'); ?></title>
<link rel="stylesheet" type="text/css" href="/css/base.min.css"/>
<link type="text/css" rel="stylesheet" href="/App/Css/us.css" />

<!--[if lte IE 6]>
<script src="/App/Js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
        DD_belatedPNG.fix('div,ul,img,li,p,a,i,span,em,h3,th,td');
</script>
<![endif]-->
</head>
<body>
<!--购物车头部-->
<div class="header_jian_wrap">
	<div class="header header_jian">
       您好，欢迎您来到<?php echo _cfg('web_name_two'); ?>网！ <a  href="<?php echo G_WEB_PATH; ?>">首页</a>  <a href="<?php echo G_WEB_PATH; ?>/?/login" >登录</a> <a href="<?php echo G_WEB_PATH; ?>/?/register" >免费注册</a> <em>|</em> <?php echo _cfg("cell"); ?>
 </div></div>
<!--购物车头部结束-->
<div class="top_bar">
	<a class="logo" href="<?php echo G_WEB_PATH; ?>" style="background: url(<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>) no-repeat;"><h1><?php echo _cfg('web_name_two'); ?></h1></a>
    <img src="/App/Images/ad_words.png" class="ad_words" />
    <ul class="step_bar">
		<li class="step_1 "><i>1</i>填写注册信息</li>
		<li class="step_2 current"><i>2</i>验证邮箱/验证手机</li>
		<li class="step_3 "><i>3</i>完成注册</li>
	</ul>
    <p class="clear"></p>
</div>
<div class="radius_box">
	<h2 class="radius_box_tt">新用户注册验证</h2>
    <p class="blank30"></p>
            <table width="350" border="0" cellspacing="0" cellpadding="0" class="form_table2" align="center">
			<?php if(($reg_message === '发送失败，请重新点击发送')): ?>
            	<p><?php echo $reg_message; ?></p>
            <?php  else: ?>
              <tr>
                <td class="pad30">
                		<div class="form_input_wrap"><p>系统已向您的 <span class="orange"><?php echo $name; ?></span> 邮箱发送了一封验证邮件，请前往收信，完成验证!</p></div>
                 </td>
              </tr>
			  <?php endif; ?>
              <tr>
                <td><a id="hylinkMailsB" href="http://mail.<?php echo $emailurl['1']; ?>" target="_blank"><input type="submit" name="submit" id="btnSubmitAccount" class="login_btn"  value="登录邮箱完成验证" /></a></td>
              </tr>
			  <tr>
                <td class="pad30">
                		<div class="form_input_wrap">
						<h2>没收到验证邮件？</h2>
						<p>1.查看邮箱的垃圾箱或广告箱，邮件有可能被误认为垃圾邮件。</p>
						<p>2.如果在10分钟后仍未收到验证邮件，请点击 <a id="retrySend" href="<?php echo WEB_PATH; ?>/member/user/sendemail/<?php echo $enname; ?>" class="login_SendoutbutClick">重新发送</a> </p>
						<p>3.如果再次发送验证邮件您仍未收到，请更换邮箱 <a id="hylinkRegisterPageA" class="blue Fb" href="<?php echo WEB_PATH; ?>/register">重新注册</a></p>
						</div>
                 </td>
              </tr>
            </table>
</div>
<div class="footer_jian_wrap footer_jian_nbg">
	<div class="footer_jian">
		<p><a target="_blank" href="">关于我们</a><em class="line"></em>
		<a target="_blank" href="">联系我们</a><em class="line"></em>
		<a target="_blank" href="">招聘英才</a><em class="line"></em>
		<a target="_blank" href="">正品保证</a><em class="line"></em>
		<a target="_blank" href="">意见反馈</a></p>
        <p><?php echo _cfg('web_copyright'); ?></p>
    </div>
</div>
</body>
</html>