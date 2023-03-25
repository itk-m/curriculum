

<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
  <!-- ①フォームを作成しましょう -->
  <form action="result.php" method="post">
      好きな名前を記入してください<br> <input type="text" name = "my_name">
      <br>

      1~6の間で好きな数字をいれてください
      <br>
      <select name="number">
      <?php for ($i=1;$i<=6;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
    <br>
    <input type="submit" name= "btn" value="送信"/>
 
  </form>
</body>
</html>




