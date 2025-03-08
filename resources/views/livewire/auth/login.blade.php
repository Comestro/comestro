<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Datum | CRM Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datum.min.css?v=1.0.0') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=1.0.0') }}">
    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css?v=1.0.0') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css?v=1.0.0') }}">

    <link href="../../css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="../../css2-1?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
</head> 

  <body class="">
  
     {{-- <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-md-12 col-lg-6">
                          <div class="card">
                            <div class="card-body">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('home/comestro.png') }}" class="img-fluid rounded-normal"
                                        alt="logo">
                                </a>
                                 <h3 class="mb-3 font-weight-bold text-center">Sign In</h3> 
                                 <p class="text-center text-secondary mb-4">Log in to your account to continue</p> 
                                <form wire:submit.prevent="login">
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary form-label text-dark">Email</label>
                                                <input class="form-control" type="email" wire:model="email"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="text-secondary form-label text-dark">Password</label>
                                                    <label class="form-label"><a href="auth-recover-pwd.html"
                                                            class="text-primary">Forgot
                                                            Password?</a></label>
                                                </div>
                                                <input class="form-control" type="password" wire:model='password'
                                                    placeholder="Enter Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 d-block mt-2">Log In</button>
                                    <div class="col-lg-12 mt-3">
                                        <p class="mb-0 text-center">Don't have an account? <a href="auth-sign-up.html"
                                                class="text-primary">Sign Up</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>  
                       
                    </div>
                </div>
            </div>
        </section>
    </div>  --}}
    
      <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <a href="index.html" class="flex justify-center mb-8">
                <img src="{{ asset('home/comestro.png') }}" class="max-w-[180px] h-auto" alt="logo">
            </a>
            
            

            <form wire:submit.prevent="login">
                @if (session()->has('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input 
                            class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400" 
                            type="email" 
                            wire:model="email" 
                            placeholder="Enter your email"
                        >
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="auth-recover-pwd.html" class="text-sm text-blue-600 hover:text-blue-800 transition-colors">Forgot Password?</a>
                        </div>
                        <input 
                            class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400" 
                            type="password" 
                            wire:model="password" 
                            placeholder="Enter your password"
                        >
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 text-white py-3 rounded-md font-medium hover:bg-blue-700 transition-colors duration-200"
                    >
                        Sign In
                    </button>
                </div>

                <p class="mt-6 text-center text-gray-600 text-sm">
                    Don't have an account? 
                    <a href="auth-sign-up.html" class="text-blue-600 hover:text-blue-800 transition-colors">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
    </div> 
</body> 



