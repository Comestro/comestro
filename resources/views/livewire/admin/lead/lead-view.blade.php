<div class="content-page">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="fw-bold">Lead Details</h4>
                            <a href="" class="btn btn-secondary">Back</a>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>First Name:</strong> {{ $lead->first_name }}</p>
                                <p><strong>Last Name:</strong> {{ $lead->last_name }}</p>
                                <p><strong>Title:</strong> {{ $lead->title }}</p>
                                <p><strong>Email:</strong> {{ $lead->email }}</p>
                                <p><strong>Company:</strong> {{ $lead->company }}</p>
                            </div>

                            <div class="col-md-6">
                                <p><strong>Phone:</strong> {{ $lead->phone }}</p>
                                <p><strong>Lead Status:</strong>
                                    <span
                                        class="badge 
                            @if ($lead->lead_status == 'New') bg-primary 
                            @elseif($lead->lead_status == 'Contacted') bg-warning 
                            @elseif($lead->lead_status == 'Qualified') bg-success 
                            @else bg-danger @endif">
                                        {{ $lead->lead_status }}
                                    </span>
                                </p>
                                <p><strong>Lead Source:</strong>
                                    <span
                                        class="badge 
                            @if ($lead->lead_source == 'Website') bg-info 
                            @elseif($lead->lead_source == 'Referral') bg-success 
                            @elseif($lead->lead_source == 'Social Media') bg-primary 
                            @else bg-dark @endif">
                                        {{ $lead->lead_source }}
                                    </span>
                                </p>
                            </div>
                        </div>

                        <hr>
                        <h5 class="fw-bold">Address Information</h5>
                        <p><strong>Street:</strong> {{ $lead->street }}</p>
                        <p><strong>City:</strong> {{ $lead->city }}</p>
                        <p><strong>State:</strong> {{ $lead->state }}</p>
                        <p><strong>Zip Code:</strong> {{ $lead->zip_code }}</p>
                        <p><strong>Country:</strong> {{ $lead->country }}</p>

                        <hr>
                        <h5 class="fw-bold">Description</h5>
                        <p>{{ $lead->description ?? 'No description available' }}</p>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-3">
                    <button class="btn btn-primary" type="submit">
                        <a href="{{ route('admin.convert.lead', $lead->id) }}" class="text-white">convert</a>
                        </button>
                    <button class="btn btn-primary" type="submit">edit</button>
                </div>
            </div>
            
        </div>
    </div>
</div>

</div>
