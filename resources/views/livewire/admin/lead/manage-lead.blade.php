<div class="content-page">

    <div class="container-fluid">
        <div class="row">
    
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">Lead</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText" placeholder="Search lead">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="{{route('add_lead')}}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Add Lead
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3 pb-md-0">
                                    <h5 class="fw-bold">Leads List</h5>
                                    
                                </div>
                                <div class="table-responsive ">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th ><label class="text-muted m-0">First Name</label></th>
                                                <th ><label class="text-muted m-0">Last Name</label></th>
                                                <th ><label class="text-muted m-0">Title</label></th>
                                                <th ><label class="text-muted m-0">Email</label></th>
                                                <th ><label class="text-muted m-0">Company</label></th>
                                                <th ><label class="text-muted m-0">Phone</label></th>
                                                <th ><label class="text-muted m-0">Lead Status</label></th>
                                                <th ><label class="text-muted m-0">Lead Source</label></th>
                                                <th ><label class="text-muted m-0">Actions</label></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($leads as $lead)
                                            <tr>
                                                <td>{{ $lead->first_name }}</td>
                                                <td>{{ $lead->last_name }}</td>
                                                <td>{{ $lead->title }}</td>
                                                <td>{{ $lead->email }}</td>
                                                <td>{{ $lead->company }}</td>
                                                <td>{{ $lead->phone }}</td>
                                                <td>{{ $lead->lead_status }}</td>
                                                <td>{{ $lead->lead_source }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ route('admin.lead.view', $lead->id) }}" class="text-info me-3" title="View">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5C7 4.5 2.5 9 2.5 12s4.5 7.5 9.5 7.5 9.5-4.5 9.5-7.5-4.5-7.5-9.5-7.5zM12 9a3 3 0 100 6 3 3 0 000-6z"></path>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="text-secondary me-3" title="Edit" wire:click="editLead({{ $lead->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                        </a>
 
                                                        <a href="#" class="text-danger" title="Delete" wire:click="confirmDelete({{ $lead->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                        </a>
                                                        <!-- Delete Confirmation Modal -->
    @if ($showDeleteModal)
    <div class="modal fade show d-block" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this lead?.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" wire:click="$set('showDeleteModal', false)">Cancel</button>
                    <button class="btn btn-danger" wire:click="deleteLead">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Edit Lead Modal -->
  <div class="modal fade @if($showEditModal) show @endif" style="display: @if($showEditModal) block @else none @endif;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Lead</h5>
                <button type="button" class="btn-close" wire:click="$set('showEditModal', false)"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateLead">
                    <div class="row">
                        <!-- First Name -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                wire:model="first_name">
                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Last Name -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                wire:model="last_name">
                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Title -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                wire:model="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Company -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror"
                                wire:model="company">
                            @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Phone -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                wire:model="phone">
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Lead Status -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Lead Status</label>
                            <select class="form-select @error('lead_status') is-invalid @enderror"
                                wire:model="lead_status">
                                <option value="">Select Status</option>
                                <option value="New">New</option>
                                <option value="Contacted">Contacted</option>
                                <option value="Qualified">Qualified</option>
                                <option value="Lost">Lost</option>
                            </select>
                            @error('lead_status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Lead Source -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Lead Source</label>
                            <select class="form-select @error('lead_source') is-invalid @enderror"
                                wire:model="lead_source">
                                <option value="">Select Source</option>
                                <option value="Website">Website</option>
                                <option value="Referral">Referral</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Direct call">Direct call</option>
                                <option value="Search">Search</option>
                                <option value="Advertising">Advertising</option>
                            </select>
                            @error('lead_source') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Address Fields -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Street</label>
                            <input type="text" class="form-control @error('street') is-invalid @enderror"
                                wire:model="street">
                            @error('street') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="col-md-6 mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror"
                                wire:model="city">
                            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="col-md-6 mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror"
                                wire:model="state">
                            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Zip Code</label>
                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror"
                                wire:model="zip_code">
                            @error('zip_code') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select @error('country') is-invalid @enderror"
                                wire:model="country">
                                <option value="">Select Country</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="Canada">Canada</option>
                            </select>
                            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <!-- Description -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                wire:model="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
            
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="$set('showEditModal', false)">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
          </div>

          