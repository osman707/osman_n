<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;
    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public $timestamps = false;
}
