<div class="h-[10vh]">
    <header 
        x-data="{ scrolled: false, open: false, active: window.location.pathname }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })"
        :class="scrolled ? 'w-full shadow-md backdrop-blur-sm bg-white/95 duration-300 ease-out' : 'w-full bg-white duration-300 ease-out'"
        class="fixed top-0 left-0 py-4 transition-all z-50"
    >
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <!-- Logo - Simplified -->
                <a href="{{route('home')}}" class="flex items-center">
                    <img src="{{ asset('home/comestro.png') }}" class="h-12 sm:h-12" alt="Comestro">
                </a>

                <!-- Desktop Navigation - Cleaner -->
                <nav class="hidden md:flex items-center space-x-6 lg:space-x-8">
                    <a href="{{route('home')}}" 
                       class="font-medium border-b-2 py-1.5 transition-colors duration-200"
                       :class="active === '/home' || active === '/' ? 'border-[#0071bc] text-[#0071bc]' : 'border-transparent text-gray-700 hover:text-[#0071bc]'">
                        Home
                    </a>
                    
                    <a href="{{route('about')}}" 
                       class="font-medium border-b-2 py-1.5 transition-colors duration-200"
                       :class="active === '/about-us' ? 'border-[#f15a24] text-[#f15a24]' : 'border-transparent text-gray-700 hover:text-[#f15a24]'">
                        About
                    </a>
                    
                    <a href="{{route('service')}}" 
                       class="font-medium border-b-2 py-1.5 transition-colors duration-200"
                       :class="active === '/services' ? 'border-[#f15a24] text-[#f15a24]' : 'border-transparent text-gray-700 hover:text-[#f15a24]'">
                        Services
                    </a>
                    
                    <a href="{{route('blog')}}" 
                       class="font-medium border-b-2 py-1.5 transition-colors duration-200"
                       :class="active === '/blog' ? 'border-[#f15a24] text-[#f15a24]' : 'border-transparent text-gray-700 hover:text-[#f15a24]'">
                        Blog
                    </a>
                    
                    <a href="{{route('contact')}}" class="ml-2 px-5 py-2 bg-[#f15a24] text-white rounded-md hover:bg-[#e04d1a] transition-colors font-medium">
                        Contact
                    </a>
                </nav>

                <!-- Mobile Menu Button - Simplified -->
                <button @click="open = !open" class="md:hidden p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu - Simplified -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             @click.away="open = false" 
             class="md:hidden absolute top-full left-0 right-0 bg-white shadow-lg border-t">
            <nav class="container mx-auto px-4 py-3">
                <div class="flex flex-col space-y-1">
                    <a href="{{route('home')}}" 
                       class="px-4 py-3 rounded-md font-medium"
                       :class="active === '/home' || active === '/' ? 'bg-[#0071bc]/10 text-[#0071bc]' : 'text-gray-700 hover:bg-gray-100'">
                        Home
                    </a>
                    
                    <a href="{{route('about')}}"
                       class="px-4 py-3 rounded-md font-medium" 
                       :class="active === '/about-us' ? 'bg-[#f15a24]/10 text-[#f15a24]' : 'text-gray-700 hover:bg-gray-100'">
                        About Us
                    </a>
                    
                    <a href="{{route('service')}}"
                       class="px-4 py-3 rounded-md font-medium" 
                       :class="active === '/services' ? 'bg-[#f15a24]/10 text-[#f15a24]' : 'text-gray-700 hover:bg-gray-100'">
                        Services
                    </a>
                    
                    <a href="{{route('blog')}}"
                       class="px-4 py-3 rounded-md font-medium" 
                       :class="active === '/blog' ? 'bg-[#f15a24]/10 text-[#f15a24]' : 'text-gray-700 hover:bg-gray-100'">
                        Blog
                    </a>
                </div>
                
                <div class="mt-4 pt-3 border-t border-gray-100">
                    <a href="{{route('contact')}}" class="block w-full bg-[#f15a24] text-white py-3 px-4 rounded-md text-center font-medium hover:bg-[#e04d1a] transition-colors">
                        Contact Us
                    </a>
                </div>
            </nav>
        </div>
    </header>
</div>

