<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/datum.min.css?v=1.0.0')}}">
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=1.0.0')}}">
        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css?v=1.0.0')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/all.min.css?v=1.0.0')}}">
         --}}
        <link href="../../css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="../../css2-1?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet"> 
       
    </head>
    <body>
        {{ $slot }}
       
        {{-- <script src="{{ asset('assets/js/core/libs.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/external.min.js')}}"></script>
        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('assets/js/customizer.js')}}"></script>
        
        <script src="{{ asset('assets/js/sidebar.js')}}"></script>
        
        <!-- Flextree Javascript-->
        <script src="{{ asset('assets/js/flex-tree.min.js')}}"></script>
        <script src="{{ asset('assets/js/tree.js')}}"></script>
        
        <!-- Table Treeview JavaScript -->
        <script src="{{ asset('assets/js/table-treeview.js')}}"></script>
        
        <!-- SweetAlert JavaScript -->
        <script src="{{ asset('assets/js/sweetalert.js')}}"></script>
        
        <!-- Vectoe Map JavaScript -->
        <script src="{{ asset('assets/js/vector-map-custom.js')}}"></script>
        
        <!-- Chart Custom JavaScript -->
        <script src="{{ asset('assets/js/chart-custom.js')}}"></script>
        <script src="{{ asset('assets/js/charts/01.js')}}"></script>
        
        <!-- slider JavaScript -->
        <script src="{{ asset('assets/js/slider.js')}}"></script>
        
        <!-- Emoji picker -->
        <script src="{{asset('assets/vendor/emoji-picker-element/index.js')}}" type="module"></script>
        
        
        <!-- app JavaScript -->
        <script src="{{ asset('assets/js/app.js')}}"></script> --}}
        
      </body>
    </html>
