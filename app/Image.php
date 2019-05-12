<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['filename','name'];

    public function image()
    {
        return $this->belongsTo('App\Blogs');
    }
}
