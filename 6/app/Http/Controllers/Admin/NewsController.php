<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Laravelの認証システムの機能
use Illuminate\Support\Facades\Auth;

use App\Models\Posts;
use App\Models\User;


class NewsController extends Controller
{
  //
  public function add()
  {
    return view('admin.news.create');
  }

  public function create(Request $request)
  {

    // Varidationを行う
    $this->validate($request, Posts::$rules);
    //App\Models\Postsクラスをインスタンス化
    $posts = new Posts;
    //formから送信された入力値を全て取得する
    $form = $request->all();

    if (Auth::check()) {
      $posts->user_id = Auth::id();
      // 現在ログインしているuser_idをデータベースに保存する処理
    }

    // データベースに保存する
    $posts->fill($form);
    $posts->save();
    // admin/news/createにリダイレクトする
    return redirect('admin/news/index');
  }

  //リダイレクト後の処理
  /**
   * Summary of show
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function show()
  {
    $posts = Posts::orderBy('created_at', 'desc')->get();

    return view('admin.news.index', ['posts' => $posts]);
  }


  public function delete(Request $request)
  {
    // 該当するPost Modelを取得
    $news = Posts::find($request->id);
    // 削除する
    $news->delete();
    return redirect('admin/news/index');
  }
}
