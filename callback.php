<?php
session_start();
require_once('common.php');
//$_REQUESTはpost,getで受け取ったデータとcookieのデータを一緒くたにしたもの
if( !isset($_REQUEST['code']) || $_REQUEST['code']==='' )
{
 exit('KNYAN! ERROR OCCURED!');
}
$code = $_REQUEST['code'];

$url = 'https://accounts.google.com/o/oauth2/token';
$data = array(
 'code' =>$code,
 'client_id' =>CLIENT_ID,
 'client_secret' =>CLIENT_SECRET,
 'redirect_uri' =>CALLBACK,
 'grant_type' =>'authorization_code'
);
$header = array(
 'Content-type' => 'application/x-www-form-urlencoded'
);
$opt = array('http' => array(
 'method' => 'POST',
 'content' => http_build_query($data),
 'header' => implode("\r\n", $header)
));
//http_build_queryは辞書をクエリにしてくれる関数。

$res = json_decode(file_get_contents($url, false, stream_context_create($opt)));
if(isset($res->error)){
 exit($res->error);
}
//$_SESSIONはセッション変数。値の本体はサーバに置いておいて、"PHPSESSID"というcookieで一括して管理する。すごい。
$_SESSION['access_token'] = $res->access_token;
header('Location: ./index.php');
exit;
?>
