<div>
    <div class="banner">
        <div id="particles-js" class="absolute inset-0 z-0"></div>
        <div class="content">
            <h1 class="text-5xl font-bold">We love to create <span class="text-white">Our</span> Portfolio</h1>
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
        <h2 class="text-4xl font-extrabold  mt-2 bg-gradient-to-r from-teal-500 to-blue-500 bg-clip-text text-transparent">
          A B O U T
        </h2>
       <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-10">  Mastering Programming &  <span class=" bg-orange-100 text-orange-500 px-3 py-1 ">Web design </span> </h1>
               <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-4">
                   with over <span class="text-orange-500"> 13 years </span> of expertise in website and apps  development.
               </p>  
   
   </div>
   
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="max-w-2xl mx-auto text-center px-8 mt-12">
        <h3 class="text-sm uppercase tracking-widest text-gray-500">T E A M</h3>
        <h2  class="text-4xl font-extrabold  mt-2 bg-gradient-to-r from-teal-500 to-blue-500 bg-clip-text text-transparent">Our Teams</h2>
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
 

<div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Header Section -->
    <div class="max-w-2xl mx-auto text-center px-8 mt-12">
        <h3 class="text-sm uppercase tracking-widest text-gray-500 font-semibold">C L I E N T</h3>
        <h2 class="text-4xl font-extrabold  mt-2 bg-gradient-to-r from-teal-500 to-blue-500 bg-clip-text text-transparent">Our Clients</h2>
        <p class="text-gray-600 mt-4 text-lg">
            Discover the innovative projects our talented teams have crafted, showcasing their expertise in web and app development.
        </p>
    </div>


    <div class="relative mt-10">
        <div class="absolute w-1 bg-[#0D3C4B] h-full left-1/2 transform -translate-x-1/2 hidden md:block"></div>

        <!-- Client 1 -->
        <div class="relative flex flex-col md:flex-row items-center mb-12">
            <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
                <h4 class="text-xl font-bold text-gray-900">Bihar Shop</h4>
                <p class="text-gray-600 mt-2">
                    A dynamic e-commerce platform with seamless UI/UX and robust backend integration.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 flex justify-center md:justify-start">
                <img src="https://comestro.com/logo%20(2).png" alt="Comestro Logo" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
            </div>
            <div class="absolute w-4 h-4 left-1/2 transform -translate-x-1/2 z-10 bg-[#0D3C4B] rounded-full hidden md:block"></div>
        </div>

        <!-- Client 2 -->
        <div class="relative flex flex-col md:flex-row-reverse items-center mb-12">
            <div class="w-full md:w-1/2 md:pl-8 text-center md:text-left">
                <h4 class="text-xl font-bold text-gray-900">Smart Studio</h4>
                <p class="text-gray-600 mt-2">
                    A cutting-edge mobile app designed for scalability and performance optimization.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 flex justify-center md:justify-end">
                <img src="https://comestro.com/image%20(3).png" alt="Tech Innovate Logo" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
            </div>
            <div class="absolute w-4 h-4 left-1/2 transform -translate-x-1/2 z-10 bg-[#0D3C4B] rounded-full hidden md:block"></div>
        </div>

        <!-- Client 3 -->
        <div class="relative flex flex-col md:flex-row items-center mb-12">
            <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
                <h4 class="text-xl font-bold text-gray-900">PtPi</h4>
                <p class="text-gray-600 mt-2">
                    A responsive web solution with stunning visuals and advanced functionality.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 flex justify-center md:justify-start">
                <img src="https://th.bing.com/th?id=OIP.jbeNLukc6-j5pzDYkIQ2uAHaHa&w=250&h=250&c=8&rs=1&qlt=90&r=0&o=6&pid=3.1&rm=2" alt="Creative Solutions Logo" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
            </div>
            <div class="absolute w-4 h-4 left-1/2 transform -translate-x-1/2 z-10 bg-[#0D3C4B] rounded-full hidden md:block"></div>
        </div>
    </div>
</div>

<div class="max-w-2xl mx-auto text-center px-8 mt-12">
    <h3 class="text-sm uppercase tracking-widest text-gray-500">S E R V I C E</h3>
    <h2 class="text-4xl font-extrabold  mt-2 bg-gradient-to-r from-teal-500 to-blue-500 bg-clip-text text-transparent">Our Service</h2>
    <p class="text-gray-500 mt-4">
        Explore the innovative projects our talented teams have created, showcasing their expertise in web and app development.
    </p>
</div>
<section class="py-16 relative z-10">
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
            background: palevioletred;
            transform: rotate(0deg);
            z-index: -1;
            transition: transform 0.3s ease; 
        }

        .grid > div:hover::before {
            transform: rotate(10deg);
        }
        .grid svg {
        font-size: 2.5rem;
        color: #db2777; 
        margin-top: 40px;
        margin-bottom: 10px;
       
    }
</style>
<div class="max-w-2xl mx-auto text-center px-8 mt-5">
    <h3 class="text-sm uppercase tracking-widest text-gray-500 font-semibold">C O N T A C T</h3>
    <h2  class="text-4xl font-extrabold  mt-2 bg-gradient-to-r from-teal-500 to-blue-500 bg-clip-text text-transparent">Let’s Connect With Us</h2>
    <p class="text-gray-600 mt-2 mb-6">We’d love to hear from you! Reach out and let’s start a conversation.</p>
    <div class="text-center">
        <a href="{{route('contact')}}" class="px-8 py-4 border-2 border-black rounded-full text-black bg-white font-bold text-lg hover:bg-gradient-to-r hover:bg-pink-500 hover:text-white hover:border-transparent transition-all duration-300 inline-block shadow-md">
            Get in Touch
        </a>
    </div>
</div>

<div class="bg-gray-100 py-12"></div>
</div>
</div>
