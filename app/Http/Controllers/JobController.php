<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Listing;
use App\Models\Location;
use App\Models\Occupation;
use App\Models\Product;
use App\Models\Region;
use App\Models\Time;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'q' => 'nullable|string|max:30',
            'company' => 'nullable|integer|min:1',
            'location' => 'nullable|integer|min:1',
            'occupation' => 'nullable|integer|min:1',
            'time' => 'nullable|integer|min:0',
            'minSalary' => 'nullable|numeric|min:0',
            'maxSalary' => 'nullable|numeric|min:0',
            'sortBy' => 'nullable|in:lowToHigh,highToLow',
        ]);
        $f_q = $request->has('q') ? $request->q : null;
        $f_company = $request->has('company') ? $request->company : null;
        $f_location = $request->has('location') ? $request->location : null;
        $f_occupation = $request->has('occupation') ? $request->occupation : null;
        $f_time = $request->has('time') ? $request->time : null;
        $f_minSalary = $request->has('minSalary') ? $request->minSalary : null;
        $f_maxSalary = $request->has('maxSalary') ? $request->maxSalary : null;
        $f_sortBy = $request->has('sortBy') ? $request->sortBy : null;


        $objs = Listing::when(isset($f_q), function ($query) use ($f_q) {
            return $query->where(function ($query) use ($f_q) {
                $query->where('title', 'like', '%' . $f_q . '%')
                    ->orWhere('description', 'like', '%' . $f_q . '%');
            });
        })
            ->when(isset($f_company), function ($query) use ($f_company) {
                return $query->where('company_id', $f_company);
            })
            ->when(isset($f_location), function ($query) use ($f_location) {
                return $query->where('location_id', $f_location);
            })
            ->when(isset($f_occupation), function ($query) use ($f_occupation) {
                return $query->where('occupation_id', $f_occupation);
            })
            ->when(isset($f_time), function ($query) use ($f_time) {
                return $query->where('time_id', $f_time);
            })
            ->when(isset($f_minSalary), function ($query) use ($f_minSalary) {
                return $query->where('salary', '>=', $f_minSalary);
            })
            ->when(isset($f_maxSalary), function ($query) use ($f_maxSalary) {
                return $query->where('salary', '<=', $f_maxSalary);
            })
            ->with('location', 'occupation', 'region', 'company', 'time')
            ->when(isset($f_sortBy), function ($query) use ($f_sortBy) {
                if ($f_sortBy == 'lowToHigh') {
                    return $query->orderBy('salary');
                } elseif ($f_sortBy == 'highToLow') {
                    return $query->orderBy('salary', 'desc');
                } else {
                    return $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                return $query->orderBy('id', 'desc'); // desc => Z-A, asc => A-Z
            })
            ->paginate(15)
            ->withQueryString();

        $regions = Region::with('location')
            ->orderBy('id')
            ->get();

        $locations = Location::with('regions')->orderBy('name')->get();

        $times = Time::orderBy('id', 'asc')->get();

        $occupations = Occupation::orderBy('name', 'desc')->get();

        $companies = Company::orderBy('name')->get();

        return view('job.index')
            ->with([
                'objs' => $objs,
                'times' => $times,
                'locations' => $locations,
                'jobs' => $occupations,
                'companies' => $companies,
                'f_q' => $f_q,
                'f_company' => $f_company,
                'f_location' => $f_location,
                'f_occupation' => $f_occupation,
                'f_time' => $f_time,
                'f_minSalary' => $f_minSalary,
                'f_maxSalary' => $f_maxSalary,
                'f_sortBy' => $f_sortBy,
            ]);
    }

    public function show($id)
    {

        $listings = Listing::with('location', 'occupation', 'region', 'company', 'time')
            ->findOrFail($id);

        return view('job.show')
            ->with([
                'obj' => $listings,
            ]);

    }


}
