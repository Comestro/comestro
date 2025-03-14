
<div class="h-[10vh] ">
    <!-- Header -->
   
    <header 
    x-data="{ scrolled: false, open: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
    :class="scrolled ? 'w-[90%] left-1/2 transform -translate-x-1/2 rounded-full mt-2 shadow-lg duration-1000' : 'w-full duration-1000'"
    class="fixed top-0 left-0 bg-white py-4 px-6 transition-all ease-in-out z-50"
>
        <div class="flex justify-between items-center max-w-[1300px] mx-auto">
            <!-- Logo -->
           

             <h2 class="text-2xl font-semibold text-blue-500">
                <img src="{{ asset('home/comestro.png') }}"  class="inline-block h-8 mr-2">
              </h2>
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="{{route('home')}}" class="text-blue-500 font-medium">Home</a>
                <a href="{{route('about')}}" class="text-gray-700 hover:text-gray-900">About Us</a>
                {{-- <a href="{{route('portfolio')}}" class="text-gray-700 hover:text-blue-500">Portfolio</a> --}}
                <a href="{{route('service')}}" class="text-gray-700 hover:text-gray-900">Services</a>
                <a href="{{route('blog')}}" class="text-gray-700 hover:text-gray-900">Blog</a>
                <a href="{{route('contact')}}" class="text-gray-700 hover:text-gray-900">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" @click.away="open = false" class="md:hidden bg-white border-t shadow-lg absolute left-0 top-full w-full">
            <div class="flex flex-col items-center space-y-4 py-4">
                <a href="{{route('home')}}" class="text-blue-500 font-medium">Home</a>
                <a href="{{route('about')}}" class="text-gray-700 hover:text-gray-900">About Us</a>
                {{-- <a href="#" class="text-gray-700 hover:text-blue-500">Portfolio</a> --}}
                <a href="{{route('service')}}" class="text-gray-700 hover:text-gray-900">Services</a>
                <a href="{{route('blog')}}" class="text-gray-700 hover:text-gray-900">Blog</a>
                <a href="{{route('contact')}}" class="text-gray-700 hover:text-gray-900">Contact</a>
            </div>
        </div>
    </header>
</div>

