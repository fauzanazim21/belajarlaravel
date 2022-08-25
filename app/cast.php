<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table='cast';
    protected $filllable = ['nama', 'umur', 'bio'];
}
