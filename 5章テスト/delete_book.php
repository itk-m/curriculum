<!--------------------------------------
    削除画面
--------------------------------------->

<?php

require_once('db_connect.php');
require_once('function.php');

$id = $_GET['id'];

//idが空だったら、main.phpにリダイレクトする。
    redirect_main_unless_parameter($id);

    //pdoのインスタンスの取得
     $pdo = db_connect();

     try{
        $sql = "DELETE from books WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id' , $id );
        $stmt->execute();
     }catch (PDOException $e) {
        // エラーメッセージの出力
        echo 'Error: ' . $e->getMessage();
        // 終了
        die();
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>削除が完了しました。</h1>
  <a href="main.php">ホームへ戻る</a>
</body>
</html>
