<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bioskop extends Model
{
    protected $fillable = [
        'name',
        'location'
    ];

    public function movies(){
        return $this->hasMany('App\Movie');
    }
}
 

