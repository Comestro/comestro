<div class="h-[10vh]">
    <header 
        x-data="{ scrolled: false, open: false, active: window.location.pathname }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 30 })"
        :class="scrolled ? 'w-full shadow-lg backdrop-blur-md bg-white/95 duration-300 ease-out' : 'w-full bg-white duration-300 ease-out'"
        class="fixed top-0 left-0 py-3 transition-all z-50"
    >
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 xl:px-16 2xl:px-20">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{route('home')}}" class="flex items-center relative z-20">
                    <img src="{{ asset('home/comestro.png') }}" class="h-10 sm:h-12" alt="Comestro">
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-5 lg:space-x-7">
                    <a href="{{route('home')}}" 
                       class="font-medium py-1.5 px-1 relative transition-colors duration-300 group"
                       :class="active === '/home' || active === '/' ? 'text-[#0071bc]' : 'text-gray-700 hover:text-[#0071bc]'">
                        Home
                        <span 
                            class="absolute bottom-0 left-0 w-full h-0.5 transform origin-left transition-transform duration-300 ease-out"
                            :class="active === '/home' || active === '/' ? 'bg-[#0071bc] scale-x-100' : 'bg-[#0071bc] scale-x-0 group-hover:scale-x-100'">
                        </span>
                    </a>
                    
                    <a href="{{route('about')}}" 
                       class="font-medium py-1.5 px-1 relative transition-colors duration-300 group"
                       :class="active === '/about-us' ? 'text-[#f15a24]' : 'text-gray-700 hover:text-[#f15a24]'">
                        About
                        <span 
                            class="absolute bottom-0 left-0 w-full h-0.5 transform origin-left transition-transform duration-300 ease-out"
                            :class="active === '/about-us' ? 'bg-[#f15a24] scale-x-100' : 'bg-[#f15a24] scale-x-0 group-hover:scale-x-100'">
                        </span>
                    </a>
                    
                    <a href="{{route('service')}}" 
                       class="font-medium py-1.5 px-1 relative transition-colors duration-300 group"
                       :class="active === '/services' ? 'text-[#f15a24]' : 'text-gray-700 hover:text-[#f15a24]'">
                        Services
                        <span 
                            class="absolute bottom-0 left-0 w-full h-0.5 transform origin-left transition-transform duration-300 ease-out"
                            :class="active === '/services' ? 'bg-[#f15a24] scale-x-100' : 'bg-[#f15a24] scale-x-0 group-hover:scale-x-100'">
                        </span>
                    </a>
                    
                    <a href="{{route('blog')}}" 
                       class="font-medium py-1.5 px-1 relative transition-colors duration-300 group"
                       :class="active === '/blog' ? 'text-[#f15a24]' : 'text-gray-700 hover:text-[#f15a24]'">
                        Blog
                        <span 
                            class="absolute bottom-0 left-0 w-full h-0.5 transform origin-left transition-transform duration-300 ease-out"
                            :class="active === '/blog' ? 'bg-[#f15a24] scale-x-100' : 'bg-[#f15a24] scale-x-0 group-hover:scale-x-100'">
                        </span>
                    </a>
                    
                    <a href="{{route('contact')}}" class="ml-2 px-6 py-2 bg-[#f15a24] text-white rounded-md hover:bg-[#e04d1a] transition-all duration-300 font-medium hover:shadow-md">
                        Contact
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button 
                    @click="open = !open" 
                    class="md:hidden p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none transition-colors relative z-20"
                    :aria-expanded="open"
                    aria-label="Toggle menu"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path 
                            x-show="!open" 
                            x-transition:enter="transition-opacity ease-out duration-200"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                        <path 
                            x-show="open" 
                            x-transition:enter="transition-opacity ease-out duration-200"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M6 18L18 6M6 6l12 12"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu - Improved -->
        <div 
             x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-10"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-10"
             @click.away="open = false" 
             class="md:hidden fixed inset-0 bg-white z-10 pt-20 pb-6 px-4 shadow-xl overflow-y-auto"
        >
            <nav class="container mx-auto">
                <div class="flex flex-col space-y-1">
                    <a href="{{route('home')}}" 
                       @click="open = false"
                       class="px-4 py-4 rounded-lg font-medium transition-all duration-200 flex items-center"
                       :class="active === '/home' || active === '/' ? 'bg-[#0071bc]/10 text-[#0071bc]' : 'text-gray-700 hover:bg-gray-100'">
                        <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        Home
                    </a>
                    
                    <a href="{{route('about')}}"
                       @click="open = false"
                       class="px-4 py-4 rounded-lg font-medium transition-all duration-200 flex items-center" 
                       :class="active === '/about-us' ? 'bg-[#f15a24]/10 text-[#f15a24]' : 'text-gray-700 hover:bg-gray-100'">
                       <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                       </span>
                        About Us
                    </a>
                    
                    <a href="{{route('service')}}"
                       @click="open = false"
                       class="px-4 py-4 rounded-lg font-medium transition-all duration-200 flex items-center" 
                       :class="active === '/services' ? 'bg-[#f15a24]/10 text-[#f15a24]' : 'text-gray-700 hover:bg-gray-100'">
                       <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                       </span>
                        Services
                    </a>
                    
                    <a href="{{route('blog')}}"
                       @click="open = false"
                       class="px-4 py-4 rounded-lg font-medium transition-all duration-200 flex items-center" 
                       :class="active === '/blog' ? 'bg-[#f15a24]/10 text-[#f15a24]' : 'text-gray-700 hover:bg-gray-100'">
                       <span class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                       </span>
                        Blog
                    </a>
                </div>
                
                <div class="mt-8 pt-4 border-t border-gray-100">
                    <a href="{{route('contact')}}" 
                       @click="open = false"
                       class="block w-full bg-[#f15a24] text-white py-3.5 px-4 rounded-lg text-center font-medium hover:bg-[#e04d1a] transition-colors shadow-md hover:shadow-lg">
                        <span class="inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Contact Us
                        </span>
                    </a>
                </div>
            </nav>
        </div>
    </header>
</div>

