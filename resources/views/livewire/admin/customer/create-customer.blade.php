<div class="content-page">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-lg-12 mb-2">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ps-0 mb-0 pb-0">
                            <li class="breadcrumb-item"><a href="#">Customers</a></li>
                            <li class="breadcrumb-item active">Create New Customer</li>
                        </ol>
                    </nav>
                  
                </div>
            </div>

            <div class="col-lg-12 mb-3">
                <h4 class="fw-bold">New Customer</h4>
            </div>

        
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Customer Information</h5>

                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        <form wire:submit.prevent="submit" class="row g-3" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    placeholder="Enter customer name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    wire:model="name">
                                @error('name')
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
                                <label class="form-label">Designation</label>
                                <input 
                                    type="text" 
                                    id="designation" 
                                    placeholder="Enter customer designation"
                                    class="form-control @error('designation') is-invalid @enderror"
                                    wire:model="designation">
                                @error('designation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Message</label>
                                <textarea 
                                    id="message" 
                                    placeholder="Enter customer message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    rows="6"
                                    wire:model="message"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-12 text-end">
                                <button class="btn btn-primary" type="submit">Create Customer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>