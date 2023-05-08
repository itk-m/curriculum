
<?php
    require_once('db_connect.php');
    

// エラーメッセージ、登録完了メッセージの初期化
    $errorMessage ;
    $signUpMessage ;
    
    // ログインボタンが押された場合
if (isset($_POST["signUp"])) {
  // 1. ユーザIDの入力チェック
  if (empty($_POST['username'])) {  // 値が空のとき
       echo 'ユーザーIDが未入力です。';
      
  } else if (empty($_POST["password"])) {
       echo 'パスワードが未入力です。';
  } else if (empty($_POST["password2"])) {
      echo 'パスワードが未入力です。';
  }//elseif

  if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["password2"])
     &&  !empty($_POST["password2"]) && $_POST["password"] === $_POST["password2"] ){
          // 入力したユーザIDとパスワードを格納
        $username = $_POST["username"];
        $password = $_POST["password"];

        // 2. ユーザIDとパスワードが入力されていたら認証する
        
         $pdo = db_connect();
        //3.エラー処理
            try{
                
                $sql = "INSERT INTO userData(name, password) VALUES (:username , :password)";
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare($sql);
                
                $stmt->bindParam(':username' , $username);
                $stmt->bindParam(':password' ,$password_hash);
                $stmt->execute();
                $userid = $pdo->lastinsertid();  // 登録した(DB側でauto_incrementした)IDを$useridに入れる
                 echo '登録が完了しました。あなたの登録IDは ' . $userid . ' です。パスワードは ' . $password . ' です。';
      
                  // ログイン時に使用するIDとパスワード
            }  catch (PDOException $e) {
                echo 'データベースエラー';
                // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
                // echo $e->getMessage();
            } 


  }//全て入力して、一致していたら
        else if ($_POST["password"] != $_POST["password2"]) {
             echo 'パスワードに誤りがあります。';
}
}//if-ボタンが押された時

//$stmt->bindParam(':name' , $username);
//$stmt->bindParam(':password' , $password);
?>








<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>新規登録</title>
    </head>
    <body>
        <h1>新規登録画面</h1>
        <form id="loginForm" name="loginForm" action="" method="POST">
            <fieldset>
                <legend>新規登録フォーム</legend>
                
                <label for="username">ユーザー名</label><input type="text" id="username" name="username" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["username"])) {
    echo htmlspecialchars($_POST["username"], ENT_QUOTES);
} ?>">
                <br>
                <label for="password">パスワード</label><input type="password" id="password" name="password" value="" placeholder="パスワードを入力">
                <br>
                <label for="password2">パスワード(確認用)</label><input type="password" id="password2" name="password2" value="" placeholder="再度パスワードを入力">
                <br>
                <input type="submit" id="signUp" name="signUp" value="登録">
            </fieldset>
        </form>
    </body>
</html>
