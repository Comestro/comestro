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
                                  {{ Str::limit($blog->content ?? $blog->description, 50, '...') }}
                              </p>
                              <a href="#" class="mt-4 text-pink-500 hover:underline">Read More →</a>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>

          <!-- Sidebar with Courses -->
          <aside class="lg:w-1/3 w-full bg-white p-6">
              <h2 class="text-lg font-bold">Popular Courses</h2>
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
                  <a href="#" class="text-blue-500 text-xl">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.675 0h-21.35C.598 0 0 .6 0 1.334v21.333C0 23.4.598 24 1.325 24h11.5V14.706h-3.134v-3.631h3.134V8.49c0-3.1 1.896-4.787 4.667-4.787 1.325 0 2.464.098 2.797.142v3.24h-1.92c-1.504 0-1.794.716-1.794 1.765v2.311h3.59l-.467 3.631h-3.123V24h6.127C23.403 24 24 23.4 24 22.667V1.334C24 .6 23.403 0 22.675 0z"></path></svg>
                  </a>
                  <a href="#" class="text-blue-500 text-xl">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.564-2.005.974-3.127 1.195-.896-.957-2.173-1.555-3.591-1.555-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.087-.205-7.713-2.163-10.141-5.144-.424.728-.666 1.572-.666 2.476 0 1.71.87 3.214 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.062c0 2.385 1.693 4.374 3.946 4.828-.413.111-.849.171-1.296.171-.316 0-.623-.031-.923-.089.623 1.946 2.432 3.365 4.575 3.403-1.68 1.318-3.808 2.104-6.102 2.104-.396 0-.788-.023-1.175-.069 2.179 1.396 4.768 2.212 7.557 2.212 9.056 0 14.01-7.503 14.01-14.01 0-.213-.005-.425-.014-.636.962-.695 1.796-1.56 2.457-2.548l-.047-.02z"></path></svg>
                  </a>
                  <a href="#" class="text-blue-500 text-xl">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.23 0H1.77C.79 0 0 .774 0 1.727v20.545C0 23.226.79 24 1.77 24h20.46c.98 0 1.77-.774 1.77-1.727V1.727C24 .774 23.21 0 22.23 0zM7.086 20.364H3.67V9h3.416v11.364zM5.378 7.636a1.975 1.975 0 11.002-3.95 1.975 1.975 0 01-.002 3.95zM20.364 20.364h-3.414v-5.523c0-1.317-.023-3.011-1.835-3.011-1.835 0-2.115 1.432-2.115 2.915v5.619h-3.414V9h3.277v1.55h.047c.455-.86 1.564-1.766 3.221-1.766 3.442 0 4.08 2.264 4.08 5.207v6.373z"></path></svg>
                  </a>
                  <a href="#" class="text-blue-500 text-xl">
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

  <!-- Comments Section -->
  <div class="container mx-auto py-12 px-4">
      <section class="bg-white p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Comments (3)</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="mt-6">
                  <h4 class="text-lg font-semibold text-gray-900 mb-4">Leave a Comment</h4>
                  <form>
                      <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" rows="4" placeholder="Write your comment here..."></textarea>
                      <button type="submit" class="mt-4 px-6 py-2 bg-pink-600 text-white rounded-full font-semibold hover:bg-pink-700 transition-colors">Post Comment ⇛</button>
                  </form>
              </div>
              <div>
                  <div class="border-b border-gray-200 pb-4 mb-4">
                      <div class="flex items-start space-x-4">
                          <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0"></div>
                          <div>
                              <p class="font-semibold text-gray-800">Aditi</p>
                              <p class="text-sm text-gray-500">March 03, 2025 • 2 hours ago</p>
                              <p class="text-gray-700 mt-2">Great article! Really enjoyed the insights on creative writing techniques.</p>
                          </div>
                      </div>
                  </div>
                  <div class="border-b border-gray-200 pb-4 mb-4">
                      <div class="flex items-start space-x-4">
                          <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0"></div>
                          <div>
                              <p class="font-semibold text-gray-800">Sarita</p>
                              <p class="text-sm text-gray-500">March 02, 2025 • 1 day ago</p>
                              <p class="text-gray-700 mt-2">This blog is so inspiring! Keep up the amazing work.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
</div>
</div>