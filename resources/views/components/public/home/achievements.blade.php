
<div class="relative bg-[#0D3C4B] py-12 md:py-24 text-white overflow-visible">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-24 h-24 md:w-40 md:h-40 bg-dot-pattern animate-dots top-5 left-5 md:top-10 md:left-10 opacity-50"></div>
        <div class="absolute w-20 h-20 md:w-32 md:h-32 bg-dot-pattern animate-dots bottom-5 right-10 md:bottom-10 md:right-20 opacity-50"></div>
        <div class="absolute w-16 h-16 md:w-24 md:h-24 bg-dot-pattern animate-dots top-1/3 left-1/2 opacity-50"></div>
    </div>

   
    <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 -mt-4 md:-mt-8">
        <div class="text-2xl text-red-500 md:text-5xl font-bold">“ Our achievements “</div>
        <p class="text-base mt-3 md:text-lg md:mt-4">
            We’ve empowered businesses with innovative solutions, delivering exceptional results that drive success. Our commitment to excellence shines through every project we undertake.
        </p>  
    </div>
</div>

<!-- Statistics Section -->
 <div class="bg-white py-8 md:py-10 relative overflow-visible">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 px-4 sm:px-6 max-w-6xl mx-auto relative">
        <div class="bg-white text-black p-4 text-center w-full h-32 sm:h-36 lg:h-40 flex flex-col justify-center relative -mt-12 sm:-mt-20 lg:-mt-24 shadow-lg">
            <h2 class="text-xl sm:text-2xl lg:text-4xl font-bold">8705</h2>
            <p class="text-gray-600 mt-2 text-sm sm:text-base">Projects Completed</p>
        </div>
        <div class="bg-red-500 text-white p-4 text-center w-full h-32 sm:h-36 lg:h-40 flex flex-col justify-center relative -mt-12 sm:-mt-20 lg:-mt-24 shadow-lg">
            <h2 class="text-xl sm:text-2xl lg:text-4xl font-bold">480</h2>
            <p class="mt-2 text-sm sm:text-base">Active Clients</p>
        </div>
        <div class="bg-white text-black p-4 text-center w-full h-32 sm:h-36 lg:h-40 flex flex-col justify-center relative -mt-12 sm:-mt-20 lg:-mt-24 shadow-lg">
            <h2 class="text-xl sm:text-2xl lg:text-4xl font-bold">626</h2>
            <p class="text-gray-600 mt-2 text-sm sm:text-base">Cups of Coffee</p>
        </div>
        <div class="bg-white text-black p-4 text-center w-full h-32 sm:h-36 lg:h-40 flex flex-col justify-center relative -mt-12 sm:-mt-20 lg:-mt-24 shadow-lg">
            <h2 class="text-xl sm:text-2xl lg:text-4xl font-bold">9774</h2>
            <p class="text-gray-600 mt-2 text-sm sm:text-base">Happy Clients</p>
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

/* Ensure text doesn't overflow on small screens */
p {
    word-wrap: break-word;
}


</style>