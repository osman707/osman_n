<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::withCount('listings')
        ->orderBy('name')
        ->get();

        return view('home.index')
            ->with([
                'locations' => $locations,
            ]);
    }
}
