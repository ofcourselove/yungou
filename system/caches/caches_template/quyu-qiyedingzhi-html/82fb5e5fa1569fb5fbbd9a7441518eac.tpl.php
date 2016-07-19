<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<link rel="stylesheet" type="text/css" href="/css/user-center.min.css" />
<div class="container breadcrumbs"><a href="/">首页</a><span class="sep">/</span><span>提现记录</span></div>
<div class="container">
    <div class="uc-full-box">
        <div class="row">
			<?php include templates("member","left");?>
			<div class="span16">
				<div class="xm-line-box uc-box">
					<div class="box-hd">
						<h3 class="title">提现记录</h3>
					</div>
<link rel="stylesheet" type="text/css" href="/App/Css/layout-records.css"/>
<link rel="stylesheet" type="text/css" href="/App/Css/layout-invitation.css"/>
        <div class="R-content">
            <div id="divMentionList" class="list-tab cash gray02">
			  <ul class="listTitle"><li class="w150">申请时间</li><li class="w300">银行账户信息</li><li class="w120">提现金额(元)</li><li class="w120">手续费(元)</li><li class="w120">审核状态</li></ul>
			  <?php if($recount==1): ?>
			  <?php $ln=1;if(is_array($recordarr)) foreach($recordarr AS $val): ?>
			  <ul><li class="w150"><?php echo date('Y-m-d',$val['time']); ?></li><li class="w300"><?php echo $val['bankname']; ?>&nbsp;&nbsp;<?php echo $val['banknumber']; ?></li><li class="w120"><?php echo $val['money']; ?></li><li class="w120"><?php echo $fufen['fufen_yongjintx']; ?></li><li class="w120"><?php if($val['auditstatus']==1): ?>审核通过<?php  else: ?>审核未通过<?php endif; ?></li><ul>
			  <?php  endforeach; $ln++; unset($ln); ?>
			  <?php  else: ?>			  
			     <div class="tips-con"><i></i>未有相应提现记录</div>
			  <?php endif; ?> 
		   </div>
            <div id="divPageNav" class="page_nav"></div>
        </div>
	</div>
<style>
#foucs_big{background:#999; filter:alpha(opacity=30); position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:100; display:none;}
#foucs_min{background:#999; filter:alpha(opacity=50); position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:100; display:none;}

#w3foucs{position:absolute;width:200px; overflow:hidden; left:50%; top:50%; height:auto; z-index:100;background-color:#fff; border:1px #999 solid; padding:1px;}
#w3foucs #foucs_close{
	width:22px;
	height:22px;
	position:absolute;
	z-index:100;
	right:10px;
	top:10px;
	background: url(/statics/templates/06/images/message.png) -80px -70px no-repeat;
	display: block;
	cursor: pointer;
}
#w3foucs #page_close{
	width:30px;
	height:30px;
	position:absolute;
	z-index:100;
	right:-15px;
	top:-15px;
	display: block;
	cursor: pointer;
	background:url(fancy_close.png) no-repeat;
}
#w3foucs #foucs_main{}
#w3foucs #foucs_main div.title{
    background-color: #F2F2F2;
    color: #666666;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    line-height: 30px;
    padding-left: 10px;
    padding-top: 3px;
}
#w3foucs #foucs_main div.content{
    padding: 5px;overflow:hidden;z-index:100;
}
#w3foucs #foucs_main .content img{
    z-index:200;
}
.PopMsgC {
    color: #999999;
    font-size: 14px;
    padding: 15px 0;
    text-align: center;
}
.PopMsgC s {
	background:url(/statics/templates/06/images/new-admin.png) -57px -96px no-repeat;
    display: inline-block;
    height: 21px;
    margin-right: 5px;
    vertical-align: top;
    width: 21px;
}
.PopMsgbtn {
    height: 30px;
    text-align: center;
}
.orangebut {
    background: none repeat scroll 0 0 #FF6600;
    border: 1px solid #F65802;
    color: #FFFFFF;
	height: 23px;
    line-height: 23px;
}
.cancelBtn {
    background: none repeat scroll 0 0 #F4F4F4;
    border: 1px solid #DDDDDD;
    color: #747474;
	height: 23px;
    line-height: 23px;
}
.orangebut, .bluebut, .graybut, .cancelBtn, .greenbut {
    border-radius: 2px 2px 2px 2px;
    cursor: pointer;
    display: inline-block;
    font-size: 12px;
    padding: 0 19px;
    text-align: center;
}
#foucs_big,#foucs_min,#w3foucs,#foucs_close,#page_close,#foucs_main{display:block;}
</style>
<script>
$(function(){
	$(".subMenu a").click(function(){
		var id=$(".subMenu a").index(this);
		$(".subMenu a").removeClass().eq(id).addClass("current");
		$(".R-content .topic").hide().eq(id).show();
	});
})
 
 

</script>
</div>
</div>
</div>
</div>
<?php include templates("index","foot");?>