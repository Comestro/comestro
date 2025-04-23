<div>
  <!-- Banner Section -->
  <div>
      <div class="banner relative">
          <div id="particles-js" class="absolute inset-0 z-0"></div>
          <div class="content relative z-10 text-center py-20">
              <h1 class="text-5xl font-bold">We love to create <span class="text-white">Our</span> Blogs</h1>
              <div class="mt-5">
                  <a href="{{ route('contact') }}" class="px-6 py-3 border border-white rounded-full text-white hover:bg-white hover:text-pink-500 font-bold transition inline-block">
                      Get in touch
                  </a>
              </div>
          </div>
      </div>

      <!-- Particle.js Script -->
      <script>
          particlesJS("particles-js", {
              "particles": {
                  "number": { "value": 40, "density": { "enable": true, "value_area": 800 } },
                  "color": { "value": "#ffffff" },
                  "shape": { "type": "triangle", "stroke": { "width": 0, "color": "#000000" } },
                  "opacity": { "value": 0.5, "random": false, "anim": { "enable": false } },
                  "size": { "value": 3, "random": true, "anim": { "enable": false } },
                  "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 },
                  "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
              },
              "interactivity": {
                  "detect_on": "canvas",
                  "events": { "onhover": { "enable": false }, "onclick": { "enable": false } }
              }
          });
      </script>
  </div>

  <!-- Intro Section -->
  <div class="bg-gray-100">
      <div class="max-w-6xl mx-auto px-4 py-12">
          <div class="py-12 text-center px-6 sm:px-8 lg:px-16">
              <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-10">
                  View our <span class="bg-orange-100 text-orange-500 px-3 py-1">Blog</span> to see our design and
              </h1>
              <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl leading-relaxed max-w-4xl mx-auto font-light text-gray-700 mt-2">
                  sharing of insights on <span class="text-orange-500">websites</span>, way of development.
              </p>
          </div>
      </div>
 

  <!-- Blogs and Courses Section -->
  <div class="container mx-auto p-6">
      <div class="flex flex-col lg:flex-row gap-8">
          <!-- Blog Posts Section -->
          <div class="lg:w-2/3 w-full">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  @foreach($blogs as $blog)
                      <div class="bg-white overflow-hidden">
                          <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
                          <div class="p-6">
                              <h3 class="text-lg font-semibold">{{ $blog->title }}</h3>
                              <p class="text-sm text-gray-500 mt-2">{{ $blog->created_at->format('M d, Y') }}</p>
                              <p class="text-gray-600 mt-4 text-sm">
                                  {{ Str::limit($blog->content ?? $blog->description, 100, '...') }}
                              </p>
                              <a href="{{ route('read-more', $blog->id) }}" class="mt-4 text-orange-500 hover:underline">Read More →</a>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>

          <!-- Sidebar with Courses -->
          <aside class="lg:w-1/3 w-full bg-white p-6">
              <h2 class="text-lg font-bold">Popular Blogs</h2>
              @foreach($courses as $course)
                  <div class="mt-4">
                      <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-full rounded-lg shadow-md">
                      <ul class="mt-2 space-y-2">
                          <li class="text-blue-500">{{ $course->title }}</li>
                      </ul>
                  </div>
              @endforeach

               {{-- <input type="text" placeholder="Search" class="w-full border px-3 py-2 rounded-md mt-4"> --}}
            
              <h2 class="text-lg font-bold mt-6">Follow Us</h2>
              <div class="flex space-x-4 mt-2">
                <a href="https://www.instagram.com/reel/DGIyejupMvf/?utm_source=ig_web_copy_link" class="text-blue-500 text-xl">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.326 3.608 1.301.975.975 1.24 2.242 1.301 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.85c-.062 1.366-.326 2.633-1.301 3.608-.975.975-2.242 1.24-3.608 1.301-1.265.058-1.645.07-4.849.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.326-3.608-1.301-.975-.975-1.24-2.242-1.301-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.85c.062-1.366.326-2.633 1.301-3.608.975-.975 2.242-1.24 3.608-1.301 1.265-.058 1.645-.07 4.849-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.542.07-2.977.375-4.123 1.521C1.784 2.739 1.48 4.174 1.41 5.716c-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.07 1.542.375 2.977 1.521 4.123 1.146 1.146 2.581 1.451 4.123 1.521 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.542-.07 2.977-.375 4.123-1.521 1.146-1.146 1.451-2.581 1.521-4.123.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.07-1.542-.375-2.977-1.521-4.123-1.146-1.146-2.581-1.451-4.123-1.521-1.28-.058-1.688-.072-4.947-.072zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                    </svg>
                </a>
                  <a href="#" class="text-blue-500 text-xl">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.564-2.005.974-3.127 1.195-.896-.957-2.173-1.555-3.591-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.087-.205-7.713-2.163-10.141-5.144-.424.728-.666 1.572-.666 2.476 0 1.71.87 3.214 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.062c0 2.385 1.693 4.374 3.946 4.828-.413.111-.849.171-1.296.171-.316 0-.623-.031-.923-.089.623 1.946 2.432 3.365 4.575 3.403-1.68 1.318-3.808 2.104-6.102 2.104-.396 0-.788-.023-1.175-.069 2.179 1.396 4.768 2.212 7.557 2.212 9.056 0 14.01-7.503 14.01-14.01 0-.213-.005-.425-.014-.636.962-.695 1.796-1.56 2.457-2.548l-.047-.02z"></path></svg>
                  </a>
                  <a href="https://www.linkedin.com/company/comestro/posts/?feedView=all" class="text-blue-500 text-xl">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.23 0H1.77C.79 0 0 .774 0 1.727v20.545C0 23.226.79 24 1.77 24h20.46c.98 0 1.77-.774 1.77-1.727V1.727C24 .774 23.21 0 22.23 0zM7.086 20.364H3.67V9h3.416v11.364zM5.378 7.636a1.975 1.975 0 11.002-3.95 1.975 1.975 0 01-.002 3.95zM20.364 20.364h-3.414v-5.523c0-1.317-.023-3.011-1.835-3.011-1.835 0-2.115 1.432-2.115 2.915v5.619h-3.414V9h3.277v1.55h.047c.455-.86 1.564-1.766 3.221-1.766 3.442 0 4.08 2.264 4.08 5.207v6.373z"></path></svg>
                  </a>
                  <a href="https://github.com/Comestro/comestro" class="text-blue-500 text-xl">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.21.68-.47v-1.65c-2.78.6-3.37-1.34-3.37-1.34-.46-1.17-1.11-1.48-1.11-1.48-.91-.63.07-.62.07-.62 1 .07 1.52 1.02 1.52 1.02.9 1.53 2.36 1.09 2.93.83.09-.65.35-1.09.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.02-2.67-.1-.25-.44-1.28.1-2.67 0 0 .83-.27 2.75 1.02a9.56 9.56 0 012.5-.34c.85.01 1.71.11 2.5.34 1.92-1.29 2.75-1.02 2.75-1.02.54 1.39.2 2.42.1 2.67.63.69 1.02 1.58 1.02 2.67 0 3.85-2.34 4.7-4.57 4.94.36.31.68.93.68 1.88v2.8c0 .26.18.57.69.47A10.013 10.013 0 0022 12c0-5.52-4.48-10-10-10z"></path></svg>
                  </a>
              </div>

              <hr class="mt-3">
              @if($courses->isNotEmpty())
    <div class="flex items-center mt-4 space-x-4">
        <img src="{{ asset('storage/' . $courses->first()->image ?? 'placeholder.jpg') }}" alt="Course Image" class="w-16 h-16 rounded-lg shadow-md">
        <p class="text-gray-700 text-sm">{{ Str::limit($courses->first()->description ?? 'No description', 50, '...') }}</p>
    </div>
@else
    <p class="text-gray-700 text-sm">No courses available.</p>
@endif
             

              <hr class="mt-3">
              <h2 class="text-lg font-bold mt-5">We Recommend</h2>
              @foreach($courses->take(2) as $course)
                  <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="mt-4 w-full rounded-lg shadow-md">
              @endforeach
          </aside>
      </div>
  </div>

  
</div>
</div>