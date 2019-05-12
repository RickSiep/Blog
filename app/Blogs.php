<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{

    protected $table = 'blog';

    protected $fillable = ['title', 'blog'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }
}
