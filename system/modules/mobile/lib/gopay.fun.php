<?php

function gopay($member,$shopu,$shoprc,$shopid){
	if(!$shopu){
		_message("页面错误",WEB_PATH,3);
		exit;
	}
	$mysql_model=System::load_sys_class('model');
	$uid=$member['uid'];
	$username=$member['email'];
	if($member['username']==null){
		$username=$member['email'];
	}elseif($member['email']==null){
		$username=$member['mobile'];
	}else{
		$username=$member['username'];
	}
	$shoprc=explode(",",$shoprc);
	$shopid=explode(",",$shopid);
	$countid=count($shopid);
	if($member['money']>=$shopu){
		$money=$member['money']-$shopu;
		for($i=1;$i<$countid;$i++){
			$goucode="";
			$code="";
			$shoptitle=$mysql_model->GetOne("select * from `@#_shoplist` where `id`='".$shopid[$i]."'");
			$recordx=$mysql_model->GetList("select * from `@#_member_go_record` where `shopid`='".$shopid[$i]."' and `shopqishu`='".$shoptitle['qishu']."'");
			$recordxuid=$mysql_model->GetOne("select * from `@#_member_go_record` where `shopid`='".$shopid[$i]."' and `shopqishu`='".$shoptitle['qishu']."' and `uid`='".$uid."'");
			foreach($recordx as $recordx2){
				$code.=$recordx2['goucode'];
			}
			$shopname=$shoptitle['title'];
			$shopqishu=$shoptitle['qishu'];
			$time=microtime();
			$syurc=$shoptitle['zongrenshu'];
			if($recordx){
				$codes=explode(",",$code);
				$imp=implode(",",$codes).",";
				$arr=array();
				while(count($arr)<$shoprc[$i]){
					$rand=10000000+rand(1,$syurc);
					$str=strpos($imp,$rand);
					if($str<0 or $codes[0]!=$rand){
						if(!in_array($rand,$arr)){
							$arr[]=$rand;
						}
					}
				}
				for($n=0;$n<count($arr);$n++){
				  $goucode.=$arr[$n].",";
				}
				$tjia=$recordxuid['goucode'].$goucode;
				$mysql_model->Query("INSERT INTO `@#_member_go_record`(`uid`,`username`,`shopid`,`shopname`,`shopqishu`,`goucode`,`time`)VALUES('$uid','$username','$shopid[$i]','$shopname','$shopqishu','$goucode','$time')");
			}else{
				$ma=array();
				while(count($ma)<$shoprc[$i]){
					$su=rand(1,$syurc)-1;
					if(!in_array($su,$ma)){
						$ma[]=$su;
					}
				}
				for($c=0;$c<count($ma);$c++){
					$goucode.=10000000+$ma[$c].",";
				}
				$mysql_model->Query("INSERT INTO `@#_member_go_record`(`uid`,`username`,`shopid`,`shopname`,`shopqishu`,`goucode`,`time`)VALUES('$uid','$username','$shopid[$i]','$shopname','$shopqishu','$goucode','$time')");
			}
			$canyurenshu=$shoptitle['canyurenshu']+$shoprc[$i];
			$mysql_model->Query("UPDATE `@#_shoplist` SET canyurenshu='".$canyurenshu."' where id='".$shopid[$i]."'");
			if($shoptitle['zongrenshu']==$canyurenshu){
				$num=$shoptitle['zongrenshu'];
				if(isset($num)){

					tencord($time,$num,$shopid[$i],$shoptitle['qishu'],$shoptitle['title'],$shoptitle['money'],$shoptitle['yunjiage']);

				}

			}
		}
		$mysql_model->Query("UPDATE `@#_member` SET money='".$money."' where uid='".$member['uid']."'");
		_setcookie("CODE","",time()-3600);
		_setcookie("NUM","",time()-3600);

		echo _message("支付成功",WEB_PATH.'/yun/index/cartlist3',3);
	}else{
		echo _message("余额不足",WEB_PATH.'/member/home/userrecharge',3);
	}
}
/*
微信支付完成后的相关操作
目前只是对未付款前的钱数做记录
缺少接受微信支付后返回的信息
*/

function houpay($shopnum){
	// print_r('oooooookkk');die;
	$mysql_model=System::load_sys_class('model');
	$uid = _getcookie("uid");
	$shopid = _getcookie("shopid");

	  $user=$mysql_model->GetOne("select * from `@#_user` where `id`='".$uid."'");
		$username = $user['nickname'];
	  $shoptitle=$mysql_model->GetOne("select * from `@#_shoplist` where `id`='".$shopid."'");
	// for ($i=0; $i < $shopnum ; $i++) {
		$recordx=$mysql_model->GetList("select * from `@#_member_go_record` where `shopid`='".$shopid."' and `shopqishu`='".$shoptitle['qishu']."'");
		$recordxuid=$mysql_model->GetOne("select * from `@#_member_go_record` where `shopid`='".$shopid."' and `shopqishu`='".$shoptitle['qishu']."' and `uid`='".$uid."'");
		foreach($recordx as $recordx2){
			$code.=$recordx2['goucode'];//取出购买记录中所有云购码
		}
		$shopname=$shoptitle['title'];
		$shopqishu=$shoptitle['qishu'];
		$time=microtime();
		$syurc=$shoptitle['zongrenshu'];
		$img = $shoptitle['thumb'];
		if($recordx){
			$codes=explode(",",$code);//将所有云购码装入数组
			$imp=implode(",",$codes).",";//将云购码数组变成字符串
			$arr=array();
			while(count($arr)<$shopnum){//判断相应份数的云购码是否已经生成结束
				$rand=10000000+rand(1,$syurc);
				$str=strpos($imp,$rand); //检测新生成的云购码是否与原来有重复
				if($str<0 or $codes[0]!=$rand){ //很牛逼的一条语句：与之前云购码相比较$str<0,,后者判断是否与数据库中第一个云购码是否相同
					if(!in_array($rand,$arr)){//判断新生成的数组中是否有重复
						$arr[]=$rand;
					}
				}
			}
			for($n=0;$n<count($arr);$n++){
				$goucode.=$arr[$n].","; //数组变字符串
			}
			$tjia=$recordxuid['goucode'].$goucode;//个人goucode记录
  		$mysql_model->Query("INSERT INTO `@#_member_go_record`
			(`uid`,`username`,`uphoto`,`gonumber`,`moneycount`,`shopid`,`shopname`,`shopqishu`,`goucode`,`time`)
			 VALUES('$uid','$username','$img','$shopnum','$shopnum','$shopid','$shopname','$shopqishu','$goucode','$time')");
	} else {
			$ma=array();
			while(count($ma)<$shopnum){
				$su=rand(1,$syurc)-1;
				if(!in_array($su,$ma)){
					$ma[]=$su;
				}
			}
			for($c=0;$c<count($ma);$c++){
				$goucode.=10000000+$ma[$c].",";
			}
			$mysql_model->Query("INSERT INTO `@#_member_go_record`
			 (`uid`,`username`,`uphoto`,`gonumber`,`moneycount`,`shopid`,`shopname`,`shopqishu`,`goucode`,`time`)
			VALUES('$uid','$username','$img','$shopnum','$shopnum','$shopid','$shopname','$shopqishu','$goucode','$time')");
	}
	$canyurenshu=$shoptitle['canyurenshu']+$shopnum;
	$shenyurenshu =$shoptitle['zongrenshu']-$canyurenshu;
	$mysql_model->Query("UPDATE `@#_shoplist` SET canyurenshu='$canyurenshu',shenyurenshu='$shenyurenshu' where id='$shopid'");
	if($shoptitle['zongrenshu']==$canyurenshu){
		$num=$shoptitle['zongrenshu'];
		if(isset($num)){
			tencord($time,$num,$shopid,$shoptitle['qishu'],$shoptitle['title'],$shoptitle['money'],$shoptitle['yunjiage']);
		}
	}
	header("location:".WEB_PATH."/mobile/mobile/glist");
	exit;
		// 	echo _message("支付成功",WEB_PATH.'/mobile/mobile/glist',3);

	// }
}



function tencord($time,$num,$shopid,$qishu,$shoptitle,$shopmoney,$shopjiage){
	$mysql_model=System::load_sys_class('model');
	$record=$mysql_model->GetOne("select * from `@#_member_go_record` where `time`='".$time."'");
	$recordm=$mysql_model->GetList("select * from `@#_member_go_record` where `id`<='".$record['id']."' limit 100");
	$shoplist=$mysql_model->GetOne("select * from `@#_shoplist` where `id`='".$shopid."'");
  $shopthumb = $shoplist['thumb'];
	$s=0;
	foreach($recordm as $record){
		$list=explode(" ",$record['time']);
		$dat=date("His",$list[1]).substr($list[0],2,2);

		$s=$s+$dat;
	}
	$huode=10000000+$s%$num;
	$shopqishu=$mysql_model->GetList("select * from `@#_member_go_record` where `shopid`='$shopid' and `shopqishu`='$qishu'");
	$time=time();
	foreach($shopqishu as $shopqi){
		$goucodex=strpos($shopqi['goucode'],"$huode");
		$nickname = $shopqi['username'];
		if(!is_bool($goucodex)){
			$mysql_model->Query("UPDATE `@#_member_go_record` SET huode='$huode' where shopid='$shopid' and shopqishu='$qishu' and uid='$shopqi[uid]'");
			$mysql_model->Query("INSERT INTO `@#_shopqishu`(`shopid`,`shopqishu`,`shoptitle`,`shopmoney`,`shopjiage`,`shopuserid`,`nickname`,`shopcode`,`shopthumb`,`shopendtime`)
			VALUES('$shopid','$qishu','$shoptitle','$shopmoney','$shopjiage','$shopqi[uid]','$nickname','$huode','$shopthumb','$time')");
		}
	}
	$qishu=$qishu+1;
	$mysql_model->Query("UPDATE `@#_shoplist` SET qishu='$qishu',canyurenshu='0',shenyurenshu='0',q_uid='null' where id='$shopid'");

}
?>
