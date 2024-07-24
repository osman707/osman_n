<div class="fw-semibold bg-white border rounded p-3">
    <div class="row g-2">
        <div class="col-12 fs-4">
            {{ $obj->title }}
        </div>
        <div class="col-3 text-truncate">
            <span class="text-secondary">Company:</span>
            <span class="{{ isset($f_company) ? 'mark':'' }}">
                {{ $obj->company->name }}
            </span>
        </div>
        <div class="col-3 text-truncate">
            <span class="text-secondary">Job:</span>
            <span class="{{ isset($f_occupation) ? 'mark':'' }}">
                {{ $obj->occupation->name }}
            </span>
        </div>
        <div class="col-3">
            <span class="text-secondary">Region:</span>
            <span class="text-success">{{$obj->region->name}}</span>
        </div>
        <div class="col-3 text-truncate">
            <span class="text-secondary">Location:</span>
            <span class="{{ isset($f_location) ? 'mark':'' }}">
                {{ $obj->location->name }}
            </span>
        </div>
        <div class="col-3">
            <span class="text-secondary">Time:</span>
            <span class="{{ isset($f_time) ? 'mark':'' }}">
                {{ $obj->time->name }}
            </span>
        </div>
        <div class="col-9">
            <span class="text-secondary">Salary:</span>
            <span class="{{ (isset($f_minSalary) or isset($f_maxSalary)) ? 'mark':'' }}">{{$obj->salary}} <small>TMT</small></span>
        </div>
        <div class="col-12">
            <span class="text-secondary">Description:</span> {{ $obj->description }}
        </div>
    </div>
</div>
