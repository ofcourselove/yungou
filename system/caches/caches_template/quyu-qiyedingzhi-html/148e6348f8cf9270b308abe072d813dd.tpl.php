<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<meta name ="keywords" content="品牌,名品折扣,限时,特卖,VIP,尾品" />
<title>登陆<?php echo _cfg('web_name_two'); ?>网 - 一元疯抢,正品特卖</title>
<link type="text/css" rel="stylesheet" href="/App/Css/us.css" />
<!--[if lte IE 6]>
<script src="/App/Js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
        DD_belatedPNG.fix('div,ul,img,li,p,a,i,span,em,h3,th,td');
</script>
<![endif]-->
</head>
<body>
<div class="top_bar">
	<a class="logo" href="<?php echo G_WEB_PATH; ?>" style="background: url(<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>) no-repeat;"><h1><?php echo _cfg('web_name_two'); ?>网</h1></a>
    <img src="/App/Images/ad_words.png" class="ad_words" />
    <p class="clear"></p>
</div>
<script type="text/javascript">
$(function(){
	var demo=$(".registerform").Validform({
		tiptype:2,
	});
})
</script>
<div class="log_reg_wrap"  style="background-image:url(/App/Images/login_bg.jpg);">
	<div class="log_reg_box">
    	<h2>登录<?php echo _cfg('web_name_two'); ?>网</h2>
        <p class="blank30"></p>
        <form class="registerform" method="post" action="">
            <table width="260" border="0" cellspacing="0" cellpadding="0" class="form_table2" align="center">
              <tr>
                <td >
                		<div class="form_input_wrap">
							<input class="form_input" name="username" type="text" placeholder="手机号/邮箱！" datatype="m | e" nullmsg="请填写帐号！" errormsg="手机号/邮箱！" />
                            <div class="Validform_checktip"></div>
                            <div class="info">请输入您账号！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td>
                		<div class="form_input_wrap">
							<input class="form_input" name="password" type="password" placeholder="密码" datatype="*6-20" nullmsg="请设置密码！" errormsg="密码范围在6~20位之间！"/>
                            <div class="Validform_checktip"></div>
                            <div class="info">请输入您的密码！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                         <li>
                    <span>验证码：</span>
                    <input class="text_verify" name="verify" type="text"  datatype="*6-6" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/>
                    <span class="fog"><img id="checkcode" src="<?php echo WEB_PATH; ?>/api/checkcode/image/80_27/"/></span>
                </li>
                <li class="ts" id="pwd_ts"><div class="Validform_checktip">&nbsp;&nbsp;  请输入验证码</div></li>
                 </td>
              </tr>
              
           
              <tr>
                <td><input name="submit" type="submit" value="登录" class="login_btn" ></td>
              </tr>
            </table>
        </form>
        <div class="text_bar"><a href="<?php echo WEB_PATH; ?>/register" class="ceb4">[免费注册]</a> | <a href="<?php echo WEB_PATH; ?>/member/finduser/findpassword" class="c999">[忘记密码]</a></div>
        <div class="cooperative_logging"><p>第三方登录</p><a href="<?php echo WEB_PATH; ?>/api/qqlogin/" class="qq_ico"></a></div>
    </div>
</div>
<div class="footer_jian_wrap footer_jian_nbg">
	<div class="footer_jian">
		<p><a target="_blank" href="<?php echo WEB_PATH; ?>/help/15">关于我们</a><em class="line"></em>
		<a target="_blank" href="<?php echo WEB_PATH; ?>/help/16">加入我们</a><em class="line"></em>
		<a target="_blank" href="<?php echo WEB_PATH; ?>/help/13">投诉建议</a><em class="line"></em>
		<a target="_blank" href="<?php echo WEB_PATH; ?>/help/3">服务协议</a><em class="line"></em>
		<a target="_blank" href="<?php echo WEB_PATH; ?>/help/18">联系我们</a></p>
             <p><a href="<?php echo G_WEB_PATH; ?>" target="_blank" title="wangzhi"><?php echo G_WEB_PATH; ?></a> &nbsp;<?php echo _cfg('web_copyright'); ?></p>
    </div>
</div>
</body>
</html>