<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cast extends Model
{
    protected $table='cast';
    protected $filllable = ['nama', 'umur', 'bio'];
}
