<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fw-bold">Manage Settings</h4>
                    </div>
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-success mb-4">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="row">
                     <div class="col-lg-12"> 
                     <div class="card card-block card-stretch">
                            <div class="card-body p-0"> 
                                 <div class="d-flex justify-content-between align-items-center p-3 pb-md-0">
                                    <h5 class="fw-bold">Settings List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                        </svg>
                                        Export
                                    </button>
                                </div> 
                                <div class="table-responsive iq-product-table">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th><label class="text-muted m-0">Name</label></th>
                                                <th><label class="text-muted m-0">Email</label></th>
                                                <th><label class="text-muted m-0">Message</label></th>
                                                <th><label class="text-muted m-0">Actions</label></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($settings as $setting)
                                                <tr>
                                                    <td>{{ $setting->name }}</td>
                                                    <td>{{ $setting->email }}</td>
                                                    <td>{{ Str::limit($setting->message, 50) }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" wire:click="edit({{ $setting->id }})" class="text-info me-3" title="Edit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                                </svg>
                                                            </a>
                                                            <a href="#" wire:click="delete({{ $setting->id }})" class="text-danger" title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No settings found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="mt-3">
                                        {{ $settings->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Form -->
                @if ($selectedSettingId)
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-4">Edit Setting</h5>
                                    <form wire:submit.prevent="update">
                                        <div class="form-group mb-3">
                                            <label for="name" class="text-muted">Name</label>
                                            <input wire:model="name" type="text" id="name" class="form-control" placeholder="Name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email" class="text-muted">Email</label>
                                            <input wire:model="email" type="email" id="email" class="form-control" placeholder="Email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="message" class="text-muted">Message</label>
                                            <textarea wire:model="message" id="message" rows="4" class="form-control" placeholder="Message"></textarea>
                                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="d-flex justify-content-start gap-3">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button wire:click="resetForm" type="button" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>