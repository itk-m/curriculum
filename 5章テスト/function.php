<?php

/*
========================================
  共通処理ページ
*/

//ログインしていなれば、login.phpに戻す
function redirect_login(){
  session_start();

  if(empty($_SESSION['user_name'])){
    header("Location:login.php");
    exit;//処理終了
  }
}

/**
 * 引数の値が空だった場合、main.phpにリダイレクトする
 * @param integer $param
 * @return void
 */
function redirect_main_unless_parameter($param){
  if(empty($param)){
    header("Location:main.php");
    exit;
  }
}



?>