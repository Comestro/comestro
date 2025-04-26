<div>
    <div class="relative bg-gradient-to-r from-[#0071bc] via-[#005a96] to-[#004f84] min-h-[85vh] flex items-center overflow-hidden">
        <!-- Particles background -->
        <div id="particles-js" class="absolute inset-0"></div>
        
        <!-- Geometric decorative elements -->
        <div class="absolute right-0 top-0 w-96 h-96 bg-[#f15a24] opacity-10 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute left-0 bottom-0 w-64 h-64 bg-[#0071bc] opacity-10 rounded-full -translate-x-1/3 translate-y-1/3"></div>
        
        <!-- Content container -->
        <div class="container mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Text content -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h2 class="text-blue-300 font-semibold text-lg mb-3">INNOVATIVE SOLUTIONS</h2>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Transforming Ideas Into <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#f15a24] to-[#ff8a00]">Powerful Software</span>
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl mb-8 max-w-2xl">
                        We create cutting-edge digital solutions that help businesses scale, innovate, and stay ahead of the competition.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" class="px-8 py-4 bg-[#f15a24] hover:bg-[#e04d1a] text-white font-medium rounded-lg transition duration-300 flex items-center justify-center">
                            <span>Get Started</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('service') }}" class="px-8 py-4 border border-[#0071bc] text-blue-100 hover:bg-[#0071bc]/30 font-medium rounded-lg transition duration-300 flex items-center justify-center">
                            Explore Solutions
                        </a>
                    </div>
                </div>
                
                <!-- Hero image -->
                <div class="lg:w-1/2 flex justify-center px-4 sm:px-8 py-6 lg:py-0">
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
                          
                          <!-- Code blocks -->
                          <rect x="240" y="240" width="140" height="130" rx="4" fill="#1E293B"/>
                          <rect x="250" y="250" width="120" height="8" rx="2" fill="#4ADE80" opacity="0.6"/>
                          <rect x="250" y="265" width="100" height="8" rx="2" fill="#94A3B8" opacity="0.6"/>
                          <rect x="250" y="280" width="110" height="8" rx="2" fill="#94A3B8" opacity="0.6"/>
                          <rect x="250" y="295" width="80" height="8" rx="2" fill="#3B82F6" opacity="0.8"/>
                          <rect x="250" y="310" width="120" height="8" rx="2" fill="#94A3B8" opacity="0.6"/>
                          <rect x="250" y="325" width="90" height="8" rx="2" fill="#F472B6" opacity="0.6"/>
                          <rect x="250" y="340" width="110" height="8" rx="2" fill="#94A3B8" opacity="0.6"/>
                          
                          <!-- UI components -->
                          <rect x="400" y="240" width="160" height="60" rx="4" fill="#1E293B"/>
                          <rect x="410" y="250" width="140" height="10" rx="2" fill="#94A3B8" opacity="0.6"/>
                          <rect x="410" y="270" width="70" height="20" rx="4" fill="#3B82F6"/>
                          <rect x="490" y="270" width="50" height="20" rx="4" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                          
                          <rect x="400" y="310" width="160" height="60" rx="4" fill="#1E293B"/>
                          <circle cx="430" cy="340" r="20" fill="url(#circle_gradient)"/>
                          <rect x="460" y="330" width="90" height="8" rx="2" fill="#94A3B8" opacity="0.6"/>
                          <rect x="460" y="345" width="60" height="8" rx="2" fill="#94A3B8" opacity="0.6"/>
                          
                          <!-- Keyboard -->
                          <rect x="280" y="445" width="240" height="15" rx="6" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                          
                          <!-- Service Labels -->
                          <g class="service-labels">
                            <!-- Software Development - Responsive positioning -->
                            <g transform="translate(165, 200)" class="hidden sm:block">
                              <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                              <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SOFTWARE DEV</text>
                            </g>
                            
                            <!-- Mobile optimized version -->
                            <g transform="translate(150, 200)" class="block sm:hidden">
                              <rect x="0" y="0" width="90" height="24" rx="12" fill="#3B82F6" opacity="0.9"/>
                              <text x="45" y="16" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="white" text-anchor="middle">SOFTWARE</text>
                            </g>
                            
                            <!-- Android Development - Responsive -->
                            <g transform="translate(680, 250)" class="hidden md:block">
                              <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                              <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">ANDROID APPS</text>
                            </g>
                            
                            <!-- Database Solutions - Responsive -->
                            <g transform="translate(580, 375)" class="hidden sm:block">
                              <rect x="0" y="0" width="130" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                              <text x="65" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">DATABASE SOLUTIONS</text>
                            </g>
                            
                            <!-- Website Development - Responsive -->
                            <g transform="translate(230, 110)" class="hidden sm:block">
                              <rect x="0" y="0" width="150" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                              <text x="75" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">WEBSITE DEVELOPMENT</text>
                            </g>
                            
                            <!-- Management Systems - Responsive -->
                            <g transform="translate(400, 420)" class="hidden sm:block">
                              <rect x="0" y="0" width="160" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                              <text x="80" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">MANAGEMENT SYSTEMS</text>
                            </g>
                            
                            <!-- Connecting lines - Hide on small screens -->
                            <g class="hidden sm:block">
                              <path d="M225 200 L 240 240" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                              <path d="M680 263 L 640 290" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                              <path d="M600 375 L 600 370" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                              <path d="M305 110 L 330 150" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                              <path d="M480 420 L 430 390" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                            </g>
                          </g>
                          
                          <!-- Floating elements - Adjusted for responsiveness -->
                          <g opacity="0.8" class="hidden sm:block">
                            <!-- Cloud symbol -->
                            <path d="M650 180 C680 180 680 150 650 150 C650 120 610 120 610 150 C580 140 580 190 610 180 Z" fill="url(#cloud_gradient)"/>
                            
                            <!-- Data flow lines -->
                            <path d="M600 180 L 520 210" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                            <circle cx="520" cy="210" r="5" fill="#3B82F6"/>
                            
                            <!-- Floating code symbol -->
                            <rect x="130" y="220" width="50" height="70" rx="4" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                            <path d="M145 245 L 157 235 L 165 245 L 157 255 Z" fill="#3B82F6"/>
                            <path d="M150 260 L 160 260" stroke="#94A3B8" stroke-width="2"/>
                            <path d="M145 270 L 165 270" stroke="#94A3B8" stroke-width="2"/>
                            
                            <!-- Connection line -->
                            <path d="M180 255 L 240 255" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                            
                            <!-- Mobile device -->
                            <rect x="670" y="280" width="60" height="100" rx="8" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                            <rect x="675" y="290" width="50" height="70" rx="2" fill="#0F172A"/>
                            <rect x="685" y="300" width="30" height="6" rx="2" fill="#3B82F6" opacity="0.8"/>
                            <rect x="685" y="312" width="30" height="4" rx="1" fill="#94A3B8" opacity="0.6"/>
                            <rect x="685" y="320" width="20" height="4" rx="1" fill="#94A3B8" opacity="0.6"/>
                            <rect x="685" y="340" width="30" height="10" rx="2" fill="#3B82F6"/>
                            <circle cx="700" cy="375" r="5" fill="#94A3B8"/>
                            
                            <!-- Connection line -->
                            <path d="M670 330 L 600 290" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                            <circle cx="600" cy="290" r="5" fill="#3B82F6"/>
                            
                            <!-- Floating gear -->
                            <circle cx="170" y="380" r="25" fill="none" stroke="#3B82F6" stroke-width="2"/>
                            <circle cx="170" y="380" r="15" fill="none" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M170 355 L 170 345" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M170 415 L 170 405" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M195 380 L 205 380" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M135 380 L 145 380" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M186 364 L 193 357" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M147 403 L 154 396" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M186 396 L 193 403" stroke="#3B82F6" stroke-width="2"/>
                            <path d="M147 357 L 154 364" stroke="#3B82F6" stroke-width="2"/>
                            
                            <!-- Connection line -->
                            <path d="M195 380 L 240 380" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                            
                            <!-- Abstract circuit pattern -->
                            <path d="M650 400 C 690 370, 700 420, 730 400" stroke="#3B82F6" stroke-width="2" fill="none"/>
                            <circle cx="650" cy="400" r="5" fill="#3B82F6"/>
                            <circle cx="730" cy="400" r="5" fill="#3B82F6"/>
                            <path d="M650 400 L 600 370" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                            
                            <!-- Database symbol -->
                            <ellipse cx="600" cy="340" rx="25" ry="10" fill="none" stroke="#3B82F6" stroke-width="1"/>
                            <path d="M575 340 L 575 370" stroke="#3B82F6" stroke-width="1"/>
                            <path d="M625 340 L 625 370" stroke="#3B82F6" stroke-width="1"/>
                            <ellipse cx="600" cy="370" rx="25" ry="10" fill="none" stroke="#3B82F6" stroke-width="1"/>
                            
                            <!-- Connection line -->
                            <path d="M575 355 L 500 330" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
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
                            
                            <linearGradient id="circle_gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#3B82F6"/>
                              <stop offset="100%" stop-color="#8B5CF6"/>
                            </linearGradient>
                            
                            <linearGradient id="cloud_gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                              <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.8"/>
                              <stop offset="100%" stop-color="#93C5FD" stop-opacity="0.6"/>
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
            
            <!-- Trusted by logos -->
            <div class="mt-16 pt-8 border-t border-[#0071bc]/50">
                <p class="text-center text-blue-200 text-sm mb-6">TRUSTED BY INNOVATIVE COMPANIES</p>
                <div class="flex flex-wrap justify-center gap-x-12 gap-y-6 opacity-70">
                    <!-- Add your client logos here -->
                    <img src="{{ asset('home/client1.svg') }}" alt="Client Logo" class="h-8 w-auto">
                    <img src="{{ asset('home/client2.svg') }}" alt="Client Logo" class="h-8 w-auto">
                    <img src="{{ asset('home/client3.svg') }}" alt="Client Logo" class="h-8 w-auto">
                    <img src="{{ asset('home/client4.svg') }}" alt="Client Logo" class="h-8 w-auto">
                </div>
            </div>
        </div>
    </div>

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
                "color": "#0071bc",
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