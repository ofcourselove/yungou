<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta property="qc:admins" content="145075342662116576516375" />
<link rel="stylesheet" type="text/css" href="<?php echo G_WEB_PATH; ?>/@/css/base.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_WEB_PATH; ?>/@/css/index.min.css" />
<link href="<?php echo G_WEB_PATH; ?>/@/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_WEB_PATH; ?>/@/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_WEB_PATH; ?>/@/js/ad.js"></script>
<link rel="shortcut icon" href="<?php echo WEB_PATH; ?>/favicon.ico" />
<meta name="360-site-verification" content="4a3cec8a42cbd5471ebabff3a75212bd" />
</head>

<style>  
 .g-snow-con {
position: relative;
top: 130px;
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
 background-position: center top; 
} </style>
<div id="divSnow" class="g-snow-con clrfix">
        <div class="g-snow"></div>
        <div class="g-snow2"></div>
    </div>
<div class="d"><div>


<body id="loadingPicBlock">
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a href="<?php echo WEB_PATH; ?>/single/business">商务合作</a>
            <span class="sep">|</span><a id="btnFavorite" href="javascript:;" title="收藏<?php echo _cfg("web_name_two"); ?>">收藏<?php echo _cfg("web_name_two"); ?></a>
          <span class="sep">|</span><a href="<?php echo WEB_PATH; ?>/go/index/app" target="_blank" title="手机版">手机<?php echo _cfg('web_name_two'); ?></a>
            <span class="sep">|</span><a href="<?php echo WEB_PATH; ?>/go/index/intro" target="_blank" title="网站简介"><?php echo _cfg('web_name_two'); ?>简介</a>
            <span class="sep">|</span><a href="<?php echo WEB_PATH; ?>/group_qq" target="_blank" title="QQ群"><?php echo _cfg('web_name_two'); ?>QQ群</a>
        </div>
        <div class="topbar-info J_userInfo">
		<?php if(get_user_arr()): ?>
			<div class="welcome">欢迎您 <b><?php echo get_user_name(get_user_arr(),'username'); ?><span class="arrow"></span></b><span class="sep">|</span>
				<div class="user-info-menu" style="display: none;">
					<ul>
						<li><a href="<?php echo WEB_PATH; ?>/member/home" target="_blank">个人中心</a></li>
						<li><a href="<?php echo WEB_PATH; ?>/member/home/userrecharge">帐户充值</a></li>
						<li><a href="<?php echo WEB_PATH; ?>/member/user/cook_end">退出登录</a></li>
					</ul>
					<span class="menu-arrow"></span>
				</div>
			</div>
			<a href="<?php echo WEB_PATH; ?>/member/home/userbuylist">我的订单</a><span class="sep">|</span>
			<a href="<?php echo WEB_PATH; ?>/member/home" target="_blank">我的<?php echo _cfg("web_name_two"); ?>账户</a>
		<?php  else: ?>
			<a href="<?php echo WEB_PATH; ?>/login">登录</a><span class="sep">|</span><a href="<?php echo WEB_PATH; ?>/register">注册</a>
		<?php endif; ?>
        </div>
    </div>
</div>
<!-- .site-topbar END -->
<div class="site-header container">
    <div class="site-logo"><a class="logo" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>" style="background: url(<?php echo G_UPLOAD_PATH; ?>/banner/logo3.jpg);"><i class="iconfont">&#xe61d;</i></a></div>
    <div class="header-info">
        <div class="search-section">
            <div class="search-form clearfix">
				<input type="text" id="txtSearch" class="search-text" placeholder="搜索您需要的商品"/>
				<input type="button" id="butSearch" class="search-btn iconfont" value="&#xe630;"/>
                <!--[if IE 6]><div class="ie6-fix"></div><![endif]-->
                <div class="hot-words">
                    <a href="<?php echo WEB_PATH; ?>/goods_list/5/">手机</a><a href="<?php echo WEB_PATH; ?>/goods_list/12/">护肤</a><a href="<?php echo WEB_PATH; ?>/goods_list/36/">思维车</a>
				</div>
            </div>
        </div>
        <div class="cart-section">
			<div class="mini_mycart" id="sCart">
				<a rel="nofollow" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" id="sCartNavi" class="mini-cart"><i class="iconfont">&#xe609;</i>购物车 (<span id="sCartTotal">0</span>)</a>
				<div class="mini-cart-list" id="J_miniCartList">
					<div class="goods_loding" id="sCartLoading" style="display: none;"><img border="0" alt="" src="<?php echo G_TEMPLATES_STYLE; ?>/images/goods_loading.gif">数据加载中，请稍后...</div>
					<div class="count clearfix"><span class="total">共计 <em id="sCartTotal2">0</em> 件商品<strong>合计：<em id="sCartTotalM">0元</em></strong></span><a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="btn btn-primary">去购物车结算</a></div>
				</div>
			</div>
        </div>
    </div>

	<?php 
		if($this->db){
			$cmodel=$this->db;
		}else{
			$cmodel=$mysql_model;
		}

		$two_cate_list = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");

	 ?>

    <div class="header-nav clearfix">
        <div id="J_categoryContainer" class="nav-category">
            <a class="btn-category-list" href="<?php echo WEB_PATH; ?>/goods_list">全部商品分类</a>
            <div class="nav-category-section" style="display: block;">
                <ul class="nav-category-list">
					<?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
						<?php 
							$cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
							$i=$key+1;
						 ?>


						<li class="nav-category-item">
							<div class="nav-category-content">
								<a class="title" href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0"><?php echo $catelist['name']; ?></a>
								<div class="links">

									<?php 

										if(is_array($cate2)){
										   foreach($cate2 AS $bval){
									 ?>
									<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $bval['cateid']; ?>_0_0"><?php echo $bval['name']; ?></a>
									<?php 
										 }}
									 ?>
								</div>
							</div>
						</li>

					<?php  endforeach; $ln++; unset($ln); ?>
				</ul>
            </div>
        </div>
        <div class="nav-main">
            <ul class="nav-main-list J_menuNavMain clearfix">
                <li class="nav-main-item"><a href="<?php echo G_WEB_PATH; ?>/index.php"><span class="text">首页</span></a></li>
				<li class="nav-main-item"><a href="<?php echo WEB_PATH; ?>/goods_lottery"><span class="text">最新揭晓</span></a></li>
                <li class="nav-main-item"><a href="<?php echo WEB_PATH; ?>/go/shaidan/"><span class="text">晒单分享</span></a></li>
				<li class="nav-main-item"><a href="<?php echo WEB_PATH; ?>/single/pleasereg"><span class="text">邀请</span></a></li>
                <li class="nav-main-item"><a href="<?php echo WEB_PATH; ?>/go/autolottery"><span class="text">限时揭晓</span></a></li>
                <li class="nav-main-item"><a href="<?php echo WEB_PATH; ?>/single/newbie"><span class="text">新手指南</span></a></li>
                <li class="nav-main-item"><a href="<?php echo WEB_PATH; ?>/group" target="_blank"><span class="text"><?php echo _cfg('web_name_two'); ?>社区</span></a></li>
            </ul>
        </div>
    </div>
    <div class="open-buy-info">
        <div class="number">
            <a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
            <ul id="ulHTotalBuy">
                <li class="nobor gray6">累计参与</li>
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
				<li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor gray6 u-secondary">人次<b><s></s></b></li>
			</ul>
			<!--ul id="ulHTotalBuy">
				<li class="nobor gray6">累计参与</li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="nobor">,</li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="nobor">,</li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="num"><cite><em><?php echo go_count_renci(); ?></em></cite><i></i></li>
				<li class="nobor gray6 u-secondary">人次<b><s></s></b></li>
			</ul-->
			</a>
		</div>
    </div>
</div>
<!-- .site-header END -->
 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('/js/Bottom.js?v=' + GetVerNum());
 </script>
<script>
$(function(){
	$("#sCart").hover(
		function(){
			$("#J_miniCartList,#sCartLoading").show();
			$("#J_miniCartList p,#J_miniCartList h3").hide();
			$("#sCart .mycartcur").remove();
			$("#sCartTotal2").html("");
			$("#sCartTotalM").html("");
			$.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartheader/="+ new Date().getTime(),function(data){
				$("#sCart .mycartcur").remove();
				$("#sCartLoading").before(data.li);
				$("#sCartTotal2").html(data.num);
				$("#sCartTotalM").html(data.sum);
				$("#sCartLoading").hide();
				$("#J_miniCartList p,#J_miniCartList h3").show();
			});
		},
		function(){
			$("#J_miniCartList").hide();
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
	$(".welcome").mouseover(function(){
		$(".user-info-menu").show();
	});
	$(".welcome").mouseout(function(){
		$(".user-info-menu").hide();
	});
	$(".h_news").mouseover(function(){
		$(".h_news_down").show();
	});
	$(".h_news").mouseout(function(){
		$(".h_news_down").hide();
	});
});
$(".g-hotL-list").hover(
　　function () {
　　$(this).addClass("g-hotL-hover");
　　},
　　function () {
　　$(this).removeClass("g-hotL-hover");
　　}
　　);
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='搜索您需要的商品'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('搜索您需要的商品');
		}
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});
</script>