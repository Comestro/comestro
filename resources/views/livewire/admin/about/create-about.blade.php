<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">About</a></li>
                                <li class="breadcrumb-item active">Create New About</li>
                            </ol>
                        </nav>
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">New About Entry</h4>
                </div>
    
              
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">About Information</h5>
    
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
    
                            <form wire:submit.prevent="submit" class="row g-3" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label class="form-label">Team</label>
                                    <input 
                                        type="text" 
                                        id="team" 
                                        placeholder="Enter team name"
                                        class="form-control @error('team') is-invalid @enderror"
                                        wire:model="team">
                                    @error('team')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        placeholder="Enter name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">URL</label>
                                    <input 
                                        type="text" 
                                        id="url" 
                                        placeholder="Enter URL"
                                        class="form-control @error('url') is-invalid @enderror"
                                        wire:model="url">
                                    @error('url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Date</label>
                                    <input 
                                        type="date" 
                                        id="date" 
                                        class="form-control @error('date') is-invalid @enderror"
                                        wire:model="date">
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Lead</label>
                                    <input 
                                        type="text" 
                                        id="lead" 
                                        placeholder="Enter lead name"
                                        class="form-control @error('lead') is-invalid @enderror"
                                        wire:model="lead">
                                    @error('lead')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Members</label>
                                    <input 
                                        type="number" 
                                        id="members" 
                                        placeholder="Enter number of members"
                                        class="form-control @error('members') is-invalid @enderror"
                                        wire:model="members">
                                    @error('members')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Image</label>
                                    <input 
                                        type="file" 
                                        id="image" 
                                        class="form-control @error('image') is-invalid @enderror"
                                        wire:model="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @if ($image)
                                        <div class="mt-2">
                                            <img src="{{ $image->temporaryUrl() }}" class="img-fluid" style="max-width: 200px;" alt="Preview">
                                        </div>
                                    @endif
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Icon</label>
                                    <input 
                                        type="file" 
                                        id="icon" 
                                        class="form-control @error('icon') is-invalid @enderror"
                                        wire:model="icon">
                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @if ($icon)
                                        <div class="mt-2">
                                            <img src="{{ $icon->temporaryUrl() }}" class="img-fluid" style="max-width: 200px;" alt="Preview">
                                        </div>
                                    @endif
                                </div>
    
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea 
                                        id="description" 
                                        placeholder="Write description here"
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="6"
                                        wire:model="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Create About</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
