<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['name','email','comment'];
//    Make a hasmany function
    public function blog()
    {
        return $this->belongsTo('App\Blogs');
    }
}
