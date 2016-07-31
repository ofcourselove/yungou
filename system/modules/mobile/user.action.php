<?php

defined('G_IN_SYSTEM')or exit('No permission resources.');
System::load_app_class('memberbase',null,'no');
System::load_app_fun('user','go');
System::load_app_fun('my','go');
System::load_sys_fun('send');
class user extends memberbase {
	public function __construct(){
		parent::__construct();
		$this->db = System::load_sys_class("model");
	}


	public function cook_end(){
		_setcookie("uid","",time()-3600);
		_setcookie("ushell","",time()-3600);
		//_message("退出成功",WEB_PATH."/mobile/mobile/");
		header("location: ".WEB_PATH."/mobile/mobile/");
	}
	//返回登录页面

	public function login(){
		//  $webname=$this->_cfg['web_name'];
		// $user = $this->userinfo;
		// if($user){
		// 	header("Location:".WEB_PATH."/mobile/home/");exit;
		// }
		$appid ="wx9d66a72ff8e7559a";
		$redirect_uri = urlencode(WEB_PATH."/mobile/user/wechat/");
		// var_dump($redirect_uri);die;
		$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";
		header("Location:".$url);


	}

	public function wechat(){
		 $appid = "wx9d66a72ff8e7559a";
		 $secret = "51c046f5c526d9c4009c897a11b3a2e1";
		 $code = $this->code(4);
		 if (isset($_COOKIE['uid'])) {
		 	  $userid =_getcookie("uid");

				// print_r($userid);die;
				$userinfo = $this->db->GetOne("select * from `@#_user` where `id` = '$userid'");
		} else {
      // var_dump($_COOKIE['uid']);die;
			//  $code = $this->segment(4);
			//  echo "$code";die;
			//第一步:取得openid
			$oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
			// print_r($oauth2);die;
			$oauth2 = $this->getJson($oauth2Url);
			// $file = './oauth2';
			// file_put_contents($file, $oauth2); //保存到指定文件
			//第二步:根据全局access_token和openid查询用户信息
			$access_token = $oauth2['access_token'];
			$openid = $oauth2['openid'];
			// $refresh_token = $oauth2['refresh_token'];
			// $refresh = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=$appid&grant_type=refresh_token&refresh_token=$refresh_token";
      // $data = $this->getJson($refresh);
      // $access_token = $data['access_token'];
			// print_r($access_token);die;
			//  https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN
			$get_user_info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
			$userinfo =$this->getJson($get_user_info_url);
			// print_r($userinfo);die;
			$time = time();
			$nickname = $userinfo['nickname'];
			$userid = $this->db->GetOne("select id from `@#_user` where `open_id` = '$openid'");
       if (!$userid) {
				$sql="INSERT INTO `@#_user`(nickname,open_id,login_time,city,province,headimgurl)VALUES('$nickname','$openid','$time','$userinfo[city]','$userinfo[province]','$userinfo[headimgurl]')";
				$user=$this->DB()->Query($sql);
				$userid = $this->db->GetOne("select id from `@#_user` where `open_id` = '$openid'");
       }
			//  print_r($userid);
			 _setcookie("uid","$userid[id]",60*60*24*1);
			 _setcookie("openid","$openid",60*60*24*1);
			// //打印用户信息
			// session_start();
			// $_SESSION['$open_id'] = $userinfo;
		}
      include templates("mobile/user","account");
	}
	function getJson($url){
		 $ch = curl_init();
		 curl_setopt($ch, CURLOPT_URL, $url);
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 $output = curl_exec($ch);
		 curl_close($ch);
		 return json_decode($output, true);
	}
  public function address(){
		$mysql_model=System::load_sys_class('model');
		$uid=_getcookie("uid");
		$dizhi=$mysql_model->Getone("select * from `@#_member_dizhi` where `uid`='$uid' ");
		// print_r($dizhi);die;
		include templates("mobile/user","address");
	}
	public function address_add(){

		include templates("mobile/user","address_add");
	}
	//返回注册页面
	public function register(){
	  $webname=$this->_cfg['web_name'];
		include templates("mobile/user","register");
	}

	//返回发送验证码页面
	public function mobilecode(){
	    $webname=$this->_cfg['web_name'];
	    $mobilename=$this->segment(4);

		include templates("mobile/user","mobilecheck");
	}

	public function mobilecheck(){
	    $webname=$this->_cfg['web_name'];
		$title="验证手机";
		$time=3000;
		$name=$this->segment(4);
		$member=$this->db->GetOne("SELECT * FROM `@#_member` WHERE `mobile` = '$name' LIMIT 1");
		 //var_dump($member);exit;
		if(!$member)_message("参数不正确!");
		if($member['mobilecode']==1){
			_message("该账号验证成功",WEB_PATH."/mobile/mobile");
		}
		if($member['mobilecode']==-1){
			$sendok = send_mobile_reg_code($name,$member['uid']);
			if($sendok[0]!=1){
					_message($sendok[1]);
			}
			header("location:".WEB_PATH."/mobile/user/mobilecheck/".$member['mobile']);
			exit;
		}


		$enname=substr($name,0,3).'****'.substr($name,7,10);
		$time=120;
		include templates("mobile/user","mobilecheck");
	}


	public function buyDetail(){
	 $webname=$this->_cfg['web_name'];
	 $member=$this->userinfo;
	 $itemid=intval($this->segment(4));

	 $itemlist=$this->db->GetList("select *,a.time as timego,sum(gonumber) as gonumber from `@#_member_go_record` a left join `@#_shoplist` b on a.shopid=b.id where a.uid='$member[uid]' and b.id='$itemid' group by a.id order by a.time" );

	 if(!empty($itemlist)){
		 if($itemlist[0]['q_end_time']!=''){
	   //商品已揭晓
			$itemlist[0]['codeState']='已揭晓...';
			$itemlist[0]['class']='z-ImgbgC02';
	    }elseif($itemlist[0]['shenyurenshu']==0){
		//商品购买次数已满
			$itemlist[0]['codeState']='已满员...';
			$itemlist[0]['class']='z-ImgbgC01';
		}else{
		//进行中
			$itemlist[0]['codeState']='进行中...';
			$itemlist[0]['class']='z-ImgbgC01';

		}
		$bl=($itemlist[0]['canyurenshu']/$itemlist[0]['zongrenshu'])*100;

		foreach ($itemlist as $k => $v) {
			$count += $v['gonumber'];
		}
	}
	$count = $count ? $count : 0;
     //echo "<pre>";
	 //print_r($itemlist);
	 include templates("mobile/user","userbuyDetail");
	}

}//

?>
