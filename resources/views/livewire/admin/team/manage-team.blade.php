<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Breadcrumb -->
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">Team</a></li>
                                <li class="breadcrumb-item active">Manage Team</li>
                            </ol>
                        </nav>
                        <a href="{{ route('admin.team.create') }}" class="btn btn-primary btn-sm">
                            <span class="ms-2">Add New</span>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">Manage Team Members</h4>
                </div>
    
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
    
                            <!-- Edit Form -->
                            @if ($editingTeamId)
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="fw-bold">Edit Team Member</h5>
                                    </div>
                                    <div class="card-body">
                                        <form wire:submit.prevent="update" enctype="multipart/form-data" class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Name</label>
                                                <input 
                                                    type="text" 
                                                    class="form-control @error('name') is-invalid @enderror" 
                                                    wire:model="name"
                                                >
                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
    
                                            <div class="col-md-6">
                                                <label class="form-label">Role</label>
                                                <input 
                                                    type="text" 
                                                    class="form-control @error('role') is-invalid @enderror" 
                                                    wire:model="role"
                                                >
                                                @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
    
                                            <div class="col-md-6">
                                                <label class="form-label">Image</label>
                                                <input 
                                                    type="file" 
                                                    class="form-control @error('image') is-invalid @enderror" 
                                                    wire:model="image"
                                                >
                                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" class="mt-2" style="max-width: 200px;" alt="Preview">
                                                @elseif ($existingImage)
                                                    <img src="{{ Storage::url($existingImage) }}" class="mt-2" style="max-width: 200px;" alt="Current">
                                                @endif
                                            </div>
    
                                            <div class="col-md-12 text-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-secondary" wire:click="cancelEdit">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
    
                            <!-- Team Table -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($teams as $team)
                                            <tr>
                                                <td>
                                                    <img 
                                                        src="{{ $team->image ? Storage::url($team->image) : 'https://via.placeholder.com/50' }}"
                                                        class="rounded-circle"
                                                        style="width: 50px; height: 50px; object-fit: cover;"
                                                        alt="{{ $team->name }}"
                                                    >
                                                </td>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->role }}</td>
                                                <td>
                                                    <button 
                                                        class="btn btn-sm btn-primary me-2" 
                                                        wire:click="edit({{ $team->id }})"
                                                    >
                                                        Edit
                                                    </button>
                                                    <button 
                                                        class="btn btn-sm btn-danger" 
                                                        wire:click="confirmDelete({{ $team->id }})"
                                                    >
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No team members found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
    
                            <!-- Pagination -->
                            <div class="mt-3">
                                {{ $teams->links() }}
                            </div>
    
                            <!-- Delete Modal -->
                            @if ($showDeleteModal)
                                <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0,0,0,0.5);">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this team member?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" wire:click="$set('showDeleteModal', false)">Cancel</button>
                                                <button type="button" class="btn btn-danger" wire:click="delete">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
