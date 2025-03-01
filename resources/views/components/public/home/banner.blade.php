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
        /* background: linear-gradient(135deg, #ff9a9e, #fad0c4); */
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
</style>

<div>
    <div class="banner">
        <div id="particles-js"></div>
        <div class="content">
            <h1 class="text-5xl font-bold">We love to create <span class="text-white">Beautiful</span> websites</h1>
            <button class="mt-4 px-6 py-3 border border-white rounded-full text-white hover:bg-white hover:text-pink-500 text--700 transition">
                Get in touch
            </button>
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

</div>