<!---------------------
  ユーザー登録画面-実行完了
----------------------->

<?php
require_once('db_connect.php');

// POSTで送られていれば処理実行
if(isset($_POST['signUp'])){
  $name = $_POST["name"];
  $password = $_POST["password"];

  if($_POST["name"] && $_POST["password"]){
    //データベース接続
    $pdo = db_connect();//インスタンスの取得
    try{
        //name,passインサート
     $sql =  " INSERT INTO users (name , password) VALUES (:name , :password) ";
     // パスワードをハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
     $stmt = $pdo->prepare($sql);
     $stmt->bindParam(':name', $name);//$nameはPOST送信された値
     $stmt->bindParam(':password', $password_hash);//$passwordはPOST送信された値
     $stmt->execute();
     echo '登録完了致しました';

     header("Location: login.php ");
    }catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
    }//catch
  }//name,pass両方実行されたら
}//if-isset

?>


<!DOCTYPE html>
<html>
<head>
<title>新規ユーザー登録ページ</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="./css/log_p.css">
<link rel="stylesheet" href="./css/button.css">
</head>
<body>
<div class = "main_div" >
<h2>ユーザー登録画面</h2>
<form method="POST" action="signup.php">
<input type="text" name="name" id="name" placeholder="ユーザー名" >
<input type="password" name="password" id="password" placeholder="パスワード">
<input class = "submit_button" type="submit" value="新規登録" id="signUp" name="signUp">

</form>
</div>
</body>
</html>