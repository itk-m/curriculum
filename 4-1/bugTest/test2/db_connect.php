<?php
// セッション開始
session_start();

// DB名
define('DB_DATABASE', 'yigroupblog');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'itsuki');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

function db_connect(){
  
  try{
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo ;
  }catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

}
