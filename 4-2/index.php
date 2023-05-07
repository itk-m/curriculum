<?php
  require_once('getData.php');

  //クラスのインスタンス化
    $get = new getData();
    $users = $get->getUserData();
    $posts = $get->getPostData();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./reset.css">
  
</head>
<body>

<div  id = "main_base" >
  <header>
  <div class ="left-box">
    <img src="./画像/yg_logo.png" alt="" width ="200px" height = "120px" >
  </div>
  <div class ="right-box">
    <div class = "box_top">
      <div class = "name">
         <?php echo "ようこそ" .$users['last_name'] , $users['first_name']. "さん" ; ?>

      </div>
    </div><!--top--->
    <div class = "box_under">
      <div class="login_day">
        <?php echo "最終ログイン日:" .$users['last_login'] ;?>
      </div>
    </div><!--under--->

  </div><!---right-box--->
  </header>

  <div class= "main" >
    <table>
      <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
      </tr>

      <?php  foreach($posts as $key => $val){ ?>
        <tr>
          <td><?php echo $val['id'] ?></td>
          <td><?php echo $val['title'] ?></td>
          <td><?php if($val['category_no'] == 1){
              echo '食事';
          }elseif($val['category_no'] == 2){
            echo '旅行';
          }else{
            echo 'その他';
          }
           ?>   
          </td>
          <td><?php echo $val['comment'] ?></td>
          <td><?php echo $val['created'] ?></td>
          </tr>
        <?php } ?>        
    </table>
  </div>

  <footer>
    <div class="footer_title">
      Y&I group.inc
    </div>
  </footer>

  </div><!--main_base---> 
</body>
</html>


