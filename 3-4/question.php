

<link rel="stylesheet" href="./style.css">
<?php
    //POST送信で送られてきた名前を受け取って変数を作成
        $name = $_POST['my_name'];//POST通信するとデータが消えてしまう
    
    //①画像を参考に問題文の選択肢の配列を作成してください。
        $port_number = [80 , 22 , 20 , 21];
        $language = ["PHP" , "Python" , "JAVA" ,"HTML"];
        $SQL_language = ["join" , "select" , "insert" , "update"];
    
    
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
        $number_answer = $port_number[2];//20
        $language_answer = $language[3];//html
        $SQL_answer = $SQL_language[1];//select        
?><!----php----->



<!---------------------------------
      html構文
------------------------------------>

<div class="question_base">
      <p>お疲れ様です<!--POST通信で送られてきた名前を出力-->
      <?php echo $name; ?>さん</p>
      
      
  <form action="./answer.php" method="post">


        <!------------------------------
                  ポート番号
        --------------------------------->  
          <!--フォームの作成 通信はPOST通信で-->
              <h2>①ネットワークのポート番号は何番？</h2>
                    <!---③ 問題のradioボタンを「foreach」を使って作成する--->
                    <?php
                      foreach ($port_number as $num){ ?>
                        <input type="radio" name = "num" value ="<?php echo ($num); ?>" >
                        <?php
                        echo  $num;
                    }?>
              

            

        <!------------------------------
                  webpage-言語
        --------------------------------->
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->           
          <h2>②Webページを作成するための言語は？</h2>
          <?php
              foreach ($language as $lang){ ?>
                <input type="radio" name = "lang" value = "<?php echo ($lang); ?>" >
                <?php
                echo  $lang;
            }?>
            
          <!------------------------------
                  MaySQL-コマンド
        --------------------------------->  
          <!--③ 問題のradioボタンを「foreach」を使って作成する-->  
            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            
            <?php
                foreach ($SQL_language as $SQL_lg){ ?>
                  <input type="radio" name = "SQL" value = "<?php echo ($SQL_lg); ?>" ><?php
                  echo  $SQL_lg;
              }?>
          



          <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
                  
              <input type="hidden" name = "my_name" value = "<?php echo $_POST['my_name']; ?>" >
              <input type="hidden" name = "num_answer" value = "<?php echo ($number_answer); ?>" >
              <input type="hidden" name = "lang_answer" value = "<?php echo ($language_answer); ?>" >
              <input type="hidden" name = "SQ_answer" value = "<?php echo ($SQL_answer); ?>" >
              <br>        
              <input type="submit" value="回答" />
  </form>
</div>
      
    

    