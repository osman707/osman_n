<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Occupation;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'q' => 'nullable|string|max:30',
            'company' => 'nullable|integer|min:1',
            'location' => 'nullable|integer|min:1',
            'Occupation' => 'nullable|integer|min:1',
            'Time' => 'nullable|integer|min:1',
            'minSalary' => 'nullable|numeric|min:0',
            'maxSalary' => 'nullable|numeric|min:0',
            'sortBy' => 'nullable|in:lowToHigh,highToLow',
        ]);
        $f_q = $request->has('q') ? $request->q : null;
        $f_company = $request->has('company') ? $request->company : null;
        $f_location = $request->has('location') ? $request->location : null;
        $f_occupation = $request->has('occupation') ? $request->occupation : null;
        $f_time = $request->has('time') ? $request->time : null;
        $f_sortBy = $request->has('sortBy') ? $request->sortBy : null;
        $f_minSalary = $request->has('minSalary') ? $request->minSalary : null;
        $f_maxSalary = $request->has('maxSalary') ? $request->maxSalary : null;


        $objs = Listing::when(isset($f_q), function ($query) use ($f_q) {
            return $query->where(function ($query) use ($f_q) {
                $query->where('title', 'like', '%' . $f_q . '%')
                    ->orWhere('body', 'like', '%' . $f_q . '%');
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
            ->with('user', 'location', 'brand', 'brandModel', 'year', 'color')
            ->when(isset($f_sortBy), function ($query) use ($f_sortBy) {
                if ($f_sortBy == 'lowToHigh') {
                    return $query->orderBy('price');
                } elseif ($f_sortBy == 'highToLow') {
                    return $query->orderBy('price', 'desc');
                } else {
                    return $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                return $query->orderBy('id', 'desc'); // desc => Z-A, asc => A-Z
            });

    }
}
