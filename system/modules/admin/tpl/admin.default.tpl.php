<?php defined('G_IN_ADMIN')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link rel="stylesheet" href="<?php echo G_GLOBAL_STYLE; ?>/global/css/global.css" type="text/css">
<link rel="stylesheet" href="<?php echo G_GLOBAL_STYLE; ?>/global/css/style.css" type="text/css">
<style>
	 body{ background-color:#fefeff; font:12px/1.5 arial,宋体b8b\4f53,sans-serif;}
	.width30{ width:25%; font-size:12px; border-radius:5px 2px 20px 2px;  }
	
	.title{ font-size:15px; font-weight:bold; color:#444; line-height:30px; border-bottom:1px solid #ccc;}
	.div-news{ height:50px; background-color:#fff}
	.div-user span{ display:block; font-size:12px; font: 12px/1.5 arial,宋体b8b\4f53,sans-serif; line-height:20px; color:#999}
	.div-user{ background-color:#fff; padding:20px;width:30%;float:left;  border-bottom:1px solid #eee }
	.div-button{ float:left;background-color:#fff; float:left; padding:20px; margin:0 10px; width:55%;border-radius:5px 5px 5px 5px;}
	.div-button ul li{ float:left; margin:0px 25px;}
	.div-button li a{  cursor:pointer; text-decoration:none}
	.div-button li span{ display:block; width:60px; text-align:center; line-height:32px;} 
	
	.div-system{background-color:#fff; float:left; padding:20px; margin:0 10px;border-right:1px solid #eee}
	.div-webinfo{background-color:#fff; float:left; padding:20px; margin:0 10px; width:27%;border-right:1px solid #eee }
	.div-about{background-color:#fff; float:left; padding:20px; margin:0 10px; overflow:hidden}
	
	
	
	 li{font:12px/1.5 arial,宋体b8b\4f53,sans-serif;}
	.div-system ul li{height:30px; line-height:30px;color:#333;border-bottom:1px dotted #ddd;}
	.div-system ul li i{width:90px;height:30px; line-height:30px; display:inline-block; color:#666;}
	
		
	.div-about ul li{height:30px; line-height:30px;color:#333;border-bottom:1px dotted #ddd;}
	.div-about ul li i{width:90px;height:30px; line-height:30px; display:inline-block; color:#666;}
	
	.div-webinfo ul li{height:30px; line-height:30px;color:#333;border-bottom:1px dotted #ddd;}
	.div-webinfo ul li i{width:90px;height:30px; line-height:30px; display:inline-block; color:#666;}
	
	.CMS_message{background-color: #eef3f7;border: 1px solid #d5dfe8; height:20px; padding:5px 0px; overflow:hidden}
	.CMS_message li{ text-indent:50px; height:25px; line-height:25px; color:#09c;font-size:12px; font-weight:bold;}
	
</style>
</head>
<body>
<section class="135editor" style="position: static; box-sizing: border-box; border: 1px dotted rgb(218, 98, 71); padding: 2px;" data-id="30">
    <section style=" padding: 5px; border: 1px solid rgb(204, 204, 204);color: rgb(62, 62, 62); line-height: 24px; text-align: justify; box-shadow: rgb(165, 165, 165) 5px 5px 2px; background-color: rgb(250, 250, 250);margin-top: 20px;">
        <section style=" text-align: left;margin-left: 20px;;margin-top: -18px;">
            <section style="display: inline-block; border-radius: 0.1em 1.5em; box-shadow: rgb(165, 165, 165) 4px 4px 2px; color: rgb(255, 255, 255); padding: 4px 10px; text-align: justify; border: 1px solid rgb(216, 40, 33); background-color: rgb(216, 40, 33);">
                <strong class="135brush" data-brushtype="text">公告通知</strong>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </section>
        </section>
        <section class="135brush" data-style="margin-top: 2px; margin-bottom: 0px; padding: 0px; max-width: 100%; min-height: 1.5em; line-height: 2em;font-weight:bold;">
            <section class="135editor" style="position: static; box-sizing: border-box; border: 0px none; padding: 0px;" data-id="33" data-color="rgb(166, 91, 203)" data-custom="rgb(166, 91, 203)">
                <section class="135editor" style="position: static; box-sizing: border-box; border: 0px none; padding: 0px;" data-id="45" data-color="rgb(55, 74, 174)" data-custom="rgb(55, 74, 174)">
                    <section style="margin: 0.8em 0 0.5em 0;font-size: 16px;line-height: 32px; font-weight: bold;">
                        <section class="135brush" data-brushtype="text" style="margin-left: 36px; font-style: normal; color: rgb(55, 74, 174); border-color: rgb(55, 74, 174);">
                            <span style="font-size: 18px;"><section class="article135" label="powered by 135editor.com" style="font-family:微软雅黑;font-size:16px;"><p style="white-space: normal;">河南诚和道科技有限公司为你提供此程序源码，我们会定时为大家更新云购程序，最新的程序更新会在我们的微信公众平台为大家发布，请扫描微信二维码或在微信客户端搜索微信公众号：chenghedao（前一百名免费送app）</p> </section><strong></strong>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </section>
                    </section>
                    <section style="display: block; width: 0; height: 0; clear: both;"></section>
                </section>
            </section>
            <p style="line-height: 2em; text-align: left;">
                <span style="font-family: &#39;Microsoft YaHei&#39;; font-size: 14px; line-height: 19.6px;"><img src="http://www.chenghedao.com/images/erweima.png" style="font-family: &#39;Microsoft YaHei&#39;; font-size: 18px; line-height: normal; text-align: center; white-space: normal;"/><span style="font-family: &#39;Microsoft YaHei&#39;; line-height: 19.6px; font-size: 16px;"></span></span>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </p>
        </section>
    </section>
    <section style="display: block; width: 0; height: 0; clear: both;"></section>
</section>
<p>
    <br/>
</p>
<div class="bk30"></div>
<div class="div-user lr10">
	<h1>Hello, <font color="#4c95b6"><?php echo $info['username'] ;?></font><h1>
    <span>所属角色: 超级管理员</span>
    <span>上次登录时间: <?php echo date("Y-m-d H:i:s",$info['logintime']); ?></span>
    <span>上次登录IP: <?php echo $info['loginip']; ?></span>
</div>
<div class="div-button">
<div class="bk15"></div>
	<ul>
    	<li><a  href="<?php echo G_MODULE_PATH; ?>/content/article_add"><img src="<?php echo G_GLOBAL_STYLE; ?>/global/image/btn_60_60_t.png"><span>添加文章</span></a></li>
        <li><a href="<?php echo G_MODULE_PATH; ?>/content/goods_add"><img src="<?php echo G_GLOBAL_STYLE; ?>/global/image/btn_60_60_g.png"><span>添加商品</span></a></li>
        <li><a href="<?php echo WEB_PATH; ?>/member/member/list"><img src="<?php echo G_GLOBAL_STYLE; ?>/global/image/btn_60_60_m.png"><span>会员管理</span></a></li>
        <li><a href="<?php echo G_MODULE_PATH; ?>/setting/webcfg"><img src="<?php echo G_GLOBAL_STYLE; ?>/global/image/btn_60_60_s.png"><span>系统设置</span></a></li>
        <li><a href="<?php echo G_WEB_PATH; ?>"><img src="<?php echo G_GLOBAL_STYLE; ?>/global/image/btn_60_60_i.png"><span>网站首页</span></a></li>
    </ul>
</div>



<div class="bk10"></div>
<script type="text/javascript">
(function(A){
   function _ROLL(obj){
      this.ele = document.getElementById(obj);
	  this.interval = false;
	  this.currentNode = 0;
	  this.passNode = 0;
	  this.speed = 100;
	  this.childs = _childs(this.ele);
	  this.childHeight = parseInt(_style(this.childs[0])['height']);
	      addEvent(this.ele,'mouseover',function(){
				                               window._loveYR.pause();
											});
		  addEvent(this.ele,'mouseout',function(){
				                               window._loveYR.start(_loveYR.speed);
											});
   }
   function _style(obj){
     return obj.currentStyle || document.defaultView.getComputedStyle(obj,null);
   }
   function _childs(obj){
	  var childs = [];
	  for(var i=0;i<obj.childNodes.length;i++){
		 var _this = obj.childNodes[i];
		 if(_this.nodeType===1){
			childs.push(_this);
		 }
	  }   
	  return childs;
   }
	function addEvent(elem,evt,func){
	   if(-[1,]){
		   elem.addEventListener(evt,func,false);   
	   }else{
		   elem.attachEvent('on'+evt,func);
	   };
	}
	function innerest(elem){
      var c = elem;
	  while(c.childNodes.item(0).nodeType==1){
	      c = c.childNodes.item(0);
	  }
	  return c;
	}
   _ROLL.prototype = {
      start:function(s,v){
	          var _this = this;
			  
			  _this.hh=v;
			  _this.speed = s || 100;//速度
		      _this.interval = setInterval(function(){
									
						    _this.ele.scrollTop += 1;							
							if(_this.ele.scrollTop==_this.hh){								
								//clearInterval(_this.interval);
							}
							
							_this.passNode++;
							if(_this.passNode%_this.childHeight==0){
								  var o = _this.childs[_this.currentNode] || _this.childs[0];
								  _this.currentNode<(_this.childs.length-1)?_this.currentNode++:_this.currentNode=0;
								  _this.passNode = 0;
								  _this.ele.scrollTop = 0;
								  _this.ele.appendChild(o);
							}
						  },_this.speed);
	  },
	
	  pause:function(){
		 var _this = this;
	     clearInterval(_this.interval);
	  }
   }
    A.marqueen = function(obj){A._loveYR = new _ROLL(obj); return A._loveYR;}
})(window);

marqueen('roll').start(50,30);
</script>

<div style="overflow:hidden">
<!------------>
    <div class="div-system width30">
        <div class="title">系统信息</div>
        	<div class="bk10"></div>
            <ul>        
                <li><i>操作系统: </i><?php echo $SysInfo['os'];?></li>
                <li><i>服务器版本: </i><?php echo $SysInfo['web_server'];?></li>
                <li><i>PHP版本: </i><?php echo $SysInfo['phpv'];?></li>
                <li><i>MYSQL版本: </i><?php echo $SysInfo['MysqlVersion'];?></li>
                <li><i>上传限制: </i><?php echo $SysInfo['fileupload'];?></li>
                <li><i>时区: </i><?php echo $SysInfo['timezone'];?></li>
                <li><i>GD库: </i><?php echo showResult('imageline');?></li>
                <li><i>POST限制: </i><?php echo get_cfg_var('post_max_size'); ?></li>
                <li><i>脚本超时时间: </i><?php echo ini_get('max_execution_time').'秒'; ?></li>
				<li><i>set_time_limit: </i><?php echo showResult('set_time_limit'); ?></li>
				<li><i>fsockopen: </i><?php echo showResult('fsockopen'); ?></li>
                <li style="border-bottom:none;"><i>ZEND支持: </i><?php echo showResult('zend_version'); ?> </li>
      
            </ul>      
    </div>
	<?php
	$tj_category=$this->db->GetList("SELECT cateid FROM `@#_category` WHERE `model` = '1'");
	$tj_brand=$this->db->GetList("SELECT id FROM `@#_brand`");
	$tj_article=$this->db->GetList("SELECT * FROM `@#_article`");
	$tj_shoplist=$this->db->GetList("SELECT id FROM `@#_shoplist`");	
	$time=time();
	$tj_shoplist_xsjx=$this->db->GetList("SELECT id FROM `@#_shoplist` where `xsjx_time`>'$time'");
	$tj_member=$this->db->GetList("SELECT uid FROM `@#_member`");
	
	$tm=time()-24*3600;
	$tj_member_new=$this->db->GetList("SELECT uid FROM `@#_member` where `time`>'$tm' ");
	$tj_shoplist_new=$this->db->GetList("SELECT id FROM `@#_shoplist` where `time`>'$tm' ");
	$tj_member_account=$this->db->GetList("SELECT money FROM `@#_member_account` where `pay`='账户' and `type`=1 and `time`>'$tm'");
	$today_money=0;
	foreach ($tj_member_account as $account){
		$today_money=$account['money']+$today_money;
	}
	?>
    <div class="div-webinfo width30">
        <div class="title">网站信息统计</div>
        <div class="bk10"></div>
        <ul>
           <li><i>栏目:</i><?php echo count($tj_category); ?></li>
           <li><i>品牌:</i><?php echo count($tj_brand); ?></li>
           <li><i>文章:</i><?php echo count($tj_article); ?></li>
           <li><i>商品数量:</i><?php echo count($tj_shoplist); ?></li>
           <li><i>限时揭晓:</i><?php echo count($tj_shoplist_xsjx); ?></li>
           <li style="border-bottom:none;"><i>会员人数:</i><?php echo count($tj_member); ?></li>
           <li class="bk30"></li>
           <li><i>今日新增会员:</i><?php echo count($tj_member_new); ?></li>
           <li><i>今日新增商品:</i><?php echo count($tj_shoplist_new); ?></li>
           <li style="border-bottom:none;"><i>今日账户收入:</i><?php echo $today_money; ?></li>
        </ul>
    </div>
    
    <div class="div-about width30">
        <div class="title">关于我们</div>
        <div class="bk10"></div>
        <ul>
        	<li><i>程序版本:</i>V5.20<font color="#f60">【<?php echo $text; ?>】</font></li>
			<li><i>更新时间:</i>2016.03.26</li>
  <li><i>技术支持：</i><a href="http://www.chenghedao.com">河南诚和道科技有限公司</a></li>
      
        </ul>
         
    </div>
<!------------>
</div>
</body>
</html> 
