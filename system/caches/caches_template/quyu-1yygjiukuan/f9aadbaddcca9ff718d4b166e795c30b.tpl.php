<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta property="qc:admins" content="73052615576751207677756375" />
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;  IE=EDGE">
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm1.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<link rel="icon" type="image/x-icon" href="<?php echo WEB_PATH; ?>/favicon.ico">
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<meta name="pinggu-site-verification" content="99cdd3d4e37ce0865dd158cab6d87cfb" />
</head>
<body>
 


<!--顶部部分-->


    <style>  
 .g-snow-con {
position: relative;
top: 109px;
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
 
 top:0px;
 margin-top:0px;
 padding-top:0px;
 margin-right: auto;
 margin-bottom:0;
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
    
	<div class="g-frame-top">
  
		<div class="g-width head-nav-bd">
			<ul class="head-nav-bd-l">
				<li class="M-favorite menu">
					<div class="menu-hd">
						<a id="addSiteFavorite" href="javascript:;">收藏</a>
					</div>
				</li>
				<li name="seeweb" class="M-attention menu seewebmenu"  id="seeweb">
					<div class="menu-hd">
						<b>关注</b> <i></i>
					</div>
					<div class="menu-bd" id="showsee">
						<div class="top-nav-bor M-focus-size">
							<ul>
								<li class="U_sina"><a  href="javascript:void(0)" onclick="postToSb();"
									target="_blank"><s></s><em>新浪微博</em></a></li>
								<li class="U_qq"><a href="javascript:void(0)" onclick="postToWb();" class="tmblog"
									target="_blank"><s></s><em>腾讯微博</em></a></li>
								<li class="U_wx"><a
									href="<?php echo G_WEB_PATH; ?>/?/go/index/weixin"
									target="_blank"><s></s><em>微信关注</em></a></li>
								<li class="U_wximg"><img alt="" style="width: 81px;"
									src="<?php echo G_UPLOAD_PATH; ?>/banner/wx.jpg"></li>
							</ul>
						</div>
					</div>
					
			 
				</li>
				
	 
				<li class="M-attention menu">
					<div class="menu-hd">
						<a href="<?php echo WEB_PATH; ?>/group_qq"
							target="_blank">官方QQ群</a>
					</div>
				</li>
                
              <li class="M-attention menu">
					<div class="menu-hd">
						    <a href="<?php echo G_WEB_PATH; ?>/?/go/index/intro" target="_blank" title="官方简介"><?php echo _cfg('web_name_two'); ?>简介</a>
					</div>
				</li>
                
			</ul>
			<ul class="head-nav-bd-r">
			<!--登录-->
			<?php if(get_user_arr()): ?>
			<li id="liLoginBox" class="M-name menu"><div class="menu-hd">
			<a class="" href="<?php echo WEB_PATH; ?>/member/home"><img class="M-name-img" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('3030'); ?>"><span class="M-name-txt blue mlr5"><?php echo get_user_name(get_user_arr(),'username'); ?></span></a><a href="<?php echo WEB_PATH; ?>/member/user/cook_end" class="">[退出]</a></div></li>
			<?php  else: ?>
			 <li id="liLoginBox" class="M-login menu"><div class="menu-hd">
						<a rel="nofollow" href="<?php echo WEB_PATH; ?>/login" class="gray6">登录</a>
					</div></li>
			 <li id="liRegisterBox" class="M-login menu"><div class="menu-hd">
						<a rel="nofollow" href="<?php echo WEB_PATH; ?>/register" class="gray6">注册</a>
					</div></li>
			<?php endif; ?>
							
				<li class="mod_sitemap_gap"></li>
				<li name="liHover" class="M-my-1yyg menu">
					<div class="menu-hd">
						<a href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?></a> <i></i>
					</div>
					<div class="menu-bd">
						<div class="top-nav-bor M-my-size">
							<ul class="U-txt">
								<li><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist"><?php echo _cfg('web_name_two'); ?>记录</a></li>
								<li><a href="<?php echo WEB_PATH; ?>/member/home/orderlist">获得的商品</a></li>
								<li><a href="<?php echo WEB_PATH; ?>/member/home/modify">个人设置</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="mod_sitemap_gap"></li>
				<div class="menu-bd-msg" style="display: none;"></div>
				<li id="liTopUMsg" class="M-mark menu" style="display: none;">
					<div class="menu-hd">
						<a href="#">消息</a> <i></i>
					</div>
					<div class="menu-bd" style="display: none;"></div>
				</li>
				<li id="liTopCart" class="M-shop menu">
					<div class="menu-hd">
						<a class="u-shop-tit" target="_blank"
							href="<?php echo WEB_PATH; ?>/member/cart/cartlist"><span
							class="Hicon"></span>购物车(<strong id="sCartTotal">0</strong>)</a> <em></em>
					</div>
					<div class="menu-bd">
						<div class="top-nav-bor M-shop-size" style="height: 97px;">
							<div class="M-shop-content" id="sCart"><p>您的购物车有<span class="orange fb mlr5" id="sCartTotal2">0</span>件商品</p><p>共计：<span class="orange fb mlr5" id="sCartTotalM">0.00</span>元</p><a class="orange_btn" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" target="_blank">查看我的购物车</a></div>
						</div>
					</div>
				</li>
				<li class="mod_sitemap_gap"></li>
				<li class="F-money menu">
					<div class="menu-hd">
						<a href="<?php echo WEB_PATH; ?>/member/home/userrecharge">快速充值</a>
					</div>
				</li>
                <li class="mod_sitemap_gap"></li>
				<li class="F-invitation menu">
					<div class="menu-hd">
						<a href="<?php echo G_WEB_PATH; ?>/?/go/index/app"target="_blank">手机APP</a>
					</div>
				</li>
				<li class="mod_sitemap_gap"></li>
				<li class="F-invitation menu">
					<div class="menu-hd">
						<a href="<?php echo WEB_PATH; ?>/single/pleasereg">邀请</a>
					</div>
				</li>
				<li class="mod_sitemap_gap"></li>
				<li class="F-help menu">
					<div class="menu-hd">
						<a href="<?php echo WEB_PATH; ?>/help/1">帮助</a>
					</div>
				</li>
				<li class="mod_sitemap_gap"></li>
				<li class="F-service menu">
					<div class="menu-hd">
						<a id="btnTopQQ" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg("qq"); ?>&site=qq&menu=yes" class="F-icon-guest" target="_blank"><s></s>在线客服</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
<!--end顶部-->

<!--顶部下部分-->
	<div class="g-frame-head">
		<div class="head_mid">
			<div class="g-width head_mid_bg">
				<div id="topLogoAd" class="logo_1yyg"
					style="height: 80px; background: url(<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>) no-repeat;">
				<a class="logo_1yyg_img" href="<?php echo WEB_PATH; ?>" title="1元购网站"><?php echo _cfg('web_name_two'); ?></a>
			  </div>
				<div class="head_number">
					<ul>
						<li class="F-number-l"></li>
						<li class="F-number-bg">
							<span class="gray9">已有</span>
							<span class="f-fn-size" id="spHeadTotalNum" style="width:83px;">00000</span>
							<span class="gray9">人次参与</span>
							<a class="gray9" href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
								<span>全站记录</span>
								<i class="mod_dropmenu_arrow"></i>
							</a>
						</li>
						<li class="F-number-r"></li>
					</ul>
			  </div>
				<div class="head_search">
					<div class="top_search">
						<input type="text" id="txtSearch" class="init" value='输入"iphone"试一试'
							placeholder="" style="color: rgb(187, 187, 187);"> <input
							type="button" id="butSearch" class="search_submit" value="搜索"
							onmouseout="this.className='search_submit'"
							onmouseover="this.className='search_submit_hover'">
					</div>
					<div class="keySearch">
						<a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
						<a href="<?php echo WEB_PATH; ?>/s_tag/iPhone" target="_blank">iPhone</a>
						<a href="<?php echo WEB_PATH; ?>/s_tag/QQ币" target="_blank">QQ币</a>
						<a href="<?php echo WEB_PATH; ?>/s_tag/电脑" target="_blank">电脑</a>
						<a href="<?php echo WEB_PATH; ?>/s_tag/Zippo" target="_blank">Zippo</a>
						<a href="<?php echo WEB_PATH; ?>/s_tag/单反" target="_blank">单反</a>
						<a href="<?php echo WEB_PATH; ?>/s_tag/钱包" target="_blank">钱包</a>  
					</div>
				</div>
			</div>
		</div>
		<!-- 头部导航栏 -->
		
	<?php 
		if($this->db){
			$cmodel=$this->db;
		}else{
			$cmodel=$mysql_model;
		}
		
		$two_cate_list = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");
		
	 ?>
	 
	
	
		<div class="nav">
			<div class="g-width nav-bd">
				<div id="divGoodsSortList" class="M-All-goods">
					<div class="U-All-T">
						<a href="<?php echo WEB_PATH; ?>/goods_list" class="white"><b></b>所有商品</a>
					</div>					
					<div class="U-goods-class">
						<div class="goods-class-list">
						
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
				</div>
				<div class="M-nav-column">
					<ul>
						<li class="F-nav-back"><a href="<?php echo WEB_PATH; ?>"  class="home">首页</a></li>
						<?php echo Getheader('index'); ?>						 
					</ul>
				</div>
				<div class="M-nav-help">
					<a href="<?php echo WEB_PATH; ?>/single/newbie" title="新手指南"
						target="_blank"><s></s></a>
				</div>
			</div>
		</div>
	</div>
<!--end 顶部下部分-->



<!--所有商品下拉特效-->
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
	
	
	$("#seeweb").hover(
		function(){			
			$("#seeweb,#showsee").show();		 
		},
		function(){
			$("#showsee").hide();
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
	
	$(".seewebmenu").mouseover(function(){
		$(this).addClass("menu-hd-hover");
	});
	
	
	$(".M-my-1yyg").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});
	$(".M-shop").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});	
	
	$(".seewebmenu").mouseout(function(){
		$(this).removeClass("menu-hd-hover");
	});
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='输入"iphone"试一试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入"iphone"试一试');
		}			
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});
var allcount = 0;
var H = $("#spHeadTotalNum");
var getAllNum = function(){
	var a = $("#spBuyCount");
	var b = a.text();
	$.ajax({
		url: "<?php echo WEB_PATH; ?>/api/ajaxcount2/buy_count",
		type:"POST",
		success: function(ret){
			ret = JSON.parse(ret);
			if (ret.status == 0) {
                if (allcount != ret.count) {
                    if (allcount == 0) {
                        allcount = ret.count;
                        var aE = ret.count.toString();
                        var aD = aE.length;
                        var az = -12;
                        var aF = "";
                        for (var aI = 0; aI < aD; aI++) {
                            az = az + 12;
                            var aA = '<div name="dig" class="roll" style="right:' + az + 'px; top:-270px;">';
                            for (var aG = 9; aG > -1; aG--) {
                                aA += '<em t="' + aG + '">' + aG + "</em>"
                            }
                            aA += "</div>";
                            if (aI != 0 && (aI + 1) % 3 == 0) {
                                az = az + 12;
                                aA = '<div class="roll" style="right:' + az + 'px">,</div>' + aA
                            }
                            aF = aA + aF }
                         H.html(aF);
                        var aC = aE.split("");
                        H.children('div[name="dig"]').each(function(aN, aK) {
                            var aM = $(this);
                            var aL = parseInt(aC[aN]);
                            aM.animate({
                                top: "-" + (30 * (9 - aL)) + "px"
                            },1500)
                            // aM.animate({
                            //     top: "-" + (30 * (9 - aL)) + "px"
                            // },
                            // {
                            //     queue: false,
                            //     duration: b,
                            //     complete: function() {}
                            // })
                        })
                    } else {
                        var aB = allcount.toString().split("");
                        var aJ = ret.count.toString().split("");
                        allcount = ret.count;
                        H.children('div[name="dig"]').each(function(aP, aL) {
                            var aO = $(this);
                            var aQ = 0;
                            var aN = parseInt(aB[aP]);
                            if (aB[aP] < aJ[aP]) {
                                aQ = parseInt(aJ[aP]) - parseInt(aB[aP])
                            } else {
                                aQ = 10 + parseInt(aJ[aP]) - parseInt(aB[aP])
                            }
                            aO.css("top", "-270px");
                            var aR = aO.children('em[t="' + aN + '"]');
                            var aK = aR.nextAll();
                            for (var aM = aK.length - 1; aM > -1; aM--) {
                                aO.prepend(aK[aM])
                            }
                            aO.animate({
                                top: "-" + (270 - aQ * 30) + "px"
                            },1500)
                            // aO.animate({
                            //     top: "-" + (270 - aQ * 30) + "px"
                            // },
                            // {
                            //     queue: false,
                            //     duration: b,
                            //     complete: function() {}
                            // })
                        })
                    }
                }
            }
		}
	});
	setTimeout(getAllNum,15000);
};
getAllNum();

function postToWb(){

var _t = encodeURI(document.title);

var _url = encodeURI(document.location);

var _appkey = encodeURI("appkey");//你从腾讯获得的appkey

var _pic = encodeURI('');//（列如：var _pic='图片url1|图片url2|图片url3....）

var _site = '';//你的网站地址


var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic;

window.open( _u,'转播到腾讯微博', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );

}


function postToSb(){

var _t = encodeURI(document.title);

var _url = encodeURI(document.location);

var _appkey = encodeURI("appkey");//你从腾讯获得的appkey

var _pic = encodeURI('');//（列如：var _pic='图片url1|图片url2|图片url3....）

var _site = '';//你的网站地址

var _u = 'http://v.t.sina.com.cn/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic;

window.open( _u,'转播到新浪微博', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );

}

</script>

<!--end所有商品下拉特效-->