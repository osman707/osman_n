{{--<div>--}}
{{--    <form action="{{ url()->current() }}" method="get">--}}

{{--        <div class="mb-3">--}}
{{--            <label for="q" class="form-label fw-semibold">Search</label>--}}
{{--            <input type="search" class="form-control" id="q" name="q" placeholder="Job" value="{{ $f_q ?: '' }}" autofocus>--}}
{{--        </div>--}}

{{--        <div class="mb-3">--}}
{{--            <label for="location" class="form-label fw-semibold">Location</label>--}}
{{--            <select class="form-select" id="location" name="location">--}}
{{--                <option value>-</option>--}}
{{--                @foreach($locations as $location)--}}
{{--                    <option value="{{ $location->id }}" {{ $location->id == $f_location ? 'selected':'' }}>--}}
{{--                        {{ $location->name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="mb-3">--}}
{{--            <label for="occupation" class="form-label fw-semibold">Occupation</label>--}}
{{--            <select class="form-select" id="occupation" name="occupation">--}}
{{--                <option value>-</option>--}}
{{--                @foreach($jobs as $job)--}}
{{--                    <option value="{{ $job->id }}" {{ $job->id == $f_occupation ? 'selected':'' }}>--}}
{{--                        {{ $job->name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="mb-3">--}}
{{--            <label for="time" class="form-label fw-semibold">Time</label>--}}
{{--            <select class="form-select" id="time" name="time">--}}
{{--                <option value>-</option>--}}
{{--                @foreach($times as $time)--}}
{{--                    <option value="{{ $time->id }}" {{ $time->id == $f_time ? 'selected':'' }}>--}}
{{--                        {{ $time->name }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}


{{--        <div class="row g-2 mb-3">--}}
{{--            <div class="col">--}}
{{--                <label for="minSalary" class="form-label fw-semibold">Min Salary>--}}
{{--                <input type="number" class="form-control" id="minSalary" name="minSalary" value="{{ $f_minSalary ?: '' }}">--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <label for="maxSalary" class="form-label fw-semibold">Max Salary--}}
{{--                <input type="number" class="form-control" id="maxSalary" name="maxSalary" value="{{ $f_maxSalary ?: '' }}">--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="mb-3">--}}
{{--            <label for="sortBy" class="form-label fw-semibold">Sort By</label>--}}
{{--            <select class="form-select" id="sortBy" name="sortBy">--}}
{{--                <option value="lowToHigh" {{ 'lowToHigh' == $f_sortBy ? 'selected':'' }}>--}}
{{--                    Low To High--}}
{{--                </option>--}}
{{--                <option value="highToLow" {{ 'highToLow' == $f_sortBy ? 'selected':'' }}>--}}
{{--                    High To Low--}}
{{--                </option>--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="row g-2">--}}
{{--            <div class="col">--}}
{{--                <button type="submit" class="btn btn-primary w-100">Filter</button>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <a href="{{ url()->current() }}" class="btn btn-secondary w-100">Clear</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </form>--}}
{{--</div>--}}


<div class="container py-4">
    <form action="{{ url()->current() }}" method="get" class="p-4 border rounded shadow-sm bg-light">

        <div class="mb-4">
            <label for="q" class="form-label fw-semibold text-primary">Search</label>
            <input type="search" class="form-control border-primary" id="q" name="q" placeholder="Job" value="{{ $f_q ?: '' }}" autofocus>
        </div>

        <div class="mb-4">
            <label for="location" class="form-label fw-semibold text-primary">Location</label>
            <select class="form-select border-primary" id="location" name="location">
                <option value>-</option>
                @foreach($locations as $location)
                    <option value="{{ $location->id }}" {{ $location->id == $f_location ? 'selected':'' }}>
                        {{ $location->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="occupation" class="form-label fw-semibold text-primary">Job</label>
            <select class="form-select border-primary" id="occupation" name="occupation">
                <option value>-</option>
                @foreach($jobs as $job)
                    <option value="{{ $job->id }}" {{ $job->id == $f_occupation ? 'selected':'' }}>
                        {{ $job->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="time" class="form-label fw-semibold text-primary">Time</label>
            <select class="form-select border-primary" id="time" name="time">
                <option value>-</option>
                @foreach($times as $time)
                    <option value="{{ $time->id }}" {{ $time->id == $f_time ? 'selected':'' }}>
                        {{ $time->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="row g-3 mb-4">
            <div class="col">
                <label for="minSalary" class="form-label fw-semibold text-primary">Min Salary</label>
                <input type="number" class="form-control border-primary" id="minSalary" name="minSalary" value="{{ $f_minSalary ?: '' }}">
            </div>
            <div class="col">
                <label for="maxSalary" class="form-label fw-semibold text-primary">Max Salary</label>
                <input type="number" class="form-control border-primary" id="maxSalary" name="maxSalary" value="{{ $f_maxSalary ?: '' }}">
            </div>
        </div>

        <div class="mb-4">
            <label for="sortBy" class="form-label fw-semibold text-primary">Sort By</label>
            <select class="form-select border-primary" id="sortBy" name="sortBy">
                <option value>-</option>
                <option value="lowToHigh" {{ 'lowToHigh' == $f_sortBy ? 'selected':'' }}>
                    Low To High
                </option>
                <option value="highToLow" {{ 'highToLow' == $f_sortBy ? 'selected':'' }}>
                    High To Low
                </option>
            </select>
        </div>

        <div class="row g-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
            <div class="col">
                <a href="{{ url()->current() }}" class="btn btn-secondary w-100">Clear</a>
            </div>
        </div>

    </form>
</div>

