<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><link rel="stylesheet" type="text/css" href="<?php echo G_WEB_PATH; ?>/@/css/base.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_WEB_PATH; ?>/@/css/index.min.css" />
<link href="<?php echo G_WEB_PATH; ?>/@/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_WEB_PATH; ?>/@/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_WEB_PATH; ?>/@/js/ad.js"></script>

<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                <li><a rel="nofollow" href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz1" target="_blank"><i class="i1"></i><strong>诚信网站认证</strong></a></li>
                <li><a rel="nofollow" href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz2" target="_blank"><i class="i2"></i><strong>可信网站认证</strong></a></li>
                <li><a rel="nofollow" href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz3" target="_blank"><i class="i3"></i><strong>国家电子商务诚信示范网站</strong></a></li>
                <li><a rel="nofollow" href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz4" target="_blank"><i class="i4"></i><strong>安信保认证</strong></a></li>
                <li><a rel="nofollow" href="<?php echo G_WEB_PATH; ?>/?/go/index/qualification#rz5" target="_blank"><i class="i5"></i><strong>浙江省省级电子商务企业</strong></a></li>
            </ul>
        </div>
        <div class="footer-links clearfix">
			<?php $category=$this->DB()->GetList("select * from `@#_category` where `parentid`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
			<?php $ln=1;if(is_array($category)) foreach($category AS $help): ?>
            <dl class="col-links">
                <dt><?php echo $help['name']; ?></dt>
				<?php $article=$this->DB()->GetList("select * from `@#_article` where `cateid`='$help[cateid]'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
				<?php 
					foreach($article as $art){
						echo "<dd><a href='".WEB_PATH.'/help/'.$art['id']."' target='_blank'>".$art['title'].'</a></dd>';
					}
				 ?>
            </dl>
			<?php  endforeach; $ln++; unset($ln); ?>
            <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
			<dl class="col-links">
               <dt>关注我们</dt>
					<dd><a href="http://weibo.com/jianmoney" target="_blank">新浪微博</a></dd>
					<dd><a href="<?php echo G_WEB_PATH; ?>/?/group" target="_blank"><?php echo _cfg('web_name_two'); ?>社区</a></dd>
					<dd><a href="<?php echo G_WEB_PATH; ?>/?/go/index/weixin" target="_blank">官方微信</a></dd>
            </dl>
            <div class="col-contact">
                <p class="phone"><?php echo _cfg("cell"); ?></p>
                <p>周一至周日 9:00-17:00<br></p>
				<a rel="nofollow" class="btn btn-primary btn-small" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg("qq"); ?>&site=qq&menu=yes" target="_blank">24小时在线客服</a>
			</div>
        </div>
        <div class="footer-info clearfix">
            <div class="info-text">
                <p><?php echo _cfg("web_name_two"); ?>友情链接：
					<a href="<?php echo WEB_PATH; ?>" target="_blank"><?php echo _cfg("web_name_two"); ?></a><span class="sep">|</span>
					<?php $category=$this->DB()->GetList("select * from `@#_link` where `type`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
					<?php $ln=1;if(is_array($category)) foreach($category AS $link): ?>
					<a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['name']; ?></a><span class="sep">|</span>
					<?php  endforeach; $ln++; unset($ln); ?>
					<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
				</p>
             <p><a href="<?php echo WEB_PATH; ?>" target="_blank" title="ibipai.com"></a><?php echo _cfg('web_copyright'); ?>
</p>
            </div>
            <div class="info-sites J_globalList">
                <div class="global-site-current">公益基金：￥<span id="spanFundTotal">0000000.00<i>元</i></span></div>
            </div>
            <!--div class="info-links">
                <a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank"><img src="http://s1.mi.com/zt/12052601/cnnicVerifyseal.png" alt="可信网站"></a>
                <a href="https://search.szfw.org/cert/l/CX20120926001783002010" target="_blank"><img src="http://s1.mi.com/zt/12052601/szfwVerifyseal.gif" alt="诚信网站"></a>
                <a href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img src="http://s1.mi.com/zt/12052601/save.jpg" alt="网上交易保障中心"></a>
            </div-->
        </div>
    </div>
</div>
<!-- .site-footer END -->
<div class="g-suspension-float" style="display: block;">
     <div class="m-floatCon">
         <div class="u-mid">
             <div class="u-mui-tab">
                 <ul id="ulRToolList">
                     <li class="f-both-top"><a id="btnRigTop" href="javascript:;" class="u-menus"></a></li>
                     <li class="f-cart"><a target="_blank" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="u-menus" id="btnMyCart"><i></i><em>0</em></a></li>
                     <li class="f-customer"><a id="btnRigQQ" href="javascript:;" class="u-menus"></a></li>
                     <li class="f-edit"><a href="<?php echo WEB_PATH; ?>/vote/vote" target="_blank" class="u-menus"></a></li>
                     <li class="f-top"><a href="javascript:;" class="u-menus"></a></li>
                     <li class="f-both-bottom"><a href="javascript:;" class="u-menus"></a></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
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
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?64453be5e0e6d99938d87dad5564a1da";
	  var s = document.getElementsByTagName("script")[0];
	  s.parentNode.insertBefore(hm, s);
	})();
</script>
</body>
</html>