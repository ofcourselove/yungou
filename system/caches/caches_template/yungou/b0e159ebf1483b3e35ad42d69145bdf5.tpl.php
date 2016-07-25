<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>个人主页 - <?php echo $webname; ?>触屏版</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css?v=130715" rel="stylesheet" type="text/css" />
	<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/userindex.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
	<script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/userindex.js" language="javascript" type="text/javascript"></script>
</head>
<body id="loadingPicBlock">
    <div class="h5-1yyg-v11">
        
<!-- 栏目页面顶部 -->


<!-- 内页顶部 -->

    <header class="g-header">
        <div class="head-l">
	        <a href="javascript:;" onclick="history.go(-1)" class="z-HReturn"><s></s><b>返回</b></a>
        </div>
        <h2>个人主页</h2>
        <div class="head-r">
	        
        </div>
    </header>

   <section>
	<div class="mainCon">
    	<div class="mBanner">
        	<ul>
            	<li class="mUserHead"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $member['img']; ?>"></li><li class="mUserInfo"><p><?php echo get_user_name($member['uid']); ?></p><br/>福分：<?php echo $member['score']; ?><br/>经验值：<?php echo $member['jingyan']; ?><span class="z-class-icon03"><s></s><?php echo $member['yungoudj']; ?></span></li>
            </ul>
        </div>
        <div class="g-snav" id="divMidNav">
        	<span class="g-snav-lst mCurr"><a href="javascript:void(0);"><?php echo _cfg('web_name_two'); ?>记录</a></span>
            <span class="g-snav-lst"><a href="javascript:void(0);">获得的商品</a></span>
            <span class="g-snav-lst"><a href="javascript:void(0);">晒单</a></span>
        </div>
        <input name="hdUserID" type="hidden" id="hdUserID" value="<?php echo $member['uid']; ?>" />
        <!--云购记录-->
        <div id="divBuyRecord" class="mBuyRecord">
        
        </div>
        <!--获得商品-->
        <div id="divGetGoods" class="mBuyRecord" style="display:none">
   
        </div>
        <!--晒单-->
        <div id="divSingle" class="mSingle" style="display:none">
        	<ul>
             
            </ul>
        </div>
        <a id="btnLoadMore" class="loading" href="javascript:void(0);" style="display:none;">点击加载更多</a>
        <div id="divLoading" class="loading"><b></b>正在加载</div>
    </div>
</section>
        
<?php include templates("mobile/index","footer");?>
<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  Path.imgpath = "<?php echo G_WEB_PATH; ?>/statics";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());
</script>
 
    </div>
</body>
</html>