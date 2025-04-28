<div>

    <div>
        <div class="banner">
            <div id="particles-js" class="absolute inset-0 z-0"></div>
            <div class="content">
                <h1 class="text-5xl font-bold">We love to create <span class="text-white">Our</span> Services</h1>
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
    
    </div>
    
<div class="bg-gray-100 font-sans text-white">
   
   
    <section class="py-16 relative z-10 p-4 services-section">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($services as $service)
                    <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img src="{{ Storage::url($service->icon) }}" class="w-12 h-12 mb-4" alt="{{ $service->title }}">
                        <h2 class="text-2xl font-semibold text-blue-500 mb-4">{{ $service->title }}</h2>
                        <p class="text-gray-700">{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
  <style>
    .services-section .grid > div { 
    position: relative; 
}

.services-section .grid > div::before {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    border-radius: 10px;
    background: rgb(246 91 49);
    transform: rotate(0deg);
    z-index: -1;
    transition: transform 0.3s ease; 
}

.services-section .grid > div:hover::before {
    transform: rotate(10deg);
}
    </style>


</div>
</div>