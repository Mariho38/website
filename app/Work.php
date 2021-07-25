<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //この作品を所有するカテゴリーを取得
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    //作品に関連する個展作品の詳細を取得
    public function solo(){
        return $this->hasOne('App\Solo');
    }
    
    //作品に関連するグループ展作品の詳細を取得
    public function group(){
        return $this->hasOne('App\Group');
    }
    
    //作品に関連する仕事依頼作品の詳細を取得
    public function request(){
        return $this->hasOne('App\Request');
    }
}
