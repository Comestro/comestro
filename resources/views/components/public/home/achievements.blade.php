<div class="relative bg-[#0D3C4B] py-20 md:py-20 text-white overflow-hidden">
    <!-- Background Animated Dots -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-40 h-40 bg-dot-pattern animate-dots top-10 left-10 opacity-50"></div>
        <div class="absolute w-32 h-32 bg-dot-pattern animate-dots bottom-10 right-20 opacity-50"></div>
        <div class="absolute w-24 h-24 bg-dot-pattern animate-dots top-1/3 left-1/2 opacity-50"></div>
    </div>

    <!-- Testimonial Content -->
    <div class="relative z-10 max-w-4xl mx-auto text-center px-4">
        <div class="text-3xl text-red-500 md:text-5xl">“ Our achievements “</div>
        <p class="text-lg mt-4">
            We’ve empowered businesses with innovative solutions, delivering exceptional results that drive success. Our commitment to excellence shines through every project we undertake.
        </p>  
    </div>

    <!-- Statistics Section -->
    

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-12 px-4 sm:px-6 max-w-6xl mx-auto">
        <div class="bg-white text-black p-4 text-center w-full h-40 flex flex-col justify-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">8705</h2>
            <p class="text-gray-600 mt-2">Projects Completed</p>
        </div>
        <div class="bg-red-500 text-white p-4 text-center w-full h-40 flex flex-col justify-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">480</h2>
            <p class="mt-2">Active Clients</p>
        </div>
        <div class="bg-white text-black p-4 text-center w-full h-40 flex flex-col justify-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">626</h2>
            <p class="text-gray-600 mt-2">Cups of Coffee</p>
        </div>
        <div class="bg-white text-black p-4 text-center w-full h-40 flex flex-col justify-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">9774</h2>
            <p class="text-gray-600 mt-2">Happy Clients</p>
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
