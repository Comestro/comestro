<div>

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-4 mt-1">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h4 class="fw-bold mb-2 mb-lg-0 mr-l">Admin Dashboard</h4>
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-12 p-4">
                    <div class="row">
                     
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <svg width="32" height="32" fill="currentColor" class="text-success me-2" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0Zm3.5 9.5H8v2h3.5v1.5L14 9l-2.5-3v1.5H8v2h3.5Z"/>
                                        </svg>
                                        <div>
                                            <p class="mb-1 text-secondary">Total Account</p>
                                            <h5 class="mb-0 fw-bold">{{$totalAccounts}}</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                      
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <svg width="32" height="32" fill="currentColor" class="text-danger me-2" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0ZM5.5 6.5H8V4h2.5L8 9.5H5.5V6.5Z"/>
                                        </svg>
                                        <div>
                                            <p class="mb-1 text-secondary">Total Deals</p>
                                            <h5 class="mb-0 fw-bold">{{$totalDeals}}</h5>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                     
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <svg width="32" height="32" fill="currentColor" class="text-primary me-2" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 1 3-3A3 3 0 0 1 8 8Zm6 6a6 6 0 0 0-12 0H1a7 7 0 1 1 14 0Z"/>
                                        </svg>
                                        <div>
                                            <p class="mb-1 text-secondary">Total Contacts</p>
                                            <h5 class="mb-0 fw-bold">{{$totalContacts}}</h5>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Sales Report -->
                     {{-- <div class="col-md-12">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <h4 class="fw-bold">Sales Report</h4>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="blue">
                                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                                </svg>
                                                <span>Incomes</span>
                                            </div>
                                            <div class="ms-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="red">
                                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                                </svg>
                                                <span>Expenses</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="chart-apex-column-01" class="custom-chart"></div> 
                                  
                                  
                                </div>
                            </div>
                        </div>    --}}
                       <div class="col-md-12">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h4 class="fw-bold ">Blogs</h4>
            </div>
            <div class="card-body-list">
                <ul class="list-style-3 mb-0 mt-2">
                    @foreach($blogs as $blog)
                        <li class="list-item d-flex justify-content-start align-items-center border-bottom py-2">
                            <div class="avatar">
                                @if($blog->image)
                                    <img class="avatar avatar-img avatar-60 rounded"
                                        src="{{ Storage::url($blog->image) }}" 
                                        alt="{{ $blog->title }}">
                                @else
                                    <img class="avatar avatar-img avatar-60 rounded"
                                        src="{{ asset('assets/images/default-blog.jpg') }}" 
                                        alt="{{ $blog->title }}">
                                @endif
                            </div>
                            <div class="list-style-detail ms-3 me-2">
                                <p class="mb-0">{{ Str::limit($blog->title, ) }}</p>
                            </div>
                            <div class="list-style-action d-flex justify-content-end ms-auto">
                                <h6 class="fw-bold">{{ $blog->created_at->format('M d') }}</h6>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
                    
                      
                    </div>
                </div>
                
                {{-- <div class="col-lg-4 col-md-8">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header card-header-border d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Open Tasks</h4>
                            </div>
                        </div>
                        <div class="card-body-list">
                            <ul class="list-style-3 mb-0">
                                <li
                                    class="card-body list-item d-flex justify-content-start align-items-center border-bottom">
                                    <div class="avatar">
                                        <img class="avatar avatar-img avatar-60 rounded"
                                            src="{{ asset('assets/images/products/1.jpg') }}" alt="1.jpg">
                                    </div>
                                    <div class="list-style-detail ms-3 me-2">
                                        <p class="mb-0">Rockerz Bluetooth Headset</p>
                                    </div>
                                    <div class="list-style-action d-flex justify-content-end ms-auto">
                                        <h6 class="fw-bold">$1,056</h6>
                                    </div>
                                </li>
                                <li
                                    class="card-body list-item d-flex justify-content-start align-items-center border-bottom">
                                    <div class="avatar">
                                        <img class="avatar avatar-img avatar-60 rounded"
                                            src="{{ asset('assets/images/products/2.jpg') }}" alt="2.jpg">
                                    </div>
                                    <div class="list-style-detail ms-3 me-2">
                                        <p class="mb-0">Wifi Security Camera</p>
                                    </div>
                                    <div class="list-style-action d-flex justify-content-end ms-auto">
                                        <h6 class="fw-bold">$1,799</h6>
                                    </div>
                                </li>
                                <li
                                    class="card-body list-item d-flex justify-content-start align-items-center border-bottom">
                                    <div class="avatar">
                                        <img class="avatar avatar-img avatar-60 rounded"
                                            src="{{ asset('assets/images/products/13.jpg') }}" alt="3.jpg">
                                    </div>
                                    <div class="list-style-detail ms-3 me-2">
                                        <p class="mb-0">Stone Bluetooth Speaker</p>
                                    </div>
                                    <div class="list-style-action d-flex justify-content-end ms-auto">
                                        <h6 class="fw-bold">$1,099</h6>
                                    </div>
                                </li>
                                <li class="card-body list-item d-flex justify-content-start align-items-center">
                                    <div class="avatar">
                                        <img class="avatar avatar-img avatar-60 rounded"
                                            src="{{ asset('assets/images/products/4.jpg') }}" alt="4.jpg">
                                    </div>
                                    <div class="list-style-detail ms-3 me-2">
                                        <p class="mb-0">Ryzen 5 Hexa Core 5600H</p>
                                    </div>
                                    <div class="list-style-action d-flex justify-content-end ms-auto">
                                        <h6 class="fw-bold">$9,999</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> --}}
               
                
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="fw-bold mb-3">Popular Works</h4>
                                <div class="custom-chart" style="height: 300px;">
                                    <canvas id="popular-categories-chart"></canvas>
                                </div>
                                <div class="mt-3">
                                    <p class="text-center">
                                        Total: {{ $totalAccounts + $totalDeals + $totalContacts + $blogs->count() }}
                                    </p>
                                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                                        <div class="d-flex align-items-center me-3 mb-2">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#ffbb33" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="3" width="18" height="18" rx="2" fill="#ffbb33"></rect>
                                            </svg>
                                            <span class="ms-2">Blogs ({{ $blogs->count() }})</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3 mb-2">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#e60000" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="3" width="18" height="18" rx="2" fill="#e60000"></rect>
                                            </svg>
                                            <span class="ms-2">Deals ({{ $totalDeals }})</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3 mb-2">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#04237D" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="3" width="18" height="18" rx="2" fill="#04237D"></rect>
                                            </svg>
                                            <span class="ms-2">Accounts ({{ $totalAccounts }})</span>
                                        </div>
                                        <div class="d-flex align-items-center me-3 mb-2">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#8080ff" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="3" width="18" height="18" rx="2" fill="#8080ff"></rect>
                                            </svg>
                                            <span class="ms-2">Contacts ({{ $totalContacts }})</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @push('scripts')
                        <script>
                            function renderChart() {
                               
                                if (typeof Chart === 'undefined') {
                                    console.error('Chart.js is not loaded');
                                    return;
                                }
                    
                                const ctx = document.getElementById('popular-categories-chart');
                                if (!ctx) {
                                    console.error('Canvas element #popular-categories-chart not found');
                                    return;
                                }
                    
                                const seriesData = [
                                    {{ $blogs->count() }},
                                    {{ $totalDeals }},
                                    {{ $totalAccounts }},
                                    {{ $totalContacts }}
                                ];
                    
                                console.log('Chart series data:', seriesData);
                    
                                try {
                                    new Chart(ctx, {
                                        type: 'doughnut',
                                        data: {
                                            labels: ['Blogs', 'Deals', 'Accounts', 'Contacts'],
                                            datasets: [{
                                                data: seriesData,
                                                backgroundColor: ['#ffbb33', '#e60000', '#04237D', '#8080ff'],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            plugins: {
                                                legend: {
                                                    display: false
                                                },
                                                title: {
                                                    display: false
                                                },
                                                tooltip: {
                                                    enabled: true
                                                }
                                            },
                                            cutout: '50%' 
                                        }
                                    });
                                    console.log('Chart.js chart rendered successfully');
                                } catch (error) {
                                    console.error('Error rendering Chart.js chart:', error);
                                }
                            }
                    
                          
                            document.addEventListener('livewire:load', function () {
                                console.log('Livewire loaded, attempting to render chart');
                                renderChart();
                            });
                    
                          
                            setTimeout(() => {
                                if (!document.getElementById('popular-categories-chart').hasAttribute('data-chart-rendered')) {
                                    console.log('Retrying chart rendering after delay');
                                    renderChart();
                                }
                            }, 500);
                        </script>
                    @endpush

               

                <div class="row">
                   
                    <div class="col-lg-6 col-md-12 iq-dropdown">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Recent Customers</h4>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-spacing mb-0">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>
                                                    <svg width="32" height="32" fill="currentColor" class="text-success me-2" viewBox="0 0 16 16">
                                                        <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0Zm3.5 9.5H8v2h3.5v1.5L14 9l-2.5-3v1.5H8v2h3.5Z"/>
                                                    </svg>Name
                                                </th>
                                              
                                                <th>
                                                    <svg width="32" height="32" fill="currentColor" class="text-info me-2" viewBox="0 0 16 16">
                                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM5 12V8h6v4H5zm7-6H4V4h8v2z"/>
                                                    </svg>Image
                                                </th>
                                                <th>
                                                    <svg width="32" height="32" fill="currentColor" class="text-danger me-2" viewBox="0 0 16 16">
                                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 13H5V9h3V5h3v8z"/>
                                                    </svg>Message
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->name }}</td>
                                               
                                                <td>
                                                    @if ($customer->image)
                                                        <img src="{{ Storage::url($customer->image) }}" alt="{{ $customer->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>{{ Str::limit($customer->message, 20) }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No customers found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                  
                    <div class="col-lg-6 col-md-12 iq-dropdown">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Recent Services</h4>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-spacing mb-0">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>
                                                    <svg width="32" height="32" fill="currentColor" class="text-success me-2" viewBox="0 0 16 16">
                                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4 5h8v2H4V5zm0 4h8v2H4V9z"/>
                                                    </svg>Title
                                                </th>
                                                <th>
                                                    <svg width="32" height="32" fill="currentColor" class="text-warning me-2" viewBox="0 0 16 16">
                                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-1 3h2v6H7V3zm0 8h2v2H7v-2z"/>
                                                    </svg>Description
                                                </th>
                                                <th>
                                                    <svg width="32" height="32" fill="currentColor" class="text-info me-2" viewBox="0 0 16 16">
                                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM5 12V8h6v4H5zm7-6H4V4h8v2z"/>
                                                    </svg>Icon
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($services as $service)
                                            <tr>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ Str::limit($service->description, 20) }}</td>
                                                <td>
                                                    @if ($service->icon)
                                                        <img src="{{ Storage::url($service->icon) }}" alt="{{ $service->title }}" style="width: 50px; height: 50px; object-fit: cover;">
                                                    @else
                                                        No Icon
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="3" class="text-center">No services found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>
