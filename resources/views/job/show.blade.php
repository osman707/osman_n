@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white fw-bold fs-3">
                {{ $obj->title }}
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-4 text-truncate">
                        <span class="text-secondary">Company:</span>
                        <span class="fw-semibold">
                        {{ $obj->company->name }}
                    </span>
                    </div>
                    <div class="col-md-4 text-truncate">
                        <span class="text-secondary">Job:</span>
                        <span class="fw-semibold">
                        {{ $obj->occupation->name }}
                    </span>
                    </div>
                    <div class="col-md-4">
                        <span class="text-secondary">Region:</span>
                        <span class="text-success fw-semibold">
                        {{ $obj->region->name }}
                    </span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4 text-truncate">
                        <span class="text-secondary">Location:</span>
                        <span class="fw-semibold">
                        {{ $obj->location->name }}
                    </span>
                    </div>
                    <div class="col-md-4">
                        <span class="text-secondary">Time:</span>
                        <span class="fw-semibold">
                        {{ $obj->time->name }}
                    </span>
                    </div>
                    <div class="col-md-4">
                        <span class="text-secondary">Salary:</span>
                        <span class="fw-semibold text-primary">
                        {{ $obj->salary }} <small>TMT</small>
                    </span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <span class="text-secondary">Phone Number:</span>
                        <span class="fw-semibold">
                        {{ $obj->phone_number }}
                    </span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-secondary">Description:</span>
                    <p class="mt-2">{{ $obj->description }}</p>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-success">Call Now</a>
                    <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back to Listings</a>
                </div>
            </div>
        </div>
    </div>
@endsection
