<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/mui.css">
    <link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile/app.css">


    <script type="text/javascript" charset="utf-8" src="<?php echo G_PLUGIN_PATH; ?>/uploadify/jquery.uploadify-3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo G_PLUGIN_PATH; ?>/uploadify/uploadify.css" type="text/css">
    <script type="text/javascript" charset="utf-8" src="<?php echo G_PLUGIN_PATH; ?>/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo G_PLUGIN_PATH; ?>/ueditor/ueditor.all.min.js"></script>
		<style>
			.mui-segmented-control .mui-control-item{
				line-height: 36px;
			}
			.mui-segmented-control .mui-control-item.mui-active{
				background-color: #FFF;
				color: #ff9a15;
			}
			.mui-segmented-control.mui-scroll-wrapper .mui-control-item{
				padding: 0 10px;
				margin: 0 10px;
			}
			.mui-bar .mui-segmented-control{
				width: 50%;
				margin-top: 2px;
			}
			.mui-segmented-control .mui-control-item{
				line-height: 30px;
				border-color: #eee;
   				border-left: 1px solid #eee;
   				color: #333;
			}
			.mui-segmented-control{
				font-size: 16px;
				border:none 0;
    			border-radius: 0px;
			}
			#funnelChart02 div{
				width: 100%;
			}
			/*.mui-control-content.mui-active {
				display: initial;

			}
			.mui-control-content {
				display: initial;
			    position: relative;
			}*/
			.mui-table-view-cell:after{
				left: 0;
			}
			.mui-table-view-radio .mui-table-view-cell .mui-navigate-right:after{
				color: #FF9A15;
			}

		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-closeempty mui-pull-left" style=" font-size: 40px;"></a>
			<h1 class="mui-title"></h1>
		</header>
		<div class="mui-content">
      <form  enctype="multipart/form-data"  action="<?php echo WEB_PATH; ?>/mobile/home/postsingle" method="post">
			<div id="scroll" class="mui-scroll-wrapper" style="padding-top: 50px; padding-bottom:70px;background-color: #FFF;">
				<div class="mui-scroll">
					<div class="sd_lilie" style="padding: 15px; padding-bottom: 0;">
						<textarea  id="sd_text" name="content"  placeholder="这一刻的想法。。。" style="margin: 0; padding: 15px; height: 120px; border:1px solid #eee;"></textarea>
					</div>

					<div style="overflow: hidden; padding: 15px;">
						<!-- <div class="list_imgBox" style="width: 18%; margin-right: 2%; height: 60px;"><img src="images/win_pic_03.png"></div>
						<div class="list_imgBox" style="width: 18%; margin-right: 2%; height: 60px;"><img src="images/win_pic_03.png"></div>
						<div class="list_imgBox" style="width: 18%; margin-right: 2%; height: 60px;"><img src="images/win_pic_03.png"></div> -->

           <div id="sd_file" class="" style="float:left; margin-right:15px;margin-left:15px;	width:80px;height:80px;background: url(<?php echo G_TEMPLATES_IMAGE; ?>/mobile/tianjia.png) no-repeat ;">
						 <input id="sd_file" style=" opacity:0;float:left" type="file" name="fileurl_tmp" />
           </div>

           <div id="sd_file" class="" style="float:left;	margin-right:15px; width:80px;height:80px;background: url(<?php echo G_TEMPLATES_IMAGE; ?>/mobile/upload_jia.png) no-repeat ;">
						 <input id="sd_file" style=" opacity:0;float:left" type="file" name="fileurl_tmp2" />
           </div>

					 <div id="sd_file" class="" style="float:left;	width:80px;height:80px;background: url(<?php echo G_TEMPLATES_IMAGE; ?>/mobile/upload_jia.png) no-repeat ;">
						 <input id="sd_file" style=" opacity:0;float:left" type="file" name="fileurl_tmp3" />
           </div>

          	<div class="fileWarp" style="float:left;	margin-right:15px; width:50px;height:50px;"><div id="fileQueue"></div><ul></ul></div>
          	<!-- <a style="display:block; float: left; width: 18%; margin-right: 2%; height: 60px; border: 1px solid #ddd;">
              <span style="color: #999; width: 60px; line-height: 60px; text-align: center; font-size: 40px;" class="mui-icon mui-icon-plusempty"></span>
              <input id="sd_file" type="file" name="fileurl_tmp"/>
            </a> -->
					</div>
          <div class="sd_lilie" style="width:580px;">
          <input id="sd_submit" name="submit" type="submit" class="mui-btn mui-btn-warning mui-btn-block"
          style="padding: 15px 0; width: 55.5%; margin: 0 auto; margin-top: 15px; background-color: #FF9A15; border: none 0;" value="确认添加" />
          </div>
					<!-- <button type="button" class="mui-btn mui-btn-warning mui-btn-block" style="padding: 10px 0; width: 90%; margin: 0 auto; margin-top: 15px; background-color: #FF9A15; border: none 0;">发送</button> -->
				</div>
			</div>
    </form>
		</div>

		<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
		<script>
    // 上传文件
    $(function(){
        $('#sd_file').uploadify({
        	'auto'     : false,
        	'removeTimeout' : 1,
            'swf'      : '<?php echo G_PLUGIN_PATH; ?>/uploadify/uploadify.swf',
            'uploader' : '<?php echo WEB_PATH; ?>/member/home/singphotoup',
            'method'   : 'post',
    		'buttonText' : '选择图片',
    		'buttonImage': '<?php echo G_PLUGIN_PATH; ?>/uploadify/select.png',
    		'width': 120,
    		'height': 30,
            'multi'    : true,s
    		'uploadLimit' : 10,
    		'queueID'         : 'fileQueue',
            'fileTypeDesc' : 'Image Files',
            'fileTypeExts' : '*.gif; *.jpg; *.png',
            'fileSizeLimit' : '500KB',

    		'formData'        : {
    			'uid': '<?php echo $uid; ?>',
    			'ushell':'<?php echo $ushell; ?>'
    		},
    		'onUploadSuccess' : function(file, data, response){
    			$(".fileWarp ul").append(SetImgContent(data));
    			SetUploadFile();
    		}
        });
    });

    function SetImgContent(data){
    	var sLi = "";
    		sLi += '<li>';
    		sLi += '<img src="<?php echo G_UPLOAD_PATH; ?>/' + data + '" width="100" height="100" />';
    		sLi += '<input type="hidden" name="fileurl_tmp[]" value="' + data + '">';
    		sLi += '<a href="javascript:;">删除</a>';
    		sLi += '</li>';
    	return sLi;
    }


		mui('.mui-scroll-wrapper').scroll();


		mui('.mui-bottom-part').on('tap', 'a', function() {
			  //打开关于页面
			    var _url = this.getAttribute("id");
			    mui.openWindow({
				    url: _url + '.html',
				    id:_url
			    });
			});
//			document.body.addEventListener('touchmove', function (event) {
//		    event.preventDefault();
//		}, false);
		</script>
	</body>

</html>
