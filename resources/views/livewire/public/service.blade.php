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
   
    {{-- <section class="py-16 relative z-10 p-4">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 ">
           <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <svg class="w-12 h-12 text-pink-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Web Development</h2>
                    <p class="text-gray-700">
                        We create stunning, responsive, and high-performing websites that elevate your online presence with custom designs and seamless functionality.
                    </p>
                </div>
        
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <svg class="w-12 h-12 text-pink-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                   
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Mobile App Development</h2>
                    <p class="text-gray-700">
                        Transform your ideas into powerful iOS and Android apps with user-friendly designs and robust features to enhance customer experiences.
                    </p>
                </div>
    
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <svg class="w-12 h-12 text-pink-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">AI & ML Solutions</h2>
                    <p class="text-gray-700">
                        Unlock new possibilities with cutting-edge AI and ML solutions, including predictive analytics, automation, and intelligent systems.
                    </p>
                </div>
    
               
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <svg class="w-12 h-12 text-pink-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Cloud Computing</h2>
                    <p class="text-gray-700">
                        Scale your business with secure and flexible cloud solutions for reliable infrastructure, data management, and efficient deployment.
                    </p>
                </div>
    
           
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <svg class="w-12 h-12 text-pink-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">E-commerce Development</h2>
                    <p class="text-gray-700">
                        Build thriving online stores with customized, secure, and scalable platforms to streamline transactions and boost sales.
                    </p>
                </div>
    
                <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <svg class="w-12 h-12 text-pink-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">App Development</h2>
                    <p class="text-gray-700">
                        Build thriving online stores with customized, secure, and scalable platforms to streamline transactions and boost sales.
                    </p>
                </div>
            </div>
            </div>
            
            
      
    </section>
 
           <style>
          
            .grid > div { 
                position: relative; 
            }
    
            .grid > div::before {
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
    
            .grid > div:hover::before {
                transform: rotate(10deg);
            }
            .grid svg {
            font-size: 2.5rem;
            color: #2781db; 
            margin-top: 40px;
            margin-bottom: 10px;
           
        }
    </style> --}}
    <section class="py-16 relative z-10 p-4">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($services as $service)
                    <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <!-- Display the uploaded image from the icon column -->
                        <img 
                            src="{{ Storage::url($service->icon) }}" 
                            class="w-12 h-12 mb-4" 
                            alt="{{ $service->title }}"
                        >
                        <h2 class="text-2xl font-semibold text-blue-500 mb-4">{{ $service->title }}</h2>
                        <p class="text-gray-700">{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <style>
        .grid > div { 
            position: relative; 
        }
    
        .grid > div::before {
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
    
        .grid > div:hover::before {
            transform: rotate(10deg);
        }
    
        .grid img {
            font-size: 2.5rem;
            color: #2781db; 
            margin-top: 40px;
            margin-bottom: 10px;
        }
    </style>


</div>
</div>