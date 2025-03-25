<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="fw-bold">Works</h4>
                        </div>
                        <div class="create-workform">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="modal-product-search d-flex flex-wrap">
                                    <a href="{{ route('admin.work.create') }}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        Add Work
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
                                        <h5 class="fw-bold">Works List</h5>
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
                                                    <th><label class="text-muted m-0">Category</label></th>
                                                    <th><label class="text-muted m-0">Title</label></th>
                                                    <th><label class="text-muted m-0">Description Preview</label></th>
                                                    <th><label class="text-muted m-0">Image</label></th>
                                                    <th><label class="text-muted m-0">Link</label></th>
                                                    <th><label class="text-muted m-0">Image Position</label></th>
                                                    <th><label class="text-muted m-0">Actions</label></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($works as $work)
                                                <tr>
                                                    <td>{{ $work->category ?? 'N/A' }}</td>
                                                    <td>{{ $work->title }}</td>
                                                    <td>{{ Str::limit($work->description, 50) }}</td>
                                                    <td>
                                                        @if ($work->image)
                                                            <img src="{{ Storage::url($work->image) }}" alt="work image" width="50">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ $work->link }}" target="_blank">{{ Str::limit($work->link, 20) }}</a></td>
                                                    <td>{{ $work->image_position ? 'Right' : 'Left' }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="text-secondary me-3" title="Edit" wire:click="edit({{ $work->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                                </svg>
                                                            </a>
                                                            <a href="#" class="text-danger" title="Delete" wire:click.prevent="confirmDelete({{ $work->id }})">
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
                    @if ($editingWorkId)
                    <div class="modal fade show" style="display: block;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Work</h5>
                                    <button type="button" class="btn-close" wire:click="cancelEdit"></button>
                                </div>
                                <div class="modal-body">
                                    <form wire:submit.prevent="update">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Category</label>
                                                <input type="text" class="form-control @error('category') is-invalid @enderror" wire:model="category">
                                                @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title">
                                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" rows="5"></textarea>
                                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Link</label>
                                                <input type="url" class="form-control @error('link') is-invalid @enderror" wire:model="link">
                                                @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Image Position</label>
                                                <select class="form-control @error('image_position') is-invalid @enderror" wire:model="image_position">
                                                    <option value="0">Left</option>
                                                    <option value="1">Right</option>
                                                </select>
                                                @error('image_position') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label">Image</label>
                                                @if ($existingImage)
                                                    <div class="mb-2">
                                                        <img src="{{ Storage::url($existingImage) }}" alt="Current image" width="100">
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image">
                                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                                @if ($image)
                                                    <div class="mt-2">
                                                        <img src="{{ $image->temporaryUrl() }}" alt="Preview" width="100">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" wire:click="cancelEdit">Close</button>
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
                    @if ($showDeleteModal && $workIdToDelete)
                    <div class="modal fade show d-block" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirm Delete</h5>
                                    <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this work?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" wire:click="$set('showDeleteModal', false)">Cancel</button>
                                    <button type="button" class="btn btn-danger" wire:click="delete">Yes, Delete</button>
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
