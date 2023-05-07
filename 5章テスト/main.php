<!--------------------------------------
      在庫一覧ページ
---------------------------------------------->

<?php
  require_once('db_connect.php');
  require_once('function.php');
  
  
  
  //ログインしていなければ、login.phpにリダイレクト
  redirect_login();

//pdoインスタンスの取得
  $pdo = db_connect();
  
  try{
    $sql = "SELECT * from books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
    die();
  }//catch
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/button.css">

  
  <title>在庫一覧ページ</title>
</head>
<body>

<div class = "main_div">
    <h1>在庫一覧画面</h1>
    <button> <a href="create_books.php">新規登録</a> </button>
    <button class = "log_col" > <a href="logout.php">ログアウト</a> </button>

    <table>
  
    <tr class = "column_title"><!--テーブル横行-->
      <th>タイトル</th>
      <th>発売日</th>
      <th>在庫数</th>
      <th></th>
    </tr>
  

    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC) ) { ?>
        <tr>
            <td><?php echo $row['title'] ;  ?></td>
            <td><?php echo $row['date'] ;  ?></td>
            <td><?php echo $row['stock'] ;  ?></td>
            <td><button class ="dele_col dele_button"><a href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a></button></td>

        </tr>
      <?php } ?>

    </table>
  </div>    


  
  
  