<?php
require_once('common.php');
$SITE_URL="index.php";
session_start();

$_SESSION = array();

if(isset($_COOKIE[session_name()])){
  setcookie(session_name(),'',time()-86400,'/php_login_oauth/'); 
}

session_destroy();

header('Location: '.$SITE_URL);
?>
