<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table='genre';
    protected $filllable = ['nama'];

    public function film(){
        return $this->hasMany('App\film','genre_id');
    }
}
