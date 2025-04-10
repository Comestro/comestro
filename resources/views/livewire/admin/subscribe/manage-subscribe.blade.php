<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="fw-bold">Subscribers</h4>
                        </div>
                    </div>
    
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch">
                                <div class="card-body p-0">
                                    <div class="d-flex justify-content-between align-items-center p-3 pb-md-0">
                                        <h5 class="fw-bold">Subscribers List</h5>
                                        <button class="btn btn-secondary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                            Export
                                        </button>
                                    </div>
                                    <div class="table-responsive iq-product-table">
                                        <table class="table data-table mb-0">
                                            <thead class="table-color-heading">
                                                <tr class="text-light">
                                                    <th><label class="text-muted m-0">Email</label></th>
                                                    <th><label class="text-muted m-0">Actions</label></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($subscribers as $subscriber)
                                                <tr>
                                                    <td>{{ $subscriber->email }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-secondary me-3" title="Edit" wire:click="edit({{ $subscriber->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                                </svg>
                                                            </a>
                                                            <a href="#" class="text-danger" title="Delete" wire:click="confirmDelete({{ $subscriber->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="2" class="text-center">No subscribers found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                            {{ $subscribers->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Edit Modal -->
                    @if ($selectedSubscriberId)
                    <div class="modal fade show" style="display: block;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Subscriber</h5>
                                    <button type="button" class="btn-close" wire:click="resetForm"></button>
                                </div>
                                <div class="modal-body">
                                    <form wire:submit.prevent="update">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
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
    
                    <!-- Delete Modal -->
                    @if ($showDeleteModal)
                    <div class="modal fade show d-block" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirm Delete</h5>
                                    <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this subscriber?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" wire:click="$set('showDeleteModal', false)">Cancel</button>
                                    <button class="btn btn-danger" wire:click="delete({{ $subscriber_id }})">Yes, Delete</button>
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
</div>
