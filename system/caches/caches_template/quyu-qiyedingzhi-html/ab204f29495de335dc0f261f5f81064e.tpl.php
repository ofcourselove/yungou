<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-recharge.css"/>
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>账户充值</span></div>
<script>
$(function(){
	var je=$("#ulMoneyList li");
	var dx=/\D/;
	je.click(function(){
		je.removeClass("selected");
		je.find("input").removeAttr("checked");
		var radio=je.index(this);
			je.eq(radio).find("input").attr('checked','checked');
			je.eq(radio).addClass("selected");
		var valx=je.eq(radio).find("input").val();
		$("#Money").text(valx);
		$("#hidMoney").val(valx);
	});
	var tel=$("#txtOtherMoney").val();
	$("#txtOtherMoney").keyup(function(){	
		if(dx.test($("#txtOtherMoney").val())){
			$("#txtOtherMoney").val(tel);			
		}else{
			tel=$("#txtOtherMoney").val();
		}
		$("#Money").text(tel);
		$("#hidMoney").val(tel);
	}); 
})
</script>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd">
                    <form id="toPayForm" name="toPayForm" action="<?php echo WEB_PATH; ?>/member/cart/addmoney" method="post" target="_blank">
<div class="R-content">
						<h3 class="title">账户充值</h3>
						
					</div>
					<div class="box-bd">
					<form id="toPayForm" name="toPayForm" action="<?php echo WEB_PATH; ?>/member/cart/addmoney" method="post" target="_blank">
						<div class="cash-start">
							<h2 class="title">请您选择充值金额</h2>
							<div class="select">
								<ul id="ulMoneyList">
									<li class="selected" style="margin-left:0;"><input  type="radio" id="rd10" name="money" value="10" checked="checked"> <label for="rd10">充值 <strong>￥</strong><b>10</b></label></li>
									
									<li><input type="radio" name="money" value="50" id="rd50"> <label for="rd50">充值 <strong>￥</strong><b>50</b></label></li>
									<li><input type="radio" name="money" value="100" id="rd100"> <label for="rd100">充值 <strong>￥</strong><b>100</b></label></li>
									<li><input type="radio" name="money" value="200" id="rd200"> <label for="rd200">充值 <strong>￥</strong><b>200</b></label></li>
									<li class="custom"><input type="radio" value="0" name="money" id="rdOther"> <label for="rdOther">其它金额</label><input value="" id="txtOtherMoney" type="text" class="enter" maxlength="7" /></li>
								</ul>
							</div>
                            
                            <div class="charge_money_list">
                            
   <style>
				.yeepay_bank img{ border:1px solid #eee; padding:2px; width:130px; height:35px; float:left; margin-right:20px;}
				.yeepay_bank input{ float:left;}
			</style>

		<p class="leix">支付平台支付：</p>
		<ul class="payment yeepay_click">		
          <?php $ln=1;if(is_array($paylist)) foreach($paylist AS $pay): ?>
			<li>
				<input checked="checked" type="radio" value="<?php echo $pay['pay_id']; ?>" name="account">               
                <img style="border:1px solid #eee; padding:1px; margin-right:20px;" height="35px" width="100px" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $pay['pay_thumb']; ?>">
                
            </li>
           <?php  endforeach; $ln++; unset($ln); ?>             
		</ul>
		<p class="much">应付金额：<span class="yf"><strong>￥</strong><span id="Money">10</span></span></p>
		<h6>			
				<input type="hidden" id="hidPayName" name="payName" value="">
				<input type="hidden" id="hidPayBank" name="payBank" value="0">
				<input type="hidden" id="hidMoney" name="money" value="10">
				<input id="submit_ok" class="bluebut imm" type="submit" name="submit" value="立即充值" title="立即充值">
			</form>
		</h6>
							
                            
                            
                           
							<div id="payAltBox" style="display:none;">
								<div class="prompt_box">
									<p class="pic"><em></em>请您在新开的页面上完成支付！</p>
									<p class="ts">付款完成之前，请不要关闭本窗口！<br>完成付款后跟据您的个人情况完成此操作！</p>
									<ul>
										<li><a href="<?php echo WEB_PATH; ?>/member/home/userbalance" class="look" title="查看充值记录">查看充值记录 </a></li>
										<li><a href="javascript:gotoClick();" class="look" id="btnReSelect" title="重选支付方式">重选支付方式</a></li>
									</ul>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
		
	$("#submit_ok").click(function(){	
		if(!this.cc){
			this.cc = 1;		
			return true;
		}else{		
			return false;
		}		
		return false;
	});
	
	$(".yeepay_click li>img").click(function(){			
			$(this).prev().attr("checked",'checked');
	});

});
</script>
<?php include templates("index","foot");?>