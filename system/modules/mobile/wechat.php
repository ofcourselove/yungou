<?php
/**
 *暂时没有用到此文件
 */
class wechat
{
  public  $appid = "wx9df2725cc2dd130f";
  public  $secret = "351c264296853b8b1a23f92017e9af59";
  public  $code = $_GET["code"];
  public function init(){
    //第一步:取得openid
    $oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
    $oauth2 = getJson($oauth2Url);
    print_r($oauth2);
    //第二步:根据全局access_token和openid查询用户信息
    $access_token = $oauth2["access_token"];
    $openid = $oauth2['openid'];
    $get_user_info_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
    $userinfo = getJson($get_user_info_url);

    //打印用户信息
     print_r($userinfo);
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



  //
  //   /**
  //   *_request():发出请求
  //   *@curl:访问的URL
  //   *@https：安全访问协议
  //   *@method：请求的方式，默认为get
  //   *@data：post方式请求时上传的数据
  // **/
  // private function _request($curl, $https=true, $method='get', $data=null){
  //     $ch = curl_init();//初始化
  //     curl_setopt($ch, CURLOPT_URL, $curl);//设置访问的URL
  //     curl_setopt($ch, CURLOPT_HEADER, false);//设置不需要头信息
  //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//只获取页面内容，但不输出
  //     if($https){
  //       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//不做服务器认证
  //       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//不做客户端认证
  //     }
  //     if($method == 'post'){
  //       curl_setopt($ch, CURLOPT_POST, true);//设置请求是POST方式
  //       curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//设置POST请求的数据
  //     }
  //     $str = curl_exec($ch);//执行访问，返回结果
  //     curl_close($ch);//关闭curl，释放资源
  //     return $str;
  // }
  //
  // public function _openid(){
  //   if (isset($_GET['code'])){
  //   //  $file = './codeid';
  //      $content = $_GET['code'];
  // //  file_put_contents($file, $content); //保存json对象到指定文件
  // //  echo $content;
  //  } else {
  //      $content = $this->_request("https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect")
  //     //  echo "NO CODE";
  //  }
  //   // $file = './codeid'; //用于保存access token
  // 	// 	if(file_exists($file)){ //判断文件是否存在
  // 	// 		$content = file_get_contents($file); //获取文件内容
  //   //   }
  // 	// 		echo "$content";
  // 	// 	} else {
  // 	// 		echo 'no code';
  //   // $files = './someid';
  // 		$openid = $this->_request("https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->_appid."&secret=".$this->_appsecret."&code=".$content."&grant_type=authorization_code");
  // 		// https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx8888888888888888&secret=aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&code=00b788e3b42043c8459a57a8d8ab5d9f&grant_type=authorization_code
  // 		// file_put_contents($files, $openid); //保存json对象到指定文件
  // 		// $content = json_decode($content);//进行json解码
  // 		//  return $openid;//返回access token
  //
  // }
  //
}


















 ?>
