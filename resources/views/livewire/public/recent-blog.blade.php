

<div class="bg-gray-100">


    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto text-center mt-4">
            <h3 class="text-sm uppercase tracking-widest text-gray-500 mt-2">Our RecentBlog</h3>
            <h2 class="text-3xl font-bold text-gray-900  px-4 py-2 inline-block mt-2">
                View our blog to see our,<br>design and way of development.
            </h2>
            <p class="text-gray-500 mt-4">
                Explore the innovative projects we've created, showcasing our expertise in web and app development.
            </p>
         </div> 
         
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-7">
            @foreach($blogs as $blog)
                <div class="bg-white overflow-hidden">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $blog->title }}</h3>
                        <p class="text-sm text-gray-500 mt-2">{{ $blog->created_at->format('M d, Y') }}</p>
                        <p class="text-gray-600 mt-4 text-sm">
                            {{ Str::limit($blog->content ?? $blog->description, 50, '...') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
    </div>