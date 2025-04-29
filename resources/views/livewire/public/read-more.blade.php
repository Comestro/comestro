<div>
   
    <div class="relative py-20 bg-gradient-to-r from-gray-50 to-gray-100 overflow-hidden">
      
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#0071bc] to-[#f15a24] opacity-40"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#0071bc]/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute top-40 left-10 w-64 h-64 bg-[#f15a24]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        
      
        <div class="absolute top-12 right-12 text-[120px] font-serif text-[#f15a24]/10">"</div>
        <div class="absolute bottom-12 left-12 text-[120px] font-serif text-[#0071bc]/10">"</div>
        
       
        <div class="container max-w-3xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <img src="{{ asset('storage/' . $blog->image) }}" 
                     alt="{{ $blog->title }}" 
                     class="w-full h-80 object-cover rounded-lg mb-6">
                
                <h1 class="text-3xl font-extrabold text-gray-900">{{ $blog->title }}</h1>
                <p class="text-gray-500 text-sm mt-2">{{ $blog->created_at->format('M d, Y') }}</p>
                
                <div class="border-t border-gray-300 my-4"></div>
                
                <p class="text-gray-700 leading-relaxed">{{ $blog->content ?? $blog->description }}</p>
                
                <a href="{{ url()->previous() ?? route('blog') }}" 
                   class="mt-6 inline-block text-orange-500 font-medium hover:text-orange-600 transition cursor-pointer">
                    ← Back
                </a>
            </div>
        </div>
    </div>
</div>