<div class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-[#0071bc]/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#f15a24]/5 rounded-full translate-y-1/2 -translate-x-1/3"></div>
    
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <span class="inline-block py-1 px-3 rounded-full bg-[#0071bc]/10 text-[#0071bc] text-sm font-medium tracking-widest mb-5">OUR PORTFOLIO</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                Transforming Ideas Into<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0071bc] to-[#f15a24]">Exceptional Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Explore our diverse portfolio of innovative solutions that have helped businesses across industries achieve their digital transformation goals.
            </p>
        </div>
        
        <!-- Projects container -->
        <div class="space-y-24 max-w-7xl mx-auto">
            @foreach($works as $work)
                <div class="group">
                    <div class="flex flex-col {{ $work->image_position ? 'lg:flex-row' : 'lg:flex-row-reverse' }} items-center gap-8 lg:gap-16">
                        <!-- Project image -->
                        <div class="relative w-full lg:w-1/2 overflow-hidden rounded-2xl shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#0071bc]/20 to-[#f15a24]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <img 
                                src="{{ Storage::url($work->image) }}" 
                                alt="{{ $work->title }}" 
                                class="w-full h-[350px] md:h-[400px] object-cover transform transition-transform duration-700 group-hover:scale-105"
                            >
                            <!-- Project category badge -->
                            <div class="absolute top-4 right-4 py-1 px-4 bg-white/90 backdrop-blur-sm rounded-full shadow-md">
                                <span class="text-[#f15a24] text-sm font-medium">{{ $work->category ?? 'Uncategorized' }}</span>
                            </div>
                        </div>
                        
                        <!-- Project info -->
                        <div class="w-full lg:w-1/2 {{ $work->image_position ? 'lg:pl-6' : 'lg:pr-6' }}">
                            <div class="max-w-xl">
                                <h3 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-[#0071bc] transition-colors">{{ $work->title }}</h3>
                                <p class="text-lg text-gray-600 mb-8 leading-relaxed">{{ $work->description }}</p>
                                
                                <!-- Project details -->
                                <div class="grid grid-cols-2 gap-6 mb-8 border-t border-gray-200 pt-6">
                                    @if(!empty($work->client))
                                    <div>
                                        <p class="text-sm text-gray-500 mb-1">Client</p>
                                        <p class="font-medium text-gray-900">{{ $work->client }}</p>
                                    </div>
                                    @endif
                                    
                                    @if(!empty($work->technologies))
                                    <div>
                                        <p class="text-sm text-gray-500 mb-1">Technologies</p>
                                        <p class="font-medium text-gray-900">{{ $work->technologies }}</p>
                                    </div>
                                    @endif
                                    
                                    @if(!empty($work->completion_date))
                                    <div>
                                        <p class="text-sm text-gray-500 mb-1">Completed</p>
                                        <p class="font-medium text-gray-900">{{ $work->completion_date }}</p>
                                    </div>
                                    @endif
                                </div>
                                
                                <!-- CTA button -->
                                <a 
                                    href="{{ $work->link }}" 
                                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#0071bc] to-[#f15a24] text-white font-medium rounded-lg shadow-md hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300"
                                >
                                    View Case Study
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
            <div class="text-center mt-20">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center px-8 py-4 border-2 border-[#0071bc] text-[#0071bc] font-medium rounded-lg hover:bg-[#0071bc]/5 transition-colors">
                    View All Projects
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</div>