<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">Manage Deals</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <form class="me-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText" placeholder="Search Deals">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Add Deal
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
                                    <h5 class="fw-bold">Deals List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                @if (session()->has('message'))
                                    <div class="alert alert-success m-3">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <div class="table-responsive iq-product-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th><label class="text-muted m-0">Deal Name</label></th>
                                                <th><label class="text-muted m-0">Amount</label></th>
                                                <th><label class="text-muted m-0">Stage</label></th>
                                                <th><label class="text-muted m-0">Closing Date</label></th>
                                                <th><label class="text-muted m-0">Account</label></th>
                                                <th><label class="text-muted m-0">Contact</label></th>
                                                <th><label class="text-muted m-0">Actions</label></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($deals as $deal)
                                            <tr>
                                                <td>{{ $deal->deal_name }}</td>
                                                <td>{{ $deal->amount }}</td>
                                                <td>{{ $deal->deal_stage }}</td>
                                                <td>{{ $deal->closing_date }}</td>
                                                <td>{{ $deal->account->name ?? 'N/A' }}</td>
                                                <td>{{ $deal->contact->name ?? 'N/A' }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="text-secondary me-3" title="Edit" wire:click="edit({{ $deal->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="text-danger" title="Delete" wire:click="confirmDelete({{ $deal->id }})">
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

                <!-- Edit Modal -->
                @if ($selectedDealId)
                <div class="modal fade show" style="display: block;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Deal</h5>
                                <button type="button" class="btn-close" wire:click="resetForm"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent="update">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Deal Name</label>
                                            <input type="text" class="form-control @error('deal_name') is-invalid @enderror" wire:model="deal_name">
                                            @error('deal_name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Amount</label>
                                            <input type="number" class="form-control @error('amount') is-invalid @enderror" wire:model="amount">
                                            @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Stage</label>
                                            <input type="text" class="form-control @error('deal_stage') is-invalid @enderror" wire:model="deal_stage">
                                            @error('deal_stage') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Closing Date</label>
                                            <input type="date" class="form-control @error('closing_date') is-invalid @enderror" wire:model="closing_date">
                                            @error('closing_date') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Account</label>
                                            <select class="form-control @error('account_id') is-invalid @enderror" wire:model="account_id">
                                                <option value="">Select Account</option>
                                                @foreach ($accounts as $account)
                                                    <option value="{{ $account->id }}">{{ $account->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('account_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Contact</label>
                                            <select class="form-control @error('contact_id') is-invalid @enderror" wire:model="contact_id">
                                                <option value="">Select Contact</option>
                                                @foreach ($contacts as $contact)
                                                    <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('contact_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-backdrop fade show"></div>
                @endif

                <!-- Delete Confirmation Modal -->
                @if ($showDeleteModal && $deal_id)
                <div class="modal fade show d-block" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm Delete</h5>
                                <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this deal?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" wire:click="$set('showDeleteModal', false)">Cancel</button>
                                <button class="btn btn-danger" wire:click="delete({{ $deal_id }})">Yes, Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-backdrop fade show"></div>
                @endif
            </div>
        </div>
    </div>
</div>