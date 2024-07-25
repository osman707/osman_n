@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Create Listing</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jobs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="company_id" class="form-label">Company</label>
                                <select class="form-select" id="company_id" name="company_id" required>
                                    <option value="">Select a company</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="location_id" class="form-label">Location</label>
                                <select class="form-select" id="location_id" name="location_id" required>
                                    <option value="">Select a location</option>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="region_id" class="form-label">Region</label>
                                <select class="form-select" id="region_id" name="region_id" required>
                                    <option value="">Select a region</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="occupation_id" class="form-label">Job</label>
                                <select class="form-select" id="occupation_id" name="occupation_id" required>
                                    <option value="">Select an occupation</option>
                                    @foreach($occupations as $occupation)
                                        <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="time_id" class="form-label">Time</label>
                                <select class="form-select" id="time_id" name="time_id" required>
                                    <option value="">Select a time</option>
                                    @foreach($times as $time)
                                        <option value="{{ $time->id }}">{{ $time->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phone_number" name="phone_number" required min="0">
                            </div>
                            <div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" class="form-control" id="salary" name="salary" required min="0">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create Listing</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
c
