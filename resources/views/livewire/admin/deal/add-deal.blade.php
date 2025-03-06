<div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Breadcrumb & Back Button -->
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ps-0 mb-0 pb-0">
                                <li class="breadcrumb-item"><a href="#">deal</a></li>
                                <li class="breadcrumb-item active">Add deal</li>
                            </ol>
                        </nav>
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12 mb-3">
                    <h4 class="fw-bold">New deal</h4>
                </div>

                <!-- deal Information Card -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">deal Information</h5>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <form wire:submit.prevent="saveDeal" class="row g-3">
                                <!-- Deal Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Deal Name</label>
                                    <input type="text" placeholder="Enter deal name"
                                        class="form-control @error('deal_name') is-invalid @enderror"
                                        wire:model="deal_name">
                                    @error('deal_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <!-- Amount -->
                                <div class="col-md-6">
                                    <label class="form-label">Amount</label>
                                    <input type="number" placeholder="Enter amount"
                                        class="form-control @error('amount') is-invalid @enderror"
                                        wire:model="amount">
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <!-- Closing Date -->
                                <div class="col-md-6">
                                    <label class="form-label">Closing Date</label>
                                    <input type="date"
                                        class="form-control @error('closing_date') is-invalid @enderror"
                                        wire:model="closing_date">
                                    @error('closing_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <!-- Deal Stage -->
                                <div class="col-md-6">
                                    <label class="form-label">Deal Stage</label>
                                    <select class="form-select @error('deal_stage') is-invalid @enderror" wire:model="deal_stage">
                                        <option value="">Select Stage</option>
                                        <option value="Negotiation">Negotiation</option>
                                        <option value="Proposal Sent">Proposal Sent</option>
                                        <option value="Closed Won">Closed Won</option>
                                        <option value="Closed Lost">Closed Lost</option>
                                    </select>
                                    @error('deal_stage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <!-- Account ID -->
                                <div class="col-md-6">
                                    <label class="form-label">Account</label>
                                    <select class="form-select @error('account_id') is-invalid @enderror" wire:model="account_id">
                                        <option value="">Select Account</option>
                                        @foreach ($accounts as $account)
                                            <option value="{{ $account->id }}">{{ $account->account_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('account_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <!-- Contact ID -->
                                <div class="col-md-6">
                                    <label class="form-label">Contact</label>
                                    <select class="form-select @error('contact_id') is-invalid @enderror" wire:model="contact_id">
                                        <option value="">Select Contact</option>
                                        @foreach ($contacts as $contact)
                                            <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('contact_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            
                                <!-- Submit Button -->
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary" type="submit">Create Deal</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
