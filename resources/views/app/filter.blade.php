<div class="container py-4">
    <form action="{{ url()->current() }}" method="get" class="p-4 border rounded shadow-lg bg-light">

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
            <label for="company" class="form-label fw-semibold text-primary">Company</label>
            <select class="form-select border-primary" id="company" name="company">
                <option value>-</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $company->id == $f_company ? 'selected':'' }}>
                        {{ $company->name }}
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

