<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [
        'id',
    ];

    public function location()
    {

        return $this->belongsTo(Location::class);
    }
    use HasFactory;


    public $timestamps = false;
}
