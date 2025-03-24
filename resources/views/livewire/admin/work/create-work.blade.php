<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Breadcrumb & Back Button -->
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">Works</a></li>
                                <li class="breadcrumb-item active">Create New Work</li>
                            </ol>
                        </nav>
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">New Work</h4>
                </div>
    
                <!-- Work Creation Card -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Work Information</h5>
    
                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
    
                            <form wire:submit.prevent="save" class="row g-3" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <input 
                                        type="text" 
                                        id="category" 
                                        placeholder="Enter work category (e.g., E-Commerce Platform)"
                                        class="form-control @error('category') is-invalid @enderror"
                                        wire:model="category">
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input 
                                        type="text" 
                                        id="title" 
                                        placeholder="Enter work title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea 
                                        id="description" 
                                        placeholder="Write your work description here"
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="6"
                                        wire:model="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Featured Image</label>
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
                                    <label class="form-label">Project Link</label>
                                    <input 
                                        type="url" 
                                        id="link" 
                                        placeholder="Enter project URL (e.g., https://example.com)"
                                        class="form-control @error('link') is-invalid @enderror"
                                        wire:model="link">
                                    @error('link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-6">
                                    <label class="form-label">Image Position</label>
                                    <select 
                                        id="image_position" 
                                        class="form-control @error('image_position') is-invalid @enderror"
                                        wire:model="image_position">
                                        <option value="0">Left</option>
                                        <option value="1">Right</option>
                                    </select>
                                    @error('image_position')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
    
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Create Work</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
