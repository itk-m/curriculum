public class Mainthree {
  public static void main(String[] args) {

    // ① 5 と 10 を加算した値を代入する、変数 plus を作成しなさい。
      int plus = (5 + 10);

    // ② 20 から 7 を減算した値を代入する、変数 minus を作成しなさい。
    int minus = (20 - 7);

    // ③下記の処理について、何をしているのかコメントを記入してください。
    // [ここへ記述]10と2を掛け算した値を代入する。
    int multiply = 10 * 2;

    // ④ 20 を 6 で割った余りを代入する、変数 remi を作成しなさい。
    int remi = 20 / 6;
    // ⑤下記の処理について、何をしているのかコメントを記入してください
    // [ここへ記述]townに有楽町を代入。lineに線を代入。
    String town = "有楽町";
    String line = "線";

    // ⑥ ⑤で作成した変数を連結させた値を代入する変数 train を作成しなさい。
    String train = (town + line);
    // ⑦ 変数plus, minus, multiply, remi, train をそれぞれ出力しなさい。
    System.out.println(plus);
    System.out.println(minus);
    System.out.println(multiply);
    System.out.println(remi);
    System.out.println(train);
}
}
