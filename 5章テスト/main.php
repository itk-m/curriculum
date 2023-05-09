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
    <button onclick = "location.href = 'create_books.php' " style = "color:white;">新規登録</button>
    <button class = "log_col" onclick = "location.href = 'logout.php' " style = "color:white;" > ログアウト</button>

    <table>
  
    <tr class = "column_title">
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
            <td><button class ="dele_col dele_button" onclick = "location.href = 'delete_book.php?id=<?php echo $row['id']; ?>' " style = "color:white;">削除</button></td>

        </tr>
      <?php } ?>

    </table>
  </div>    


  
  
  