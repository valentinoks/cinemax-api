<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['bioskop_id', 'title', 'director', 'dateRelease'];
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function bioskop(){
        return $this->belongsTo('App\Bioskop', 'bioskop_id');
    }
}
