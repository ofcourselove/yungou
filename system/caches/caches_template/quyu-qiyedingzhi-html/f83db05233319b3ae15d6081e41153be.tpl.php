<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<meta name ="keywords" content="品牌,名品折扣,限时,特卖,VIP,尾品" />
<title>注册<?php echo _cfg('web_name_two'); ?>网 - 一元<?php echo _cfg('web_name_two'); ?>,正品特卖</title>
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
	<a class="logo" href="<?php echo G_WEB_PATH; ?>" style="background: url(<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>) no-repeat;"><h1><?php echo _cfg('web_name_two'); ?></h1></a>
    <img src="/App/Images/ad_words.png" class="ad_words" />
    <p class="clear"></p>
</div>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/jquery.Validform.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/passwordStrength-min.js"></script>
<script type="text/javascript">
$(function(){
	var demo=$(".login_ConInput").Validform({
		tiptype:2,
		usePlugin:{
			passwordstrength:{
				minLen:6,
				maxLen:20,
				trigger:function(obj,error){
					if(error){
						obj.parent().next().find(".Validform_checktip").show();
						obj.parent().next().find(".passwordStrength").hide();
					}else{
						obj.parent().next().find(".Validform_checktip").hide();
						obj.parent().next().find(".passwordStrength").show();
					}
				}
			}
		}

	});
})
</script>
<div class="log_reg_wrap"  style="background-image:url(/App/Images/register_bg.jpg);">
	<div class="log_reg_box">
    	<h2 class="reg_tt">注册<?php echo _cfg('web_name_two'); ?>网</h2>
        <p class="blank30"></p>
        <form method="post" action="" enctype="application/x-www-form-urlencoded">
           <input type="hidden" name="regcount" value="1" />
            <table width="260" border="0" cellspacing="0" cellpadding="0" class="form_table2" align="center">
              <tr>
                <td >
                		<div class="form_input_wrap">
							<input id="ipyanz" datatype="m | e" sucmsg="帐号验证通过！" placeholder="手机号或邮箱" nullmsg="请填写帐号！" errormsg="手机号或邮箱！" type="text" name="name" class="form_input" />
                            <div class="Validform_checktip"></div>
                            <div class="info">请输入您的邮箱或手机号码！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td>
                		<div class="form_input_wrap">
							<input datatype="*6-20" plugin="passwordStrength" nullmsg="请设置密码！" placeholder="密码" errormsg="密码范围在6~20位之间！" type="password" name="userpassword" class="form_input strength_input" maxlength="20"/>
                            <div class="Validform_checktip"></div>
                            <div class="passwordStrength" style="display:none"><b>密码强度：</b><span>弱</span><span>中</span><span class="last">强</span><span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                            <div class="info">请输入6-18位字母和数字的组合。<br>不推荐使用纯数字、纯字母、纯符号做密码<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                 </td>
              </tr>
              <tr>
                <td>
                		<div class="form_input_wrap">
							<input tip="test"  datatype="*" recheck="userpassword"  placeholder="确认密码" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" type="password" name="userpassword2" class="form_input" maxlength="20"/>
                            <div class="Validform_checktip"></div>
                            <div class="info">请再输入一次密码！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div>
                        </div>
                        
							<dl>
                <dt>验证码：</dt>
                <dd><input class="inputxt" name="verify" type="text"  datatype="*6-6" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/>
                    <span class="fog"><img id="checkcode" src="<?php echo WEB_PATH; ?>/api/checkcode/image/80_27/"/></span></dd>
                <dd><div style="margin:7px 0 0 10px;" class="Validform_checktip"></div></dd>
            </dl>
                  
                 </td>
              </tr>

			                <tr>
                <td><input name="submit" type="submit" class="reg_btn" value="注册"></td>
             
              </tr>
            </table>
            
        <div class="text_bar">已有账号，<a href="<?php echo WEB_PATH; ?>/member/user/login" class="blue_link">[请登录]</a></div>
    <div class="agree_to_the_terms form_input_wrap"><input name="haveread" id="haveread" type="checkbox" value="1" checked class="check_input" datatype="*"  nullmsg="请先阅读并接受本网服务条款！" errormsg="请先阅读并接受本网服务条款！" /><a href="http://www.ibipai.com/help/3" target="_blank">&nbsp;我已阅读并接受本网服务条款</a> <div class="info">请先阅读并接受本网服务条款！<span class="dec"><s class="dec1">&#9670;</s><s class="dec2">&#9670;</s></span></div><div class="Validform_checktip"></div></div>
         </form>
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
<p style="display:none">
</p>
<!--购物车底部结束-->
</body>
</html>