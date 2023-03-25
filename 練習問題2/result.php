
<?php

  //②フォームからのデータを受け取ります
  $my_name = $_POST['my_name'];
  $number = $_POST['number'];


  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $sum = mt_rand(1,6)*$number ;

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
      switch ($sum){

        //1~10以下
        case $sum >= 1 && $sum <= 10 :
        $arry = "凶"; 
        break;
        
        //11~15以下
        case $sum >= 11 && $sum <= 15 :
        $arry = "小吉";
        break;


        //16~20以下
        
        case $sum >= 16 && $sum <= 20 :
          $arry = "中吉"; 
          break;

        //21~25以下
        case $sum >= 21 && $sum <= 25 :
          $arry = "吉";  
          break;

          //26~36以下
          case $sum >= 26 && $sum <= 36 :
            $arry = "大吉";
          break;

          //37以上
          case $sum >= 37:
            $arry = "残念";  
          break;
      }

      ?>


<!--⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう----->
        <!---現在時刻の設定-->
        <?php date_default_timezone_set('Asia/Tokyo');
        print(date('Y年 m月 d日 G時 i分 s秒')); 
        ?>

        <p>お名前:<?php echo $my_name; ?></p>
        <p>番号は<?php echo $sum; ?>です。</p>
        <p>おみくじの結果は<?php echo $arry; ?>です。</p>   

