<div>
    <!-- Banner Section -->
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
                        We Love to Create <span class="text-[#f15a24]">Our</span> Blogs
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl mb-8 max-w-2xl">
                        View our blog to see our design and sharing of insights on websites and development.
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
                
                <!-- Hero image (SVG from About Us) -->
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
                                <g transform="translate(165, 200)" class="hidden sm:block">
                                    <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">BLOG WRITING</text>
                                </g>
                                <g transform="translate(150, 200)" class="block sm:hidden">
                                    <rect x="0" y="0" width="90" height="24" rx="12" fill="#3B82F6" opacity="0.9"/>
                                    <text x="45" y="16" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="white" text-anchor="middle">BLOGS</text>
                                </g>
                                <g transform="translate(680, 250)" class="hidden md:block">
                                    <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">WEB INSIGHTS</text>
                                </g>
                                <g transform="translate(580, 375)" class="hidden sm:block">
                                    <rect x="0" y="0" width="130" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="65" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">DEVELOPMENT TIPS</text>
                                </g>
                                <g transform="translate(230, 110)" class="hidden sm:block">
                                    <rect x="0" y="0" width="150" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="75" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">DESIGN TRENDS</text>
                                </g>
                                <g transform="translate(400, 420)" class="hidden sm:block">
                                    <rect x="0" y="0" width="160" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="80" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">TECH INNOVATIONS</text>
                                </g>
                                <g class="hidden sm:block">
                                    <path d="M225 200 L 240 240" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                    <path d="M680 263 L 640 290" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                    <path d="M600 375 L 600 370" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                    <path d="M305 110 L 330 150" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                    <path d="M480 420 L 430 390" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="3 2"/>
                                </g>
                            </g>
                            
                            <!-- Floating elements -->
                            <g opacity="0.8" class="hidden sm:block">
                                <path d="M650 180 C680 180 680 150 650 150 C650 120 610 120 610 150 C580 140 580 190 610 180 Z" fill="url(#cloud_gradient)"/>
                                <path d="M600 180 L 520 210" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                <circle cx="520" cy="210" r="5" fill="#3B82F6"/>
                                <rect x="130" y="220" width="50" height="70" rx="4" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                                <path d="M145 245 L 157 235 L 165 245 L 157 255 Z" fill="#3B82F6"/>
                                <path d="M150 260 L 160 260" stroke="#94A3B8" stroke-width="2"/>
                                <path d="M145 270 L 165 270" stroke="#94A3B8" stroke-width="2"/>
                                <path d="M180 255 L 240 255" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                <rect x="670" y="280" width="60" height="100" rx="8" fill="#1E293B" stroke="#3B82F6" stroke-width="1"/>
                                <rect x="675" y="290" width="50" height="70" rx="2" fill="#0F172A"/>
                                <rect x="685" y="300" width="30" height="6" rx="2" fill="#3B82F6" opacity="0.8"/>
                                <rect x="685" y="312" width="30" height="4" rx="1" fill="#94A3B8" opacity="0.6"/>
                                <rect x="685" y="320" width="20" height="4" rx="1" fill="#94A3B8" opacity="0.6"/>
                                <rect x="685" y="340" width="30" height="10" rx="2" fill="#3B82F6"/>
                                <circle cx="700" cy="375" r="5" fill="#94A3B8"/>
                                <path d="M670 330 L 600 290" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                <circle cx="600" cy="290" r="5" fill="#3B82F6"/>
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
                                <path d="M195 380 L 240 380" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                <path d="M650 400 C 690 370, 700 420, 730 400" stroke="#3B82F6" stroke-width="2" fill="none"/>
                                <circle cx="650" cy="400" r="5" fill="#3B82F6"/>
                                <circle cx="730" cy="400" r="5" fill="#3B82F6"/>
                                <path d="M650 400 L 600 370" stroke="#3B82F6" stroke-width="2" stroke-dasharray="4 2"/>
                                <ellipse cx="600" cy="340" rx="25" ry="10" fill="none" stroke="#3B82F6" stroke-width="1"/>
                                <path d="M575 340 L 575 370" stroke="#3B82F6" stroke-width="1"/>
                                <path d="M625 340 L 625 370" stroke="#3B82F6" stroke-width="1"/>
                                <ellipse cx="600" cy="370" rx="25" ry="10" fill="none" stroke="#3B82F6" stroke-width="1"/>
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
        </div>

        <!-- Particles.js Script -->
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
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
            <!-- Intro Section -->
            <div class="py-12 text-center px-6 sm:px-8 lg:px-16">
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-10">
                    View our <span class="bg-orange-100 text-orange-500 px-3 py-1">Blog</span> to see our design and
                </h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-4">
                    sharing of insights on <span class="text-orange-500">websites</span>, way of development.
                </p>
            </div>
    
            <!-- Blogs and Courses Section -->
            <div class="flex flex-col lg:flex-row gap-8 py-12">
                <!-- Blog Posts Section -->
                <div class="lg:w-2/3 w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($blogs as $blog)
                            <div class="bg-white overflow-hidden rounded-lg shadow-md transform transition duration-300 hover:scale-105">
                                <img src="{{ asset('storage/' . $blog->image) }}" 
                                     alt="{{ $blog->title }}" 
                                     class="w-full h-64 object-cover">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-gray-900">{{ $blog->title }}</h3>
                                    <p class="text-sm text-gray-500 mt-2">
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </p>
                                    <p class="text-gray-600 mt-4 text-sm">
                                        {{ Str::limit($blog->content ?? $blog->description, 100, '...') }}
                                    </p>
                                    <a href="{{ route('read-more', $blog->id) }}" 
                                       class="mt-4 text-[#f15a24] hover:underline font-medium">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    
                <!-- Sidebar with Courses -->
                <aside class="lg:w-1/3 w-full bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-gray-900">Popular Blogs</h2>
                    @foreach($courses as $course)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $course->image) }}" 
                                 alt="{{ $course->title }}" 
                                 class="w-full rounded-lg shadow-md">
                            <ul class="mt-2 space-y-2">
                                <li class="text-[#0071bc] font-medium">{{ $course->title }}</li>
                            </ul>
                        </div>
                    @endforeach
    
                    <h2 class="text-lg font-bold mt-6 text-gray-900">Follow Us</h2>
                    <div class="flex space-x-4 mt-2">
                        <a href="https://www.instagram.com/reel/DGIyejupMvf/?utm_source=ig_web_copy_link" 
                           class="text-[#0071bc] hover:text-[#f15a24] text-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.326 3.608 1.301.975.975 1.24 2.242 1.301 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.85c-.062 1.366-.326 2.633-1.301 3.608-.975.975-2.242 1.24-3.608 1.301-1.265.058-1.645.07-4.849.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.326-3.608-1.301-.975-.975-1.24-2.242-1.301-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.85c.062-1.366.326-2.633 1.301-3.608.975-.975 2.242-1.24 3.608-1.301 1.265-.058 1.645-.07 4.849-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.542.07-2.977.375-4.123 1.521C1.784 2.739 1.48 4.174 1.41 5.716c-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.07 1.542.375 2.977 1.521 4.123 1.146 1.146 2.581 1.451 4.123 1.521 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.542-.07 2.977-.375 4.123-1.521 1.146-1.146 1.451-2.581 1.521-4.123.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.07-1.542-.375-2.977-1.521-4.123-1.146-1.146-2.581-1.451-4.123-1.521-1.28-.058-1.688-.072-4.947-.072zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                            </svg>
                        </a>
                        <a href="#" 
                           class="text-[#0071bc] hover:text-[#f15a24] text-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.564-2.005.974-3.127 1.195-.896-.957-2.173-1.555-3.591-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.087-.205-7.713-2.163-10.141-5.144-.424.728-.666 1.572-.666 2.476 0 1.71.87 3.214 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.062c0 2.385 1.693 4.374 3.946 4.828-.413.111-.849.171-1.296.171-.316 0-.623-.031-.923-.089.623 1.946 2.432 3.365 4.575 3.403-1.68 1.318-3.808 2.104-6.102 2.104-.396 0-.788-.023-1.175-.069 2.179 1.396 4.768 2.212 7.557 2.212 9.056 0 14.01-7.503 14.01-14.01 0-.213-.005-.425-.014-.636.962-.695 1.796-1.56 2.457-2.548l-.047-.02z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/comestro/posts/?feedView=all" 
                           class="text-[#0071bc] hover:text-[#f15a24] text-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.23 0H1.77C.79 0 0 .774 0 1.727v20.545C0 23.226.79 24 1.77 24h20.46c.98 0 1.77-.774 1.77-1.727V1.727C24 .774 23.21 0 22.23 0zM7.086 20.364H3.67V9h3.416v11.364zM5.378 7.636a1.975 1.975 0 11.002-3.95 1.975 1.975 0 01-.002 3.95zM20.364 20.364h-3.414v-5.523c0-1.317-.023-3.011-1.835-3.011-1.835 0-2.115 1.432-2.115 2.915v5.619h-3.414V9h3.277v1.55h.047c.455-.86 1.564-1.766 3.221-1.766 3.442 0 4.08 2.264 4.08 5.207v6.373z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/Comestro/comestro" 
                           class="text-[#0071bc] hover:text-[#f15a24] text-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.21.68-.47v-1.65c-2.78.6-3.37-1.34-3.37-1.34-.46-1.17-1.11-1.48-1.11-1.48-.91-.63.07-.62.07-.62 1 .07 1.52 1.02 1.52 1.02.9 1.53 2.36 1.09 2.93.83.09-.65.35-1.09.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.02-2.67-.1-.25-.44-1.28.1-2.67 0 0 .83-.27 2.75 1.02a9.56 9.56 0 012.5-.34c.85.01 1.71.11 2.5.34 1.92-1.29 2.75-1.02 2.75-1.02.54 1.39.2 2.42.1 2.67.63.69 1.02 1.58 1.02 2.67 0 3.85-2.34 4.7-4.57 4.94.36.31.68.93.68 1.88v2.8c0 .26.18.57.69.47A10.013 10.013 0 0022 12c0-5.52-4.48-10-10-10z"/>
                            </svg>
                        </a>
                    </div>
    
                    <hr class="my-4">
                    @if($courses->isNotEmpty())
                        <div class="flex items-center mt-4 space-x-4">
                            <img src="{{ asset('storage/' . $courses->first()->image ?? 'placeholder.jpg') }}" 
                                 alt="Course Image" 
                                 class="w-16 h-16 rounded-lg shadow-md">
                            <p class="text-gray-700 text-sm">
                                {{ Str::limit($courses->first()->description ?? 'No description', 50, '...') }}
                            </p>
                        </div>
                    @else
                        <p class="text-gray-700 text-sm">No courses available.</p>
                    @endif
    
                    <hr class="my-4">
                    <h2 class="text-lg font-bold text-gray-900">We Recommend</h2>
                    @foreach($courses->take(2) as $course)
                        <img src="{{ asset('storage/' . $course->image) }}" 
                             alt="{{ $course->title }}" 
                             class="mt-4 w-full rounded-lg shadow-md">
                    @endforeach
                </aside>
            </div>
        </div>
    </div>
</div>

