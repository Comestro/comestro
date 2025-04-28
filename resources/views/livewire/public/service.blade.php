<div>
    <!-- Services Banner -->
    <div class="relative bg-gradient-to-r from-gray-900 via-slate-800 to-gray-900 min-h-[85vh] flex items-center overflow-hidden">
        <!-- Particles background -->
        <div id="particles-js" class="absolute inset-0 z-0"></div>
        
        <!-- Geometric decorative elements -->
        <div class="absolute right-0 top-0 w-96 h-96 bg-[#f15a24] opacity-10 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute left-0 bottom-0 w-64 h-64 bg-[#0071bc] opacity-10 rounded-full -translate-x-1/3 translate-y-1/3"></div>
        
        <!-- Content container -->
        <div class="container mx-auto px-6 lg:px-20 py-10 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Text content -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Our Services
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl mb-8 max-w-2xl">
                        Explore our comprehensive range of digital solutions, from software development to web design and database solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" 
                           class="px-8 py-4 bg-[#f15a24] hover:bg-[#e04d1a] text-white font-medium rounded-lg transition duration-300 flex items-center justify-center">
                            <span>Get in Touch</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Hero image (SVG) -->
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-xl mx-auto">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-3xl blur-xl"></div>
                        <svg width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 800 600" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative z-10">
                            <!-- Background glow -->
                            <circle cx="400" cy="300" r="250" fill="url(#blue_glow)" opacity="0.15"/>
                            
                            <!-- Main device frame -->
                            <rect x="200" y="150" width="400" height="280" rx="12" fill="#1E293B" stroke="#3B82F6" stroke-width="2"/>
                            <rect x="210" y="160" width="380" height="230" rx="4" fill="#0F172A"/>
                            
                            <!-- Screen content -->
                            <rect x="240" y="180" width="320" height="40" rx="4" fill="#334155"/>
                            <circle cx="260" cy="200" r="10" fill="#3B82F6"/>
                            <rect x="280" y="195" width="100" height="10" rx="2" fill="#94A3B8"/>
                            <rect x="480" y="195" width="60" height="10" rx="2" fill="#3B82F6"/>
                            
                            <!-- Service icons -->
                            <g transform="translate(240, 240)">
                                <rect x="0" y="0" width="140" height="130" rx="4" fill="#1E293B"/>
                                <circle cx="70" cy="65" r="30" fill="#3B82F6"/>
                                <path d="M60 55 L 70 65 L 80 55" fill="none" stroke="#FFFFFF" stroke-width="4"/>
                            </g>
                            <g transform="translate(400, 240)">
                                <rect x="0" y="0" width="140" height="130" rx="4" fill="#1E293B"/>
                                <rect x="40" y="40" width="60" height="60" rx="8" fill="#4ADE80"/>
                                <rect x="50" y="50" width="40" height="40" fill="#1E293B"/>
                            </g>
                            
                            <!-- Service Labels -->
                            <g class="service-labels">
                                <g transform="translate(165, 200)" class="hidden sm:block">
                                    <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SOFTWARE DEV</text>
                                </g>
                                <g transform="translate(680, 250)" class="hidden md:block">
                                    <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">WEB DESIGN</text>
                                </g>
                                <g transform="translate(580, 375)" class="hidden sm:block">
                                    <rect x="0" y="0" width="130" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="65" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">DATABASE SOLUTIONS</text>
                                </g>
                                <g class="hidden sm:block">
                                    <path d="M225 200 L 240 240" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                    <path d="M680 263 L 640 290" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                    <path d="M600 375 L 600 370" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                </g>
                            </g>
                            
                            <!-- Animated pulse circles -->
                            <circle cx="400" cy="300" r="180" stroke="url(#pulse1)" stroke-width="2" fill="none" opacity="0.3">
                                <animate attributeName="r" values="180;200;180" dur="6s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.3;0.1;0.3" dur="6s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="400" cy="300" r="220" stroke="url(#pulse2)" stroke-width="1" fill="none" opacity="0.2">
                                <animate attributeName="r" values="220;240;220" dur="8s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.2;0.05;0.2" dur="8s" repeatCount="indefinite"/>
                            </circle>
                            
                            <!-- Gradients -->
                            <defs>
                                <linearGradient id="blue_glow" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.8"/>
                                    <stop offset="50%" stop-color="#6366F1" stop-opacity="0.5"/>
                                    <stop offset="100%" stop-color="#8B5CF6" stop-opacity="0.8"/>
                                </linearGradient>
                                <linearGradient id="pulse1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#3B82F6"/>
                                    <stop offset="100%" stop-color="#8B5CF6"/>
                                </linearGradient>
                                <linearGradient id="pulse2" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#3B82F6"/>
                                    <stop offset="100%" stop-color="#8B5CF6"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Particles.js Script -->
        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 1000
                        }
                    },
                    "color": {
                        "value": ["#ffffff", "#f15a24", "#0071bc"]
                    },
                    "shape": {
                        "type": ["circle", "triangle", "edge"],
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.2,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 0.5,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 2,
                            "size_min": 0.3,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#f15a24",
                        "opacity": 0.2,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 1,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": true,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 0.4
                            }
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });
        </script>
    </div>

    <!-- Services Content Section -->
    <div class="relative py-20 bg-gradient-to-r from-gray-50 to-gray-100 overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#0071bc] to-[#f15a24] opacity-40"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#0071bc]/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute top-40 left-10 w-64 h-64 bg-[#f15a24]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        
        <!-- Floating quotes -->
        <div class="absolute top-12 right-12 text-[120px] font-serif text-[#f15a24]/10">"</div>
        <div class="absolute bottom-12 left-12 text-[120px] font-serif text-[#0071bc]/10">"</div>
        
        <div class="container max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
           
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
</div>