@extends('layouts.app')
@section('content')
        <div class="container py-4">
        <div class="mb-5">
            <div class="h4 text-primary mb-3">
                LOCATIONS
            </div>
            <div class="row g-3">
                @foreach($locations as $location)
                    <div class="col">
                        <div class="border rounded p-2">
                            <div class="h6 mb-0">
                                <a href=""
                                   class="link-dark text-decoration-none">
                                    {{ $location->name }}
                                </a>
                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">
                                    {{ $location->listings_count }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection

