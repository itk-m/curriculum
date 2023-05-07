<!----------------------------------
  ログイン画面-POST送信
------------------------------------>

<?php

require_once('db_connect.php');

session_start();

//ログインボタンが押されたら処理開始
  if(!empty($_POST)){
      //ログイン名の判断
      if(empty($_POST['name'])){
        echo '名前が未入力です';
      }//if-name未入力の場合

      if(empty($_POST['password'])){
         $pass_error = 'パスワードが未入力です';
         echo $pass_error ;
      }//if-pass未入力の場合

   if(!empty($_POST['name']) && !empty($_POST['password'])){
       //ログイン名とパスワードのエスケープ処理
       $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
       $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
       
       //ログイン処理開始
        $pdo = db_connect();
        try{
          //ログイン名があるかの判定
          $sql = "SELECT * FROM users WHERE name = :name";//name名で判断して全件取得
          $stmt = $pdo->prepare($sql);//データベースに処理を実行する準備
          $stmt->bindParam(':name', $name);
          $stmt->execute();
        }catch(PDOException $e){
          echo 'Error: ' . $e->getMessage();
          die();
          //ログイン名が間違ってたらエラーキャッチ
        }//catch
        
        //結果が1行取得できたら
        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
          // 入力された値と引っ張ってきた値が同じか判定しています。
        if(password_verify($password , $row['password'])){
            //セッションに値を保存-現在の登録されている値
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['name'];
            
            // main.phpにリダイレクト
              header("Location: main.php");//main.phpに強制
              exit;
        } else{
          //パスワードが間違ってた時の処理
          echo "パスワードが間違っています" ; 
        }
      }//$row-結果の処理

      else{
        //ログイン名がなかった時の処理
        echo "ユーザー名かログイン名に誤りがあります。";
    }//下記の&&処理のelse


   } // 両方入力されていたら 

  }//if-logボタン押されたら



?>

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログインページ</title>
        <link rel="stylesheet" href="./css/log_p.css">
        <link rel="stylesheet" href="./css/button.css">
    </head>
    <body>
      <div class = "main_div" >
        <div class = "log_title">
          <h2>ログイン画面</h2>
          <button class = "users_button"><a href="./signup.php">新規ユーザー登録</a></button>
        </div><!--log_title--->
        <form method="post" action="">
            <input type="text" name="name" size="15" placeholder="ユーザー名" >
            <input type="text" name="password" size="15" placeholder="パスワード">
            <input class = "submit_button"  type="submit" value="ログイン">
        </form>
        
      </div>
    </body>
</html>