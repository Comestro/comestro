<div>
    <div class="banner">
        <div id="particles-js" class="absolute inset-0 z-0"></div>
        <div class="content">
            <h1 class="text-5xl font-bold">About Us</h1>
            <div class="text-center mt-5">
                <a href="{{route('contact')}}" class=" px-6 py-3 border border-white rounded-full text-white hover:bg-white hover:text-pink-500 font-700 transition inline-block">
                    Get in touch
                </a>
            </div> 
        </div>
        
    </div>

    <script>
 particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 40, // 👈 Triangles ki sankhya kam kar di (100 se 40)
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "triangle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 2,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": { "enable": false },
            "onclick": { "enable": false }
        }
    }
});

    </script>
 <div class="bg-gray-100">
 <div class=" py-12 text-center px-6 sm:px-8 lg:px-16">
   
    <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-10">  Mastering Programming &  <span class=" bg-orange-100 text-orange-500 px-3 py-1 ">Web design </span> </h1>
            <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-4">
                with over <span class="text-orange-500"> 12 years </span> of crafting website and apps.
            </p>  

</div>




<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="max-w-2xl mx-auto text-center px-8 mt-12">
        <h3 class="text-sm uppercase tracking-widest text-gray-500">T E A M</h3>
        <h2 class="text-3xl font-bold text-gray-900 mt-2">Our Teams</h2>
        <p class="text-gray-500 mt-4">
            Explore the innovative projects our talented teams have created, showcasing their expertise in web and app development.
        </p>
    </div>

    <div class="relative mt-10">
        <div class="absolute w-1 bg-[#0D3C4B] h-full left-1/2 transform -translate-x-1/2"></div>
        
      
        <div class="relative flex items-center mb-12">
            <div class="w-1/2 pr-8 text-right">
                <h3 class="text-lg font-semibold text-gray-800">Team Alpha - Project PtPi</h3>
                <p class="text-sm text-gray-500 mt-2">March 15, 2023 - Lead: Archana • 5 Members</p>
                <p class="text-gray-600 mt-4 text-sm">
                    Team Alpha developed "school," a cutting-edge web platform for real-time collaboration, integrating advanced APIs and a sleek UI. Launched after 6 months of intense coding sprints.
                </p>
            </div>
            <div class="w-1/2 pl-8">
                <img src="https://th.bing.com/th/id/OIP.ryWQSHNlKkfDz3-mHlytigHaE9?w=272&h=182&c=7&r=0&o=5&pid=1.7" alt="" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
          
            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10">
                <img src="https://th.bing.com/th/id/OIP.vbBofphzBR6asenSaAmw8QHaHa?w=197&h=197&c=7&r=0&o=5&pid=1.7"
                     alt="Team Gamma Icon" 
                     class="w-full h-full object-cover rounded-full border-2 border-gray-900">
            </div>
        </div>

        <div class="relative flex items-center mb-12 flex-row-reverse">
            <div class="w-1/2 pl-8 text-left">
                <h3 class="text-lg font-semibold text-gray-800">Team Beta - Learn Syntax</h3>
                <p class="text-sm text-gray-500 mt-2">August 22, 2023 - Lead: Sadique • 4 Members</p>
                <p class="text-gray-600 mt-4 text-sm">
                    Team Beta crafted "Learniong," a cross-platform app for seamless file sharing between devices. Built with Flutter, it reduced sync times by 40% compared to competitors.
                </p>
            </div>
            <div class="w-1/2 pr-8">
                <img src="https://th.bing.com/th/id/OIP.N4W-pN3fBtrtT2OXwntVDgHaFj?w=261&h=196&c=7&r=0&o=5&pid=1.7" alt="" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10">
                <img src="{{ asset('home/projects/learn.png') }}" alt="Team Beta Icon" class="w-full h-full object-cover rounded-full border-2 border-gray-900">
            </div>
            
            
        </div>

       
        <div class="relative flex items-center mb-12">
            <div class="w-1/2 pr-8 text-right">
                <h3 class="text-lg font-semibold text-gray-800">Team Gamma - Comestro</h3>
                <p class="text-sm text-gray-500 mt-2">January 10, 2024 - Lead: Sarita • 6 Members</p>
                <p class="text-gray-600 mt-4 text-sm">
                    Team Gamma built "professional," a web dashboard for tracking carbon footprints. Using React and real-time data visualization, it’s now used by over 50 companies worldwide.
                </p>
            </div>
            <div class="w-1/2 pl-8">
                <img src="https://th.bing.com/th/id/OIP.N4W-pN3fBtrtT2OXwntVDgHaFj?w=261&h=196&c=7&r=0&o=5&pid=1.7" alt="" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
         
            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10">
                <img src="https://th.bing.com/th/id/OIP.xgpkc6kouXD4WGAgRsOtYgHaE8?w=301&h=200&c=7&r=0&o=5&pid=1.7" 
                     alt="Team Gamma Icon" 
                     class="w-full h-full object-cover rounded-full border-2 border-gray-900">
            </div>
            
        </div>
    </div>
</div>



</div>
</div>
