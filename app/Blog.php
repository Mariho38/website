<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //
    
    use SoftDeletes;
    
    
    protected $fillable = [
    'title',
    'body',
    ];
    
    public function getPaginate()
    {
        //update_atで降順に並べたあと、limitで件数制限をかける
        return $this->oderBy('update_at', 'DESC')->paginate();
    }
}
