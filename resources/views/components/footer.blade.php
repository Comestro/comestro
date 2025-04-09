
<div>
    <footer class="bg-no-repeat bg-cover bg-center text-white py-10" 
        style="background-image: url('{{ asset('home/footer.jpg') }}');">

        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div>
                <h2 class="text-2xl font-semibold text-blue-500">
                    <img src="{{ asset('home/comestro.png') }}"  class="inline-block h-8 mr-2">
                  </h2>
                <p class="text-gray-400 mt-2">Delivering projects at lightning speed with expert developers.</p>
          
                <div class="mt-4 flex flex-col space-y-1">
                    <a href="tel:+919546805580" class="text-red-500 text-2xl font-semibold  hover:underline">
                        📞 +91 9546805580
                    </a>
                    <a href="mailto:comestrotechlabs@gmail.com" class="text-white hover:underline">
                        ✉️ comestrotechlabs@gmail.com
                    </a>
                </div>
                
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold">OUR SERVICES</h3>
                <ul class="text-gray-400 mt-2 space-y-2">
                    <li><a href="#" class="hover:text-red-500">Web Development</a></li>
                    <li><a href="#" class="hover:text-red-500">Mobile App Development</a></li>
                    <li><a href="#" class="hover:text-red-500">AI & ML Solutions</a></li>
                    <li><a href="#" class="hover:text-red-500">Cloud Computing</a></li>
                    <li><a href="#" class="hover:text-red-500">E-commerce Development</a></li>
                </ul>
            </div>

            <!-- Tech Stack -->
            <div>
                <h3 class="text-lg font-semibold">TECH STACK</h3>
                <ul class="text-gray-400 mt-2 space-y-2">
                    <li><a href="#" class="hover:text-red-500">React & Next.js</a></li>
                    <li><a href="#" class="hover:text-red-500">Python & Django</a></li>
                    <li><a href="#" class="hover:text-red-500">Node.js & Express</a></li>
                    <li><a href="#" class="hover:text-red-500">Laravel & PHP</a></li>
                    <li><a href="#" class="hover:text-red-500">Android & iOS Apps</a></li>
                </ul>
            </div>

            <!-- Subscription Form -->
            {{-- <div>
                <h3 class="text-lg font-semibold">STAY UPDATED</h3>
                <p class="text-gray-400 mt-2">Get the latest insights and exclusive offers.</p>
                <div class="flex mt-4">
                    <input type="email" placeholder="Your Email"
                        class="bg-gray-800 text-white px-4 py-2 w-full outline-none rounded-l-md focus:ring-2 focus:ring-red-500" />
                    <button class="bg-red-500 text-white px-4 rounded-r-md hover:bg-red-600 transition">SUBSCRIBE</button>
                </div>
            </div> --}}
            <livewire:public.subscription />
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
            <p>© 2025 Comestro. All rights reserved | Built with ❤️ by 
                <a href="#" class="text-white hover:text-red-500">Our Team</a>
            </p>

            <!-- Social Icons -->
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-white text-lg hover:text-red-500"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-white text-lg hover:text-red-500"><i class="fab fa-github"></i></a>
                <a href="#" class="text-white text-lg hover:text-red-500"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white text-lg hover:text-red-500"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Scroll to Top Button -->
        <button id="scrollTop" class="hidden fixed bottom-6 right-6 bg-red-500 text-white p-3 rounded-full shadow-lg hover:bg-red-600 transition">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>
</div>

<!-- JavaScript for Scroll-to-Top Button -->
<script>
    const scrollTopBtn = document.getElementById("scrollTop");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            scrollTopBtn.classList.remove("hidden");
        } else {
            scrollTopBtn.classList.add("hidden");
        }
    });

    scrollTopBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>


