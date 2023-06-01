<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//論理削除のファイル
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public static $rules = [

        'body' => 'required',
    ];


    //Userテーブルからレコードを取得
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
