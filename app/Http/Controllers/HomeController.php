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
                'locations' => $locations
            ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_id' => 'required|integer|exists:companies,id',
            'location_id' => 'required|integer|exists:locations,id',
            'occupation_id' => 'required|integer|exists:occupations,id',
            'time_id' => 'required|integer|exists:times,id',
            'salary' => 'required|numeric|min:0',
        ]);

        $listing = new Listing();
        $listing->title = $request->title;
        $listing->description = $request->description;
        $listing->company_id = $request->company_id;
        $listing->location_id = $request->location_id;
        $listing->occupation_id = $request->occupation_id;
        $listing->time_id = $request->time_id;
        $listing->salary = $request->salary;
        $listing->save();

        return response()->json(['message' => 'İş ilanı başarıyla oluşturuldu!', 'listing' => $listing], 201);
    }

}
