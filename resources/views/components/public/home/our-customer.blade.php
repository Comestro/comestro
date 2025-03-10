<div class="bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto text-center mt-4">
            <h3 class="text-sm uppercase tracking-widest text-gray-500 mt-2">Our Customers</h3>
            <h2 class="text-3xl font-bold text-gray-900 px-4 py-2 inline-block mt-2">
                Meet our valued customers,<br>see their stories and roles
            </h2>
            <p class="text-gray-500 mt-2">
                Discover the people we work with and their experiences with our services.
            </p>
        </div> 
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach ($customers as $customer)
                <div class="bg-white  p-6 text-center">
                    <div class="relative w-20 h-20 mx-auto">
                        <img 
                            src="{{ $customer->image ? Storage::url($customer->image) : asset('images/default-avatar.png') }}" 
                            alt="{{ $customer->name }}" 
                            class="w-full h-full object-cover rounded-full"
                        >
                    </div>
                    <p class="text-gray-500 mt-4">{{ $customer->message }}</p>
                    <h3 class="text-orange-500 font-semibold mt-2">{{ $customer->name }}</h3>
                    <p class="text-gray-400 text-sm">{{ $customer->designation }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>