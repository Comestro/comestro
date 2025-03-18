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





{{-- <div class="max-w-6xl mx-auto px-4 py-12">
    <div class="max-w-2xl mx-auto text-center px-8 mt-8">
        <h3 class="text-sm uppercase tracking-widest text-gray-500 font-semibold">P R O J E C T</h3>
        <h2 class="text-3xl font-bold text-gray-900 mt-2">Our Project</h2>
        <p class="text-gray-500 mt-4">
            Discover the innovative projects our talented teams have crafted, showcasing their expertise in web and app development.
        </p>
    </div>

    <div class="relative mt-20">
      
        <div class="absolute w-1 bg-[#0D3C4B] h-full left-1/2 transform -translate-x-1/2 hidden md:block"></div>

        <!-- Team Alpha -->
        <div class="relative flex flex-col md:flex-row items-center mb-12">
            <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
                <a href="https://ptpinstitute.com/" class="text-lg font-semibold text-gray-800">Team Alpha - Project PtPi</a>
                <p class="text-sm text-gray-500 mt-2">March 15, 2023 - Lead: Archana • 5 Members</p>
                <p class="text-gray-600 mt-4 text-sm">
                    Team Alpha developed "school," We provide qualified teachers committed to shaping a brighter future for your students. Login today and connect with our expert educators.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 md:pl-8">
                <img src="{{ asset('home/p1.png') }}" alt="Team Alpha Project" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10 hidden md:block">
                <img src="https://th.bing.com/th/id/OIP.vbBofphzBR6asenSaAmw8QHaHa?w=197&h=197&c=7&r=0&o=5&pid=1.7"
                     alt="Team Alpha Icon" 
                     class="w-full h-full object-cover rounded-full border-2 border-gray-900">
            </div>
        </div>

        <!-- Team Beta -->
        <div class="relative flex flex-col md:flex-row-reverse items-center mb-12">
            <div class="w-full md:w-1/2 md:pl-8 text-center md:text-left">
                <a href="https://learnsyntax.com/" class="text-lg font-semibold text-gray-800 cursor-pointer">Team Beta - Project LearnSyntax</a>
                <p class="text-sm text-gray-500 mt-2">August 22, 2023 - Lead: Sadique • 4 Members</p>
                <p class="text-gray-600 mt-4 text-sm">
                    Team Beta crafted "Learning," Dive into a space where creativity meets innovation. Learn, build, and transform ideas into impactful solutions through hands-on experience and expert guidance.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 md:pr-8">
                <img src="{{ asset('home/l1.png') }}" alt="Team Beta Project" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10 hidden md:block">
                <img src="{{ asset('home/projects/learn.png') }}" alt="Team Beta Icon" class="w-full h-full object-cover rounded-full border-2 border-gray-900">
            </div>
        </div>

        <!-- Team Gamma -->
        <div class="relative flex flex-col md:flex-row items-center mb-12">
            <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
                <a href="https://smartstudiocreation.com/" class="text-lg font-semibold text-gray-800 cursor-pointer">Team Gamma - Project SmartStudio</a>
                <p class="text-sm text-gray-500 mt-2">January 10, 2024 - Lead: Sarita • 6 Members</p>
                <p class="text-gray-600 mt-4 text-sm">
                    Team Gamma built "professional," Explore the beauty captured through the lens. Dive into a world of moments and memories preserved forever.
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 md:pl-8">
                <img src="{{ asset('home/Smart.png') }}" alt="Team Gamma Project" class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
            <div class="absolute w-8 h-8 left-1/2 transform -translate-x-1/2 z-10 hidden md:block">
                <img src="https://th.bing.com/th/id/OIP.xgpkc6kouXD4WGAgRsOtYgHaE8?w=301&h=200&c=7&r=0&o=5&pid=1.7" 
                     alt="Team Gamma Icon" 
                     class="w-full h-full object-cover rounded-full border-2 border-gray-900">
            </div>
        </div>
    </div>
</div> --}}

<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="max-w-2xl mx-auto text-center px-8 mt-8">
        <h3 class="text-sm uppercase tracking-widest text-gray-500 font-semibold">P R O J E C T</h3>
        <h2 class="text-3xl font-bold text-gray-900 mt-2">Our Project</h2>
        <p class="text-gray-500 mt-4">
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




{{-- <div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Header Section -->
    <div class="max-w-2xl mx-auto text-center px-8 mt-12">
        <h3 class="text-sm uppercase tracking-widest text-gray-500 font-semibold">T E A M</h3>
        <h2 class="text-3xl font-bold text-gray-900 mt-2">Our Teams</h2>
         <p class="text-gray-600 mt-4 text-lg">
            Discover the innovative projects our talented teams have crafted, showcasing their expertise in web and app development.
        </p> 
    
    </div>


    <div class="relative mt-10">
        <div class="absolute w-1 bg-[#0D3C4B] h-full left-1/2 transform -translate-x-1/2 hidden md:block"></div>

      
        <div class="relative flex flex-col md:flex-row items-center mb-12">
            <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
                <h4 class="text-xl font-bold text-gray-900">Sarita Yadav</h4>
                <p class="text-gray-600 mt-2">
                   Team Leader
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 flex justify-center md:justify-start">
                <img src="https://media.licdn.com/dms/image/v2/D4D03AQGV_SFZcfjv0Q/profile-displayphoto-shrink_100_100/profile-displayphoto-shrink_100_100/0/1727617914678?e=1747267200&v=beta&t=HKGvtwMXAAAmvceYiVnmCODz9YJ5XheOZ6af_O5J7aQ" alt="Comestro Logo" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
            </div>
            <div class="absolute w-4 h-4 left-1/2 transform -translate-x-1/2 z-10 bg-[#0D3C4B] rounded-full hidden md:block"></div>
        </div>

       
        <div class="relative flex flex-col md:flex-row-reverse items-center mb-12">
            <div class="w-full md:w-1/2 md:pl-8 text-center md:text-left">
                <h4 class="text-xl font-bold text-gray-900">Archana Kumari</h4>
                <p class="text-gray-600 mt-2">
                   Project Manager
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 flex justify-center md:justify-end">
                <img src="https://media.licdn.com/dms/image/v2/D5603AQE53zjwbW37Ow/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1718827196860?e=1747267200&v=beta&t=aOeV4qQW0tspjQn0IEPQQnv23CKmOG_pkItgTnGSD3I" alt="Tech Innovate Logo" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
            </div>
            <div class="absolute w-4 h-4 left-1/2 transform -translate-x-1/2 z-10 bg-[#0D3C4B] rounded-full hidden md:block"></div>
        </div>

        <div class="relative flex flex-col md:flex-row items-center mb-12">
            <div class="w-full md:w-1/2 md:pr-8 text-center md:text-right">
                <h4 class="text-xl font-bold text-gray-900">Roni Saha</h4>
                <p class="text-gray-600 mt-2">
                  Teaster
                </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 flex justify-center md:justify-start">
                <img src="https://media.licdn.com/dms/image/v2/D5603AQHnthy9MsUF7w/profile-displayphoto-shrink_100_100/B56ZSwiydGHQAY-/0/1738128699150?e=1747267200&v=beta&t=Vi_scRXth4ZUW687SBHeLpKV4Fmc9dgb5S6pCeWjiGE" alt="Creative Solutions Logo" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-full shadow-lg">
            </div>
            <div class="absolute w-4 h-4 left-1/2 transform -translate-x-1/2 z-10 bg-[#0D3C4B] rounded-full hidden md:block"></div>
        </div>
    </div>
</div> --}}
<div class="max-w-6xl mx-auto px-4 py-12">
    
    <div class="max-w-2xl mx-auto text-center px-8 mt-5">
      <h3 class="text-sm uppercase tracking-widest text-gray-500 font-semibold">T E A M</h3>
      <h2 class="text-3xl font-bold text-gray-900 mt-2">Our Teams</h2>
      <p class="text-gray-600 mt-4 text-lg">
        Discover the innovative projects our talented teams have crafted, showcasing their expertise in web and app development.
      </p>
    </div>
  
    
    <div class="mt-10 swiper w-full">
      <div class="swiper-wrapper">
        <!-- Team Member 1 -->
        <div class="swiper-slide w-72 bg-white p-6 text-center">
          <img src="https://media.licdn.com/dms/image/v2/D4D03AQGV_SFZcfjv0Q/profile-displayphoto-shrink_100_100/profile-displayphoto-shrink_100_100/0/1727617914678?e=1747267200&v=beta&t=HKGvtwMXAAAmvceYiVnmCODz9YJ5XheOZ6af_O5J7aQ" alt="Sarita Yadav" class="w-32 h-32 mx-auto object-cover rounded-full shadow-md">
          <h4 class="text-xl font-bold text-gray-900 mt-4">Sarita Yadav</h4>
          <p class="text-gray-600 mt-2">Team Leader</p>
        </div>
  
        <!-- Team Member 2 -->
        <div class="swiper-slide w-72 bg-white  p-6 text-center">
          <img src="https://media.licdn.com/dms/image/v2/D5603AQE53zjwbW37Ow/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1718827196860?e=1747267200&v=beta&t=aOeV4qQW0tspjQn0IEPQQnv23CKmOG_pkItgTnGSD3I" alt="Archana Kumari" class="w-32 h-32 mx-auto object-cover rounded-full shadow-md">
          <h4 class="text-xl font-bold text-gray-900 mt-4">Archana Kumari</h4>
          <p class="text-gray-600 mt-2">Project Manager</p>
        </div>
  
        <!-- Team Member 3 -->
        <div class="swiper-slide w-72 bg-white  p-6 text-center">
          <img src="https://media.licdn.com/dms/image/v2/D5603AQHnthy9MsUF7w/profile-displayphoto-shrink_100_100/B56ZSwiydGHQAY-/0/1738128699150?e=1747267200&v=beta&t=Vi_scRXth4ZUW687SBHeLpKV4Fmc9dgb5S6pCeWjiGE" alt="Roni Saha" class="w-32 h-32 mx-auto object-cover rounded-full shadow-md">
          <h4 class="text-xl font-bold text-gray-900 mt-4">Roni Saha</h4>
          <p class="text-gray-600 mt-2">Tester</p>
        </div>
      </div>

      <div class="swiper-button-next text-[#ea281a]"></div>
      <div class="swiper-button-prev text-[#ea281a]"></div> 
     
      <div class="swiper-pagination mt-5"></div>
    </div>
    <div class="py-10"></div>
  </div>
  
  <style>
    .swiper-button-next,
    .swiper-button-prev {
      color:#ea281a; 
    }
  
    .swiper-pagination-bullet {
      background: #ea281a;
    }
  </style>
  
  <script>
    new Swiper('.swiper', {
      slidesPerView: 'auto',
      spaceBetween: 24,
      centeredSlides: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>

</div>
</div>
