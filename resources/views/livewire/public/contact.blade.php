<div>
    <!-- Banner Section (Redesigned to match About Us) -->
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
                      Contact Us
                    </h1>
                    <p class="text-blue-100 text-lg md:text-xl mb-8 max-w-2xl">
                        Reach out to us for inquiries, collaborations, or to explore how we can work together.
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
                            
                            <!-- Contact form elements -->
                            <rect x="240" y="240" width="320" height="40" rx="4" fill="#1E293B"/>
                            <rect x="250" y="250" width="300" height="20" rx="2" fill="#94A3B8" opacity="0.6"/>
                            <rect x="240" y="290" width="320" height="40" rx="4" fill="#1E293B"/>
                            <rect x="250" y="300" width="300" height="20" rx="2" fill="#94A3B8" opacity="0.6"/>
                            <rect x="240" y="340" width="320" height="80" rx="4" fill="#1E293B"/>
                            <rect x="250" y="350" width="300" height="60" rx="2" fill="#94A3B8" opacity="0.6"/>
                            
                            <!-- Button -->
                            <rect x="450" y="430" width="100" height="30" rx="4" fill="#f15a24"/>
                            
                            <!-- Service Labels -->
                            <g class="service-labels">
                                <g transform="translate(165, 200)" class="hidden sm:block">
                                    <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">CONTACT FORM</text>
                                </g>
                                <g transform="translate(150, 200)" class="block sm:hidden">
                                    <rect x="0" y="0" width="90" height="24" rx="12" fill="#3B82F6" opacity="0.9"/>
                                    <text x="45" y="16" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="white" text-anchor="middle">CONTACT</text>
                                </g>
                                <g transform="translate(680, 250)" class="hidden md:block">
                                    <rect x="0" y="0" width="120" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="60" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">EMAIL SUPPORT</text>
                                </g>
                                <g transform="translate(580, 375)" class="hidden sm:block">
                                    <rect x="0" y="0" width="130" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="65" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">PHONE SUPPORT</text>
                                </g>
                                <g transform="translate(230, 110)" class="hidden sm:block">
                                    <rect x="0" y="0" width="150" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="75" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">LOCATION MAP</text>
                                </g>
                                <g transform="translate(400, 420)" class="hidden sm:block">
                                    <rect x="0" y="0" width="160" height="26" rx="13" fill="#3B82F6" opacity="0.9"/>
                                    <text x="80" y="17" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SOCIAL MEDIA</text>
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

  
    <div class="bg-gray-100 font-sans text-black">
        <div class="relative z-10 min-h-screen">
            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-6xl px-4 z-20">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <h2 class="text-3xl md:text-4xl font-semibold mb-6">Contact Us</h2>
                    <p class="text-lg text-gray-900 mb-8">Get in touch with us for any inquiries or collaborations.</p>
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-4 py-12 pt-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold mb-6">Send Us a Message</h3>
                        @if (session()->has('message'))
                            <div class="mb-4 p-3 bg-green-500 text-white rounded-lg">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form wire:submit.prevent="submit" class="space-y-4">
                            <div>
                                <label for="name" class="block text-gray-900 mb-2">Name</label>
                                <input wire:model="name" type="text" id="name" class="w-full p-3 bg-gray-100 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-black" placeholder="Your Name">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-900 mb-2">Email</label>
                                <input wire:model="email" type="email" id="email" class="w-full p-3 bg-gray-100 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-black" placeholder="Your Email">
                                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="message" class="block text-gray-900 mb-2">Message</label>
                                <textarea wire:model="message" id="message" rows="4" class="w-full p-3 bg-gray-100 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-black" placeholder="Your Message"></textarea>
                                @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <button type="submit" class="mt-4 px-6 py-3 bg-red-500 text-white rounded-full hover:bg-red-600 transition">Send Message</button>
                        </form>
                    </div>

                    <div class="space-y-8">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                            <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                            <div class="space-y-4">
                                <p class="flex items-center justify-start md:justify-start">
                                    <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg> 
                                    123 Comestro, Purnea, Bihar
                                </p>
                                <p class="flex items-center justify-start md:justify-start">
                                    <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg> 
                                    <a href="tel:+919546805580" class="text-black hover:underline">+919546805580</a>
                                </p>
                                <p class="flex items-center justify-start md:justify-start">
                                    <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg> 
                                    <a href="mailto:comestrotechlabs@gmail.com" class="text-black hover:underline">comestrotechlabs@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                            <h3 class="text-2xl font-semibold mb-6">Our Location</h3>
                            <div class="w-full h-64 rounded-lg overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.267766446744!2d87.47512331503675!3d25.779418983627896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39efff8324c4f35f%3A0x15a1dfb0863feae2!2sThana%20Chowk%2C%20Purnea%2C%20Bihar%20854304%2C%20India!5e0!3m2!1sen!2sin!4v1698850000000!5m2!1sen!2sin"
                                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    
</div>