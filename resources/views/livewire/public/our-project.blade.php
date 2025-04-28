<div class="py-12 sm:py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="hidden md:block absolute top-0 right-0 w-32 h-32 md:w-64 md:h-64 bg-[#0071bc]/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="hidden md:block absolute bottom-0 left-0 w-48 h-48 md:w-96 md:h-96 bg-[#f15a24]/5 rounded-full translate-y-1/2 -translate-x-1/3"></div>
    
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16 md:mb-20">
            <span class="inline-block py-1 px-3 rounded-full bg-[#0071bc]/10 text-[#0071bc] text-xs sm:text-sm font-medium tracking-widest mb-4 sm:mb-5">OUR PORTFOLIO</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6 leading-tight">
                Transforming Ideas Into<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0071bc] to-[#f15a24]">Exceptional Projects</span>
            </h2>
            <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Explore our diverse portfolio of innovative solutions that have helped businesses across industries achieve their digital transformation goals.
            </p>
        </div>
        
        <!-- Projects container -->
        <div class="space-y-12 sm:space-y-16 md:space-y-24 max-w-7xl mx-auto">
            @foreach($works as $work)
                <div class="group">
                    <div class="flex flex-col lg:flex-row {{ $work->image_position ? '' : 'lg:flex-row-reverse' }} items-center gap-6 sm:gap-8 lg:gap-12 xl:gap-16">
                        <!-- Project image -->
                        <div class="relative w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#0071bc]/20 to-[#f15a24]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img 
                                src="{{ Storage::url($work->image) }}" 
                                alt="{{ $work->title }}" 
                                class="w-full h-[200px] sm:h-[250px] md:h-[350px] lg:h-[400px] object-cover transform transition-transform duration-700 group-hover:scale-105"
                            >
                            <!-- Project category badge -->
                            <div class="absolute top-3 right-3 sm:top-4 sm:right-4 py-1 px-3 sm:px-4 bg-white/90 backdrop-blur-sm rounded-full shadow-md">
                                <span class="text-[#f15a24] text-xs sm:text-sm font-medium">{{ $work->category ?? 'Uncategorized' }}</span>
                            </div>
                        </div>
                        
                        <!-- Project info -->
                        <div class="w-full lg:w-1/2">
                            <div class="max-w-xl mx-auto lg:mx-0">
                                <h3 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-900 mb-3 sm:mb-4 group-hover:text-[#0071bc] transition-colors">{{ $work->title }}</h3>
                                <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-6 sm:mb-8 leading-relaxed">{{ $work->description }}</p>
                                
                                <!-- Project details -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-6 sm:mb-8 border-t border-gray-200 pt-4 sm:pt-6">
                                    @if(!empty($work->client))
                                    <div>
                                        <p class="text-xs sm:text-sm text-gray-500 mb-1">Client</p>
                                        <p class="font-medium text-gray-900 text-sm sm:text-base">{{ $work->client }}</p>
                                    </div>
                                    @endif
                                    
                                    @if(!empty($work->technologies))
                                    <div>
                                        <p class="text-xs sm:text-sm text-gray-500 mb-1">Technologies</p>
                                        <p class="font-medium text-gray-900 text-sm sm:text-base">{{ $work->technologies }}</p>
                                    </div>
                                    @endif
                                    
                                    @if(!empty($work->completion_date))
                                    <div>
                                        <p class="text-xs sm:text-sm text-gray-500 mb-1">Completed</p>
                                        <p class="font-medium text-gray-900 text-sm sm:text-base">{{ $work->completion_date }}</p>
                                    </div>
                                    @endif
                                </div>
                                
                                <!-- CTA button -->
                                <a 
                                    href="{{ $work->link }}" 
                                    class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 bg-gradient-to-r from-[#0071bc] to-[#f15a24] text-white font-medium text-sm sm:text-base rounded-lg shadow-md hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300"
                                >
                                    View Case Study
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- More projects button -->
        @if(count($works) > 3)
            <div class="text-center mt-12 sm:mt-16 md:mt-20">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 border-2 border-[#0071bc] text-[#0071bc] font-medium text-sm sm:text-base rounded-lg hover:bg-[#0071bc]/5 transition-colors">
                    View All Projects
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</div>