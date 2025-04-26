<div class="h-[10vh]">
    <header 
        x-data="{ scrolled: false, open: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })"
        :class="scrolled ? 'w-[98%] left-1/2 transform -translate-x-1/2 rounded-xl mt-3 shadow-[0_8px_30px_rgb(0,0,0,0.12)] backdrop-blur-sm bg-white/90 duration-300 ease-out' : 'w-full bg-white duration-300 ease-out'"
        class="fixed top-0 left-0 py-3 px-6 transition-all z-50"
    >
        <div class="flex justify-between items-center max-w-[1300px] mx-auto">
            <!-- Logo -->
            <a href="{{route('home')}}" class="flex items-center space-x-2">
                <img src="{{ asset('home/comestro.png') }}" class="h-10 transition-transform hover:scale-105" alt="Comestro">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{route('home')}}" class="text-[#0071bc] font-medium hover:text-[#004f84] transition-colors">Home</a>
                <a href="{{route('about')}}" class="text-gray-600 hover:text-[#f15a24] transition-colors font-medium">About Us</a>
                <a href="{{route('service')}}" class="text-gray-600 hover:text-[#f15a24] transition-colors font-medium">Services</a>
                <a href="{{route('blog')}}" class="text-gray-600 hover:text-[#f15a24] transition-colors font-medium">Blog</a>
                <a href="{{route('contact')}}" class="bg-[#f15a24] text-white px-6 py-2 rounded-full hover:bg-[#e04d1a] transition-colors font-medium">Contact</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden focus:outline-none p-2 rounded-lg hover:bg-gray-100">
                <svg class="w-6 h-6 text-[#0071bc]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="open = false" 
             class="md:hidden absolute left-0 top-full w-full bg-white shadow-xl rounded-b-2xl border-t">
            <div class="flex flex-col space-y-4 p-6">
                <a href="{{route('home')}}" class="text-[#0071bc] font-medium hover:bg-[#0071bc]/5 p-2 rounded-lg transition-colors">Home</a>
                <a href="{{route('about')}}" class="text-gray-600 hover:bg-[#f15a24]/5 p-2 rounded-lg transition-colors">About Us</a>
                <a href="{{route('service')}}" class="text-gray-600 hover:bg-[#f15a24]/5 p-2 rounded-lg transition-colors">Services</a>
                <a href="{{route('blog')}}" class="text-gray-600 hover:bg-[#f15a24]/5 p-2 rounded-lg transition-colors">Blog</a>
                <a href="{{route('contact')}}" class="bg-[#f15a24] text-white p-2 rounded-lg text-center hover:bg-[#e04d1a] transition-colors">Contact</a>
            </div>
        </div>
    </header>
</div>

