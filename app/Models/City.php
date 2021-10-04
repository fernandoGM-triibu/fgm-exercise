<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $table = 'citys';

    protected $fillable = [
        'id_city',
        'city_name',
    ];

}
