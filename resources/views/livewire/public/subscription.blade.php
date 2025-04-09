<div>
    <h3 class="text-lg font-semibold text-white tracking-wide">STAY UPDATED</h3>
    <p class="text-gray-300 mt-2 text-sm">Get the latest insights and exclusive offers.</p>

    <form wire:submit.prevent="subscribe" class="flex mt-4 w-full max-w-md mx-auto">
        <input 
            type="email" 
            wire:model="email" 
            placeholder="Your Email" 
            class="bg-gray-700 text-white px-4 py-2 w-full outline-none rounded-l-md transition-all duration-300 focus:ring-2 focus:ring-red-500 focus:bg-gray-600 focus:scale-105 transform" 
            required
        />
        <button 
            type="submit" 
            class="bg-red-500 text-white px-4 py-2 rounded-r-md hover:bg-red-600 hover:scale-110 transition-all duration-300 font-medium"
        >
            SUBSCRIBE
        </button>
    </form>

    @if($message)
        <p class="text-green-400 mt-2 text-sm">{{ $message }}</p>
    @endif

    @error('email')
        <p class="text-red-400 mt-2 text-sm">{{ $message }}</p>
    @enderror
</div>