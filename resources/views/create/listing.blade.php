{{--<form action="{{route('jobs.create')}}" method="">--}}
{{--    @csrf--}}
{{--    <label for="title">Başlık:</label>--}}
{{--    <input type="text" id="title" name="title" required>--}}

{{--    <label for="description">Açıklama:</label>--}}
{{--    <textarea id="description" name="description" required></textarea>--}}

{{--    <label for="company_id">Şirket ID:</label>--}}
{{--    <input type="number" id="company_id" name="company_id" required>--}}

{{--    <label for="location_id">Lokasyon ID:</label>--}}
{{--    <input type="number" id="location_id" name="location_id" required>--}}

{{--    <label for="occupation_id">Meslek ID:</label>--}}
{{--    <input type="number" id="occupation_id" name="occupation_id" required>--}}

{{--    <label for="time_id">Zaman ID:</label>--}}
{{--    <input type="number" id="time_id" name="time_id" required>--}}

{{--    <label for="salary">Maaş:</label>--}}
{{--    <input type="number" id="salary" name="salary" required>--}}

{{--    <button type="submit">İlan Ver</button>--}}
{{--</form>--}}
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>İş İlanı Ver</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jobs.store') }}" method="POST">
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
                                <label for="location" class="form-label fw-semibold text-primary">Location</label>
                                <select class="form-select border-primary" id="location" name="location">
                                    <option value>-</option>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">
                                            {{ $location->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label fw-semibold text-primary">Company</label>
                                <select class="form-select border-primary" id="company" name="company">
                                    <option value>-</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">
                                            {{ $company->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label fw-semibold text-primary">Time</label>
                                <select class="form-select border-primary" id="time" name="time">
                                    <option value>-</option>
                                    @foreach($times as $time)
                                        <option value="{{ $time->id }}">
                                            {{ $time->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div><div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" class="form-control" id="salary" name="salary" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">İlan Ver</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
