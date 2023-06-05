<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', function () {
    return view('login');
});

Auth::routes();

//http://XXXXXX.jp/admin/を生成し、http://XXXXXX.jp/admin/news/createにアクセスがきたら、[NewsController::class,'add'に渡す
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('news/create', [NewsController::class, 'add']);
    Route::post('news/create', [NewsController::class, 'create']);
    Route::get('news/index', [NewsController::class, 'show']);
    Route::get('news/delete', [NewsController::class, 'delete']);
});
