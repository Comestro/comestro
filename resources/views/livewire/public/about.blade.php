<div>
    <!-- About Us Banner -->
    <div class="relative bg-gradient-to-r from-gray-900 via-slate-800 to-gray-900 min-h-[85vh] flex items-center overflow-hidden">
        <!-- Particles background -->
        <div id="particles-js" class="absolute inset-0"></div>
        
        <!-- Geometric decorative elements -->
        <div class="absolute right-0 top-0 w-96 h-96 bg-[#f15a24] opacity-10 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute left-0 bottom-0 w-64 h-64 bg-[#0071bc] opacity-10 rounded-full -translate-x-1/3 translate-y-1/3"></div>
        
        <!-- Content container -->
        <div class="container mx-auto px-6 lg:px-20 py-10 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Text content -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        About Us
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl mb-8 max-w-2xl">
                        Discover our journey, mission, and the team behind our innovative digital solutions.
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
                           
                            <circle cx="400" cy="300" r="250" fill="url(#blue_glow)" opacity="0.15"/>
                
                           
                            <circle cx="400" cy="300" r="150" fill="#0F172A" stroke="#3B82F6" stroke-width="2"/>
                            <g opacity="0.8">
                              
                                <path d="M400 150 A150 150 0 0 1 400 450" fill="none" stroke="#3B82F6" stroke-width="1" stroke-dasharray="4 4"/>
                                <path d="M250 300 A150 150 0 0 1 550 300" fill="none" stroke="#3B82F6" stroke-width="1" stroke-dasharray="4 4"/>
                                <path d="M300 200 A150 150 0 0 1 500 400" fill="none" stroke="#3B82F6" stroke-width="1" stroke-dasharray="4 4"/>
                            </g>
                
                          
                            <g class="service-icons">
                              
                                <g transform="translate(200, 100)">
                                    <rect x="0" y="0" width="60" height="40" rx="4" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                                    <circle cx="10" cy="10" r="3" fill="#3B82F6"/>
                                    <rect x="20" y="7" width="30" height="6" rx="2" fill="#94A3B8"/>
                                    <rect x="5" y="20" width="50" height="15" rx="2" fill="#0F172A"/>
                                    <path d="M60 20 L 80 20" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                    <rect x="80" y="10" width="100" height="20" rx="10" fill="#3B82F6" opacity="0.9"/>
                                    <text x="130" y="23" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">WEB DESIGN</text>
                                </g>
                
                             
                                <g transform="translate(560, 150)">
                                    <rect x="0" y="0" width="60" height="40" rx="4" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                                    <path d="M10 30 L20 20 L30 30" fill="none" stroke="#4ADE80" stroke-width="2"/>
                                    <path d="M40 30 L50 20 L60 30" fill="none" stroke="#F472B6" stroke-width="2"/>
                                    <path d="M-20 20 L-40 20" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                    <rect x="-160" y="10" width="120" height="20" rx="10" fill="#3B82F6" opacity="0.9"/>
                                    <text x="-100" y="23" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SOFTWARE DEV</text>
                                </g>
                
                              
                                <g transform="translate(200, 400)">
                                    <rect x="0" y="0" width="30" height="50" rx="6" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                                    <rect x="5" y="5" width="20" height="30" rx="2" fill="#0F172A"/>
                                    <circle cx="15" cy="42" r="2" fill="#3B82F6"/>
                                    <path d="M60 25 L80 25" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                    <rect x="80" y="15" width="120" height="20" rx="10" fill="#3B82F6" opacity="0.9"/>
                                    <text x="140" y="28" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">APP DEVELOPMENT</text>
                                </g>
                
                                <g transform="translate(560, 400)">
                                    <rect x="0" y="0" width="40" height="40" rx="4" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                                    <path d="M20 10 A15 10 0 0 1 20 20 A15 10 0 0 0 20 30 A15 10 0 0 0 20 20" fill="none" stroke="#3B82F6" stroke-width="2"/>
                                    <path d="M-20 20 L-40 20" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                    <rect x="-160" y="10" width="120" height="20" rx="10" fill="#3B82F6" opacity="0.9"/>
                                    <text x="-100" y="23" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">DATABASE</text>
                                </g>
                            </g>
                
                          
                            <g opacity="0.8">
                                <path d="M400 150 C 350 200, 450 400, 400 450" fill="none" stroke="#f15a24" stroke-width="3" stroke-dasharray="6 6">
                                    <animate attributeName="stroke-dashoffset" from="100" to="0" dur="10s" repeatCount="indefinite"/>
                                </path>
                                <circle cx="400" cy="150" r="5" fill="#f15a24"/>
                                <circle cx="400" cy="450" r="5" fill="#f15a24"/>
                                <circle cx="400" cy="300" r="8" fill="#f15a24">
                                    <animate attributeName="r" values="8;10;8" dur="3s" repeatCount="indefinite"/>
                                </circle>
                            </g>
                
                           
                            <circle cx="400" cy="300" r="180" stroke="url(#pulse1)" stroke-width="2" fill="none" opacity="0.3">
                                <animate attributeName="r" values="180;200;180" dur="6s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.3;0.1;0.3" dur="6s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="400" cy="300" r="220" stroke="url(#pulse2)" stroke-width="1" fill="none" opacity="0.2">
                                <animate attributeName="r" values="220;240;220" dur="8s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.2;0.05;0.2" dur="8s" repeatCount="indefinite"/>
                            </circle>
                
                          
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

    <!-- Rest of the content -->
    <div class="relative py-20 bg-gradient-to-r from-gray-50 to-gray-100 overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#0071bc] to-[#f15a24] opacity-40"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#0071bc]/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute top-40 left-10 w-64 h-64 bg-[#f15a24]/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        
        <!-- Floating quotes -->
        <div class="absolute top-12 right-12 text-[120px] font-serif text-[#f15a24]/10">"</div>
        <div class="absolute bottom-12 left-12 text-[120px] font-serif text-[#0071bc]/10">"</div>
        
        <div class="container max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
            <!-- Mastering Programming Section -->
            <div class="py-12 text-center px-6 sm:px-8 lg:px-16">
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-10">
                    Mastering Programming & <span class="bg-orange-100 text-orange-500 px-3 py-1">Web Design</span>
                </h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-4">
                    with over <span class="text-orange-500">12 years</span> of crafting websites and apps.
                </p>
            </div>
    
            <!-- Our Project Section -->
            <div class="max-w-6xl mx-auto px-4 py-12">
                <div class="max-w-2xl mx-auto text-center mb-16">
                    <span class="inline-block py-1 px-3 rounded-full bg-[#0071bc]/10 text-[#0071bc] text-sm font-medium tracking-wider mb-4">OUR PROJECTS</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        Discover Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0071bc] to-[#f15a24]">Innovative Projects</span>
                    </h2>
                    <p class="text-lg text-gray-600">
                        Discover the innovative projects our talented teams have crafted, showcasing their expertise in web and app development.
                    </p>
                </div>
    
                <div class="relative mt-20">
                    <div class="absolute w-1 bg-[#0D3C4B] h-full left-1/2 transform -translate-x-1/2 hidden md:block"></div>
    
                    @foreach($abouts as $index => $about)
                        <div class="relative flex flex-col {{ $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }} items-center mb-12">
                            <div class="w-full md:w-1/2 {{ $index % 2 === 0 ? 'md:pr-8 text-center md:text-right' : 'md:pl-8 text-center md:text-left' }}">
                                <a href="{{ $about->url }}" class="text-lg font-semibold text-gray-800 cursor-pointer">
                                    {{ $about->team }} - {{ $about->name }}
                                </a>
                                <p class="text-sm text-gray-500 mt-2">
                                    {{ \Carbon\Carbon::parse($about->date)->format('F d, Y') }} - 
                                    Lead: {{ $about->lead }} • {{ $about->members }} Members
                                </p>
                                <p class="text-gray-600 mt-4 text-sm">
                                    {{ $about->description }}
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 mt-4 md:mt-0 {{ $index % 2 === 0 ? 'md:pl-8' : 'md:pr-8' }}">
                                <img src="{{ Storage::url($about->image) }}" 
                                     alt="{{ $about->team }} Project" 
                                     class="w-full h-48 object-cover rounded-lg shadow-md">
                            </div>
                            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10 hidden md:block">
                                <img src="{{ Storage::url($about->icon) }}" 
                                     alt="{{ $about->team }} Icon" 
                                     class="w-full h-full object-cover rounded-full border-2 border-gray-900">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    
            <!-- Our Teams Section -->
            <div class="max-w-6xl mx-auto px-4 py-12">
                <div class="max-w-2xl mx-auto text-center mb-16">
                    <span class="inline-block py-1 px-3 rounded-full bg-[#0071bc]/10 text-[#0071bc] text-sm font-medium tracking-wider mb-4">OUR TEAMS</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        Meet Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0071bc] to-[#f15a24]">Talented Teams</span>
                    </h2>
                    <p class="text-lg text-gray-600">
                        Discover the innovative projects our talented teams have crafted, showcasing their expertise in web and app development.
                    </p>
                </div>
    
                <div class="mt-10 overflow-x-auto flex space-x-6 pb-4 snap-x snap-mandatory">
                    @forelse ($teams as $team)
                        <div class="bg-white overflow-hidden w-72 flex-shrink-0 snap-center transform transition duration-300 hover:scale-105">
                            <img 
                                src="{{ $team->image ? Storage::url($team->image) : 'https://via.placeholder.com/288x192' }}" 
                                alt="{{ $team->name }}" 
                                class="w-full h-64 object-cover"
                            >
                            <div class="p-6 text-center">
                                <h4 class="text-xl font-bold text-gray-900">{{ $team->name }}</h4>
                                <p class="text-gray-600 mt-2">{{ $team->role }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="w-full text-center py-4">
                            <p class="text-gray-600">No team members found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    
        <style>
            .overflow-x-auto::-webkit-scrollbar {
                display: none;
            }
            
            .overflow-x-auto {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        </style>
    </div>
</div>