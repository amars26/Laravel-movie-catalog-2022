<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'lastname',
        'idcountry',
        'idpicture',
        'birthdate',
    ];
}
