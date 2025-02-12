<div class="container py-4">
    <a href="{{ route('jobs.show', $obj->id) }}" class="text-decoration-none text-dark">
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-primary-subtle text-primary-emphasis fw-semibold fs-4">
                {{ $obj->title }}
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-3 text-truncate">
                        <span class="text-secondary">Company:</span>
                        <span class="{{ isset($f_company) ? 'mark' : '' }}">
                            {{ $obj->company->name }}
                        </span>
                    </div>
                    <div class="col-3 text-truncate">
                        <span class="text-secondary">Job:</span>
                        <span class="{{ isset($f_occupation) ? 'mark' : '' }}">
                            {{ $obj->occupation->name }}
                        </span>
                    </div>
                    <div class="col-3">
                        <span class="text-secondary">Region:</span>
                        <span class="text-success">
                            {{ $obj->region->name }}
                        </span>
                    </div>
                    <div class="col-3 text-truncate">
                        <span class="text-secondary">Location:</span>
                        <span class="{{ isset($f_location) ? 'mark' : '' }}">
                            {{ $obj->location->name }}
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <span class="text-secondary">Time:</span>
                        <span class="{{ isset($f_time) ? 'mark' : '' }}">
                            {{ $obj->time->name }}
                        </span>
                    </div>
                    <div class="col-9">
                        <span class="text-secondary">Salary:</span>
                        <span class="{{ (isset($f_minSalary) or isset($f_maxSalary)) ? 'mark' : '' }}">
                            {{ $obj->salary }} <small>TMT</small>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <span class="text-secondary">Description:</span>
                        <p class="mt-2">{{ $obj->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
