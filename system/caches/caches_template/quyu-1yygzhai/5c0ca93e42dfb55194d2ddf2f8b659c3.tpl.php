<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
    <meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
    <title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/header.css" />
    
	<link href="<?php echo G_TEMPLATES_STYLE; ?>/css/register.css" rel="stylesheet" type="text/css" />
   <!--[if IE 6]>
       <script type="text/javascript" src="http://skin.1yyg.com/js/iepng.js"></script> 
       <script type="text/javascript">
       EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.F_goods_rq, .F_goods_xp, .F_goods_tj,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s');
       </script>
   <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/index2.css?date=20140731">
     <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm1.css?date=20140731">
	<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
    <script type="text/javascript" id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/Index.js"></script>
</head>
<style>.m-slides {
width: 750px;
height: 298px;
overflow: hidden;
position: relative;
}.rslides_nav.next {
right: 0;
left: auto;
}.rslides_tabs {
clear: both;
text-align: center;
position: absolute;
bottom: 18px;
z-index: 99;
float: left;
left: 50%;
}.rslides_tabs li {
margin: 0 3px;
float: left;
right: 50%;
position: relative;
}.rslides_tabs .rslides_here a {
background: #f60;
width: 20px;
opacity: 1;
}.rslides_tabs a {
text-indent: -9999px;
overflow: hidden;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
background: #000;
display: inline-block;
_display: block;
width: 12px;
height: 12px;
filter: alpha(opacity=50);
-moz-opacity: 0.5;
-khtml-opacity: 0.5;
opacity: 0.5;
cursor: pointer;
}.slide-comd {
clear: both;
width: 710px;
height: 137px;
}.slide-comd .commodity {
width: 315px;
height: 111px;
float: left;
margin-left: -1px;
border: 1px solid #ddd;
border-left: 0 none;
padding: 13px 20px;
overflow: hidden;
}
</style>
<body id="loadingPicBlock" class="home" rf="1" >
<SCRIPT language=javascript> 
<!-- 
window.onerror=function(){return true;} 
// --> 
</SCRIPT> 
<style>  
 .g-snow-con {
position: relative;
top: 135px;
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
    </div><div class="d"><div>
    <div class="wrapper">
        <!--头部-->
        <!--顶部-->
 <div class="g-toolbar">
     <div class="w1190">
         <ul class="fl">
             <li>
                 <div class="u-menu-hd">
                     <a id="addSiteFavorite" href="javascript:;" title="收藏">收藏<?php echo _cfg("web_name_two"); ?></a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liMobile" class="u-arr">
                 <div class="u-menu-hd">
                     <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" title="手机云购">手机云购</a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-weix">
                     <p>
                         <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" target="_blank">
                             <img src="<?php echo G_TEMPLATES_STYLE; ?>/images/wx.jpg" />
                             下载客户端
                         </a>
                     </p>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/group_qq" target="_blank" title="官方QQ群">官方QQ群</a>
                 </div>
             </li>
               <li class="f-gap"><s></s></li>
              <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo G_WEB_PATH; ?>/?/go/index/weixin" target="_blank" title="官方微信">官方微信</a>
                 </div>
             </li>
               <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo G_WEB_PATH; ?>/?/go/index/intro" target="_blank" title="官方简介"><?php echo _cfg('web_name_two'); ?>简介</a>
                 </div>
             </li>
         </ul>
         <ul id="ulTopRight" class="fr">
		 <?php if(get_user_arr()): ?>
<li>
<div class="u-menu-hd u-menu-login">
<a class="blue" title="<?php echo get_user_name(get_user_arr(),'username'); ?>" href="<?php echo WEB_PATH; ?>/member/home"><?php echo get_user_name(get_user_arr(),'username'); ?></a>
<a title="退出" href="<?php echo WEB_PATH; ?>/member/user/cook_end">[退出]</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
		 
<?php  else: ?>		 
<li id="logininfo">
<div class="u-menu-hd">
<a title="登录" href="<?php echo WEB_PATH; ?>/login">登录</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<li>
<div class="u-menu-hd">
<a title="注册" href="<?php echo WEB_PATH; ?>/register">注册</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<?php endif; ?>
<li id="liMember" class="u-arr">
<div class="u-menu-hd">
<a href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" title="云购记录">云购记录</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/orderlist" title="获得的商品">获得的商品</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/modify" title="个人设置">个人设置</a></span>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liTopUMsg" class="u-arr" style="display: none;">
                 <div class="u-menu-hd">
                     <a href="#" title="消息">消息</a>
                     <h3 style="display: none;"></h3>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="#" title="好友请求">好友请求</a></span>
                     <span><a href="#" title="系统消息">系统消息</a></span>
                     <span><a href="#" title="私信" class="f-msg">私信</a></span>
                 </div>
             </li>
             <li class="f-gap" style="display: none;"><s></s></li>
			 <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="帮助">快速冲值</a>
                 </div>
             </li>
             <li>
                 <div class="u-menu-hd">
                     <a href="#" title="帮助">帮助</a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a id="btnTopQQ" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                 </div>
             </li>
         </ul>
     </div>
 </div><!--头部-->
<div class="g-header">
     <div class="w1190">
         <div id="" class="logo_1yyg fl">
             <a class="logo" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>">
                   <img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
                </a>
    </div>
          <div class="search_cart_wrap fr">
             <div class="number">
                 <a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
                      <ul id="ulHTotalBuy">
      <li class="nobor gray6" style="width: 56px;">累计参与</li>

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
                 </a>
             </div>

 
             <div class="search">
                 <div class="form">
                     <input id="txtSearch" type="text" value="输入“汽车”试试" />
                     <span>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/电脑" target="_blank">电脑</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/手机" target="_blank">手机</a>
                     </span>
                 </div>
                 <a id="butSearch" href="javascript:;" class="seaIcon"><i></i></a>
             </div>
         </div>
     </div>
 </div>
 
 
 
 <!--导航-->
  <?php 
		if($this->db){
			$cmodel=$this->db;
		}else{
			$cmodel=$mysql_model;
		}

		$two_cate_list = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");
	 ?>
 <div class="g-nav">
     <div class="w1190">
         <div id="divGoodsSort" class="m-menu fl">
             <div class="m-menu-all">
                 <h3><a href="<?php echo WEB_PATH; ?>/goods_list">全部商品分类</a><em></em></h3>
             </div>
             <div id="divSortList" class="m-all-sort" >
                 <?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
						<?php 
							//$brand=$this->db->GetList("select id,cateid,name from `@#_brand` where `cateid` LIKE '%$catelist[cateid]%' order by `order` DESC");

								$cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
								//echo "select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC";


 							$i=$key+1;
						 ?>

							<dl>
								<dt class="U-goods-<?php echo $i; ?>">
									<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0"> <i
										class="F-goods-img"></i><?php echo $catelist['name']; ?><i class="F-goods-arrow"></i>
									</a>
								</dt>

								<?php 

									if(is_array($cate2)){
									   foreach($cate2 AS $bval){
								 ?>
								<dd>
									<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $bval['cateid']; ?>_0_0"><?php echo $bval['name']; ?></a>
								</dd>
								<?php 
									 }}
								 ?>

							</dl>

							<?php  endforeach; $ln++; unset($ln); ?>
             </div>

         </div>
         <div class="nav-main fl">
             <ul>
                 <li class="f-nav-home"><a href="/">首页</a></li>
                	<?php echo Getheader('index'); ?>
             </ul>
         </div>
         <div id="divHCart" class="nav-cart fr">
             <div class="nav-cart-btn">
                 <a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" target="_blank"><i class="f-cart-icon"></i>购物车<span id="sCartTotal">(0)</span></a>
             </div>
             <div class="nav-cart-con">
                 <div class="m-loading-2014"><em></em></div>
                 <div class="nav-car-cartEmpty"><i></i>您的购物车为空 !</div>
                 <div class="nav-cart-select"></div>
                 <div class="nav-cart-pay"></div>
             </div>
         </div>
 
     </div>
 </div>
 <!--所有商品下拉特效-->
	  <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_STYLE; ?>/js/Bottom2.js?v=' + GetVerNum());
 </script>
	
	
	<script>
		$(document).ready(function(){
				$("#divGoodsSortList").hover(function() {
				$(this).addClass("U-goods-hover").children("div.U-goods-class").show().prev().find("b").addClass("b_Triangle")
				}
				,function() {
					$(this).removeClass("U-goods-hover").children("div.U-goods-class").hide().prev().find("b").removeClass("b_Triangle")
				}
				).find("dl").each(function() {
					$(this).hover(function() {
					$(this).addClass("U-list-hover")
				}
				,function() {
					$(this).removeClass("U-list-hover")
				}
				)});

		});
	</script>
	<script>
$(function(){
	$("#sCart,#liTopCart").hover(
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
	$(".M-my-1yyg").mouseover(function(){
		$(this).addClass("menu-hd-hover");
	});
	$(".M-shop").mouseover(function(){
		$(this).addClass("menu-hd-hover");
	});
	$(".M-my-1yyg").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});
	$(".M-shop").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='输入“汽车”试试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入“汽车”试试');
		}			
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});

var getAllNum = function(){
	var a = $("#spBuyCount");
	var b = a.text();
	$.ajax({
		url: "<?php echo WEB_PATH; ?>/api/wrenciajax/get",
		type:"POST",
		success: function(data){
			if(b == data){
				
			}else{
				a.css({
					color:"white",background:"red"
				}).html(data);
				a.animate({
					opacity:0.1
				}
				,{
					queue:false,duration:1000,complete:function(){
						a.show().css({
							color:"#22AAFF",background:"#F5F5F5",opacity:1
						})
					}
				})

			}
		}
	});
	//setTimeout(getAllNum,3000);
};
getAllNum();
</script>
 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_JS; ?>/Bottom.js?v=' + GetVerNum());
 </script>
<!--end所有商品下拉特效-->
