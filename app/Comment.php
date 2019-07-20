<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'movie_id',
        'user', 
        'comment'
    ];

    public function movie(){
        return $this->belongsTo('App\Movie', 'movie_id');
    }
}
