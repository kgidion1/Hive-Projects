<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $table = 'churches';

    protected $fillable = [
        'name','parishID',
    ];
}
