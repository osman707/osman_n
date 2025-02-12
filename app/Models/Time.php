<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public $timestamps = false;
}
