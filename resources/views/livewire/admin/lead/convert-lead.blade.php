<div class="content-page">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">Convert Lead <small class="text-muted">({{ $contact_name }} - {{ $account_name }})</small></h4>
                
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                
                            <div class="mb-3">
                                <h6>Create New Account</h6>
                                <span class="badge bg-primary">{{ $account_name }}</span>
                            </div>
                
                            <div class="mb-3">
                                <h6>Create New Contact</h6>
                                <span class="badge bg-primary">{{ $contact_name }}</span>
                            </div>
                
                            <h5 class="fw-bold mt-4">Create New Deal for this Account</h5>
                            <form wire:submit.prevent="convert" class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Amount</label>
                                    <input type="text" class="form-control @error('amount') is-invalid @enderror" wire:model="amount">
                                    @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                
                                <div class="col-md-6">
                                    <label class="form-label">Deal Name</label>
                                    <input type="text" class="form-control @error('deal_name') is-invalid @enderror" wire:model="deal_name">
                                    @error('deal_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                
                                <div class="col-md-6">
                                    <label class="form-label">Closing Date</label>
                                    <input type="date" class="form-control @error('closing_date') is-invalid @enderror" wire:model="closing_date">
                                    @error('closing_date') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                
                                <div class="col-md-6">
                                    <label class="form-label">Stage</label>
                                    <select class="form-select @error('deal_stage') is-invalid @enderror" wire:model="deal_stage">
                                        <option value="">Select Status</option>
                                        <option value="Quanlifications">Quanlifications</option>
                                        <option value="Needs">Needs</option>
                                        <option value="Analysis">Analysis</option>
                                        <option value="Proposal/price">Proposal/price</option>
                                        <option value="Negotiation">Negotiation</option>
                                        <option value="Quote">Quote</option>
                                        <option value="Closed won">Closed won</option>
                                        <option value="Closed Lost">Closed Lost</option>
                                    </select>                    
                                    @error('stage') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary" type="submit">Convert</button>
                                    <button class="btn btn-secondary" type="button">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
    </div>
    </div>
</div>
            
</div>
</div>
</div>

</div>
