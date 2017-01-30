PHP LOGIN OAUTH
====

Overview

## Description

PHPでoAUTH認証を実装したログイン/ログアウトのサンプル

## Requirement

GoogleAppsEngineのウェブアプリケーション認証を利用。
oAUTHの他にGoogle+ APIとContact APIを有効にする必要あり。

## Usage

git clone後、common.phpを作成し、中にClient ID、Client Secret、Callback ULRを記入する。

## Install

1. git clone
`$ git clone https://github.com/fk2000/php_login_oauth.git`

2.create common.php
`$ vi common.php`

```
<?php
define('CLIENT_ID', 'xxxxxxxxxx.apps.googleusercontent.com');
define('CLIENT_SECRET', 'xxxxxxxxxx');
define('CALLBACK', 'http://xxxxxx/callback.php');
?>
```

3.GoogleAppsEngine create application.

## License
MIT

