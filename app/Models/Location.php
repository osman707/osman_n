<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public $timestamps = false;
}
