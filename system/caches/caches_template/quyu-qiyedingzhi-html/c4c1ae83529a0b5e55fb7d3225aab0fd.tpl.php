<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","head");?>
<div class="container">
    <div class="row">
        <div class="col col-16 offset4">
			<div class="banner">
				<div class="banner-btn">
					<a href="javascript:;" class="prevBtn"><i></i></a>
					<a href="javascript:;" class="nextBtn"><i></i></a>
				</div>
				<?php $slides=$this->DB()->GetList("select * from `@#_slide` where 1",array("type"=>1,"key"=>'',"cache"=>0)); ?>
				<ul class="banner-img">
					<?php $ln=1;if(is_array($slides)) foreach($slides AS $slide): ?>
					<?php if($ln == 1): ?>
					<li><a href="<?php echo $slide['link']; ?>" target="_blank"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $slide['img']; ?>"></a></li>
					<?php endif; ?>
					<?php  endforeach; $ln++; unset($ln); ?>
				</ul>
				<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
			</div>
        </div>
    </div>
        <div class="g-wrap w1190">
            <!--最新揭晓-->
            <div class="g-title">
                <h3 class="fl">最新揭晓<span><em class="orange">快乐<?php echo _cfg('web_name_two'); ?>，惊喜无限！</em></span></h3>
                <div class="m-other fr"><cite><a href="<?php echo WEB_PATH; ?>/help/1" target="_blank" title="如何玩，一元获得商品？">如何玩转<?php echo _cfg('web_name_two'); ?>，一元获得商品？</a></cite></div>
            </div>
            <div class="g-list">
                <ul id="ulNewAwary">
				<?php $ln=1;if(is_array($shopqishu)) foreach($shopqishu AS $qishu): ?>
				<?php 
					$qishu['q_user'] = unserialize($qishu['q_user']);
				 ?>
					<li>
						<dl>
							<dt><a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="pic"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $qishu['thumb']; ?>" height="200px" width="200px" /></a></dt>
							<dd class="f-gx"><div class="f-gx-user"><span>恭喜</span><span class="blue"><a rel="nofollow" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($qishu['q_uid']); ?>" target="_blank"><?php echo get_user_name($qishu['q_user']); ?></a></span><span>获得</span></div></dd><br />
							<dd class="u-name"><a href="<?php echo WEB_PATH; ?>/dataserver/<?php echo $qishu['id']; ?>" target="_blank" class="name"><?php echo $qishu['title']; ?></a></dd>
						</dl>
						<cite style="display: inline;"></cite>
					</li>
					<?php  endforeach; $ln++; unset($ln); ?>
					<script type="text/javascript" src="/App/Js/GLotteryFun.js"></script>
					<script type="text/javascript">
						$(document).ready(function(){gg_show_time_init("ulNewAwary",'<?php echo WEB_PATH; ?>',0);});
					</script>
                </ul>
            </div>
            <!--热门推荐-->
            <div class="g-title">
                <h3 class="fl">热门推荐</h3>
                <div class="m-other fr"><a href="<?php echo WEB_PATH; ?>/goods_list/" target="_blank" title="更多" class="u-more">更多</a></div>
            </div>
            <div class="g-hot clrfix">
                <div class="g-hotL fl" id="divHotGoodsList">
				<?php $ln=1;if(is_array($shoplistrenqi)) foreach($shoplistrenqi AS $renqi): ?>
					<div class="g-hotL-list">
						<div class="g-hotL-con">
							<ul>
								<li class="g-hot-pic"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank" title="<?php echo $renqi['title']; ?>"><img alt="<?php echo $renqi['title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $renqi['thumb']; ?>"></a></li>
								<li class="g-hot-name"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" target="_blank" title="<?php echo $renqi['title']; ?>"><?php echo $renqi['title']; ?></a></li>
								<li class="gray">价值：￥<?php echo $renqi['money']; ?></li>
								<li class="g-progress"><dl class="m-progress"><dt><b style="width:<?php echo width($renqi['canyurenshu'],$renqi['zongrenshu'],216); ?>px;"></b></dt><dd><span class="orange fl"><em><?php echo $renqi['canyurenshu']; ?></em>已参与</span><span class="gray6 fl"><em><?php echo $renqi['zongrenshu']; ?></em>总需人次</span><span class="blue fr"><em><?php echo $renqi['zongrenshu']-$renqi['canyurenshu']; ?></em>剩余</span></dd></dl></li>
								<li><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $renqi['id']; ?>" class="u-imm" target="_blank" title="只要1元，即可购买">一元<?php echo _cfg('web_name_two'); ?></a></li>
							</ul>
						</div>
					</div>
					<?php  endforeach; $ln++; unset($ln); ?>
				</div>
                <div class="g-hotR fr">
                    <div class="u-are">正在<?php echo _cfg('web_name_two'); ?></div>
                    <div class="g-zzyging">
                        <ul id="UserBuyNewList" style="margin-top: 0px;">
							<?php $ln=1;if(is_array($go_record)) foreach($go_record AS $gorecord): ?>
							<li><span class="fl"><a href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($gorecord['uid']); ?>" target="_blank" title="<?php echo get_user_name($gorecord); ?>"><img alt="<?php echo get_user_name($gorecord); ?>" width="40" height="40" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($gorecord['uid'],'img','8080'); ?>"><i></i></a></span><p><a target="_blank" href="<?php echo WEB_PATH; ?>/uname/<?php echo idjia($gorecord['uid']); ?>" title="<?php echo get_user_name($gorecord); ?>" class="blue"><?php echo get_user_name($gorecord); ?></a><br><a target="_blank" href="<?php echo WEB_PATH; ?>/goods/<?php echo $gorecord['shopid']; ?>" title="<?php echo $gorecord['shopname']; ?>" class="u-ongoing"><?php echo $gorecord['shopname']; ?></a></p></li>
							<?php  endforeach; $ln++; unset($ln); ?>
						</ul>
					</div>
					<script>
						function autoScroll(obj){
							$(obj).find("#UserBuyNewList").animate({
								marginTop : "-89px"
							},500,function(){
								$(this).css({marginTop : "0px"}).find("li:first").appendTo(this);
							})
						}
						$(function(){
							setInterval('autoScroll(".g-zzyging")',3000)
						})
					</script>
                    <div class="u-see100">看一看谁的运气最好！</div>
                </div>
            </div>

            <!--即将揭晓-->
            <div class="g-title m-sort">
                <h3 class="fl">即将揭晓</h3>
                <div class="fr">
					<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1' and `parentid` = '0' order by `order` DESC",array("type"=>1,"key"=>'',"cache"=>0)); ?>
					<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
					<a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $categoryx['cateid']; ?>" target="_blank"><?php echo $categoryx['name']; ?></a>
					<?php  endforeach; $ln++; unset($ln); ?>
					<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
                </div>
            </div>
            <div class="announced-soon clrfix" id="divSoonGoodsList">
				<?php $ln=1;if(is_array($shoplist)) foreach($shoplist AS $shop): ?>
				<div class="soon-list-con">
					<div class="soon-list">
						<ul id="ulGoodsList">
							<li class="g-soon-pic"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" title="<?php echo $shop['title']; ?>"><img alt="<?php echo $shop['title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $shop['thumb']; ?>"></a></li>
							<li class="soon-list-name"><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" title="<?php echo $shop['title']; ?>"><?php echo $shop['title']; ?></a></li>
							<li class="gray">价值：￥<?php echo $shop['money']; ?></li>
							<li class="g-progress"><dl class="m-progress"><dt><b style="width:<?php echo width($shop['canyurenshu'],$shop['zongrenshu'],266); ?>px"></"></b></dt><dd><span class="orange fl"><em><?php echo $shop['canyurenshu']; ?></em>已参与</span><span class="gray6 fl"><em><?php echo $shop['zongrenshu']; ?></em>总需人次</span><span class="blue fr"><em><?php echo $shop['zongrenshu']-$shop['canyurenshu']; ?></em>剩余</span></dd></dl></li>
							<li><a href="<?php echo WEB_PATH; ?>/goods/<?php echo $shop['id']; ?>" target="_blank" class="u-now">立即<?php echo _cfg('web_name_two'); ?></a><a href="javascript:;" title="加入到购物车" class="u-cart"><s></s></a></li>
							<div class="Curbor_id" style="display:none;"><?php echo $shop['id']; ?></div>
							<div class="Curbor_yunjiage" style="display:none;"><?php echo $shop['yunjiage']; ?></div>
							<div class="Curbor_shenyu" style="display:none;"><?php echo $shop['shenyurenshu']; ?></div>
						</ul>
					</div>
				</div>
				<?php  endforeach; $ln++; unset($ln); ?>
			</div>
            <div class="check-out"><a href="<?php echo WEB_PATH; ?>/goods_list/" target="_blank" title="查看所有商品">查看所有商品</a></div>
            <!--晒单分享-->
            <div class="g-title">
                <h3 class="fl">晒单分享</h3>
                <div class="m-other fr"><a href="<?php echo WEB_PATH; ?>/go/shaidan/" target="_blank" title="更多" class="u-more">更多</a></div>
            </div>
            <div class="g-single-sun">
                <div class="singleL fl" id="divPostRec">
				<?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sd): ?>
					<dl>
						<dt><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank" title="<?php echo $sd['sd_title']; ?>"><img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"></a></dt>
						<dd class="u-user">
							<p class="u-head"><a href="<?php echo WEB_PATH; ?>/uname/<?php echo $sd['sd_userid']; ?>" target="_blank" title="<?php echo get_user_name($sd['sd_userid']); ?>"><img alt="<?php echo $sd['sd_title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($sd['sd_userid'],'img','8080'); ?>" width="40" height="40"><i></i></a></p>
							<p class="u-info"><span><a href="<?php echo WEB_PATH; ?>/uname/<?php echo $sd['sd_userid']; ?>" target="_blank" title="<?php echo get_user_name($sd['sd_userid']); ?>"><?php echo get_user_name($sd['sd_userid']); ?></a><em><?php echo date("Y-m-d",$sd['sd_time']); ?></em></span><cite><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank" title="<?php echo $sd['sd_title']; ?>"><?php echo $sd['sd_title']; ?></a></cite></p>
						</dd>
						<dd class="m-summary"><cite><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank"><?php echo _strcut($sd['sd_content'],100); ?></a></cite><b><s></s></b></dd>
					</dl>
				<?php  endforeach; $ln++; unset($ln); ?>
				</div>
                <div class="singleR fl">
                    <ul id="ul_PostList">
					<?php $ln=1;if(is_array($shaidan_two)) foreach($shaidan_two AS $sd): ?>
						<li><a href="<?php echo WEB_PATH; ?>/go/shaidan/detail/<?php echo $sd['sd_id']; ?>" target="_blank" title="<?php echo $sd['sd_title']; ?>"><img alt="<?php echo $sd['sd_title']; ?>" src="<?php echo G_UPLOAD_PATH; ?>/<?php echo $sd['sd_thumbs']; ?>"><p title="<?php echo $sd['sd_title']; ?>"><?php echo $sd['sd_title']; ?></p></a></li>
					<?php  endforeach; $ln++; unset($ln); ?>
					</ul>
                </div>
            </div>
        </div>
    </div>
	<section style="background: #f2f2f2;">
		<div class="container">
                    <div class="map js-lazyload" style="display: block; background-image: url(/mapbg.png);">
                        <span class="num"></span>
						<ul id="m_btn">
							<li class="js-map-item text-d d-yc" data-type="yc"><a class="text-a text-yc" href="#">银川</a></li>
							<li class="js-map-item text-d d-heb" data-type="heb"><a class="text-a text-heb" href="#">哈尔滨</a></li>
							<li class="js-map-item text-d d-cc" data-type="cc"><a class="text-a text-cc" href="#">长春</a></li>
							<li class="js-map-item text-d d-sy" data-type="sy"><a class="text-a text-sy" href="#">沈阳</a></li>
							<li class="js-map-item text-d d-tj" data-type="tj"><a class="text-a text-tj" href="#">天津</a></li>
							<li class="js-map-item text-d d-bj" data-type="bj"><a class="text-a text-bj" href="#">北京</a></li>
							<li class="js-map-item text-d d-ty" data-type="ty"><a class="text-a text-ty" href="#">太原</a></li>
							<li class="js-map-item text-d d-hhht" data-type="hhht"><a class="text-a text-hhht" href="#">呼和浩特</a></li>
							<li class="js-map-item text-d d-qd" data-type="qd"><a class="text-a text-qd" href="#">青岛</a></li>
							<li class="js-map-item text-d d-lz" data-type="lz"><a class="text-a text-lz" href="#">兰州</a></li>
							<li class="js-map-item text-d d-xa" data-type="xa"><a class="text-a text-xa" href="#">西安</a></li>
							<li class="js-map-item text-d d-zz" data-type="zz"><a class="text-a text-zz" href="#">郑州</a></li>
							<li class="js-map-item text-d d-nj" data-type="nj"><a class="text-a text-nj" href="#">南京</a></li>
							<li class="js-map-item text-d d-hf" data-type="hf"><a class="text-a text-hf" href="#">合肥</a></li>
							<li class="js-map-item text-d d-sh" data-type="sh"><a class="text-a text-sh" href="#">上海</a></li>
							<li class="js-map-item text-d d-wh" data-type="wh"><a class="text-a text-wh" href="#">武汉</a></li>
							<li class="js-map-item text-d d-nc" data-type="nc"><a class="text-a text-nc" href="#">南昌</a></li>
							<li class="js-map-item text-d d-hz" data-type="hz"><a class="text-a text-hz" href="#">杭州</a></li>
							<li class="js-map-item text-d d-cs" data-type="cs"><a class="text-a text-cs" href="#">长沙</a></li>
							<li class="js-map-item text-d d-xm" data-type="xm"><a class="text-a text-xm" href="#">厦门</a></li>
							<li class="js-map-item text-d d-sz" data-type="sz"><a class="text-a text-sz" href="#">深圳</a></li>
							<li class="js-map-item text-d d-hk" data-type="hk"><a class="text-a text-hk" href="#">海口</a></li>
							<li class="js-map-item text-d d-nn" data-type="nn"><a class="text-a text-nn" href="#">南宁</a></li>
							<li class="js-map-item text-d d-gy" data-type="gy"><a class="text-a text-gy" href="#">贵阳</a></li>
							<li class="js-map-item text-d d-cq" data-type="cq"><a class="text-a text-cq" href="#">重庆</a></li>
							<li class="js-map-item text-d d-cd" data-type="cd"><a class="text-a text-cd" href="#">成都</a></li>
							<li class="js-map-item text-d d-gz" data-type="gz"><a class="text-a text-gz" href="#">广州</a></li>
							<li class="js-map-item text-d d-jn" data-type="jn"><a class="text-a text-jn" href="#">济南</a></li>
							<li class="js-map-item text-d d-bd" data-type="bd"><a class="text-a text-bd" href="#">保定</a></li>
							<li class="js-map-item text-d d-suzhou" data-type="suzhou"><a class="text-a text-suzhou" href="#">苏州</a></li>
						</ul>
						<div class="map-pop hide" style="top: 318px; right: 141px; left: 353px;z-index: 9999;" data-panel="yc">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/1.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">银川 谢花湘</h3>
								<p id="map_txt_txt"><?php echo _cfg('web_name_two'); ?>网挺不错的，投了18元，中了小米3，送货的是京东小哥，挺帅的！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 55px; right: 141px; left: 700px;z-index: 9999;" data-panel="heb">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/2.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">哈尔滨 尹莹莹</h3>
								<p id="map_txt_txt">我是莹莹，祝<?php echo _cfg('web_name_two'); ?>网越做越好，我的祝福可以让我越中越多，大家点赞啊。</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 135px; right: 141px; left: 677px;z-index: 9999;" data-panel="cc">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/3.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">长春 黄静怡</h3>
								<p id="map_txt_txt">超爱这个模式，有些人真的很奇怪，非要玩，玩了又舍不得花钱</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 209px; right: 141px; left: 657px;z-index: 9999;" data-panel="sy">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/4.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">沈阳 朱建云</h3>
								<p id="map_txt_txt">这种模式挺好的，个人表示支持，可以多增加一些商品，提升竞争力！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 210px; right: 141px; left: 588px;z-index: 9999;" data-panel="tj">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/5.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">天津 肖健</h3>
								<p id="map_txt_txt">我在<?php echo _cfg('web_name_two'); ?>网获得了一个小米路由和独轮车都是1周内到货，这种模式有人喜有人忧</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 210px; right: 141px; left: 550px;z-index: 9999;" data-panel="bj">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/6.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">北京 黄贾强</h3>
								<p id="map_txt_txt">建议上架健身器材啊，现在就差一套健身器材了，<?php echo _cfg('web_name_two'); ?>快给力啊！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 304px; right: 141px; left: 478px;z-index: 9999;" data-panel="ty">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/7.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">太原 刘思</h3>
								<p id="map_txt_txt">总而言之很不错的模式，花的钱其实也不少了，觉得平常心很重要</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 255px; right: 141px; left: 427px;z-index: 9999;" data-panel="hhht">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/8.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">呼和浩特 吴永佳</h3>
								<p id="map_txt_txt">模式很好，可以购物还可以娱乐，但是很容易让人沉迷啊。</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 318px; right: 141px; left: 627px;z-index: 9999;" data-panel="qd">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/9.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">青岛 吴勇</h3>
								<p id="map_txt_txt">我中的5s，刚收到的时候我老娘紧张得要死，怕我被炸死了。</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 367px; right: 141px; left: 336px;z-index: 9999;" data-panel="lz">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/10.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">兰州 孙香梅</h3>
								<p id="map_txt_txt">我就拿余额宝里面的收益去投，中了算我命好，不中我也不亏，希望大家都保持好心态~</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 398px; right: 141px; left: 413px;z-index: 9999;" data-panel="xa">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/11.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">西安 韩世雅</h3>
								<p id="map_txt_txt">真实的网站，网站有明确的盈利目标，根本没有必要搞假，大家最好抱着平常心去对待</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 394px; right: 141px; left: 501px;z-index: 9999;" data-panel="zz">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/12.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">郑州 王慧</h3>
								<p id="map_txt_txt">很新颖的模式，互动购物体验方式，是时尚、潮流的风向标，能满足个性年轻消费者的购物需求</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 417px; right: 141px; left: 615px;z-index: 9999;" data-panel="nj">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/13.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">南京 王珏蓉</h3>
								<p id="map_txt_txt">很喜欢这个模式，看着数字唰唰的往后倒，就觉得很好玩</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 430px; right: 141px; left: 580px;z-index: 9999;" data-panel="hf">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/14.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">合肥 姚玉静</h3>
								<p id="map_txt_txt">模式挺好的，就是感觉商品有点少，女的对手机什么的也不是特别热衷</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 430px; right: 141px; left: 665px;z-index: 9999;" data-panel="sh">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/15.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">上海 林红霞</h3>
								<p id="map_txt_txt">网站体验挺好的，界面简洁清晰，只是想说声，发私信广告的真的很烦啊</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 462px; right: 141px; left: 535px;z-index: 9999;" data-panel="wh">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/16.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">武汉 周萍</h3>
								<p id="map_txt_txt">全新的模式，有人欢喜有人忧。小力量中大奖，赞！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 504px; right: 141px; left: 572px;z-index: 9999;" data-panel="nc">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/17.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">南昌 路晓姗</h3>
								<p id="map_txt_txt">无意间看到中个网站，给同学都介绍了，同学中了部小米4</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 493px; right: 141px; left: 643px;z-index: 9999;" data-panel="hz">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/18.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">杭州 谢玉勤</h3>
								<p id="map_txt_txt">这种模式挺好的，个人表示强烈的支持，建议可以再增加一些商品，提升竞争力！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 518px; right: 141px; left: 493px;z-index: 9999;" data-panel="cs">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/19.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">长沙 郑雲</h3>
								<p id="map_txt_txt">模式还算比较吸引人的，而且比较有趣味，我也玩过一段时间</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 577px; right: 141px; left: 610px;z-index: 9999;" data-panel="xm">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/20.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">厦门 魏然</h3>
								<p id="map_txt_txt">模式挺好的，让喜欢网购的人有了更多选择，但是很容易上瘾，还是理性点好</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 638px; right: 141px; left: 541px;z-index: 9999;" data-panel="sz">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/21.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">深圳 雷汇莎</h3>
								<p id="map_txt_txt">可能我运气比较好吧，第一次购买就中了</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 725px; right: 141px; left: 446px;z-index: 9999;" data-panel="hk">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/22.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">海口 赵阳</h3>
								<p id="map_txt_txt">看了很多评论最后选择了相信，因为这个模式真的很吸引人，希望<?php echo _cfg('web_name_two'); ?>给我带来好运~</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 322px; right: 141px; left: 571px;z-index: 9999;" data-panel="jn">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/23.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">济南 崔志梅</h3>
								<p id="map_txt_txt"><?php echo _cfg('web_name_two'); ?>一直惊喜不断，酸甜苦辣，从未间断过，好刺激呀！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 621px; right: 141px; left: 420px;z-index: 9999;" data-panel="nn">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/24.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">南宁 张海燕</h3>
								<p id="map_txt_txt">很有创意，让人欢喜让人忧，有明确的盈利空间，完全没有必要暗香操作</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 562px; right: 141px; left: 393px;z-index: 9999;" data-panel="gy">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/25.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">贵阳 万家丽</h3>
								<p id="map_txt_txt">每天上上<?php echo _cfg('web_name_two'); ?>，生活存份希望，我每天只投1元钱，O(∩_∩)O哈哈~</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 493px; right: 141px; left: 388px;z-index: 9999;" data-panel="cq">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/26.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">重庆 陈静莹</h3>
								<p id="map_txt_txt">中不中在于运气，抱着必中心态的人有必要要反省了，有人赢必有人输</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 480px; right: 141px; left: 295px;z-index: 9999;" data-panel="cd">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/27.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">成都 赵丽妃</h3>
								<p id="map_txt_txt">很有创意，很好玩，希望能多些这样的网站，网站有很大的利润空间</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 615px; right: 141px; left: 495px;z-index: 9999;" data-panel="gz">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/28.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">广州 江伊洋</h3>
								<p id="map_txt_txt">跟京东合作，发货速度非常的快，支持一个！</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 272px; right: 141px; left: 513px;z-index: 9999;" data-panel="bd">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/29.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">保定 黄捷</h3>
								<p id="map_txt_txt">有钱的无所谓，没钱的还是玩玩就好，这个东西会上瘾的</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
						<div class="map-pop hide" style="top: 398px; right: 141px; left: 640px;z-index: 9999;" data-panel="suzhou">
							<div class="map-pop-text">
								<img src="<?php echo G_WEB_PATH; ?>/face/30.jpg" width="64" height="64" alt="icon" title="用户头像" id="head_img">
								<h3 id="map_txt_title">苏州 刘易阳</h3>
								<p id="map_txt_txt">这才是一本万利，躺着挣钱，马云神马的都是浮云。</p>
							</div>
							<span class="map-pop-ico"></span>
                        </div>
					</div>
                    <div class="fn-text-center map-bottom">
                    正规来源保障 <strong class="c-red">100%</strong>正品 闪电发货 免费退换货 <a href="<?php echo WEB_PATH; ?>/go/index/intro" target="_blank">查看<?php echo _cfg('web_name_two'); ?>简介</a></div>
        </div>
	</section>
<script type="text/javascript">
$(document).ready(function(){

	var timer = {};

	$('#m_btn').delegate('li', 'mouseenter', function(){
		var self = $(this);
		var tp = self.attr('data-type');
		clearTimeout(timer[tp]);
		timer[tp] = setTimeout(function(){
			self.addClass('text-d-on');
			$('div[data-panel=' + tp + ']').removeClass('hide');
		},100);
	}).delegate('li', 'mouseleave', function(){
		var self = $(this);
		var tp = self.attr('data-type');
		clearTimeout(timer[tp])
		timer[tp] = setTimeout(function(){
			self.removeClass('text-d-on');
			$('div[data-panel=' + tp + ']').addClass('hide');
		},100);
	});

	$(document.body).delegate('div.m_content', 'mouseenter', function(){
		clearTimeout(timer[$(this).attr('data-panel')]);
	}).delegate('div.m_content', 'mouseleave', function(){
		$(this).addClass('hide');
		$('span[data-type='+ $(this).attr('data-panel') +']').removeClass('text-d-on');
	});

});
</script>
<script type="text/javascript">
$(function(){
	$("#ulGoodsList a.u-cart").click(function(){
		var sw = $("#ulGoodsList a.u-cart").index(this);
		var src = $("#ulGoodsList .g-soon-pic a img").eq(sw).attr('src');
		var $shadow = $('<img id="cart_dh" style="display:none; border:1px solid #aaa; z-index:99999;" width="200" height="200" src="'+src+'" />').prependTo("body");
		var $img = $("#ulGoodsList .g-soon-pic").eq(sw);
		$shadow.css({
			'width' : 200,
			'height': 200,
			'position' : 'absolute',
			"left":$img.offset().left+16,
			"top":$img.offset().top+9,
			'opacity' : 1
		}).show();
		var $cart = $("#btnMyCart");
		$shadow.animate({
			width: 1,
			height: 1,
			top: $cart.offset().top,
			left: $cart.offset().left,
			opacity: 0
		},500,function(){
			Cartcookie(sw,false);
		});

	});
	$("#ulGoodsList a.go_Shopping").click(function(){
		var sw = $("#ulGoodsList a.go_Shopping").index(this);

		Cartcookie(sw,true);
	});
});
//存到COOKIE
function Cartcookie(sw,cook){
	var shopid = $(".Curbor_id").eq(sw).text(),
		shenyu = $(".Curbor_yunjiage").eq(sw).text(),
		money = $(".Curbor_shenyu").eq(sw).text();
	var Cartlist = $.cookie('Cartlist');
	if(!Cartlist){
		var info = {};
	}else{
		var info = $.evalJSON(Cartlist);
	}
	if(!info[shopid]){
		var CartTotal=$("#sCartTotal").text();
			$("#sCartTotal").text(parseInt(CartTotal)+1);
			$("#btnMyCart em").text(parseInt(CartTotal)+1);
	}
	info[shopid]={};
	info[shopid]['num']=1;
	info[shopid]['shenyu']=shenyu;
	info[shopid]['money']=money;
	info['MoenyCount']='0.00';
	$.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
	if(cook){
		window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
	}
}
</script>
<?php include templates("index","foot");?>