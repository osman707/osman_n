<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;

    public $timestamps = false;

}
