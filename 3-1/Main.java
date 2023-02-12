/**
 * バブルソート
 * チェックテスト-Java３章
 *
 */
public class Main{
    public static void main(String[] args){
        /*
        * 問1
        * int型の配列dataを作成し、値を3,1,2,7,5で初期化しなさい
        */
          int[] data = {3,1,2,7,5};
        /*
        * 問2
        * 以下のfor文を完成させなさい
        forはストップさせなかったらずっとループを繰り返す。
        */
        for(int i = 0; i < data.length; i++){
            System.out.print(data[i]);
        }
       
    }
}