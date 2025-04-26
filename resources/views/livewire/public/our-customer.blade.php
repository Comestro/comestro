<div class="relative py-20 bg-gradient-to-r from-gray-50 to-gray-100 overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#0071bc] to-[#f15a24] opacity-40"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#0071bc]/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
    <div class="absolute top-40 left-10 w-64 h-64 bg-[#f15a24]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    
    <!-- Floating quotes -->
    <div class="absolute top-12 right-12 text-[120px] font-serif text-[#f15a24]/10">"</div>
    <div class="absolute bottom-12 left-12 text-[120px] font-serif text-[#0071bc]/10">"</div>
    
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <!-- Section header -->
        <div class="max-w-2xl mx-auto text-center mb-16">
            <span class="inline-block py-1 px-3 rounded-full bg-[#0071bc]/10 text-[#0071bc] text-sm font-medium tracking-wider mb-4">TESTIMONIALS</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                What Our Clients <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0071bc] to-[#f15a24]">Say About Us</span>
            </h2>
            <p class="text-lg text-gray-600">
                Discover how we've helped businesses transform their digital presence and achieve remarkable results.
            </p>
        </div>
        
        <!-- Testimonials grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if ($customers->isNotEmpty())
                @foreach ($customers as $customer)
                    <div class="testimonial-card bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <!-- Card top with quote icon -->
                        <div class="relative px-6 pt-10 pb-6">
                            <div class="absolute top-4 right-4">
                                <svg class="w-8 h-8 text-[#f15a24]/20 group-hover:text-[#f15a24]/30 transition-colors" fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6c0-2.2 1.8-4 4-4V8zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-8c0-2.2 1.8-4 4-4V8z"/>
                                </svg>
                            </div>
                            
                            <!-- Testimonial text -->
                            <p class="text-gray-600 leading-relaxed mb-8">{{ $customer->message }}</p>
                            
                            <div class="border-t border-gray-100 pt-4 flex items-center">
                                <!-- Profile image with accent border -->
                                <div class="relative">
                                    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#0071bc] to-[#f15a24] blur-sm opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                    <div class="relative h-14 w-14 rounded-full border-2 border-white overflow-hidden">
                                        <img 
                                            src="{{ $customer->image ? Storage::url($customer->image) : asset('images/default-avatar.png') }}" 
                                            alt="{{ $customer->name }}" 
                                            class="w-full h-full object-cover"
                                        >
                                    </div>
                                </div>
                                
                                <!-- Name and designation -->
                                <div class="ml-4 text-left">
                                    <h4 class="font-medium text-[#f15a24]">{{ $customer->name }}</h4>
                                    <p class="text-sm text-gray-500">{{ $customer->designation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center py-8">
                    <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                    </svg>
                    <p class="mt-4 text-xl text-gray-600">No testimonials yet.</p>
                    <p class="text-gray-500">Check back soon for customer feedback!</p>
                </div>
            @endif
        </div>
        
        <!-- Call to action -->
        <div class="mt-16 text-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#0071bc] to-[#f15a24] text-white font-medium rounded-lg shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                <span>Become Our Next Success Story</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>