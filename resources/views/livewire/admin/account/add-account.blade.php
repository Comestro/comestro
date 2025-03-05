<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Breadcrumb & Back Button -->
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">Account</a></li>
                                <li class="breadcrumb-item active">Add Account</li>
                            </ol>
                        </nav>
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">New Account</h4>
                </div>

                <!-- Account Information Card -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">Account Information</h5>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <form wire:submit.prevent="saveAccount" class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Account Name</label>
                                    <input type="text" placeholder="account_name"
                                        class="form-control @error('account_name') is-invalid @enderror"
                                        wire:model="account_name">
                                    @error('account_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text"  placeholder="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        wire:model="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Website</label>
                                    <input type="text"  placeholder="website.com"
                                        class="form-control @error('website') is-invalid @enderror"
                                        wire:model="website">
                                    @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Create Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
