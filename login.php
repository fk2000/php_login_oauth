<?php
require_once('./common.php');
$authurl = 'https://accounts.google.com/o/oauth2/auth?';
$scope = array('https://www.googleapis.com/auth/plus.me');
$redirect = $authurl.
 'scope='.urlencode(implode('',$scope)). //implode関数は配列を連結し文字列にするもの。第一引数を間に挟み連結する。
 '&redirect_uri='.urlencode(CALLBACK).
 '&response_type=code'.
 '&client_id='.CLIENT_ID;
header('Location: '.$redirect);
?>
