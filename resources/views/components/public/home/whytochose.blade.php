<section class="why-choose-section bg-gradient-to-b from-gray-50 to-gray-100 py-16 md:py-24" data-aos="fade-up">
    <div class="container mx-auto px-4">
       
        <div class="trust-badges mb-16" data-aos="fade-up">
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                <div class="badge-item text-center">
                    <div class="text-4xl font-bold text-[#1d7dbc]">100+</div>
                    <p class="text-gray-600">Projects Delivered</p>
                </div>
                <div class="badge-item text-center">
                    <div class="text-4xl font-bold text-[#f25b24]">10+</div>
                    <p class="text-gray-600">Industries Served</p>
                </div>
                <div class="badge-item text-center">
                    <div class="text-4xl font-bold text-[#1d7dbc]">98%</div>
                    <p class="text-gray-600">Client Retention</p>
                </div>
                <div class="badge-item text-center">
                    <div class="text-4xl font-bold text-[#f25b24]">24/7</div>
                    <p class="text-gray-600">Support Available</p>
                </div>
            </div>
        </div>
       
        <div class="cta-container text-center" data-aos="fade-up">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Let's Build Something Amazing Together</h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Ready to transform your digital vision into reality? Our team is prepared to deliver solutions that drive real business results.</p>
            <a href="/contact" class="inline-block px-8 py-4 bg-gradient-to-r from-[#1d7dbc] to-[#f25b24] text-white font-bold rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">Let's Build Together</a>
        </div>
    </div>
</section>

<script>
    // Counter animation for stats
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower
        
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                
                // Lower inc for slower animations
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCount();
        });
        
        // Add icon animation on hover
        const featureCards = document.querySelectorAll('.feature-card');
        featureCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.icon-wrapper svg');
                icon.classList.add('animate-pulse');
            });
            
            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.icon-wrapper svg');
                icon.classList.remove('animate-pulse');
            });
        });

        // Initialize AOS library for scroll animations
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }
    });
</script>
