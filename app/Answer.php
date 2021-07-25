<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //この答えを所有する質問を取得
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
