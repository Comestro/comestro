<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('home/com.png') }}">
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datum.min.css?v=1.0.0') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=1.0.0') }}">
    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css?v=1.0.0') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css?v=1.0.0') }}">

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    @livewireStyles
</head>

<body class="">

    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center" style="background: url('{{ asset('assets/images') }}') no-repeat scroll 50%;">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <x-admin.sidebar />

        <x-admin.navbar />
        {{ $slot }}
    </div>

    {{-- <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-lg-end text-center mt-lg-0 mt-3">
                    <span class="mr-1">
                        © Copyright 
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="#" class="">Datum</a> |
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer> --}}

    <!-- Library Bundle Script -->
    <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/js/charts/01.js') }}"></script>

    <!-- Other Custom Scripts -->
    <script src="{{ asset('assets/js/customizer.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/js/tree.js') }}"></script>
    <script src="{{ asset('assets/js/table-treeview.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map-custom.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Add Chart.js directly here to ensure it loads -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>