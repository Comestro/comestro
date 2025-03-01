<div class="bg-white shadow-lg rounded-lg p-6 text-center">
    <div class="relative w-20 h-20 mx-auto">
        <img src="{{ asset($image) }}" alt="{{ $name }}" class="w-full h-full object-cover rounded-full">
    </div>
    <p class="text-gray-500 mt-4">{{ $message }}</p>
    <h3 class="text-orange-500 font-semibold mt-2">{{ $name }}</h3>
    <p class="text-gray-400 text-sm">{{ $designation }}</p>
</div>
