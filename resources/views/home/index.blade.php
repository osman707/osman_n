{{--@extends('layouts.app')--}}
{{--@section('content')--}}
{{--        <div class="container py-4">--}}
{{--        <div class="mb-5">--}}
{{--            <div class="h4 text-primary mb-3">--}}
{{--                LOCATIONS--}}
{{--            </div>--}}
{{--            <div class="row g-3">--}}
{{--                @foreach($locations as $location)--}}
{{--                    <div class="col">--}}
{{--                        <div class="border rounded p-2">--}}
{{--                            <div class="h6 mb-0">--}}
{{--                                <a href=""--}}
{{--                                   class="link-dark text-decoration-none">--}}
{{--                                    {{ $location->name }}--}}
{{--                                </a>--}}
{{--                                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">--}}
{{--                                    {{ $location->listings_count }}--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--@endsection--}}


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container py-4">--}}
{{--        <div class="mb-5 text-center">--}}
{{--            <div class="h1 text-primary mb-3">--}}
{{--                WELCOME TO JOB FINDER--}}
{{--            </div>--}}
{{--            <p class="lead mb-4">Find your dream job or post your job listings here.</p>--}}
{{--            <img src="https://via.placeholder.com/400x200" class="img-fluid mb-4" alt="Job Finder">--}}
{{--            <div>--}}
{{--                <a href="#" class="btn btn-primary btn-lg me-2">Login</a>--}}
{{--                <a href="#" class="btn btn-secondary btn-lg">Register</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}



{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container py-4">--}}
{{--        <!-- Giriş Kısmı -->--}}
{{--        <div class="mb-5 text-center">--}}
{{--            <div class="h1 text-primary mb-3">--}}
{{--                WELCOME TO JOB FINDER--}}
{{--            </div>--}}
{{--            <p class="lead mb-4">Find your dream job or post your job listings here.</p>--}}
{{--            <img src="https://via.placeholder.com/400x200" class="img-fluid mb-4" alt="Job Finder">--}}
{{--            <div>--}}
{{--                <a href="#" class="btn btn-primary btn-lg me-2">Login</a>--}}
{{--                <a href="#" class="btn btn-secondary btn-lg">Register</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- Lokasyon Kartları -->--}}
{{--        <div class="h4 text-primary mb-3">--}}
{{--            LOCATIONS--}}
{{--        </div>--}}
{{--        <div class="row g-3">--}}
{{--            @foreach($locations as $location)--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="card h-100">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">--}}
{{--                                <a href="{{ route('jobs.index', ['location' => $location->id]) }}"--}}
{{--                                   class="link-dark text-decoration-none">--}}
{{--                                    {{ $location->name }}--}}
{{--                                </a>--}}
{{--                            </h5>--}}
{{--                            <p class="card-text">--}}
{{--                                Listings: <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">--}}
{{--                                {{ $location->listings_count }}--}}
{{--                            </span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <!-- Giriş Kısmı -->
        <div class="mb-5 text-center">
            <div class="h1 text-primary mb-3">
                WELCOME TO JOB FINDER
            </div>
            <p class="lead mb-4">Find your dream job or post your job listings here.</p>
            <img src="https://via.placeholder.com/400x200" class="img-fluid mb-4" alt="Job Finder">
            <div>
                <a href="#" class="btn btn-primary btn-lg me-2">Login</a>
                <a href="#" class="btn btn-secondary btn-lg">Register</a>
            </div>
        </div>
        <div>
            <p class="card-text h4 mb-5 text-center">
                "Your dream job is just a click away. Explore new opportunities and build a successful career with us!"
            </p>
        </div>
        <!-- Lokasyon Kartları -->
        <div class="h4 text-primary mb-4">
            LOCATIONS
        </div>
        <div class="row g-3">
            @foreach($locations as $location)
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="{{ $location->name }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('jobs.index', ['location' => $location->id]) }}"
                                   class="link-dark text-decoration-none">
                                    {{ $location->name }}
                                </a>
                            </h5>
                            <p class="card-text">
                                Listings: <span class="badge bg-danger-subtle text-danger rounded-pill">
                                {{ $location->listings_count }}
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


