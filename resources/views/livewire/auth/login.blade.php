
 <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white  p-12">
            <div class="flex justify-center mb-8">
                <img src="{{ asset('home/comestro.png') }}" class="max-w-[180px] h-auto" alt="logo">
            </div>

            <form wire:submit.prevent="login">
                @if (session()->has('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
            
                @if (session()->has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
            
                <div class="flex flex-col space-y-4">
                    <div class="w-full">
                        <div class="space-y-1">
                            <label class="text-gray-600 text-sm font-medium">Email</label>
                            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   type="email" 
                                   wire:model="email" 
                                   placeholder="Enter Email">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="space-y-1">
                            <div class="flex justify-between items-center">
                                <label class="text-gray-600 text-sm font-medium">Password</label>
                            </div>
                            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                   type="password" 
                                   wire:model="password" 
                                   placeholder="Enter Password">
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="w-full mt-4 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
                    Log In
                </button>
            <div class="mt-3 text-center">
                    <p class="text-gray-600 text-sm">
                        Don't have an account? 
                        <a href="" class="text-blue-500 hover:underline">Sign Up</a>
                    </p> 
                </div> 
            </form>
        </div>
    </div>
</div> 