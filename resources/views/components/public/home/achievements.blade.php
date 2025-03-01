<div class="relative bg-[#0D3C4B] py-20 text-white overflow-hidden">
    <!-- Background Animated Dots -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-40 h-40 bg-dot-pattern animate-dots top-10 left-10 opacity-50"></div>
        <div class="absolute w-32 h-32 bg-dot-pattern animate-dots bottom-10 right-20 opacity-50"></div>
        <div class="absolute w-24 h-24 bg-dot-pattern animate-dots top-1/3 left-1/2 opacity-50"></div>
    </div>

    <!-- Testimonial Content -->
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="text-5xl text-red-500">“ Our achievements “</div>
        <p class="text-lg mt-4">
            Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus.
        </p>



        
    </div>

    <!-- Statistics Section -->
    <div class="grid grid-cols-4 gap-6 mt-12 px-6 max-w-6xl mx-auto -mt-12">
        <div class="bg-white text-black p-6 rounded-lg text-center shadow-md">
            <h2 class="text-4xl font-bold">8705</h2>
            <p class="text-gray-600">Projects Completed</p>
        </div>
        <div class="bg-red-500 text-white p-6 rounded-lg text-center shadow-md">
            <h2 class="text-4xl font-bold">480</h2>
            <p>Active Clients</p>
        </div>
        <div class="bg-white text-black p-6 rounded-lg text-center shadow-md">
            <h2 class="text-4xl font-bold">626</h2>
            <p class="text-gray-600">Cups of Coffee</p>
        </div>
        <div class="bg-white text-black p-6 rounded-lg text-center shadow-md">
            <h2 class="text-4xl font-bold">9774</h2>
            <p class="text-gray-600">Happy Clients</p>
        </div>
    </div>
</div>

<style>
.bg-dot-pattern {
    background-image: radial-gradient(rgba(255, 255, 255, 0.3) 1px, transparent 1px);
    background-size: 8px 8px;
}

@keyframes moveDots {
    0% { transform: translateY(0px); }
    50% { transform: translateY(10px); }
    100% { transform: translateY(0px); }
}

.animate-dots {
    animation: moveDots 5s infinite linear;
}
</style>
