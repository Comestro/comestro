<div class="content-page">

    <div class="container-fluid">
        <div class="row">
    
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">Account</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText" placeholder="Search Product">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Add Account
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
                                    <h5 class="fw-bold">Accounts List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="table-responsive iq-product-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th><label class="text-muted m-0">First Name</label></th>
                                                <th><label class="text-muted m-0">Phone</label></th>
                                                <th><label class="text-muted m-0">Website</label></th>
                                                <th><label class="text-muted m-0">Actions</label></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($accounts as $account)
                                            <tr>
                                                <td>{{$account->account_name}}</td>
                                                <td>{{$account->phone}}</td>
                                                <td>{{$account->website}}</td>
                                               
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="" class="text-info me-3" title="View">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5C7 4.5 2.5 9 2.5 12s4.5 7.5 9.5 7.5 9.5-4.5 9.5-7.5-4.5-7.5-9.5-7.5zM12 9a3 3 0 100 6 3 3 0 000-6z"></path>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="text-secondary me-3" title="Edit" wire:click="editAccount({{ $account->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                        </a>
{{-- model edit --}}

                                                        <div class="modal fade @if($showEditModal) show @endif" style="display: @if($showEditModal) block @else none @endif;">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Lead</h5>
                                                                        <button type="button" class="btn-close" wire:click="$set('showEditModal', false)"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form wire:submit.prevent="updateAccount">
                                                                            <div class="row">
                                                                                <!-- First Name -->
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="form-label">Account Name</label>
                                                                                    <input type="text" class="form-control @error('account_name') is-invalid @enderror"
                                                                                        wire:model="account_name">
                                                                                    @error('account_name') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                    
                                                                                <!-- Last Name -->
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="form-label">website</label>
                                                                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                                                                        wire:model="website">
                                                                                    @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                                                                                </div>
                                                                    
                                                                              
                                                                    
                                                                               
                                                                                <!-- Phone -->
                                                                                <div class="col-md-6 mb-3">
                                                                                    <label class="form-label">Phone</label>
                                                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                                                        wire:model="phone">
                                                                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
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
                                                        <a href="#" class="text-danger" title="Delete">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                        </a>
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
    
          </div>