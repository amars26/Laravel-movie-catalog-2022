<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'idcountry',
        'idpicture',
        'releasedate',
        'iddirector',
        'idgenre',
    ];
}
