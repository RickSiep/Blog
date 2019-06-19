<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['filename','name'];

//    Belongs to blog
    public function image()
    {
        return $this->belongsTo('App\Blogs');
    }
}
