<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //このグループ展作品に属する作品を取得
    public function work()
    {
        return $this->belongsTo('App\Work');
    }
}
