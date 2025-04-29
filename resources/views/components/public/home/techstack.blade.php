<section class="tech-stack py-20 bg-gradient-to-br from-slate-50 to-white dark:from-gray-900 dark:to-gray-800 overflow-hidden relative">
    <!-- Background Design Elements -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-gradient-to-br from-[#1d7dbc]/10 to-[#f25b24]/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-gradient-to-tr from-[#1d7dbc]/10 to-[#f25b24]/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-block py-2 px-4 bg-gradient-to-r from-[#1d7dbc]/10 to-[#f25b24]/10 rounded-full mb-4">
                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Enterprise-Grade Technologies</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800 dark:text-white leading-tight">
                Our <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#1d7dbc] to-[#f25b24]">Technology Stack</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto text-lg">
                We leverage cutting-edge frameworks, libraries, and platforms to deliver scalable and innovative digital solutions for your business.
            </p>
        </div>

        <!-- Category Filter Tabs -->
        <div class="category-filters flex flex-wrap justify-center gap-2 sm:gap-3 mb-12">
            <button class="filter-btn active px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-gradient-to-r from-[#1d7dbc] to-[#f25b24] text-white shadow-md shadow-[#f25b24]/20" data-filter="all">All Technologies</button>
            <button class="filter-btn px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 shadow-md" data-filter="Frontend">Frontend</button>
            <button class="filter-btn px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 shadow-md" data-filter="Backend">Backend</button>
            <button class="filter-btn px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 shadow-md" data-filter="DevOps">DevOps</button>
            <button class="filter-btn px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 shadow-md" data-filter="Mobile">Mobile</button>
            <button class="filter-btn px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 shadow-md" data-filter="Design">Design</button>
            <button class="filter-btn px-4 sm:px-5 py-2 sm:py-3 rounded-lg text-xs sm:text-sm font-medium transition-all duration-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 shadow-md" data-filter="CMS">CMS</button>
        </div>

        <!-- Tech Stack Carousel -->
        <div class="tech-stack-carousel relative">
            <div class="swiper-container overflow-hidden" style="padding: 20px 0 40px;">
                <div class="swiper-wrapper">
                    @php
                    $technologies = [
                    ['name' => 'React', 'logo' => 'https://cdn.worldvectorlogo.com/logos/react-2.svg', 'category' => 'Frontend', 'desc' => 'A JavaScript library for building interactive user interfaces with a component-based architecture'],
                    ['name' => 'Next.js', 'logo' => 'https://cdn.worldvectorlogo.com/logos/next-js.svg', 'category' => 'Frontend', 'desc' => 'The React framework for production that enables server-side rendering and static site generation'],
                    ['name' => 'Node.js', 'logo' => 'https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg', 'category' => 'Backend', 'desc' => 'JavaScript runtime built on Chrome\'s V8 engine for scalable server-side applications'],
                    ['name' => 'Django', 'logo' => 'https://cdn.worldvectorlogo.com/logos/django.svg', 'category' => 'Backend', 'desc' => 'High-level Python web framework that encourages rapid development and clean design'],
                    ['name' => 'Python', 'logo' => 'https://cdn.worldvectorlogo.com/logos/python-5.svg', 'category' => 'Backend', 'desc' => 'Interpreted high-level programming language known for its readability and versatility'],
                    ['name' => 'PostgreSQL', 'logo' => 'https://cdn.worldvectorlogo.com/logos/postgresql.svg', 'category' => 'Backend', 'desc' => 'Advanced open-source relational database known for reliability and data integrity'],
                    ['name' => 'Tailwind CSS', 'logo' => 'https://cdn.worldvectorlogo.com/logos/tailwind-css-2.svg', 'category' => 'Frontend', 'desc' => 'Utility-first CSS framework for rapidly building custom user interfaces'],
                    ['name' => 'AWS', 'logo' => 'https://cdn.worldvectorlogo.com/logos/aws-2.svg', 'category' => 'DevOps', 'desc' => 'Comprehensive cloud platform offering over 200 fully featured services from data centers globally'],
                    ['name' => 'Docker', 'logo' => 'https://cdn.worldvectorlogo.com/logos/docker.svg', 'category' => 'DevOps', 'desc' => 'Platform for developing, shipping, and running applications in isolated environments called containers'],
                    ['name' => 'TypeScript', 'logo' => 'https://cdn.worldvectorlogo.com/logos/typescript.svg', 'category' => 'Frontend', 'desc' => 'Typed superset of JavaScript that compiles to plain JavaScript, adding static type definitions'],
                    ['name' => 'MongoDB', 'logo' => 'https://cdn.worldvectorlogo.com/logos/mongodb-icon-1.svg', 'category' => 'Backend', 'desc' => 'NoSQL database program that uses JSON-like documents with optional schemas'],
                    ['name' => 'Laravel', 'logo' => 'https://cdn.worldvectorlogo.com/logos/laravel-2.svg', 'category' => 'Backend', 'desc' => 'PHP web application framework with expressive, elegant syntax for building modern web applications'],
                    ['name' => 'PHP', 'logo' => 'https://cdn.worldvectorlogo.com/logos/php.svg', 'category' => 'Backend', 'desc' => 'Popular general-purpose scripting language for web dev'],
                    ['name' => 'React Native', 'logo' => 'https://cdn.worldvectorlogo.com/logos/react-native-1.svg', 'category' => 'Mobile', 'desc' => 'Framework for building native mobile applications using React and JavaScript'],
                    ['name' => '.NET', 'logo' => 'https://cdn.worldvectorlogo.com/logos/dot-net-core-7.svg', 'category' => 'Backend', 'desc' => 'Free, cross-platform, open source developer platform for building many different types of applications'],
                    ['name' => 'Angular', 'logo' => 'https://cdn.worldvectorlogo.com/logos/angular-icon-1.svg', 'category' => 'Frontend', 'desc' => 'Platform for building mobile and desktop web applications using TypeScript/JavaScript and other languages'],
                    ['name' => 'Bootstrap', 'logo' => 'https://cdn.worldvectorlogo.com/logos/bootstrap-5-1.svg', 'category' => 'Frontend', 'desc' => 'Front-end framework for quickly creating responsive designs with pre-built components'],
                    ['name' => 'Figma', 'logo' => 'https://cdn.worldvectorlogo.com/logos/figma.svg', 'category' => 'Design', 'desc' => 'Cloud design tool for UI/UX & prototyping'],
                    ['name' => 'WordPress', 'logo' => 'https://cdn.worldvectorlogo.com/logos/wordpress.svg', 'category' => 'CMS', 'desc' => 'CMS focused on websites & blogs'],
                    ['name' => 'Azure', 'logo' => 'https://cdn.worldvectorlogo.com/logos/azure-1.svg', 'category' => 'DevOps', 'desc' => 'Microsoft\'s cloud computing service for building, testing, deploying, and managing applications'],
                    ];
                    @endphp

                    @foreach ($technologies as $tech)
                    <div class="swiper-slide" data-category="{{ $tech['category'] }}">
                        <div class="tech-card group bg-white dark:bg-gray-800/90 backdrop-blur-sm rounded-xl shadow-lg p-6 h-44 sm:h-48 flex flex-col items-center justify-center transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:border-[#1d7dbc] dark:hover:border-[#1d7dbc] hover:shadow-xl"
                            data-tooltip="{{ $tech['name'] }}"
                            data-description="{{ $tech['desc'] }}"
                            data-category="{{ $tech['category'] }}">
                            <div class="tech-logo-wrapper relative flex items-center justify-center w-16 sm:w-20 h-16 sm:h-20 mb-3 p-4 bg-gray-50 dark:bg-gray-700/50 rounded-lg transition-all duration-300 group-hover:bg-gradient-to-br group-hover:from-[#1d7dbc]/10 group-hover:to-[#f25b24]/10">
                                <img src="{{ $tech['logo'] }}" alt="{{ $tech['name'] }}" class="max-h-full max-w-full object-contain transition-transform duration-300 group-hover:scale-110" onerror="this.onerror=null; this.src='https://cdn.worldvectorlogo.com/logos/placeholder-1.svg';">
                            </div>
                            <span class="tech-name font-semibold text-gray-800 dark:text-white mb-1 text-sm sm:text-base">{{ $tech['name'] }}</span>
                            <span class="tech-category text-xs py-1 px-3 bg-gradient-to-r from-[#1d7dbc]/20 to-[#f25b24]/20 rounded-full text-[#f25b24] dark:text-[#f25b24]">{{ $tech['category'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination mt-10"></div>
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-prev absolute top-1/2 transform -translate-y-1/2 z-10 hidden md:flex items-center justify-center text-white bg-gradient-to-r from-[#1d7dbc] to-[#1d7dbc] hover:from-[#1d7dbc] hover:to-[#f25b24] transition-all duration-300 rounded-full w-10 h-10 shadow-md left-2"></div>
            <div class="swiper-button-next absolute top-1/2 transform -translate-y-1/2 z-10 hidden md:flex items-center justify-center text-white bg-gradient-to-r from-[#f25b24] to-[#f25b24] hover:from-[#1d7dbc] hover:to-[#f25b24] transition-all duration-300 rounded-full w-10 h-10 shadow-md right-2"></div>
        </div>

        <!-- Tech Info Modal -->
        <div id="tech-info-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300">
            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 max-w-md w-full shadow-2xl transform scale-95 transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="tech-icon-container w-12 h-12 flex items-center justify-center bg-gradient-to-br from-[#1d7dbc]/10 to-[#f25b24]/10 rounded-lg p-2">
                            <img id="modal-tech-icon" src="" alt="" class="max-h-full max-w-full">
                        </div>
                        <h3 id="modal-tech-name" class="text-xl font-bold text-gray-800 dark:text-white"></h3>
                    </div>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4 mb-4">
                    <span id="modal-tech-category" class="inline-block text-xs py-1 px-2 bg-gradient-to-r from-[#1d7dbc]/20 to-[#f25b24]/20 rounded-full text-[#f25b24] dark:text-[#f25b24] mb-2"></span>
                    <p id="modal-tech-desc" class="text-gray-700 dark:text-gray-300"></p>
                </div>
                <div class="text-right">
                    <button id="modal-close-btn" class="bg-gradient-to-r from-[#1d7dbc] to-[#f25b24] text-white py-2 px-4 rounded-lg hover:shadow-lg transition-all duration-300">
                        Close
                    </button>
                </div>
            </div>
        </div>

        <!-- Tech Experience Banner -->
        <div class="tech-experience mt-16 bg-gradient-to-r from-[#1d7dbc] to-[#f25b24] rounded-2xl p-6 md:p-10 shadow-xl relative overflow-hidden">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8 relative z-10">
                <div class="md:w-2/3">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Ready to leverage our technical expertise?</h3>
                    <p class="text-white/90 mb-6">Our team of skilled developers stays ahead of technological advancements to deliver modern, scalable solutions for your business.</p>
                    <a href="#contact" class="inline-flex items-center bg-white text-[#1d7dbc] font-semibold py-3 px-6 rounded-lg hover:shadow-lg transition-all duration-300">
                        Discuss Your Project
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="md:w-1/3 flex justify-center md:justify-end">
                    <div class="experience-counter flex items-center justify-center bg-white/10 backdrop-blur-sm rounded-full w-32 h-32 sm:w-36 sm:h-36 border border-white/20">
                        <div class="text-center">
                            <span class="text-4xl sm:text-5xl font-bold text-white block">10+</span>
                            <span class="text-white/80 text-sm">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Abstract background shapes -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>
        </div>
    </div>
</section>

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<style>
    /* Basic card styling with improved transitions */
    .tech-card {
        position: relative;
        overflow: visible;
        transform: translateY(0);
        will-change: transform, box-shadow;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .tech-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .tech-card:active {
        transform: translateY(-2px) scale(0.98);
    }

    /* Gradient border effect */
    .tech-card::before {
        content: '';
        position: absolute;
        inset: 0;
        z-index: -1;
        background: linear-gradient(to bottom right, #1d7dbc, #f25b24);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: inherit;
        margin: -2px;
    }

    .tech-card:hover::before {
        opacity: 0.5;
    }

    /* Swiper navigation styling */
    .swiper-button-prev,
    .swiper-button-next {
        width: 40px !important;
        height: 40px !important;
        opacity: 0.9;
        color: white !important;
    }

    .swiper-button-prev:after,
    .swiper-button-next:after {
        font-size: 16px !important;
        font-weight: bold;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        opacity: 1;
    }

    /* Filter button styling */
    .filter-btn {
        position: relative;
        overflow: hidden;
        z-index: 1;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .filter-btn:not(.active)::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0;
        background: linear-gradient(to right, #1d7dbc, #f25b24);
        transition: height 0.3s ease;
        opacity: 0.1;
        z-index: -1;
    }

    .filter-btn:not(.active):hover::after {
        height: 100%;
    }

    /* Active filter button */
    .filter-btn.active {
        position: relative;
        z-index: 1;
        transform: translateY(-1px);
    }

    /* Pagination styling */
    .swiper-pagination {
        position: relative;
        bottom: 0 !important;
        margin-top: 20px;
    }

    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        width: 20px;
        border-radius: 5px;
        opacity: 1;
        background: linear-gradient(to right, #1d7dbc, #f25b24);
    }

    /* Mobile optimizations */
    @media (max-width: 640px) {
        .tech-card {
            height: auto;
            padding: 16px;
        }

        .tech-category {
            font-size: 0.65rem;
        }

        .swiper-container {
            padding: 10px 0 30px !important;
            overflow: visible !important;
        }

        .filter-btn {
            padding: 6px 12px !important;
            font-size: 0.7rem !important;
        }

        .swiper-pagination {
            bottom: -5px !important;
        }

        .category-filters {
            gap: 6px !important;
            padding-bottom: 5px;
            overflow-x: auto;
            flex-wrap: nowrap !important;
            justify-content: flex-start !important;
            padding: 5px 0;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
        }

        .filter-btn {
            flex: 0 0 auto;
            scroll-snap-align: start;
        }

        .tech-stack-carousel {
            margin: 0 -20px;
            padding: 0 20px;
        }

        /* Fix modal for small screens */
        #tech-info-modal>div {
            max-width: 90% !important;
            margin: 0 auto;
        }
    }

    /* Experience counter animation */
    .experience-counter {
        position: relative;
        overflow: hidden;
    }

    .experience-counter::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(transparent, rgba(255, 255, 255, 0.3), transparent 30%);
        animation: rotate 6s linear infinite;
    }

    /* Better scroll touch for filters */
    .category-filters::-webkit-scrollbar {
        display: none;
    }

    .category-filters {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Modal animation */
    #tech-info-modal.show {
        opacity: 1;
        pointer-events: auto;
    }

    #tech-info-modal.show>div {
        transform: scale(1);
    }

    /* Animation keyframes */
    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tech cards and modal elements
        const techCards = document.querySelectorAll('.tech-card');
        const modal = document.getElementById('tech-info-modal');
        const modalName = document.getElementById('modal-tech-name');
        const modalIcon = document.getElementById('modal-tech-icon');
        const modalCategory = document.getElementById('modal-tech-category');
        const modalDesc = document.getElementById('modal-tech-desc');
        const closeModal = document.getElementById('close-modal');
        const modalCloseBtn = document.getElementById('modal-close-btn');

        // Initialize swiper
        let swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 16,
            grabCursor: true,
            centeredSlides: window.innerWidth < 640,
            loop: false,
            slideToClickedSlide: true,
            preventClicks: false,
            preventClicksPropagation: false,
            speed: 500,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetween: 12,
                    centeredSlides: true,
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                    centeredSlides: false,
                },
                640: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                    centeredSlides: false,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                    centeredSlides: false,
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                    centeredSlides: false,
                },
            }
        });

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-filter');

                // Update active button styling
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-gradient-to-r', 'from-[#1d7dbc]', 'to-[#f25b24]', 'text-white', 'shadow-md', 'shadow-[#f25b24]/20');
                    btn.classList.add('bg-white', 'dark:bg-gray-800');
                });

                button.classList.add('active', 'bg-gradient-to-r', 'from-[#1d7dbc]', 'to-[#f25b24]', 'text-white', 'shadow-md', 'shadow-[#f25b24]/20');
                button.classList.remove('bg-white', 'dark:bg-gray-800');

                // Filter slides
                const slides = document.querySelectorAll('.swiper-slide');

                if (category === 'all') {
                    slides.forEach(slide => {
                        slide.style.display = '';
                        slide.classList.remove('hidden');
                    });
                } else {
                    slides.forEach(slide => {
                        if (slide.getAttribute('data-category') === category) {
                            slide.style.display = '';
                            slide.classList.remove('hidden');
                        } else {
                            slide.style.display = 'none';
                            slide.classList.add('hidden');
                        }
                    });
                }

                // Update swiper after filtering
                setTimeout(() => {
                    swiper.update();
                    swiper.slideTo(0);
                }, 100);
            });
        });

        // Modal functionality
        techCards.forEach(card => {
            card.addEventListener('click', () => {
                // Get data attributes
                const name = card.getAttribute('data-tooltip');
                const icon = card.querySelector('img').src;
                const category = card.getAttribute('data-category');
                const desc = card.getAttribute('data-description');

                // Set modal content
                modalName.textContent = name;
                modalIcon.src = icon;
                modalIcon.alt = name;
                modalCategory.textContent = category;
                modalDesc.textContent = desc;

                // Show modal with animation
                modal.classList.add('show');
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.querySelector('div').classList.remove('scale-95');
                modal.querySelector('div').classList.add('scale-100');

                // Prevent body scrolling when modal is open
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal functionality
        const closeModalFn = () => {
            modal.classList.remove('show');
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.querySelector('div').classList.add('scale-95');
            modal.querySelector('div').classList.remove('scale-100');
            document.body.style.overflow = '';
        };

        closeModal.addEventListener('click', closeModalFn);
        modalCloseBtn.addEventListener('click', closeModalFn);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModalFn();
        });

        // Handle image fallbacks for better UX
        document.querySelectorAll('.tech-logo-wrapper img').forEach(img => {
            img.onerror = function() {
                const name = this.alt;
                const firstLetter = name.charAt(0).toUpperCase();
                const color = Math.random() > 0.5 ? '#1d7dbc' : '#f25b24';

                this.src = `data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"><rect width="80" height="80" rx="8" fill="${color}30"/><text x="50%" y="50%" font-family="Arial" font-size="32" font-weight="bold" fill="${color}" text-anchor="middle" dominant-baseline="middle">${firstLetter}</text></svg>`;
            };
        });

        // Update swiper on window resize
        window.addEventListener('resize', () => {
            swiper.update();
        });
    });
</script>
@endpush