<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta property="qc:admins" content="614353507761564177167636" />
<meta name="baidu_union_verify" content="e5fbb15e93d8426e0b585b59b79c3a93">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/default.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
</head>
<body>


<div class="header_top lh40">

<div class="wp">
<div class="lf mr40">
<a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification">诚信保证，放心<?php echo _cfg('web_name_two'); ?>！</a>
</div>



<div class="lf" id="logininfo">
			<?php if(get_user_arr()): ?>
	<p><a href="<?php echo WEB_PATH; ?>/member/home" class="ml10 mr10"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('3030'); ?>" width="30" height="30"/>					
		<?php echo get_user_name(get_user_arr(),'username'); ?></a>&nbsp;&nbsp;欢迎您！<a href="<?php echo WEB_PATH; ?>/member/user/cook_end" class="ml10">退出帐号</a></p>
			<?php  else: ?>
			<p><a href="<?php echo WEB_PATH; ?>/login" class="ml10 mr10">登录</a><a href="<?php echo WEB_PATH; ?>/register">注册</a></p>
             <p><a href="<?php echo G_WEB_PATH; ?>/?/go/index/intro" class="ml10 mr10"><?php echo _cfg("web_name_two"); ?>简介</a></p>
              <p><a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" class="ml10 mr10">app手机端</a></p>
			<?php endif; ?>
<div class="account"><span><a  href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?><i></i></a></span>
				     <ul>
						<li><a  href="<?php echo WEB_PATH; ?>/member/home/userbuylist"><?php echo _cfg("web_name_two"); ?>记录</a></li>
						<li><a  href="<?php echo WEB_PATH; ?>/member/home">获得的商品</a></dd>
						<li><a  href="<?php echo WEB_PATH; ?>/member/home/userrecharge">帐户充值</a></li>
						<li><a  href="<?php echo WEB_PATH; ?>/member/home/modify">个人设置</a></li>
					</ul>
		           </div>
                </div>
 <div class="rt">
<a href="javascript:;" id="addSiteFavorite" class="ml10">收藏<?php echo _cfg("web_name_two"); ?></a><a href="<?php echo WEB_PATH; ?>/help/1" target="_blank" class="ml10">帮助中心</a>
</div>
</div></div>
<script language="javascript">
$(".account").bind({
		'mouseover':function(){
			$(this).addClass("account_mouseover");
		},
		'mouseout':function(){
			$(this).removeClass('account_mouseover');
		}
	});
</script>
<div class="header_nav">
<div class="wp">
<div class="lf logo"><a href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/></a></div>
<div class="rt"><ul><li class="index"><a href="<?php echo G_WEB_PATH; ?>"><i>首页</i><b></b></a></li><?php echo Getheader('index'); ?></ul></div>
</div></div>

<div class="header_sousuo">
<div class="wp sobg">
<div class="search">
				<input type="text" id="txtSearch" class="init" value='请输入您想要的商品'/>
				<input type="button" id="butSearch" class="search_submit" value="搜索"/>
				<div class="keySearch">
					<a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/相机" target="_blank">相机</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/华为" target="_blank">华为</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/小米" target="_blank">小米</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/耳机" target="_blank">耳机</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/移动电源" target="_blank">移动电源</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/台式机" target="_blank">台式机</a>
					 <a href="<?php echo WEB_PATH; ?>/s_tag/笔记本" target="_blank">笔记本</a> 
				</div></div>
<div class="spBuyCount">
<p><a href="<?php echo G_WEB_PATH; ?>/?/group"><?php echo _cfg("web_name_two"); ?>社区</a></p>
	已&nbsp;&nbsp;<a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank"><span id="spBuyCount" style="color:#22AAFF; background:#F5F5F5; opacity:1;"><?php echo go_count_renci(); ?></span>
					</a>&nbsp;&nbsp;人次参与<?php echo _cfg("web_name_two"); ?></div>

<div class="mini_mycart" id="sCart">
 			<a rel="nofollow" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" id="sCartNavi" class="cart"><s></s>购物车<span id="sCartTotal">0</span>件商品</a><a rel="nofollow" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="checkout">去结算</a>
 			<div class="mycart_list" id="sCartlist" style="display: none;">
 				<div class="goods_loding" id="sCartLoading" style="display: none;"><img border="0" alt="" src="<?php echo G_TEMPLATES_STYLE; ?>/images/goods_loading.gif">正在加载......</div>
 				<p id="p1">共计 <span id="sCartTotal2"> 2</span> 件商品 金额总计：<span id="sCartTotalM" class="rmbred">5.00</span></p>
 				<h3><input type="button" id="sGotoCart" value="去购物车并结算"></h3>
 			</div>
 		</div>
	</div>
  </div>

<div id="nav_fixed">
<a href="<?php echo G_WEB_PATH; ?>"><b></b>返回首页</a>
<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1' and `parentid` = '0' order by `order` DESC",array("type"=>1,"key"=>'',"cache"=>0)); ?>
		<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
		<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $categoryx['cateid']; ?>"><b></b><?php echo $categoryx['name']; ?></a>
		<?php  endforeach; $ln++; unset($ln); ?>
		<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
		<a href="<?php echo WEB_PATH; ?>/goods_list"><b></b>全部商品</a>
</div>
<script type="text/javascript">
var pageId = 'nav-index',pageTitle = '导航',pageVP = "nav-index";
</script>
<script type="text/javascript">
$(function(){
var people_list = $(".t-goods");
	$(window).on("scroll",function(){	
		if(pageId.indexOf('nav-index')>-1){
			var scrollTop = $(window).scrollTop();
			$.each(people_list,function(){
				var top = $(this).offset().top,
            id  = $(this).next().attr("id");
				if(scrollTop >= top && ( scrollTop < $(this).next().offset().top) || (id == "nav_fixed" && scrollTop > 700)){
					$("#nav_fixed a").removeClass("cur");
					$("#nav_fixed a[href=#"+(id == "nav_fixed" ? "nav_f8" : $(this).attr("id"))+"]").addClass("cur");
					return false;
				}
			});
			
			if(!($.browser.msie && $.browser.version==6.0)){
				var fixeds = $("#nav_fixed");
				
				scrollTop > 120 ? fixeds.css("top","0") : fixeds.removeAttr("style");
			}
		}
	});


	$("#sCart").hover(
		function(){			
			$("#sCartlist,#sCartLoading").show();
			$("#sCartlist p,#sCartlist h3").hide();
			$("#sCart .mycartcur").remove();
			$("#sCartTotal2").html("");
			$("#sCartTotalM").html("");
			$.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartheader/="+ new Date().getTime(),function(data){
				$("#sCart .mycartcur").remove();
				$("#sCartLoading").before(data.li);
				$("#sCartTotal2").html(data.num);
				$("#sCartTotalM").html(data.sum);
				$("#sCartLoading").hide();
				$("#sCartlist p,#sCartlist h3").show();
			});
		},
		function(){
			$("#sCartlist").hide();
		}
	);
	$("#sGotoCart").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
	});
})
function delheader(id){
	var Cartlist = $.cookie('Cartlist');
	var info = $.evalJSON(Cartlist);
	var num=$("#sCartTotal2").html()-1;
	var sum=$("#sCartTotalM").html();
	info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];
		
	delete info[id];
	//$.cookie('Cartlist','',{path:'/'});
	$.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
	$("#sCartTotalM").html(info['MoenyCount']);
	$('#sCartTotal2').html(num);
	$('#sCartTotal').text(num);											
	$('#btnMyCart em').text(num);
	$("#mycartcur"+id).remove();
}
$(function(){
	$(".h_1yyg").mouseover(function(){
		$(".h_1yyg_eject").show();
	});
	$(".h_1yyg").mouseout(function(){
		$(".h_1yyg_eject").hide();
	});
	$(".h_news").mouseover(function(){
		$(".h_news_down").show();
	});
	$(".h_news").mouseout(function(){
		$(".h_news_down").hide();
	});
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='请输入您想要的商品'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('请输入您想要的商品');
		}			
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});
</script>