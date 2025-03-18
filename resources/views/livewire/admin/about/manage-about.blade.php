<div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">About</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex flex-wrap">
                                <a href="{{ route('admin.about.create') }}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Add About
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
                                    <h5 class="fw-bold">About List</h5>
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
                                                <th><label class="text-muted m-0">Team</label></th>
                                                <th><label class="text-muted m-0">Name</label></th>
                                                <th><label class="text-muted m-0">Date</label></th>
                                                <th><label class="text-muted m-0">Lead</label></th>
                                                <th><label class="text-muted m-0">Members</label></th>
                                                <th><label class="text-muted m-0">Description</label></th>
                                                <th><label class="text-muted m-0">Image</label></th>
                                                <th><label class="text-muted m-0">Icon</label></th>
                                                <th><label class="text-muted m-0">Actions</label></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($abouts as $about)
                                            <tr>
                                                <td>{{ $about->team }}</td>
                                                <td>{{ $about->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($about->date)->format('M d, Y') }}</td>
                                                <td>{{ $about->lead }}</td>
                                                <td>{{ $about->members }}</td>
                                                <td>{{ Str::limit($about->description, 50) }}</td>
                                                <td>
                                                    @if ($about->image)
                                                        <img src="{{ Storage::url($about->image) }}" alt="about image" width="50">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($about->icon)
                                                        <img src="{{ Storage::url($about->icon) }}" alt="about icon" width="50">
                                                    @else
                                                        No Icon
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="text-secondary me-3" title="Edit" wire:click="edit({{ $about->id }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="text-danger" title="Delete" wire:click.prevent="confirmDelete({{ $about->id }})">
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
                                    {{ $abouts->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                @if ($editingAboutId)
                <div class="modal fade show" style="display: block;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit About</h5>
                                <button type="button" class="btn-close" wire:click="cancelEdit"></button>
                            </div>
                            <div class="modal-body">
                                <form wire:submit.prevent="update">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Team</label>
                                            <input type="text" class="form-control @error('team') is-invalid @enderror" wire:model="team">
                                            @error('team') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">URL</label>
                                            <input type="text" class="form-control @error('url') is-invalid @enderror" wire:model="url">
                                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control @error('date') is-invalid @enderror" wire:model="date">
                                            @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Lead</label>
                                            <input type="text" class="form-control @error('lead') is-invalid @enderror" wire:model="lead">
                                            @error('lead') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Members</label>
                                            <input type="number" class="form-control @error('members') is-invalid @enderror" wire:model="members">
                                            @error('members') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" rows="5"></textarea>
                                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
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
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Icon</label>
                                            @if ($existingIcon)
                                                <div class="mb-2">
                                                    <img src="{{ Storage::url($existingIcon) }}" alt="Current icon" width="100">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control @error('icon') is-invalid @enderror" wire:model="icon">
                                            @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                                            @if ($icon)
                                                <div class="mt-2">
                                                    <img src="{{ $icon->temporaryUrl() }}" alt="Preview" width="100">
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
                @if ($showDeleteModal && $aboutIdToDelete)
                <div class="modal fade show d-block" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm Delete</h5>
                                <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this about entry?</p>
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