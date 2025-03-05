<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Breadcrumb & Back Button -->
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">Leads</a></li>
                                <li class="breadcrumb-item active">Add Leads</li>
                            </ol>
                        </nav>
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>
        
                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">New Lead</h4>
                </div>
        
                <!-- Lead Information Card -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Lead Information</h5>
        
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
        
                            <form wire:submit.prevent="saveLead" class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" wire:model="first_name">
                                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" wire:model="last_name">
                                    @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control @error('company') is-invalid @enderror" wire:model="company">
                                    @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Lead Status</label>
                                    <select class="form-select @error('lead_status') is-invalid @enderror" wire:model="lead_status">
                                        <option value="">Select Status</option>
                                        <option value="New">New</option>
                                        <option value="Contacted">Contacted</option>
                                        <option value="Qualified">Qualified</option>
                                        <option value="Lost">Lost</option>
                                    </select>
                                    @error('lead_status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-6">
                                    <label class="form-label">Lead Source</label>
                                    <select class="form-select @error('lead_source') is-invalid @enderror" wire:model="lead_source">
                                        <option value="">Select Source</option>
                                        <option value="Website">Website</option>
                                        <option value="Referral">Referral</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Advertisement">Advertisement</option>
                                    </select>
                                    @error('lead_source') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
        
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Create Lead</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
                <!-- Address Information -->
<div class="col-lg-12 mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Address Information</h5>
            <form wire:submit.prevent="saveAddress" class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Street</label>
                    <input type="text" class="form-control @error('street') is-invalid @enderror" wire:model="street">
                    @error('street') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" wire:model="city">
                    @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">State</label>
                    <input type="text" class="form-control @error('state') is-invalid @enderror" wire:model="state">
                    @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Zip Code</label>
                    <input type="text" class="form-control @error('zip_code') is-invalid @enderror" wire:model="zip_code">
                    @error('zip_code') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Country</label>
                    <select class="form-select @error('country') is-invalid @enderror" wire:model="country">
                        <option value="">Select Country</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="Canada">Canada</option>
                    </select>
                    @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-12 text-end mt-3">
                    <button class="btn btn-primary" type="submit">Save Address</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Description Information -->
<div class="col-lg-12 mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Description Information</h5>
            <form wire:submit.prevent="saveDescription" class="row g-3">
                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-md-12 text-end mt-3">
                    <button class="btn btn-primary" type="submit">Save Description</button>
                </div>
            </form>
        </div>
    </div>
</div>

                
        </div>
        
              </div></div>
