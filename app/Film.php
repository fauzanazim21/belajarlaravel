<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table='film';
    protected $filllable = ['judul','ringkasan','tahun','poster','genre_id'];

    // public function genre(){
    //     return $this->belongsTo('App\Genre','genre_id');
    // }

}
