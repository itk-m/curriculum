<!-------------------------------
    本の新規登録
------------------------------------>

<?php
  require_once('db_connect.php');
  require_once('function.php');

  //ログインしていなかったら、login.phpにリダイレクト
  redirect_login();

  //送信されたら
  if(!empty($_POST)){
      if(empty($_POST['title'])){
          echo ' タイトルが未入力です '  ;
      }//if-title未
      if(empty($_POST['date'])){
          echo ' 発売日が未入力です '  ;
      }//if-date未
      if(empty($_POST['stock'])){
          echo ' 在庫数が未入力です '  ;
      }//if-title未
    }//if-送信がおされたら


      //3つとも入力された場合、
        if(!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])){
                 //タイトル名とコンテンツのエスケープ処理
            $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
            $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
            $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);

            //pdoインスタンスを取得
            $pdo = db_connect();
            
            try{ 
              $sql_book = "INSERT INTO books ( title , date , stock ) VALUES ( :title , :date , :stock )";
              $stmt_book = $pdo->prepare($sql_book);
              $stmt_book->bindParam(':title' , $title);
              $stmt_book->bindParam(':date' , $date);
              $stmt_book->bindParam(':stock' , $stock);
              $stmt_book->execute();
              //入力されたらmain.phpにリダイレクトする
              header("Location: main.php ");
            }catch(PDOException $e){
              echo 'Error: ' . $e->getMessage();
              die();
            }//catch

        }//3つ入力された場合
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./css/log_p.css">
        <link rel="stylesheet" href="./css/button.css">
</head>
<body>
<div class = "main_div" >
    <h2>本 新規登録画面</h2>
    <form method="POST" action="">
        <input type="text" name="title" id="title"  placeholder=" タイトル">
        <input type="text" name="date" id="date" placeholder="発売日">

          <h3>在庫数</h3>
          <select  name="stock" id="select" >
          <option>選択してください</option> 
            <?php for($i=0; $i <= 100 ; $i++){?>
            <option><?php echo $i ; ?></option>
            <?php } ?>
          </select>    
        
        <input class="submit_button" type="submit" value="登録" id="post" name="post">
    </form>
</div>
</body>
</html>