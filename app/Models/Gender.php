<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public $table = 'gender';

    protected $fillable = [
        'id_gender',
        'gender',
    ];

}
