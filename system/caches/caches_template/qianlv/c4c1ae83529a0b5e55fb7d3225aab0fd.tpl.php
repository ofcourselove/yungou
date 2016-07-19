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
<style>  
 .g-snow-con {
position: relative;
top: 100px;
z-index: 1001;
margin-bottom: -30px;
}
.g-snow {
background: url(<?php echo G_UPLOAD_PATH; ?>/banner/snow.png?v=141217) center no-repeat;
height: 30px;
_width: 1211px;
_margin: 0 auto;
}
.g-snow2 {
background: url(<?php echo G_UPLOAD_PATH; ?>/banner/snow2.png?v=141217) center no-repeat;
height: 30px;
_width: 1012px;
_margin: 0 auto;
display: none;
} 
    .d {
 
 top: 0px;
 margin-top: 0px;
 padding-top:0px;
 margin-right: auto;
 margin-bottom: 0;
 margin-left: auto;
 background-image: url(<?php echo G_UPLOAD_PATH; ?>/banner/bg_2015.gif);
 background-repeat: no-repeat;
 background-position: center 3.82%; 
} </style>
<div class="d"><div>

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
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/Home.css"/>
<style type="text/css">
<!--
.demo{ width:740px; height:333px; position:relative; overflow:hidden; padding:0px;}
.num{ position:absolute;right:20px; top:300px; z-index:10;}
.num a{background:#fff; color:#f60; border:1px solid #ccc; width:25px; height:25px; display:inline-block; text-align:center; line-height:25px; margin:0 3px; cursor:pointer;font-weight: bold;}
.num a.cur{border:1px solid #f60; background:#f60;color:#fff;}
.demo ul{ position:relative; z-index:0;}
.demo ul li{ position:absolute; display:none;}
#indexheadpopup{width:815px;height:455px;position:fixed;z-index:9999;left:50%;margin-left:-400px;top:50%;margin-top:-200px;display:none;}
#indexheadpopup a{display:block;position:absolute;text-decoration:none;right:415px;top:415px;font: 12px/1.5 arial;background:#B50000;padding:2px 5px;color:#fff;}
#indexheadpopup a:hover{background:red;}
-->
</style>
<script language="javascript" type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/homead.js"></script>
<div id="indexheadpopup">
<a href="javascript:;" onclick="indexheadpopup.style.display='none'">关闭</a>
<img src="/statics/uploads/banner/index.png"></div>

<div class="bk10"></div>
<!--banner and Recommend 开始-->
<div class="banner_recommend">
	<div class="banner-box">
		<div id="posterTopNav" class="yg-flow"><a href="<?php echo WEB_PATH; ?>/single/newbie" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/banner/20130524181745143.gif" alt="新手指南" width="742" height="50"></a></div>
		<?php $slides=$this->DB()->GetList("select * from `@#_slide` where 1",array("type"=>1,"key"=>'',"cache"=>0)); ?>
		<div class="demo">					
			<ul>		
            	<?php $ln=1;if(is_array($slides)) foreach($slides AS $slide): ?>
                <?php if($ln == 1): ?>
            	<li style="display:list-item;"><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>
             	<?php  else: ?>
            <li style="display:none;"><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>
                <?php endif; ?>
                <?php  endforeach; $ln++; unset($ln); ?>
            </ul>
			 <div class="num">
			<?php 					
				for($i=1;$i<=count($slides);$i++){
				echo '<a class="">'.$i.'</a>' ;
				}
			 ?>
			</div>
			<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
		</div>
	</div>
	<script type="text/javascript">
$(function(){
	var sw = 0;
	$(".demo .num a").mouseover(function(){
		sw = $(".num a").index(this);
		myShow(sw);
	});
	function myShow(i){
		$(".demo .num a").eq(i).addClass("cur").siblings("a").removeClass("cur");
		$(".demo ul li").eq(i).stop(true,true).fadeIn(600).siblings("li").fadeOut(600);
	}
	//滑入停止动画，滑出开始动画
	$(".demo").hover(function(){
		if(myTime){
		   clearInterval(myTime);
		}
	},function(){
		myTime = setInterval(function(){
		  myShow(sw)
		  sw++;
		  if(sw==<?php echo count($slides); ?>){sw=0;}
		} , 3000);
	});
	//自动开始
	var myTime = setInterval(function(){
	   myShow(sw)
	   sw++;
	   if(sw==<?php echo count($slides); ?>){sw=0;}
	} , 3000);
})
</script>
    <!-- 首页右边推荐商品 start-->
    <?php if($new_shop): ?>
	<div class="recommend">
    
		<ul class="Pro">			
			<li>
				<div class="pic">
				<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>" target="_blank" title="<?php echo $new_shop['title']; ?>">
				<i class="goods_tj"></i>
				<img alt="<?php echo $new_shop['title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $new_shop['thumb']; ?>">
				</a>
				<p name="buyCount" style="display:none;"></p>
				</div>
				<p class="name">
					<strong><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>" target="_blank" title="<?php echo $new_shop['title']; ?> ">
                    <?php echo $new_shop['title']; ?></strong></a>
				</p>
				<p class="money">价值：<span class="rmb"><?php echo $new_shop['money']; ?></span></p>
				<div class="Progress-bar" style="">
					<p title="已完成<?php echo percent($new_shop['canyurenshu'],$new_shop['zongrenshu']); ?>"><span style="width:<?php echo width($new_shop['canyurenshu'],$new_shop['zongrenshu'],205); ?>px;"></span></p>
					<ul class="Pro-bar-li">
						<li class="P-bar01"><em><?php echo $new_shop['canyurenshu']; ?></em>已参与人次</li>
						<li class="P-bar02"><em><?php echo $new_shop['zongrenshu']; ?></em>总需人次</li>
						<li class="P-bar03"><em><?php echo $new_shop['zongrenshu']-$new_shop['canyurenshu']; ?></em>剩余人次</li>
					</ul>
				</div>
				<p>
					<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $new_shop['id']; ?>" target="_blank" class="go_buy"></a>
				</p>
			</li>				
		</ul>
	</div>
   <?php endif; ?>
    <!-- 首页右边推荐商品 end-->
</div>
<!--banner and Recommend 结束-->
<!--product 开始-->
<div class="goods_hot">
	<div class="goods_left">
    
		<div class="new_lottery">        	
			<h4><span>最新揭晓</span><a rel="nofollow" href="<?php echo WEB_PATH; ?>/goods_lottery">更多&gt;&gt;</a></h4>
			<ul id="ulNewAwary" style="padding-bottom:5px;">
            <style>
				.new_li .pic img{ margin-left:15px;}		
			</style>
			<?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>
            <?php 
            	$qishu['q_user'] = unserialize($qishu['q_user']);
             ?>
			<li class="new_li">
			<a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="pic"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" /></a>
			<a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="name"><?php echo $qishu['title']; ?></a> 
		  	<span class="winner">获得者：<a rel="nofollow" class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>" target="_blank"><?php echo get_user_name($qishu['q_user']); ?></a></span>
			</li>
			<?php  endforeach; $ln++; unset($ln); ?>
			</ul>
            <!------>
            	<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/GLotteryFun.js"></script>
                <script type="text/javascript">
					$(document).ready(function(){gg_show_time_init("ulNewAwary",'<?php echo WEB_PATH; ?>',0);});					
			    </script>  
            <!------>
		</div>                
		<div class="hot">
			<h3><span>人气商品</span><a rel="nofollow" href="<?php echo WEB_PATH; ?>/goods_list">更多&gt;&gt;</a></h3>
			<ul id="hostGoodsItems" class="hot-list">											
				<?php $ln=1;if(is_array($shoplistrenqi)) foreach($shoplistrenqi AS $renqi): ?>
				<li class="list-block">
					<div class="pic"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank" title="<?php echo $renqi['title']; ?>">					
					<?php if(isset($renqi['t_max_qishu'])): ?>							
							<i class="goods_rq"></i>							
					<?php endif; ?>					
					<?php if(isset($renqi['t_new_goods'])): ?>						
							<i class="goods_xp"></i>					
					<?php endif; ?>
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>" alt="<?php echo $renqi['title']; ?>"></a></div>
					<p class="name"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank" title="<?php echo $renqi['title']; ?>"><?php echo $renqi['title']; ?></a></p>
					<p class="money">市场价：<span class="rmb"><?php echo $renqi['money']; ?></span> 元</p>
					<div class="Progress-bar" style="">
						<p title="已完成<?php echo percent($renqi['canyurenshu'],$renqi['zongrenshu']); ?>"><span style="width:<?php echo width($renqi['canyurenshu'],$renqi['zongrenshu'],221); ?>px;"></span></p>
						<ul class="Pro-bar-li">
							<li class="P-bar01"><em><?php echo $renqi['canyurenshu']; ?></em>已参与人次</li>
							<li class="P-bar02"><em><?php echo $renqi['zongrenshu']; ?></em>总需人次</li>
							<li class="P-bar03"><em><?php echo $renqi['zongrenshu']-$renqi['canyurenshu']; ?></em>剩余人次</li>
						</ul>
					</div>
					<div class="shop_buttom"><span class="lf"><?php echo _cfg("web_name_two"); ?>价：<em><?php echo $renqi['yunjiage']; ?></em> 元</span><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank" class="shop_but rt" title="立即<?php echo _cfg("web_name_two"); ?>">立即<?php echo _cfg("web_name_two"); ?></a></div>
				</li>
				<?php  endforeach; $ln++; unset($ln); ?>
			</ul>
		</div>
	</div>
	<div class="goods_right">
		<div class="news">
			<h3><?php echo _cfg("web_name_two"); ?>动态</h3>
			<div class="box">
			<ul>
				<?php $ln=1;if(is_array($tiezi)) foreach($tiezi AS $tz): ?>				
				<li><a href="<?php echo WEB_PATH; ?>/group/nei/<?php echo $tz['id']; ?>" target="_blank"><?php echo $tz['title']; ?></a></li>								
				<?php  endforeach; $ln++; unset($ln); ?>
			</ul>
		</div></div>
		
		<div class="wait_lottery" id="divLottery">
		<a href="<?php echo G_WEB_PATH; ?>/?/group" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/banner/bbs.jpg" width="230" height="200"></a>
		</div>
	
		<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
		<div class="share">
			<h3>TA们正在<?php echo _cfg("web_name_two"); ?></h3>
			<div class="box">
			<div class="buyList">		
                <ul id="buyList" style="margin-top: 0px;">
					<?php $ln=1;if(is_array($go_record)) foreach($go_record AS $gorecord): ?>
					<li>
						<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" class="pic" target="_blank">
                        <img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo shopimg($gorecord['shopid']); ?>"></a>
						<span class="who"><p style="display: inline;"><a class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($gorecord['uid']); ?>"><?php echo get_user_name($gorecord); ?></a></p>刚刚<?php echo _cfg("web_name_two"); ?>了</span>
						<span><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" class="name" target="_blank"><?php echo $gorecord['shopname']; ?></a></span>
					</li>
					<?php  endforeach; $ln++; unset($ln); ?>
				</ul>
			</div>
		</div>
		</div>
	</div>
</div>
<!--product 结束-->
<div class="clear"></div>
<!--商品 开始-->
<div class="get_ready">
	<h3><span>即将揭晓</span><a rel="nofollow" href="<?php echo WEB_PATH; ?>/goods_list">更多&gt;&gt;</a></h3>
	<ul id="readyLotteryItems" class="hot-list">
		<?php $ln=1;if(is_array($shoplist)) foreach($shoplist AS $shop): ?>
		<li class="list-block">
			<div class="pic"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" title="<?php echo $shop['title']; ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $shop['thumb']; ?>" alt="<?php echo $shop['title']; ?>"></a></div>
			<p class="name"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" title="<?php echo $shop['title']; ?>"><?php echo $shop['title']; ?></a></p>
			<p class="money">价值：<span class="rmb"><?php echo $shop['money']; ?></span></p>
			<div class="Progress-bar" style="">
				<p title="已完成<?php echo percent($shop['canyurenshu'],$shop['zongrenshu']); ?>"><span style="width:<?php echo width($shop['canyurenshu'],$shop['zongrenshu'],221); ?>px;"></span></p>
				<ul class="Pro-bar-li">
					<li class="P-bar01"><em><?php echo $shop['canyurenshu']; ?></em>已参与人次</li>
					<li class="P-bar02"><em><?php echo $shop['zongrenshu']; ?></em>总需人次</li>
					<li class="P-bar03"><em><?php echo $shop['zongrenshu']-$shop['canyurenshu']; ?></em>剩余人次</li>
				</ul>
			</div>
			<div class="shop_buttom">
			<span class="lf"><?php echo _cfg("web_name_two"); ?>价：<em><?php echo $shop['yunjiage']; ?></em> 元</span><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" class="shop_but rt" title="立即<?php echo _cfg("web_name_two"); ?>">立即<?php echo _cfg("web_name_two"); ?></a>
			</div>
		</li>
		<?php  endforeach; $ln++; unset($ln); ?>			
	</ul>
</div>

<!--商品 结束-->
<!--晒单分享-->
<div class="lottery_show">
    <div class="share_show">
        <h3><span>晒单分享</span><a href="#" target="_blank">更多&gt;&gt;</a></h3>
        <div class="show">
			<?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sd): ?>
			<dl>
				<dt><a rel="nofollow" href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><img alt="" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"></a></dt>
				<dd class="bg">
					<ul>
						<li class="name"><span><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><?php echo $sd['sd_title']; ?></a></span> 获得者：<a rel="nofollow" class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo $sd['sd_userid']; ?>" target="_blank"><?php echo get_user_name($sd['sd_userid']); ?></a></li>
						<li class="content"><?php echo _strcut($sd['sd_content'],100); ?></li>
					</ul>
				</dd>
			</dl>
			<?php  endforeach; $ln++; unset($ln); ?>	
			<div class="show_list">	
				<?php $ln=1;if(is_array($shaidan_two)) foreach($shaidan_two AS $sd): ?>
				<ul>
					<li class="pic"><a rel="nofollow" href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>"><img alt="" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"></a></li>
					<li class="show_tit"><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><?php echo $sd['sd_title']; ?></a></li>
					<li>获得者：<a rel="nofollow" class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo $sd['sd_userid']; ?>" target="_blank"><?php echo get_user_name($sd['sd_userid']); ?></a></li>
					<li>揭晓时间：<?php echo date("Y-m-d",$sd['sd_time']); ?></li>
				</ul>	
				<?php  endforeach; $ln++; unset($ln); ?>			
				<div class="arrow_left"></div>
				<div class="arrow_right"></div>
			</div>               
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
	    var _BuyList=$("#buyList");
        var Trundle = function () {
            _BuyList.prepend(_BuyList.find("li:last")).css('marginTop', '-85px');
            _BuyList.animate({ 'marginTop': '0px' }, 800);
        }
        var setTrundle = setInterval(Trundle, 3000);
        _BuyList.hover(function () {
            clearInterval(setTrundle);
            setTrundle = null;
        },function () {
            setTrundle = setInterval(Trundle, 3000);
        });
    });
    </script>
<!--晒单分享end-->
<?php include templates("index","footer");?>