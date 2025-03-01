<div class="py-16 bg-gray-50 text-center">
    <h3 class="text-gray-400 uppercase tracking-widest text-sm mt-2">Our Services</h3>
    <h2 class="text-4xl font-bold text-gray-900 mt-2">
        Web & Mobile app design, <br> bring your ideas to life
    </h2>
    <p class="text-gray-500 mt-4 max-w-2xl mx-auto p-2">
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
    </p>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        @foreach($services as $service)
        <div class="">
            <div class="relative w-24 h-24 mx-auto">
                <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                    <div class="w-24 h-24 {{ $service['bg'] }} flex items-center justify-center clip-hexagon">
                        <span class="text-4xl text-blue-500">
                            {{ $service['icon'] }}
                        </span>
                    </div>
                </div>
            </div>
            <h4 class="text-lg font-semibold text-gray-800 mt-6">{{ $service['title'] }}</h4>
            <p class="text-gray-600 text-sm mt-2">{{ $service['description'] }}</p>
        </div>
        @endforeach
    </div>
</div>

<style>
    .clip-hexagon {
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }
</style>
