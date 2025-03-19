<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Breadcrumb & Back Button -->
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">Services</a></li>
                                <li class="breadcrumb-item active">Create New Service</li>
                            </ol>
                        </nav>
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">New Service</h4>
                </div>

                <!-- Service Creation Card -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Service Information</h5>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <form wire:submit.prevent="save" class="row g-3" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input 
                                        type="text" 
                                        id="title" 
                                        placeholder="Enter service title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Icon Image</label>
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
                                        placeholder="Write service description here"
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="6"
                                        wire:model="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Create Service</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>