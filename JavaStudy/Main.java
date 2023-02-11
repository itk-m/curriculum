
public class Main  {
  public static void main(String[] args){

    // ①int型の hogeInt という名前の変数を宣言し、値「50」で初期化
     int hogeInt = 50; 
     System.out.println(hogeInt);


     // ②Stringクラスの hogeString という名前の変数を宣言、値「テスト」で初期化
     String hogeString = "テスト";
     System.out.println(hogeString);

     // ③下記の処理について、何をしているのかコメントを記入してください
     //少数点を表示。Doubleはクラスメソッド0.2を表示 
     double hogeDouble = 0.2;

      // ④変数 hogeInt を値「100」で上書き
      hogeInt = 100;

     // ⑤変数 hogeString を値「合格」で上書き
     hogeString = "合格";

     // ⑥変数 hogeInt の値を表示
     System.out.println(hogeInt);

     // ⑦下記の処理について、何をしているのかコメントを記入してください
      //上書きした合格の値を出力
     System.out.println(hogeString);

     //⑧変数 hogeDoubleの値を表示
     System.out.println(hogeDouble);

     
  }
}
