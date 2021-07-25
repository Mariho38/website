<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //カテゴリーに関連する作品レコードを取得
    public function works(){
        return $this->hasMany('App\Work');
    }
}
