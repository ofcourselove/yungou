<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/wap/Comm.css" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/wap/base.min.css"/>
    <!--[if IE 6]>
        <script type="text/javascript" src="<?php echo WEB_PATH; ?>/js/wap/iepng.js"></script> 
        <script type="text/javascript">
        EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.F_goods_rq, .F_goods_xp, .F_goods_tj,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s');
        </script>
    <![endif]-->
<link href="<?php echo G_TEMPLATES_STYLE; ?>/css/wap/detail.css" rel="stylesheet" media="screen">
<style type="text/css">
        html {
            overflow-y:hidden;
        }
</style>
</head>
<body >
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
 background-position: center top; 
} </style>
<div id="divSnow" class="g-snow-con clrfix">
        <div class="g-snow"></div>
        <div class="g-snow2"></div>
    </div>
<div class="d"> 
<div class="section section1">
	<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a href="<?php echo WEB_PATH; ?>"><?php echo _cfg("web_name_two"); ?>网</a>
            <span class="sep">|</span><a id="btnFavorite" href="javascript:;" title="收藏<?php echo _cfg("web_name_two"); ?>">收藏<?php echo _cfg("web_name_two"); ?></a>
            <span class="sep">|</span><a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" target="_blank" title="手机版">手机<?php echo _cfg('web_name_two'); ?></a>
			<span class="sep">|</span><a href="<?php echo WEB_PATH; ?>/single/intro" target="_blank" title="网站简介">网站简介</a>
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

  
<!-- .site-header END -->
 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_STYLE; ?>/css/wap/Bottom.js?v=' + GetVerNum());
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
	$(".notice-safe-tip").mouseover(function(){
		$(".uc-tooltip-popup").show();
	});
	$(".notice-safe-tip").mouseout(function(){
		$(".uc-tooltip-popup").hide();
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
$(".nav-category").mouseover(function(){
		    $(".nav-category-section").show();
    })
	 $(".nav-category").mouseout(function(){
		    $(".nav-category-section").hide();
    })
	 $(".nav-category-section").mouseover(function(){
		    $(".nav-category-section").show();
    })
	 $(".nav-category-section").mouseout(function(){
		    $(".nav-category-section").hide();
    })
</script>
	<div class="bg-text">
            <div class="bg-textbg"></div>
            <div class="bg-1"></div>
            <div class="bg-2"></div>
            <div class="bg-3"></div>
            <div class="bg-4"></div>
            <div class="bg-5"></div>
            <div class="bg-21"></div>
            <div class="bg-22"></div>
            <div class="bg-23"></div>
            <div class="bg-24"></div>
            <div class="bg-25"></div>
            <div class="bg-26"></div>
            <div class="bg-27"></div>
            <div class="face11 face1"></div>
            <div class="face11 face2"></div>
            <div class="face11 face3"></div>
            <div class="face11 face4"></div>
            <div class="face11 face5"></div>
            <div class="face11 face6"></div>
            <div class="face11 face7"></div>
            <div class="face11 face8"></div>
            <div class="face11 face9"></div>
            <div class="face11 face10"></div>
            <div class="face11 face16"></div>
            <div class="face11 face12"></div>
            <div class="face11 face13"></div>
            <div class="face11 face14"></div>
        </div>
        <div class="sjxx" id="btn_next"></div>
    </div>
    <div class="section section2">
        <div class="bg"></div>
        <div class="bg21"></div>
        <div class="bg22"></div>
        <div class="bg23"></div>
        <h3><?php echo _cfg('web_name_two'); ?> 有惊喜</h3>
        <p class="p1">别让现实阻挡你逐梦的脚步。只要一元钱，就有机会拥有你想要的，人人都能圆梦<br />新的生活从<?php echo _cfg('web_name_two'); ?>开始！</p>
        <div class="qq20"></div>
        <div class="qq21"></div>
        <div class="qq22"></div>
    </div>
    <div class="section section3">
        <div class="bg"></div>
        <h3>闪电发货 免费退换货</h3>
        <p class="p1">再见, 无良的商家！再见, 繁杂的审核！再见, 不自信的昨天！<br /><?php echo _cfg('web_name_two'); ?>网数码类由京东商城、易迅网合作供货，速度不用说……</p>
        <div class="qq30"></div>
        <div class="bg31"></div>
        <div class="bg32"></div>
        <div class="carbg">
            <span class="a11"></span>
            <span class="a12"></span>

        </div>
        <div class="bgyan"></div>
    </div>
    <div class="section section4">
        <div class="bg">
            <img src="/images/section4.png" alt=""></div>
        <div class="bg43"></div>
        <div class="bg42"></div>
        <div class="bg41"></div>
        <div class="qq40"></div>
        <h3>强强联合 100%正品</h3>
        <p class="p1"><?php echo _cfg('web_name_two'); ?>网数码产品与京东商城、易迅网战略合作供货，买的不仅是商品，更是放心！<br />7天包退、15天包换、假1罚10………</p>
    </div>
    <div class="section section5">
        <div class="bg"></div>
        <h3>无忧支付 轻轻松松</h3>
        <p class="p1">
          在线支付，真正好服务！<br />支持支付宝、微信支付、各大银行网银，在线支付真正方便！
        </p>
        <div class="bg52"></div>
        <div class="bg51"></div>
        <div class="bg53"></div>
        <div class="bg54"></div>
        <div class="bg55"></div>
        <div class="qq50"></div>
    </div>
    <div class="section section7">
        <div class="bg"></div>
        <div class="bg71" id="img_hand"></div>
        <a href="<?php echo WEB_PATH; ?>" class="detail-go" id="btn_go">马上去<?php echo _cfg('web_name_two'); ?></a>
        <a href="<?php echo WEB_PATH; ?>" class="detail-a1">帮助</a>
        <a href="<?php echo WEB_PATH; ?>" target="_blank" class="detail-a2">咨询</a>
    </div>
<script charset="utf-8" type="text/javascript" src="http://www.fenqile.com/merge?/res/libs/seajs/2.2.1/sea.js&/res/libs/jquery/1.9.1/jquery.min.js&/res/static/global/fenqile.js&v=a9098ec872ab1b6696c710269172789e"></script>
<script>
seajs.use('login', function (login) {
    if ($('body').hasClass('aside-show-ico')) {
        $('#category_nav').parents('div.aside-nav').hover(function(e) {
            $('#category_nav').parents('div.aside-nav').stop();
            $('#category_nav').parents('div.aside-nav').animate({
                height: 418
            }, 300);
        }, function(e) {
            $('#category_nav').parents('div.aside-nav').stop();
            $('#category_nav').parents('div.aside-nav').animate({
                height: 37
            }, 300);
        });
    }

    $('.js-login').on('click', function (e) {
        e.preventDefault();
        login.show({
            scene: 'default'
        });
    });

    $('#mini').hover(function () {
        if ($(this).find('.global-load-ico').size() > 0) {
            $.get('/my/get_mini.json', '', function (o) {
                var retcode = o.retcode,
                    retmsg  = o.retmsg;
                if (0 == retcode) {
                    var html = o.html;
                    $('#mini_content').html(html);
                } else {
                    $('#mini_content').html('[' + retcode + ']' + retmsg);
                }
            });
        }
    });
});
</script>    <script charset="utf-8" type="text/javascript" src="http://www.fenqile.com/merge?/res/libs/jqueryui/1.8.22/jquery-ui.min.js&/res/libs/jqueryui/1.8.22/jquery.fullPage.min.js&v=273c90e463377a3190f3cf0c0dfb1423"></script>
    <script type="text/javascript">
        $(function($){
            // 判断浏览器是否支持
            var isPlaceholderSupport = function(){
                return 'placeholder' in document.createElement('input');
            };

            if(!isPlaceholderSupport()){
                $('body').addClass('ltie10');
            }

            $.fn.fullpage({
                verticalCentered: false,
                anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
                navigation: true
            });
            
            var nav = $('#fullPage-nav'),
                nav_li = nav.find('li');
            
            //nav.hide();
            for (var i = 0; i < nav_li.length; i++) {
                $(nav_li[i]).addClass("li" + (i+1));
            };
        });
    </script>
    <script type="text/javascript">
        var hand = $('#img_hand'),
            top = hand.offset().top;

        $('#btn_next').click(function(e) {
            window.location.hash = '#page2';
        });

        $(document).mousemove(function(e){
            var x = e.pageX, y = e.pageY;
            // console.log(x, y);
            hand.offset({left: x-50});
            if(y > 350){
                hand.offset({
                    top: y + 20
                });
            }
        });
    </script>

<!-- .site-footer END -->

 <script type="text/javascript">
$(function() {
$(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#divRTool').fadeIn(1000);
        } else {
            $('#divRTool').fadeOut(1000);
        }
    });
	})
</script>
<script type="text/javascript">
$(function(){
	$(".quick_cart").hover(
		function(){			
			$("#rCartlist,#rCartLoading").show();
			$("#rCartlist p,#rCartlist h3").hide(); 0
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
	$("#rGotoCart").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
	})
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
<script type="text/javascript">
$("#divRighTool").show();
$(function(){

	$("#btnGotoTop").click(function(){
		$("html,body").animate({scrollTop:0},0);
	});
	$("#btnFavorite,#addSiteFavorite").click(function(){
		var ctrl=(navigator.userAgent.toLowerCase()).indexOf('mac')!=-1?'Command/Cmd': 'CTRL';
		if(document.all){
			window.external.addFavorite('<?php echo G_WEB_PATH; ?>','<?php echo _cfg("web_name"); ?>');
		}
		else if(window.sidebar){
		   window.sidebar.addPanel('<?php echo _cfg("web_name"); ?>','<?php echo G_WEB_PATH; ?>', "");
		}else{ 
			alert('您可以通过快捷键' + ctrl + ' + D 加入到收藏夹');
		}
    });
	$("#divRighTool a").hover(		
		function(){
			$(this).addClass("f-Cur-shop");
		},
		function(){
			$(this).removeClass("f-Cur-shop");
		}
	)
});
	$.ajax({
		url:"<?php echo WEB_PATH; ?>/api/fund/get",
		success:function(msg){
			$("#spanFundTotal").text(msg);
		}
	});
</script>
</body>
</html>
