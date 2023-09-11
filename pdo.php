<?php
// セッション開始
session_start();
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "root";
// ユーザー名のパスワード
$db['pass'] = "root";
// データベース名
$db['dbname'] = "checktest4";

function connect(){
    $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8',"localhost", "checktest4");
    $pdo = new PDO($dsn, "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $pdo;
}

?>