<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>

<nav class="mui-bar mui-bar-tab mui-bottom-part">
      <a  <?php if($key=="首页" ): ?>class="mui-tab-item mui-active"<?php  else: ?>class="mui-tab-item"<?php endif; ?> id="<?php echo WEB_PATH; ?>/mobile/mobile/init" >
        <span class="mui-icon logo01"></span>
        <span class="mui-tab-label">首页</span>
      </a>
      <a <?php if($key=="全部商品" ): ?>class="mui-tab-item mui-active"<?php  else: ?>class="mui-tab-item"<?php endif; ?> id="<?php echo WEB_PATH; ?>/mobile/mobile/glist">
        <span class="mui-icon logo02"></span>
        <span class="mui-tab-label">全部商品</span>
      </a>
      <a <?php if($key=="晒单" ): ?>class="mui-tab-item mui-active"<?php  else: ?>class="mui-tab-item"<?php endif; ?> id="<?php echo WEB_PATH; ?>/mobile/shaidan/init">
        <span class="mui-icon logo03"></span>
        <span class="mui-tab-label">晒单</span>
      </a>
      <a  <?php if($key=="我的" ): ?>class="mui-tab-item mui-active"<?php  else: ?>class="mui-tab-item"<?php endif; ?> id="<?php echo WEB_PATH; ?>/mobile/user/login">
        <span class="mui-icon logo04"></span>
        <span class="mui-tab-label">我的</span>
      </a>
    </nav>
		<div class="mui-content" style="background-color: transparent;">





		</div>
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/mui.js"></script>
  		<script>
  		// mui.init({
  		// 	gestureConfig:{
  		// 		doubletap:true
  		// 	},
  		// 	subpages:[{
  		// 		url:'index_inner.html',
  		// 		id:'index_inner.html',
  		// 		styles:{
  		// 			top: '50px',
  		// 			bottom: '70px',
  		// 		}
  		// 	}]
  		// });
      //
  		var contentWebview = null;
  		document.querySelector('header').addEventListener('doubletap',function () {
  			if(contentWebview==null){
  				contentWebview = plus.webview.currentWebview().children()[0];
  			}
  			contentWebview.evalJS("mui('#pullrefresh').pullRefresh().scrollTo(0,0,100)");
  		});



  		mui('.mui-bottom-part').on('tap', 'a', function() {
  			  //打开关于页面
  			    var _url = this.getAttribute("id");
  			    mui.openWindow({
  				    url: _url ,
  				    id:_url
  			    });
  			});

  //			document.body.addEventListener('touchmove', function (event) {
  //		    event.preventDefault();
  //		}, false);
  		</script>
