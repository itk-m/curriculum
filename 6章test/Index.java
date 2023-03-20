import java.util.Scanner;

public class Index{
  //定数(条件)
  private static final int CONST_EXCEPTION_TRIGER_NULL = 1;
  private static final int CONST_EXCEPTION_TRIGER_ARRAY_OUT_OF_BOUNDS = 2;
  private static final int CONST_EXCEPTION_TRIGER_CAST = 3;

  // 定数（クラスキャストの例外用）
  private static final Object CONST_OBJ_FOR_CLASS_CAST = 100;

  // 定数（メッセージ）
  private static final String CONST_COMMON_INIT_INFO = "\n■3-3-4:ExException 入力値「1: 続行」／「-1: 終了」";
  private static final String CONST_COMMON_TASK_INPUT_NAME = "以下の例外を発生させるためのパラメーター（1〜3）のいずれかを入力してください。\n・1: NullPointerException\n・2: ArrayIndexOutOfBoundsException\n・3: ClassCastException";
  private static final String CONST_COMMON_MSG_ERROR_EXCEPTION = "エラー: 入力値が不正です。";
  private static final String CONST_MSG_NOT_EXCEPTION_TRIGGER = "例外の発生しないパラメーターです。";
  private static final String CONST_MSG_NULLPO = "ヌルポです。";

  public static void main(String []args){
    // 変数定義
    int parameter;//int型の変数
    int retryCounter = 0;//int型の変数
    Scanner sc;//キーボードからの入力値を受け取る。

    //繰り返し実行したい処理 ;
    do{
      System.out.println(CONST_COMMON_INIT_INFO);//定数メッセージ

      //Scannerクラスのインスタンス化。キーボード入力が出来る。
      sc = new Scanner(System.in);//nextで指定されている所から文字等を受け取る。

    


    //通常処理
    try{
      final int execute = sc.nextInt();//executeに記入した数値によって出力結果が変動する。

      //-1と等しければ出力して、breakで強制的に終了させる。
      if (execute == -1) break;

      //AとBが等しくない時にtrueする
      if (execute != 1) {
        System.out.println(CONST_COMMON_MSG_ERROR_EXCEPTION);//エラー: 入力値が不正です。
        continue;
    }//if2    

    System.out.println(CONST_COMMON_TASK_INPUT_NAME);//以下の例外を発生させるためのパラメーター（1〜3）のいずれかを入力してください。
    parameter = sc.nextInt(CONST_EXCEPTION_TRIGER_NULL);//Scanner(System.in);に文字を渡す
            

      switch(parameter){

        /*------case1----- */
        case CONST_EXCEPTION_TRIGER_NULL :
        throw new NullPointerException();//e
        
        break;//処理が実行させてらswich{}から抜ける。

        /*------case2----- */
        case CONST_EXCEPTION_TRIGER_ARRAY_OUT_OF_BOUNDS :
        int [] arry  = {1 , 2 , 3};
        break;

        /*------case3----- */
        case CONST_EXCEPTION_TRIGER_CAST :
        String castedStrValue = (String) CONST_OBJ_FOR_CLASS_CAST;//例外定義用-100
        System.out.println(castedStrValue);
        break;

        /*=============default============== */
        default://その他
        System.out.println(CONST_MSG_NOT_EXCEPTION_TRIGGER);//例外の発生しないパラメーターです。
        break;

      }//switch       
    
    //サブクラス
    catch (NullPointerException e){
      
      System.out.println(CONST_MSG_NULLPO);//ヌルぽです。
      printException(e);
       
    }//catch1

    catch(ArrayIndexOutOfBoundsException e){
      printException(e);
      // 問③: クラスキャストの例外をキャッチしなさい。
      // ルール: 上述の他の例外同様引、数名は「e」で記述すること。
    }//catch2

    catch(Exception e){
      printException(e);
    }//スーパークラス-Exception

    finally{
      System.out.println("リトライ回数 = " + retryCounter++);
    }//finally



    }while (true);//do-繰り返し処理-一度のみ実行-while文から
    

    // 終了処理
    sc.close();
    System.out.println("お疲れ様でした！");
    
  }//try

  /**
     * 問①: 以下のルールに沿ってNullPointerExceptionを投げるメソッドを実装しなさい。
     * ルール1: private static void 任意のメソッド名 throws 上位へ投げるExceptionクラス名 { NullPointerExceptionを発生させる処理 }
     * ルール2: 例外発生時に設定するメッセージは、定義済みの定数から適当なものを指定してください。
     */
    // ここへ記述

    private static void NullPointer() throws NullPointerException{
      throw new NullPointerException();//例外処理文をNullPointerExceptionクラスで表す
    }



   


  }//mainメソッド


  private static void printException(final Exception e) {
    System.out.println(e);
}
}//Indexクラス



//int CONST_EXCEPTION_TRIGER_NULL = 1;
//int CONST_EXCEPTION_TRIGER_ARRAY_OUT_OF_BOUNDS = 2;
//int CONST_EXCEPTION_TRIGER_CAST = 3;

/*=========各メソッドの意味について=============== */
//NullPointerException-定義されていない値を参照しようとしたときに発生する。
//ArrayIndexOutOfBoundsException - 配列の要素数が足りない

/*========出力結果========== */
//\n■3-3-4:ExException 入力値「1: 続行」／「-1: 終了」
//キーボード出力によって変動する。
//リトライ回数 = " + retryCounter++  →  finallyで出力される
