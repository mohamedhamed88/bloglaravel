<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id', 'Id');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
