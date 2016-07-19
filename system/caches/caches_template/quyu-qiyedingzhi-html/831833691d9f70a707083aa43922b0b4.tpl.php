<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<meta name ="keywords" content="品牌,名品折扣,限时,特卖,VIP,尾品" />
<title>新用户注册验证-<?php echo _cfg('web_name_two'); ?></title>
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
       您好，欢迎您来到<?php echo _cfg('web_name_two'); ?>！ <a  href="<?php echo G_WEB_PATH; ?>">首页</a>  <a href="<?php echo G_WEB_PATH; ?>/?/login" >登录</a> <a href="<?php echo G_WEB_PATH; ?>/?/register" >免费注册</a> <em>|</em> <?php echo _cfg("cell"); ?>
 </div></div>
<!--购物车头部结束-->
<div class="top_bar">
	<a class="logo" href="<?php echo G_WEB_PATH; ?>" style="background: url(<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>) no-repeat;"><h1><?php echo _cfg('web_name_two'); ?></h1></a>
    <img src="/App/Images/ad_words.png" class="ad_words" />
    <ul class="step_bar">
		<li class="step_1 "><i>1</i>填写注册信息</li>
		<li class="step_2 "><i>2</i>验证邮箱/验证手机</li>
		<li class="step_3 current"><i>3</i>完成注册</li>
	</ul>
    <p class="clear"></p>
</div>
<div class="radius_box">
	<h2 class="radius_box_tt">验证成功</h2>
    <p class="blank30"></p>
            <table width="350" border="0" cellspacing="0" cellpadding="0" class="form_table2" align="center">
			<?php if(empty($guoqi)): ?>
            	<p><?php echo $reg_message; ?></p>
              <tr>
                <td class="pad30">
                		<div class="form_input_wrap"><p>恭喜你<span class="orange"><?php echo $success; ?></span>,<a id="hylinkLoginPage" class="blue Fb" href="<?php echo WEB_PATH; ?>/member/home">进入个人中心</a></p></div>
                 </td>
              </tr>
			  <?php  else: ?>
              <tr>
                <td><a id="hylinkMailsB" href="<?php echo WEB_PATH; ?>/member/user/emailcheck/<?php echo $name; ?>" target="_blank"><input type="submit" name="submit" id="btnSubmitAccount" class="login_btn"  value="过期,重新发送验证邮件" /></a></td>
              </tr>
			  <?php endif; ?>
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