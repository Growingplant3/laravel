<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //==========ここから追加==========
    protected $fillable = [
        'title',
        'body',
    ];
    //==========ここまで追加==========

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
