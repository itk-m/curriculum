
<link rel="stylesheet" href="./style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成$

//名前の変数
  $name = $_POST['my_name'];
//正解の変数  
  $num_aw = $_POST['num_answer'];//20
  $lang_aw = $_POST['lang_answer'];//html
  $SQL_aw = $_POST['SQ_answer'];//select
//選択された変数
  $num_radio = $_POST['num'];
  $lang_radio = $_POST['lang'];
  $SQL_radio = $_POST['SQL'];


/*選択した回答と正解が一致していれば「正解！」、一致していなければ
「残念・・・」と出力される処理を組んだ関数を作成する*/


//ポート番号の関数
  function NumMethod (){

    global $num_radio, $num_aw;

    if($num_radio ===  $num_aw ){
      echo "正解";
    }else{
      echo "残念";
    }
  }

//webページ言語
function LangMethod (){
  global $lang_aw , $lang_radio ;
  if($lang_aw ===  $lang_radio ){
    echo "正解";
  }else{
    echo "残念";
  }
}
  

//SQLコマンド
function SQLMethod (){
  global $SQL_aw , $SQL_radio ;
  if( $SQL_aw ===  $SQL_radio ){
    echo "正解";
  }else{
    echo "残念";
  }
} 

?>
<p><!--POST通信で送られてきた名前を表示--><?php echo ($name); ?>さんの結果は・・・？</p>
<p>①の答え</p>
<p><?php echo NumMethod(); ?></p>

<!--作成した関数を呼び出して結果を表示-->

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo LangMethod(); ?></p> 
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php echo SQLMethod(); ?></p>