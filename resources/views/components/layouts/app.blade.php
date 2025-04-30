<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Comestro' }}</title>
        <script src="https://cdn.tailwindcss.com" defer></script>
        <meta name="google-site-verification" content="DkleUeBS1mAeoEHSPAJVMjLUTh4FhN7kmNnw4csflyY" />
        <link rel="shortcut icon" href="{{ asset('home/logo c.jpg') }}">
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <meta name="description" content="Comestro is a leading software company in Purnea, Bihar, specializing in app development, website design, software solutions, and offering professional coding and programming classes.">
        <meta name="keywords" content="Comestro, software company Purnea, app development Bihar, web development services, software solutions, coding classes Purnea, programming institute Bihar, learn app and web development, software training center, technology education in Purnea">

        <script src="//code.tidio.co/mrmbmspzf0fuv3by7bptn9g5bomtxgis.js" async></script>
        <!-- Open Graph Meta Tags for Social Media -->
        <meta property="og:title" content="Comestro | App, Web Development & Coding Institute in Purnea">
        <meta property="og:description" content="Expert software solutions, apps, websites, and coding classes at Comestro in Purnea, Bihar. Transform your digital presence today!">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://comestro.com/">
        {{-- <meta property="og:image" content="https://www.comestro.com/assets/images/comestro-og-image.jpg"> --}}

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Comestro | Professional Software & Coding Classes">
        <meta name="twitter:description" content="Join Comestro, Purnea's top software company offering advanced coding classes, software, apps, and web solutions.">
        {{-- <meta name="twitter:image" content="https://www.comestro.com/assets/images/comestro-twitter-card.jpg"> --}}

        <!-- Canonical URL -->
        <link rel="canonical" href="https://comestro.com/">

        <!-- Structured Data with JSON-LD -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Comestro",
          "url": "https://comestro.com/",
          "logo": "https://www.comestro.com/assets/home/logo c.jpg",
        
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-XXXXXXXXXX",
            "contactType": "Customer Support",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
          },
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Your Company Address",
            "addressLocality": "Purnea",
            "addressRegion": "Bihar",
            "postalCode": "854301",
            "addressCountry": "India"
          },
          "sameAs": [
            "https://www.facebook.com/comestro",
            "https://www.instagram.com/comestro",
            "https://www.linkedin.com/company/comestro"
          ]
        }
        </script>

        <link rel="shortcut icon" href="{{ asset('home/com.png') }}">

        <style>
            body, html {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
            }
            .banner {
                position: relative;
                width: 100%;
                height: 100vh;
                background: linear-gradient(135deg, #2e2926, #2e2911);
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                color: white;
            }
            #particles-js {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: 0;
            }
            .content {
                position: relative;
                z-index: 1;
            }
           
            .custom-chat-bubble {
                position: fixed;
                bottom: 100px;
                right: 20px;
                z-index: 1000;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
            }
            .chat-message {
                background-color: #000;
                color: white;
                padding: 10px 20px;
                border-radius: 20px;
                margin-bottom: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                position: relative; 
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .chat-message-text {
                font-size: 1.5rem;
                font-weight: bold;
                color: white;
                -webkit-text-stroke: 1px #00b7eb;
                text-shadow: 
                    -1px -1px 0 #00b7eb,  
                    1px -1px 0 #00b7eb,
                    -1px  1px 0 #00b7eb,
                    1px  1px 0 #00b7eb;
                font-family: Arial, sans-serif;
            }
            .close-btn {
    cursor: pointer;
    font-size: 1rem;
    color: white;
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
    transition: filter 0.3s ease; 
    filter: blur(2px); 
}
.close-btn:hover {
    filter: blur(0); 
}         
            .hidden {
                display: none;
            }
        </style>

              @livewireStyles
        @stack('styles')

    </head>
    <body>
        <x-header/>
        
        {{ $slot }}
       
        <div class="custom-chat-bubble" id="chatBubble">
            <div class="chat-message">
                <span class="chat-message-text">We are here!</span>
                <button class="close-btn" onclick="closeChatBubble()">✕</button>
            </div>
           
        </div>
        <x-footer/>

        <script>
            function closeChatBubble() {
                document.getElementById('chatBubble').classList.add('hidden');
            }
        </script>
        @livewireScripts
        @stack('scripts')
        <script defer>
          document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('img').forEach(img => {
              img.onerror = () => {
                img.onerror = null;
                img.src = 'https://cdn.worldvectorlogo.com/logos/placeholder-1.svg';
              };
            });
          });
        </script>
    </body>
</html>