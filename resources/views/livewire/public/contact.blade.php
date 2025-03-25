<div>
    <div class="banner relative">
        <div id="particles-js" class="absolute inset-0 z-0"></div>
        <div class="content">
            <h1 class="text-5xl font-bold">We love to create <span class="text-white">Our</span> Contacts</h1>
            <div class="text-center mt-5">
                <a href="{{route('contact')}}" class="px-6 py-3 border border-white rounded-full text-white hover:bg-white hover:text-pink-500 font-700 transition inline-block">
                    Get in touch
                </a>
            </div>
        </div>
    </div>
   <div class="bg-gray-100 font-sans text-black">
        <div class="relative z-10 min-h-screen">
            <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-6xl px-4 z-20">
                <div class="bg-gray-100  p-6 rounded-lg shadow-lg text-center">
                    <h2 class="text-3xl md:text-4xl font-semibold mb-6">Contact Us</h2>
                    <p class="text-lg text-gray-900 mb-8">Get in touch with us for any inquiries or collaborations.</p>
                </div>
            </div>

          
            <div class="max-w-6xl mx-auto px-4 py-12 pt-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 ">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold mb-6">Send Us a Message</h3>
                        @if (session()->has('message'))
                            <div class="mb-4 p-3 bg-green-500 text-white rounded-lg">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form wire:submit.prevent="submit"class="space-y-4">
                            <div>
                                <label for="name" class="block text-gray-900 mb-2">Name</label>
                                <input wire:model="name" type="text" id="name" class="w-full p-3 bg-gray-100 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-white" placeholder="Your Name">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-900 mb-2">Email</label>
                                <input wire:model="email" type="email" id="email" class="w-full p-3 bg-gray-100 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-white" placeholder="Your Email">
                                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label for="message" class="block text-gray-900 mb-2">Message</label>
                                <textarea wire:model="message" id="message" rows="4" class="w-full p-3 bg-gray-100 rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-white" placeholder="Your Message"></textarea>
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
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28784.500019726094!2d87.46488199140625!3d25.785414299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39efff8324c4f35f%3A0x15a1dfb0863feae2!2sPurnea%2C%20Bihar%2C%20India!5e0!3m2!1sen!2sin!4v1698850000000!5m2!1sen!2sin"
                                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 40,
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

