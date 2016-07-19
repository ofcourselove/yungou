<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/header1.css"/>
<!--登录所需-->	

<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/login.css"/>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/JQuery.js"></script>
<link href="<?php echo G_TEMPLATES_STYLE; ?>/js/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_STYLE; ?>/js/demo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/jquery.Validform.min.js"></script>
 <script type="text/javascript">
$(function(){		
	var demo=$(".registerform").Validform({
		tiptype:2,
	});	
})
</script>

<div class="login" style="width:393px;" id="loginsss">
 
	<div class="login_bg" style="width:393px;">
		 <div class="closeLogin">&nbsp;</div>
		<div class="login_box" id="LoginForm">
		<form class="registerform" method="post" action="">
			<h3>用户登录</h3>
			<ul>				
				<li class="click">
					<span>账号：</span>
					<input class="text_password" name="username" type="text"  datatype="m | e" nullmsg="请填写帐号！" errormsg="手机号/邮箱！" />
				</li>
				<li class="ts"><div class="Validform_checktip">手机号/邮箱！</div></li>
				<li>
					<span>密码：</span>					
					<input class="text_password" name="password" type="password"  datatype="*6-20" nullmsg="请设置密码！" errormsg="密码范围在6~20位之间！"/>
					<span class="fog"><a href="<?php echo WEB_PATH; ?>/member/finduser/findpassword">忘记密码？</a></span> 
				</li>								
				<li class="ts" id="pwd_ts"><div class="Validform_checktip">请输入登录密码</div></li>
				<li class="end"><input name="submit" type="submit" value="登录" class="login_init" ></li>
			</ul>
			<?php 
				$conn_cfg = System::load_app_config("connect",'','api');
             ?>
            <?php if($conn_cfg['qq']['off']): ?>
 			<div class="loginQQ">使用合作帐号登录:<span id="qq_login_btn"><a href="<?php echo WEB_PATH; ?>/api/qqlogin/"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/qqlogin.png" /></a></span></div>  
            <?php endif; ?>			
			<input value="<?php echo G_HTTP_REFERER; ?>" name="hidurl" type="hidden">

			<p>
				还不是<?php echo _cfg("web_name_two"); ?>用户？<br>
				开心网购，惊喜无限，就在<?php echo _cfg("web_name_two"); ?>，马上注册吧！</p>
			<h4>
				<a class="regBtns" href="javascript:;">立即注册</a></h4>
		</form>
		</div>
	</div>
</div>
<!--login 结束-->

<!--注册 开始-->
<div class="login" style="width:393px;" id="regsss">
 
	<div class="login_bg" style="width:393px;">
		 <div class="closeLogin">&nbsp;</div>
		<div class="login_box" id="LoginForm">
		<form class="registerform" method="post" action="">
			<h4 style="font-size:18px; height:40px;line-height:40px; font-family:'微软雅黑';color:#f60; font-weight:bold; position:relative;left:-20px;">新用户注册</h4>
			<ul>				
				<li class="click">
					<span style="display:inline-block;width:65px; text-align:right;">手机号：</span>
					<input class="text_password" name="username" type="text"  datatype="m | e" nullmsg="请填写帐号！" errormsg="手机号/邮箱！" />
				</li>
				<li class="ts"><div class="Validform_checktip">手机号/邮箱！</div></li>
                <li class="click">
					<span style="display:inline-block;width:65px; text-align:right;">验证码：</span>
					<input class="text_password" name="username" type="text" nullmsg="请填验证码！" errormsg="请填验证码！" />
				</li>
				<li class="ts"><div class="Validform_checktip">手机号/邮箱！</div></li>
				<li>
					<span style="display:inline-block;width:65px; text-align:right;">密码：</span>					
					<input class="text_password" name="password" type="password"  datatype="*6-20" nullmsg="请设置密码！" errormsg="密码范围在6~20位之间！"/>
				</li>								
				<li class="ts" id="pwd_ts"><div class="Validform_checktip">请输入密码</div></li>
                <li>
					<span style="display:inline-block;width:65px; text-align:right;">确认密码：</span>					
					<input class="text_password" name="password" type="password"  datatype="*6-20" nullmsg="请设置密码！" errormsg="密码范围在6~20位之间！"/>
				</li>								
				<li class="ts" id="pwd_ts"><div class="Validform_checktip">确认密码</div></li>
				<li class="end" style="line-height:35px;">
                <input name="submit" type="submit" value="注册" class="login_init" > 
                &nbsp;&nbsp;&nbsp;
                已有账号<a href="javascript:;" class="loginBtns" style="text-decoration:underline;">立即登录</a></li>
			</ul>
			<?php 
				$conn_cfg = System::load_app_config("connect",'','api');
             ?>
            <?php if($conn_cfg['qq']['off']): ?> 
            <?php endif; ?>			
			<input value="<?php echo G_HTTP_REFERER; ?>" name="hidurl" type="hidden">

		</form>
		</div>
	</div>
</div>
<!--reg 结束-->

<!--登录所需-->	


   
    <!--改-->
 <div class="ftMess0">
  <dl class="ftm1">
   <dt><a href="#">&nbsp;</a></dt>
   <dd>
    <h3><a href="#">100%公平公正</a></h3>
    <div class="ftmessPar">
     <a href="#">参与过程公开透明，用户可随时查看</a>
    </div><!--ftmessPar/-->
   </dd>
   <div class="clears"></div>
  </dl>
  <dl class="ftm2">
   <dt><a href="#">&nbsp;</a></dt>
   <dd>
    <h3><a href="#">100%正品保障</a></h3>
    <div class="ftmessPar">
     <a href="#">精心挑选优质商家，100%品牌正品</a>
    </div><!--ftmessPar/-->
   </dd>
   <div class="clears"></div>
  </dl>
  <dl class="ftm3">
   <dt><a href="#">&nbsp;</a></dt>
   <dd>
    <h3><a href="#">全国免运费</a></h3>
    <div class="ftmessPar">
     <a href="#">全场商品全国包邮（港澳台地区除外）</a>
    </div><!--ftmessPar/-->
   </dd>
   <div class="clears"></div>
  </dl>
  <div class="clears"></div>
 </div><!--ftMess0/-->   
    
 <div class="footerAlls">
  <div class="width-1190s">
   <div class="footerContacts">
    <strong>400-000-0000</strong><br />
    1元云客服热线<br />
    周一至周日：08:00-22:00<br />
   </div><!--footerContacts/-->
   <ul class="footerNavs">
    <li class="ftTitles">用户帮助</li>
    <li><a href="#">新手指南</a></li>
    <li><a href="#">网站地图</a></li>
    <li><a href="#">意见反馈</a></li>
   </ul><!--footerNavs/-->
   <ul class="footerNavs">
    <li class="ftTitles">关于我们</li>
    <li><a href="#">关于一元云</a></li>
    <li><a href="#">联系我们</a></li>
    <li><a href="#">加入我们</a></li>
    <li><a href="#">商家入驻</a></li>
    <li><a href="#">商家推广</a></li>
   </ul><!--footerNavs/-->
   <ul class="footerNavs">
    <li class="ftTitles">关注我们</li>
    <li class="ftns ftns1"><a href="#">新浪微博</a></li>
    <li class="ftns ftns2"><a href="#">QQ空间</a></li>
    <li class="ftns ftns3"><a href="#">腾讯微博</a></li>
   </ul><!--footerNavs/-->
   <div class="ftWxs">
    <h3>1元云微信服务号</h3>
    <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/weixins.jpg" width="114" height="115" />
   </div><!--ftWxs/-->
   <div class="clears"></div>
  </div><!--width-1190s/-->
  <div class="youLinks">
    友情链接：
    腾讯女性	列表网 太平洋女性网	多宝汇	七丽女性网	酷我音乐	LADYMAX时尚网 空姐网	中国品牌服装网	优美网	男士时尚 哈秀时尚网	
  </div><!--youLinks/-->
  <div class="ftCopys">
   Copyright ©2015 Meilishuo.com  电信与信息服务业务经营许可证100798号  企业法人营业执照  京ICP备11031139号  京公网安备110108006045 <br />
客服邮箱：kf@meilishuo.com  客服电话：4000-800-577  文明办网文明上网举报电话：010-82615762  违法不良信息举报中心 我最喜爱的人民警察评选>>
  </div><!--ftCopys/-->
 </div><!--footerAlls/-->
	<!--改-->
	<!--右侧导航-->
		<div class="Right-Nav-Box">
  <div class="RightNavBox">
   <div class="Right-Nav">
    <ul class="rightNavList">
     <li class="btnGeren"><span class="rnl1"></span><strong>个人中心</strong></li>
     <li class="btnYue"><span class="rnl2"></span><strong>余额</strong></li>
     <li class="btnMess"><span class="rnl3"></span><strong>留言板</strong></li>
    </ul><!--rightNavList/-->
    <div class="rnGwc">
     <span></span>
     <strong>0</strong>
    </div><!--rnGwc/-->
   </div><!--Right-Nav/-->
   <form action="#" method="get" class="renLogins renLogins-s">
    <h1><strong>登录</strong> | <a href="#">注册</a></h1>
    <dl>
     <dt>账号：</dt>
     <dd>
      <input type="text" />
     </dd>
     <div class="clears"></div>
    </dl>
    <dl>
     <dt>密码：</dt>
     <dd>
      <input type="password" />
     </dd>
     <div class="clears"></div>
    </dl>
    <dl>
     <dt>验证码：</dt>
     <dd>
      <input type="text" class="renYan" /> <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/RandomCode.do.png" width="85" height="30" />
     </dd>
     <div class="clears"></div>
    </dl>
    <div class="rnSub">
     <input type="submit" value="登录" />
    </div><!--rnSub/-->
   </form><!--renLogins/-->
   <div class="rightNavContent">
    <div class="yueCont">
     <h2>
      <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/fanhui.png" width="24" height="24" class="back-Nav" />
      <span>余额</span>
     </h2>
     <div class="yuePar">
      您的账户余额为<strong style="color:#f60;">0.00</strong>元
     </div><!--yuePar/-->
    </div><!--yueCont/-->
    
    <div class="messageCont">
     <h2>
      <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/fanhui.png" width="24" height="24" class="back-Nav" />
      <span>在线留言</span>
     </h2>
     <form action="#" method="get">
      <label>姓名</label>
      <input type="text" />
      
      <label>电话</label>
      <input type="text" />
      
      <label>电子邮件</label>
      <input type="text" />
      
      <label>联系电话</label>
      <input type="text" />
      
      <label>留言内容</label>
      <textarea></textarea>
      <div class="messSub">
       <input type="submit" value="确认" />
       <input type="reset" value="重填" />
      </div><!--messSub/-->
     </form>
    </div><!--messageCont/-->
    
    <div class="carCont">
     <h2>
      <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/fanhui.png" width="24" height="24" class="back-Nav" />
      <span>购物车</span>
     </h2>
     <div class="carProList">
      <dl>
       <div class="removeCarPro">&nbsp;</div>
       <dt><a href="#"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/20140218123003588.jpg" /></a></dt>
       <dd class="carProText">
        <a href="#">薇姿持久水润护肤盒子特供装（水活霜50ml+爽肤水30ml+精华露1.5ml*2+移动电源+礼品袋+纱袋）</a>
       </dd>
       <dd class="carProShu">
        1
       </dd>
       <dd class="carProJia">
        ￥199.00
       </dd>
       <div class="clears"></div>
      <dl>
      </dl>
       <div class="removeCarPro">&nbsp;</div>
       <dt><a href="#"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/20131205164826177.jpg" /></a></dt>
       <dd class="carProText">
        <a href="#">薇姿持久水润护肤盒子特供装（水活霜50ml+爽肤水30ml+精华露1.5ml*2+移动电源+礼品袋+纱袋）</a>
       </dd>
       <dd class="carProShu">
        1
       </dd>
       <dd class="carProJia">
        ￥199.00
       </dd>
       <div class="clears"></div>
      </dl>
      <dl>
       <div class="removeCarPro">&nbsp;</div>
       <dt><a href="#"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/s3.jpg" /></a></dt>
       <dd class="carProText">
        <a href="#">薇姿持久水润护肤盒子特供装（水活霜50ml+爽肤水30ml+精华露1.5ml*2+移动电源+礼品袋+纱袋）</a>
       </dd>
       <dd class="carProShu">
        1
       </dd>
       <dd class="carProJia">
        ￥199.00
       </dd>
       <div class="clears"></div>
      </dl>
     </div><!--carProList/-->
     <div class="carJiesuan">
      <dl>
       <dt>共<span class="f60">2</span>件商品<strong class="f60">¥398</strong></dt>
       <dd><a href="#">立即结算</a></dd>
      </dl>
     </div><!--carJiesuan/-->
    </div><!--carCont/-->
   </div><!--rightNavContent/-->
  </div><!--RightNavBox/-->
  <a id="btnGotoTop" href="javascript:void()">&nbsp;</a>
 </div><!--Right-Nav/-->
	<!--end右侧导航-->
	
	<!--右下角揭晓-->

    <!--右侧导航新效果-->
    <script type="text/javascript">
	 $(function(){
	//登录
	$(".loginBtn").click(function(){
		$("#loginsss").fadeIn();
		})
	$(".regBtns").click(function(){
		$("#loginsss").hide();
		$("#regsss").fadeIn();
		})	
	$(".closeLogin").click(function(){
		$("#loginsss,#regsss").fadeOut();
		})
	$(".regBtn").click(function(){
		$("#regsss").fadeIn();
		})
	$(".loginBtns").click(function(){
		$("#regsss").hide();
		$("#loginsss").fadeIn();
		})			 
		 //右侧导航
	/*$(".rightNavList li").hover(function(){
		$(this).addClass("rnCur");
		},function(){
			$(this).removeClass("rnCur");
			})	*/
	$(".Right-Nav-Box").animate({
		right:"0"
		},1000)		
	$(".rightNavList li").click(function(){
		$(this).addClass("rnCur").siblings("li").removeClass("rnCur");
		$(".rnGwc").removeClass("rnCwcCur");
		
		})
	$(".rightNavList li").hover(function(){
		$(this).find("strong").stop(true,true).fadeIn();
		},function(){
			$(this).find("strong").stop(true,true).fadeOut();
			})				
	   /*购物车经过*/		
	$(".rnGwc").click(function(){
		$(this).addClass("rnCwcCur");
		$(".rightNavList li").removeClass("rnCur");
		})
		/*个人中心*/
	$(".btnGeren").click(function(){
		 $(".renLogins").toggleClass("renLogins-s");
		})
		/*购物车产品鼠标经过*/
	$(".carProList dl").hover(function(){
		$(this).addClass("carProSty");
		},function(){
			$(this).removeClass("carProSty");
			})
		/*删除产品*/
		$(".removeCarPro").click(function(){
			$(this).parents("dl").fadeOut();
			})
		/*点击余额*/
		$(".btnYue").click(function(){
			$(".Right-Nav-Box").animate({//
				right:"270px"
				})
			$(".rightNavContent").animate({
				right:"0px"
				})	
			$(".yueCont").show().siblings("div").hide();
			//隐藏个人中心
			$(".renLogins").addClass("renLogins-s");
			})
		/*点击留言*/
		$(".btnMess").click(function(){
			$(".Right-Nav-Box").animate({//
				right:"270px"
				})
			$(".rightNavContent").animate({
				right:"0px"
				})	
			$(".messageCont").show().siblings("div").hide();	
			//隐藏个人中心
			$(".renLogins").addClass("renLogins-s");
			})
		/*点击购物车*/
		$(".rnGwc").click(function(){
			$(".Right-Nav-Box").animate({//
				right:"270px"
				})
			$(".rightNavContent").animate({
				right:"0px"
				})	
			$(".carCont").show().siblings("div").hide();
			//隐藏个人中心
			$(".renLogins").addClass("renLogins-s");	
			})
		/*隐藏侧边栏*/
		$(".back-Nav,.g-frame-top,.nav,.g-frame-content,.footerAlls").click(function(){
			$(".Right-Nav-Box").animate({//
				right:"0px"
				})
			$(".rightNavContent").animate({
				right:"-280px"
				})	
			$(".rightNavList li").removeClass("rnCur");$(".rnGwc").removeClass("rnCwcCur");	
			})
		$(".Right-Nav-Box").animate({
		right:"0"
		},1000)		
		 })
	</script>

	<!--end右下角揭晓-->
	<script type="text/javascript">
(function(){				
		var week = '日一二三四五六';
		var innerHtml = '{0}:{1}:{2}';
		var dateHtml = "{0}月{1}日 &nbsp;周{2}";
		var timer = 0;
		var beijingTimeZone = 8;				
				function format(str, json){
					return str.replace(/{(\d)}/g, function(a, key) {
						return json[key];
					});
				}				
				function p(s) {
					return s < 10 ? '0' + s : s;
				}			

				function showTime(time){
					var timeOffset = ((-1 * (new Date()).getTimezoneOffset()) - (beijingTimeZone * 60)) * 60000;
					var now = new Date(time - timeOffset);
					document.getElementById('sp_ServerTime').innerHTML = format(innerHtml, [p(now.getHours()), p(now.getMinutes()), p(now.getSeconds())]);				
					//document.getElementById('date').innerHTML = format(dateHtml, [ p((now.getMonth()+1)), p(now.getDate()), week.charAt(now.getDay())]);
				}				
				
				window.yungou_time = 	function(time){						
					showTime(time);
					timer = setInterval(function(){
						time += 1000;
						showTime(time);
					}, 1000);					
				}
	window.yungou_time(<?php echo time(); ?>*1000);
				
})();
				
				
				
$(document).ready(function(){
	try{  
       if(typeof(eval(pleasereg_initx))=="function"){
            pleasereg_initx();
	   }
    }catch(e){
       //alert("not function"); 
    }  
})
</script>
<script>
$(function(){
	$(".quick_cart").hover(
		function(){			
			$("#rCartlist,#rCartLoading").show();
			$("#rCartlist p,#rCartlist h3").hide(); 
			$("#rCartlist li").remove();
			$("#rCartTotal2").html("");
			$("#rCartTotalM").html("");
			$.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartshop/"+ new Date().getTime(),function(data){
				$("#rCartlist ul").append(data.li);
				$("#rCartTotal2").html(data.num);
				$("#rCartTotalM").html(data.sum);
				$("#rCartLoading").hide();
				$("#rCartlist ul,#rCartlist p,#rCartlist h3").show();				
			});
		},
		function(){
			$("#rCartlist,#rCartlist ul,#rCartlist p,#rCartlist h3").hide();
		}
	);
});
function delshop(id){
	var Cartlist = $.cookie('Cartlist');
	var info = $.evalJSON(Cartlist);
	var num=$("#rCartTotal2").html()-1;
	var sum=$("#rCartTotalM").html();
	info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];
		
	delete info[id];
	//$.cookie('Cartlist','',{path:'/'});
	$.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
	$("#rCartTotalM").html(info['MoenyCount']);
	$('#rCartTotal2').html(num);
	$('#sCartTotal').text(num);											
	$('#btnMyCart em').text(num);
	$("#shopid"+id).remove();
}
$(document).ready(function(){
	$.get("<?php echo WEB_PATH; ?>/member/cart/getnumber/"+ new Date().getTime(),function(data){
		$("#sCartTotal").text(data);											
		$("#btnMyCart em").text(data);											
	});
});
</script>
<script>

$(function(){

	$("#btnGotoTop").click(function(){
		$("html,body").animate({scrollTop:0},1500);
	});
	
	
 
});
	//云购基金
	$.ajax({
		url:"<?php echo WEB_PATH; ?>/api/fund/get",
		success:function(msg){
		var str='<i class="rmbf">￥</i>'+msg;
			$("#spanFundTotal").html(str);
		}
	});
</script>

 <!-- 1yyug.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F2f41914abdd9da48f3a9fd9e715992d7' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>