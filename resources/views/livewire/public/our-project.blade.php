

<div class="py-16 bg-gray-50 text-center">
    <div class="max-w-2xl mx-auto">
        <h3 class="text-sm uppercase tracking-widest text-gray-500 mt-2">Our Projects</h3>
        <h2 class="text-3xl font-bold text-gray-900 px-4 py-2 inline-block mt-2">
            View our works below to see our,<br>design and way of development.
        </h2>
        <p class="text-gray-500 mt-4">
            Explore the innovative projects we've created, showcasing our expertise in web and app development.
        </p>
    </div>

   
    <div class="mt-16 max-w-6xl mx-auto space-y-12">
        @foreach($works as $work)
            <div class="flex flex-col {{ $work->image_position ? 'md:flex-row' : 'md:flex-row-reverse' }} items-center md:items-start">
                <div class="relative overflow-hidden md:w-1/2">
                    <img src="{{ Storage::url($work->image) }}" alt="{{ $work->title }}" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="mt-6 md:mt-0 {{ $work->image_position ? 'md:ml-6' : 'md:mr-6' }} md:w-1/2 flex justify-center">
                    <div class="text-center md:text-left max-w-md mt-7">
                        <h3 class="text-gray-500 uppercase text-xs tracking-widest">{{ $work->category ?? 'Uncategorized' }}</h3>
                        <h2 class="text-2xl font-bold text-gray-900 mt-2">{{ $work->title }}</h2>
                        <p class="text-gray-500 mt-2 leading-relaxed">{{ $work->description }}</p>
                        <a href="{{ $work->link }}" class="mt-4 inline-block px-6 py-2 bg-red-500 text-white rounded-full hover:bg-red-600 hover:shadow-lg transition-all duration-300">
                            View Project →
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>