<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    protected $table='kritik';
    protected $fillable = ['user_id','film_id','content','point'];
}
