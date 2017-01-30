<?php
session_start();
require_once('./common.php');

if(isset($_SESSION['access_token']) && $_SESSION['access_token'] != ""){
$access_token = $_SESSION['access_token'];
$meurl = 'https://www.googleapis.com/plus/v1/people/me?';
$data = array(
 'access_token' => $access_token,
 'key' => CLIENT_SECRET,
);
$url = $meurl.http_build_query($data, '', '&');
$res = json_decode(file_get_contents($url));
print('ログインしています。'.$res->displayName.'さんこんにちは。<p><a href="logout.php">ログアウト</a></p>');
}else{
print('ログインしていません。<a href="./login.php">ログインする</a>');
}
?>
