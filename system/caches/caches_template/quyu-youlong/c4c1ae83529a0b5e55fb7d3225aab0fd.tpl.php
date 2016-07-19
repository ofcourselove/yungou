<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
<meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
<meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
<meta property="qc:admins" content="713551267761717063757" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/Home.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/register.css"/>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
<style type="text/css">
.demo{ width:740px; height:389px; position:relative; overflow:hidden; padding:0px;}
.num{ position:absolute;right:20px; top:356px; z-index:10;}
.num a{background:#fff; color:#ff6700; border:1px solid #ccc; width:16px; height:16px; display:inline-block; text-align:center; line-height:16px; margin:0 3px; cursor:pointer;}
.num a.cur{ background:#ff6700;color:#fff;}
.demo ul{ position:relative; z-index:5;}
.demo ul li{ position:absolute; display:none;}
</style>
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
 background-position: center top; 
} </style>
<div id="divSnow" class="g-snow-con clrfix">
        <div class="g-snow"></div>
        <div class="g-snow2"></div>
    </div>
<div class="header">
<div class="d"><div>


<div class="body_bg">
<div class="header">
	<div class="site_top">
		<div class="head_top">
		<p class="collect"><a href="javascript:;" id="addSiteFavorite">收藏<?php echo _cfg("web_name_two"); ?></a></p>
      <p class="collect"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/intro" ><?php echo _cfg('web_name_two'); ?>简介</a></p>
       <p class="collect"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" >手机APP</a></p>
             
      
      <p class="collect"><a href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification" >诚信保证，放心<?php echo _cfg('web_name_two'); ?>！</a></p>
		<ul class="login_info" style="display: block;">
			<?php if(get_user_arr()): ?>
			<li class="h_wel" id="logininfo">
				<a href="<?php echo WEB_PATH; ?>/member/home" class="gray01" >					
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_img('3030'); ?>" width="30" height="30"/>					
					<?php echo get_user_name(get_user_arr(),'username'); ?>
				</a>&nbsp;&nbsp;
				<a href="<?php echo WEB_PATH; ?>/member/user/cook_end" class="gray01">[退出]</a>
			</li>
			<?php  else: ?>
			<li id="logininfo" class="h_login">
				<i>您好，欢迎光临！</i>		
				<a class="gray01" href="<?php echo WEB_PATH; ?>/login" >登录</a>
				<span>|</span>
				<a class="gray01" href="<?php echo WEB_PATH; ?>/register" >注册</a>				
			</li>
			<?php endif; ?>
			<li class="h_1yyg">
				<a  href="<?php echo WEB_PATH; ?>/home/member">我的<?php echo _cfg('web_name_two'); ?><b></b></a>
				<div class="h_1yyg_eject" style="display:none; width:100px;">
					<dl>
						<dt><a  href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?><i></i></a></dt>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/userbuylist"><?php echo _cfg('web_name_two'); ?>
记录</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home">获得的商品</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/userrecharge">帐户充值</a></dd>
						<dd><a  href="<?php echo WEB_PATH; ?>/member/home/modify">个人设置</a></dd>
					</dl>
				</div>
			</li>
			<li class="h_help"><a href="<?php echo WEB_PATH; ?>/help/1" target="_blank">帮助</a></li>
			<li class="h_inv"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg("qq"); ?>&site=qq&menu=yes"><img border="0" src="images/pa" style="display:none;">在线客服</a></li>
			<li class="h_tel"><b><?php echo _cfg("cell"); ?></b></li>
		</ul>
		</div>
	</div>
	<div class="head_mid">
		<div class="head_mid_bg">			
			<h1 class="logo_1yyg">
				<a class="logo_1yyg_img" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>">
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
				</a>
			</h1>
            <!-- <div class="mini_mycart" id="sCart">
 			<input type="hidden" id="hidChanged" value="0"/>
 			<a id="sCartNavi" class="cart"><s></s>购物车<span id="sCartTotal">0</span></a>
			<a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" target="_blank" class="checkout">去结算</a>
 		</div> -->
		<div class="mini_mycart" id="sCart">
 			<a rel="nofollow" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" id="sCartNavi" class="cart"><s></s>购物车<span id="sCartTotal">0</span></a><a rel="nofollow" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="checkout">去结算</a>
 			<div class="mycart_list" id="sCartlist" style="z-index: 99999; display: none;">
 				<div class="goods_loding" id="sCartLoading" style="display: none;"><img border="0" alt="" src="<?php echo G_TEMPLATES_STYLE; ?>/images/goods_loading.gif">正在加载......</div>
 				<p id="p1">共计 <span id="sCartTotal2"> 2</span> 件商品 金额总计：<span id="sCartTotalM" class="rmbred">5.00</span></p>
 				<h3><input type="button" id="sGotoCart" value="去购物车并结算"></h3>
 			</div>
 		</div>
			<div class="head_search">
				<input type="text" id="txtSearch" class="init" value='输入"红米手机"试一试'/>
				<input type="button" id="butSearch" class="search_submit" value="搜索"/>
				<div class="keySearch">
					<a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/iPhone" target="_blank">iPhone</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/智能手机" target="_blank">智能手机</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/G手机" target="_blank">3G手机</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/宝马" target="_blank">宝马</a>
					<a href="<?php echo WEB_PATH; ?>/s_tag/单反" target="_blank">单反</a>                 
				</div>
			</div>
		</div>
	</div>
</div>
<!--header end-->
<div class="head_nav">
 	<div class="nav_center">
 	  <div class="fenlei">
 	    <div><a href="<?php echo WEB_PATH; ?>/goods_list"><strong>所有分类</strong>
 	      <?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1' and `parentid` = '0' order by `order` DESC",array("type"=>1,"key"=>'',"cache"=>0)); ?>
 	      <?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
 	      <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $categoryx['cateid']; ?>"><?php echo $categoryx['name']; ?></a>
 	      <?php  endforeach; $ln++; unset($ln); ?>
 	      <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?></div>
        <div class="ksdb">
        <table width="220" border="0" cellpadding="0" cellspacing="0" style="margin-top:30px; margin-left:10px; color:#666633;">
  <tr>
    <td height="30" style="border-bottom:solid 1px #666633;"><strong>如何参加<?php echo _cfg('web_name_two'); ?>
？</strong></td>
  </tr>
  <tr>
    <td height="45">1、选择一款商品，点击“立即<?php echo _cfg('web_name_two'); ?>
”；</td>
  </tr>
  <tr>
    <td height="45">2、支付一元，购买1人次，获得1个“<?php echo _cfg('web_name_two'); ?>
码”；</td>
  </tr>
  <tr>
    <td height="45">3、当一件商品达到总参与人次，抽出1名商品获得者；</td>
  </tr>
</table>
</div>
      </div>
 		<ul class="nav_list">
		  <li class="sort-all-shouye"><a href="<?php echo G_WEB_PATH; ?>" style="color:#DB3652;"><strong>首页</strong></a></li>
			<?php echo Getheader('index'); ?>
 		</ul>
         <div class="head_number">
				已有
					<a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
					<span id="spBuyCount" style="color:#22AAFF; background:#F5F5F5; opacity:1;"><?php echo go_count_renci(); ?></span>
					</a>
					人次参与

				
			</div>
 	</div>
</div>
<script>
$(function(){
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
		if(va1=='输入"红米手机"试一试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入"红米手机"试一试');
		}			
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});

</script>
<!--banner and Recommend 开始-->
<div class="banner_recommend">
	<div class="banner-box">
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
    <!-- 首页右边推荐商品 end-->
</div>
<!--banner and Recommend 结束-->
<!--product 开始-->
<div class="goods_hot">
	<div class="goods_left">
		<div class="new_lottery">        	
			<h4><span>最新揭晓</span></h4>
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
			<a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="name"><?php echo $qishu['qishu']; ?><?php echo $qishu['title']; ?></a> 
		  	<span class="winner">获得者：<strong><a rel="nofollow" class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>" target="_blank"><?php echo get_user_name($qishu['q_user']); ?></a></strong></span>
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
		<div class="hot" style="">
			<h3><span>最热人气商品</span><a rel="nofollow" href="<?php echo WEB_PATH; ?>/goods_list">更多&gt;&gt;</a></h3>
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
					<p class="money">价值：<span class="rmb"><?php echo $renqi['money']; ?></span></p>
					<div class="Progress-bar" style="">
						<p title="已完成<?php echo percent($renqi['canyurenshu'],$renqi['zongrenshu']); ?>"><span style="width:<?php echo width($renqi['canyurenshu'],$renqi['zongrenshu'],221); ?>px;"></span></p>
						<ul class="Pro-bar-li">
							<li class="P-bar01"><em><?php echo $renqi['canyurenshu']; ?></em>已参与人次</li>
							<li class="P-bar02"><em><?php echo $renqi['zongrenshu']; ?></em>总需人次</li>
							<li class="P-bar03"><em><?php echo $renqi['zongrenshu']-$renqi['canyurenshu']; ?></em>剩余人次</li>
						</ul>
					</div>
					<div class="shop_buttom"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank" class="shop_but" title="立即购买"></a></div>
				</li>
				<?php  endforeach; $ln++; unset($ln); ?>
			</ul>
		</div>
	</div>
	<div class="goods_right">
		<div class="news">
			<h3><?php echo _cfg('web_name_two'); ?>
动态</h3>
			<ul>
				<!--获取圈子最新动态5条-->
							<?php $mod_group_group = System::load_app_model('group','group');$datas = $mod_group_group->get_group_tiezi(5); ?>	
				<?php $ln=1;if(is_array($datas)) foreach($datas AS $row): ?>				
				<li><a href="<?php echo WEB_PATH; ?>/group/nei/<?php echo $row['id']; ?>" target="_blank"><?php echo $row['title']; ?></a></li>								
				<?php  endforeach; $ln++; unset($ln); ?>
				<!--/获取圈子最新动态5条-->
			</ul>
		</div>
		
		<div class="wait_lottery" id="divLottery">
		<a href="<?php echo G_WEB_PATH; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/banner/20130510162727797.jpg" width="230" height="200"></a>
		</div>
	
		<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
		<div class="share">
			<h3>TA们正在<?php echo _cfg('web_name_two'); ?>
</h3>
			<div class="buyList">		
                <ul id="buyList" style="margin-top: 0px;">
					<?php $ln=1;if(is_array($go_record)) foreach($go_record AS $gorecord): ?>
					<li>
						<a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" class="pic" target="_blank">
                        <img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo shopimg($gorecord['shopid']); ?>"></a>
						<span class="who"><p style="display: inline;"><a class="blue" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($gorecord['uid']); ?>"><?php echo get_user_name($gorecord); ?></a></p>刚刚<?php echo _cfg('web_name_two'); ?>
了</span>
						<span><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" class="name" target="_blank"><?php echo $gorecord['shopname']; ?></a></span>
					</li>
					<?php  endforeach; $ln++; unset($ln); ?>
				</ul>
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
			<div class="shop_buttom"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" class="shop_but" title="立即购买"></a></div>
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
<!--晒单分享end-->
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

<!--新闻列表-->
<style>
.lottery_news{ width:100%; border:1px solid #000;}
</style>
<!--/新闻列表-->
<div class="footer_content" style="background-color:#F5F5F5;">
   	<div class="footservice">
   		<div class="support">
			<?php $category=$this->DB()->GetList("select * from `@#_category` where `parentid`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
			<?php $ln=1;if(is_array($category)) foreach($category AS $help): ?>
   			<dl class="ft-newbie">
   				<dt><span><?php echo $help['name']; ?></span></dt>
				<?php $article=$this->DB()->GetList("select * from `@#_article` where `cateid`='$help[cateid]'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
				<?php 
					foreach($article as $art){
						echo "<dd><b></b><a href='".WEB_PATH.'/help/'.$art['id']."' target='_blank'>".$art['title'].'</a></dd>';
					}
				 ?>				
   			</dl>   			
			<?php  endforeach; $ln++; unset($ln); ?>
            <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>			
   			<dl class="ft-fwrx">
   			<div class="sp-fair"><img src="<?php echo G_TEMPLATES_STYLE; ?>/images/zpbz.png" alt="100%公平公正公开，100%正品保证，%100权益保障" width="161" height="114" /></div>
   			</dl>
   			<dl class="ft-weixin">
   				<dt><span>微信扫一扫</span></dt>
   				<dd class="ft-weixin-img"><s></s></dd>
   			</dl>
   		</div>
   	</div>
</div>



<?php $mysql_model=System::load_sys_class('model'); ?><?php $fund_data=$this->DB()->GetOne("select * from `@#_fund` limit 1",array("cache"=>0)); ?>
    <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
    <?php if($fund_data['fund_off']): ?>
	<div class="service_date">
   		<div class="Service_Time">
   			<p>服务器时间</p>
   			<span id="sp_ServerTime"></span>
   		</div>      
   		<div class="Service_Fund">
   			<a href="<?php echo WEB_PATH; ?>/single/fund" target="_blank">
   				<p>云购公益基金</p>
   				<span id="spanFundTotal">0000000.00<i>元</i></span>
   			</a>
   		</div>        
   	</div>
    <?php  else: ?>
    <div class="service_date" style="width:100px;">
   		<div class="Service_Time">
   			<p>服务器时间</p>
   			<span id="sp_ServerTime"></span>
   		</div>  
   	</div>
    <?php endif; ?>
</div>

     
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





<!--footercontent end-->
<div class="footer" style="height:auto; background-color:#D7D7D7;">
    <div class="dbdh">
  <span class="footer_links"><?php echo Getheader('foot'); ?></span>&nbsp;&nbsp;&nbsp;<span class="copyright"><?php echo _cfg('web_copyright'); ?></span>
    </div>
</div>
<script>
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
<style>
.weix {
	background-color:#fff;
	position:fixed;
	border:1px solid #E3E3E3;
	bottom:300px;
	right:5px;
	width:118px; 
	height:140px;
	z-index:11;
	text-align:-99999px;
}

.weixin-img {
	width:93px;	
	padding:12px;
	height:93px; 
	padding:auto;
	margin-bottom:2px;
}
.weixin-img s {
	background:url(<?php echo G_TEMPLATES_PATH; ?>/yungou/images/footerimg.png);
	width:93px;
	height:93px;
	display:inline-block;
	background-position:0 -168px;
}
* html .weix {
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,100)||0)-40));
	_bottom:auto;
	_position:absolute;
}
	.fixed_wx_close{
	background:url(<?php echo G_TEMPLATES_PATH; ?>/yungou/images/footerimg.png);
	background-position:-103px -193px;
	border-bottom:1px	solid #E1E1E1;
	border-left:1px solid #E1E1E1;
	color:#FFFFFF;
	float:right;
	font-family:Arial;
	font-size:16px;
	height:15px;
	text-align:right;
	width:15px;
	}
</style>
<script>
$(function(){
	$(".fixed_wx_close").click(function(){
		$(".weix").hide();
	})
})
</script>
<script>
var wids=($(window).width()-980)/2-80;
if(wids>0){
	$(".weix").css("right",wids);
}else{
	$(".weix").css("right",10);
}
</script>

<!--footer end-->
<div id="divRighTool" class="quickBack">
	
	<dl class="quick_But">
		
		<dd class="quick_cart" style=""><a id="btnMyCart" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" target="_blank" class="quick_cartA"><b>购物车</b><s></s><em>1</em></a>
			<div style="display: none;" id="rCartlist" class="Roll_mycart">
				<ul style="display: none;"></ul>
				<div class="quick_goods_loding" id="rCartLoading" style="display: none;"><img border="0" alt="" src="<?php echo G_TEMPLATES_STYLE; ?>/images/goods_loading.gif">正在加载......</div>
				<p id="p1" style="display: none;">共计<span id="rCartTotal2">0</span> 件商品 金额总计：<span class="rmbgray" id="rCartTotalM">0</span></p>
				<h3 style="display: none;"><input type="button" value="去购物车结算" id="rGotoCart"></h3>
			</div>
		</dd>
		<dd class="quick_service"><a id="btnRigQQ" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg("qq"); ?>&site=qq&menu=yes" target="_blank" class="quick_serviceA"><b>在线客服</b><s></s></a></dd>
		<dd class="quick_Collection"><a id="btnFavorite" href="javascript:;" class="quick_CollectionA"><b>收藏本站</b><s></s></a></dd>
		<dd class="quick_Return"><a id="btnGotoTop" href="javascript:;" class="quick_ReturnA"><b>返回顶部</b><s></s></a></dd>
	</dl>
	
	
</div>
		
<script>

$("#divRighTool").show(); 
var wids=($(window).width()-980)/2-70;
if(wids>0){
	$("#divRighTool").css("right",wids);
}else{
	$("#divRighTool").css("right",10);
}
$(function(){

	$("#btnGotoTop").click(function(){
		$("html,body").animate({scrollTop:0},1500);
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
			$(this).addClass("Current");
		},
		function(){
			$(this).removeClass("Current");
		}
	)
});
	//云购基金
	$.ajax({
		url:"<?php echo WEB_PATH; ?>/api/fund/get",
		success:function(msg){
			$("#spanFundTotal").text(msg);
		}
	});
</script><div style="display:none;">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253020459'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/stat.php%3Fid%3D1253020459%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script></div>
</div>
</body>
</html>