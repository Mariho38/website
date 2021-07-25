<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //この質問に関連する答えを取得
    public function answer()
    {
        return $this->hasOne('App\Answer');
    }
}
