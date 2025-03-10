
 

      <div class="bg-gray-200">
        <div class="max-w-3xl mx-auto p-8">
            <img src="{{ asset('storage/' . $blog->image) }}" 
                 alt="{{ $blog->title }}" 
                 class="w-full h-80  mb-6">
            
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

   
   
    
   
    
