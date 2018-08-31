<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termapp extends Model
{
    //

    protected $fillable = [
        'id', 'marticNo', 'studentName', 'level'
    ];

    protected $primaryKey = 'matricNo';

}
