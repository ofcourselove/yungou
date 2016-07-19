<?php

class chinabank
{
public $config;
public function config($config = null)
{
$this->config = $config;
}
public function send_pay()
{
$config = $this->config;
$v_mid = $config['id'];
$v_url = "http://".$_SERVER['HTTP_HOST']."/?/pay/chinabank_url/qiantai/";
$key   = $config['key'];
$remark2 = '[url:=http://'.$_SERVER['HTTP_HOST'].'/?/pay/chinabank_url/houtai/]';
$v_oid = $config['code'];
$v_amount = $config['money'];
$v_moneytype = "CNY";
$text = $v_amount.$v_moneytype.$v_oid.$v_mid.$v_url.$key;
$v_md5info = strtoupper(md5($text));
$remark1 = "";
$v_rcvname   = "";
$v_rcvaddr   = "";
$v_rcvtel    = "";
$v_rcvpost   = "";
$v_rcvemail  = "";
$v_rcvmobile = "";
$v_ordername   = "";
$v_orderaddr   = "";
$v_ordertel    = "";
$v_orderpost   = "";
$v_orderemail  = "";
$v_ordermobile = "";
$form .= "<form method=\"post\" name=\"E_FORM\" action=\"https://Pay3.chinabank.com.cn/PayGate\">
		<input type=\"hidden\" name=\"v_mid\"         value=\"{$v_mid}\">
		<input type=\"hidden\" name=\"v_oid\"         value=\"{$v_oid}\">
		<input type=\"hidden\" name=\"v_amount\"      value=\"{$v_amount}\">
		<input type=\"hidden\" name=\"v_moneytype\"   value=\"{$v_moneytype}\">
		<input type=\"hidden\" name=\"v_url\"         value=\"{$v_url}\">
		<input type=\"hidden\" name=\"v_md5info\"     value=\"{$v_md5info}\">
		<input type=\"hidden\" name=\"remark1\"       value=\"{$remark1}\">
		<input type=\"hidden\" name=\"remark2\"       value=\"{$remark2}\"><script>document.E_FORM.submit();</script></form>";
echo $form;exit;
}
}
?>