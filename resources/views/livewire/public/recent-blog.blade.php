<div class="relative py-20 bg-gradient-to-r from-gray-50 to-gray-100 overflow-hidden">
    <!-- Decorative elements (matching testimonials) -->
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#0071bc] to-[#f15a24] opacity-40"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#0071bc]/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
    <div class="absolute top-40 left-10 w-64 h-64 bg-[#f15a24]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    
    <!-- Floating quotes (matching testimonials) -->
    <div class="absolute top-12 right-12 text-[120px] font-serif text-[#f15a24]/10">"</div>
    <div class="absolute bottom-12 left-12 text-[120px] font-serif text-[#0071bc]/10">"</div>
    
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
        <!-- Section header (matching testimonials style) -->
        <div class="max-w-2xl mx-auto text-center mb-16">
            <span class="inline-block py-1 px-3 rounded-full bg-[#0071bc]/10 text-[#0071bc] text-sm font-medium tracking-wider mb-4">OUR RECENT BLOG</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                Explore Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0071bc] to-[#f15a24]">Latest Insights</span>
            </h2>
            <p class="text-lg text-gray-600">
                Dive into our innovative projects and discover our expertise in web and app development.
            </p>
        </div>
        
        <!-- Blog grid (matching testimonial card style) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if ($blogs->isNotEmpty())
                @foreach ($blogs as $blog)
                    <div class="blog-card bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <!-- Blog image with gradient accent -->
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#0071bc] to-[#f15a24] blur-sm opacity-0 group-hover:opacity-20 transition-opacity"></div>
                            <img 
                                src="{{ asset('storage/' . $blog->image) }}" 
                                alt="{{ $blog->title }}" 
                                class="w-full h-64 object-cover relative z-10"
                            >
                        </div>
                        
                        <!-- Blog content -->
                        <div class="relative px-6 pt-6 pb-8">
                            <!-- Quote icon (matching testimonial card) -->
                            <div class="absolute top-4 right-4">
                                <svg class="w-8 h-8 text-[#f15a24]/20 group-hover:text-[#f15a24]/30 transition-colors" fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6c0-2.2 1.8-4 4-4V8zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-8c0-2.2 1.8-4 4-4V8z"/>
                                </svg>
                            </div>
                            
                            <!-- Blog title and meta -->
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-[#f15a24] transition-colors">{{ $blog->title }}</h3>
                            <p class="text-sm text-gray-500 mt-2">{{ $blog->created_at->format('M d, Y') }}</p>
                            <p class="text-gray-600 leading-relaxed mt-4 text-sm">
                                {{ Str::limit($blog->content ?? $blog->description, 100, '...') }}
                            </p>
                            
                          
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center py-8">
                    <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 006 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3-.512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                    </svg>
                    <p class="mt-4 text-xl text-gray-600">No blogs yet.</p>
                    <p class="text-gray-500">Check back soon for our latest insights!</p>
                </div>
            @endif
        </div>
      
        <div class="mt-16 text-center">
            <a 
                href="{{ route('blog') }}" 
                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#0071bc] to-[#f15a24] text-white font-medium rounded-lg shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300"
            >
                <span>Explore All Blogs</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>