<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>﻿<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/default.css"/>
<div class="wp footer_pic_new">
	    <a name="foot_1" href="<?php echo WEB_PATH; ?>/help/4" target="_blank" class="footer_pic01"><span>正品保障正规渠道</span></a>
	    <a name="foot_2" class="footer_pic02" href="<?php echo WEB_PATH; ?>/help/5" target="_blank"><span>公平公正放心购物</span></a>
	    <a name="foot_3" class="footer_pic03" href="<?php echo WEB_PATH; ?>/help/7" target="_blank"><span>全国包邮免费配送</span></a>
	    <a name="foot_4" class="footer_pic04" href="<?php echo WEB_PATH; ?>/single/business" target="_blank"><span>商务合作诚信共赢</span></a>
	</div>

<div class="wp footer_tite">	
			<?php $category=$this->DB()->GetList("select * from `@#_category` where `parentid`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
			<?php $ln=1;if(is_array($category)) foreach($category AS $help): ?>
   			<dl class="lh28">
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
</div>

<div class="wp copyright">
<p class="footer_links lh40 pt10"><?php echo Getheader('foot'); ?></p>
<p class="Powered lh24"><?php echo _cfg('web_copyright'); ?></p>
<p class="t-c">客服热线: <?php echo _cfg("cell"); ?>  客服QQ: <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg("qq"); ?>&site=qq&menu=yes"><?php echo _cfg("qq"); ?></a>
	<?php 
					if(isset($this->_cfg['qq_qun'])){
						$qq_qun_list = $this->_cfg['qq_qun'];
						$qq_qun_list = explode("|",$qq_qun_list);
						foreach($qq_qun_list as $qq){
						$qq = trim($qq);
				 ?>
				<span><a style="text-indent:0em; background:none;width:160px;" target="_blank" rel="nofollow" href="<?php echo WEB_PATH; ?>/group_qq">官方QQ群：<?php echo $qq; ?></a></span>
				<?php 
					} }
				 ?></p></div>
						<div class="wp footer_pic">
			<a target="_blank" href="http://www.sznet110.gov.cn" class="c_01">网络监察</a>
			<a target="_blank" href="http://www.315.gov.cn/" class="c_02">权益保护</a>
  			<a target="_blank" href="http://t.knet.cn/index_new.jsp" class="c_03">可信网站</a>
			<a target="_blank" href="http://www.net.china.com.cn/" class="c_04">举报中心</a>
			<a target="_blank" href="http://www.miibeian.gov.cn/" class="c_05">网站备案</a>
	<?php $mysql_model=System::load_sys_class('model'); ?><?php $fund_data=$this->DB()->GetOne("select * from `@#_fund` limit 1",array("cache"=>0)); ?>
    <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
    <?php if($fund_data['fund_off']): ?>
			<a target="_blank" href="<?php echo WEB_PATH; ?>/single/fund" class="c_06"><?php echo _cfg("web_name_two"); ?>公益基金 <b id="spanFundTotal" class="orange Fb">0000000.00</b> 元</a>
			<?php endif; ?>
			<!-- www.yuntaowang.cn Baidu tongji analytics --><script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fd06d4fd81f29ff6bde87ac73a88fa45c' type='text/javascript'%3E%3C/script%3E"));
</script>
		</div>
 <div class="bk10"></div>
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
				
				window.skin_time = 	function(time){						
					showTime(time);
					timer = setInterval(function(){
						time += 1000;
						showTime(time);
					}, 1000);					
				}
	window.skin_time(<?php echo time(); ?>*1000);
				
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
	$(".Tool_cart").hover(
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
<div class="quick" id="quick" monkey="quick"><dl class="quick_But">
		<dd class="quick_cart" style=""><a id="btnMyCart" href="/?/member/cart/cartlist" target="_blank" class="quick_cartA"><s></s><em>0</em></a>
		</dd>
	</dl>
<a href="<?php echo WEB_PATH; ?>/member/cart/cartlist" alog-text="我的购物车" class="quick-today today-hook"></a>
<a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" alog-text="我的<?php echo _cfg("web_name_two"); ?>记录" class="quick-tomorrow tomorrow-hook"></a>
<a href="<?php echo WEB_PATH; ?>/member/home" alog-text="获得的商品" class="quick-discount discount-hook"></a>
<a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" alog-text="账户充值中心" class="quick-free9 free9-hook"></a>
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg("qq"); ?>&site=qq&menu=yes" alog-text="客户服务QQ" class="quick-valuebuy valuebuy-hook" target="_blank"></a>
<a href="<?php echo WEB_PATH; ?>/single/pleasereg" alog-text="告诉好友" class="quick-help today-hook"></a>
<a href="#" alog-text="回顶部" class="quick-gotop gotop-hook"></a></div>

<script>
	//<?php echo _cfg("web_name_two"); ?>基金
	$.ajax({
		url:"<?php echo WEB_PATH; ?>/api/fund/get",
		success:function(msg){
			$("#spanFundTotal").text(msg);
		}
	});
</script>

</body>
</html>