<div class="relative min-h-screen bg-gradient-to-r from-gray-50 to-gray-100 flex items-center justify-center p-4 overflow-hidden">

    <!-- Decorative Gradient Strip Top -->
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#0071bc] to-[#f15a24] opacity-40"></div>

    <!-- Background Blurred Circles -->
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#0071bc]/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
    <div class="absolute top-40 left-10 w-64 h-64 bg-[#f15a24]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>

    <!-- Floating Quote Icons -->
    <div class="absolute top-12 right-12 text-[120px] font-serif text-[#f15a24]/10">"</div>
    <div class="absolute bottom-12 left-12 text-[120px] font-serif text-[#0071bc]/10">"</div>

    <!-- Login Card -->
    <div class="w-full max-w-md relative z-10">
        <div class="bg-white rounded-xl shadow-lg p-12">
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
                    <div>
                        <label class="text-gray-600 text-sm font-medium">Email</label>
                        <input type="email" wire:model="email"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0071bc]"
                               placeholder="Enter Email">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-gray-600 text-sm font-medium">Password</label>
                        <input type="password" wire:model="password"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#0071bc]"
                               placeholder="Enter Password">
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                        class="w-full mt-4 bg-gradient-to-r from-[#0071bc] to-[#f15a24] text-white py-2 rounded-md hover:shadow-lg transition duration-300">
                    Log In
                </button>

                {{-- <div class="mt-3 text-center">
                    <p class="text-gray-600 text-sm">
                        Don't have an account?
                        <a href="" class="text-blue-500 hover:underline">Sign Up</a>
                    </p>
                </div> --}}
            </form>
        </div>
    </div>
</div>
