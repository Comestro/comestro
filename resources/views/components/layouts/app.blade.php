<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

    </head>
    <body>
        <x-header/>
        {{ $slot }}
        <x-footer/>
    </body>
</html>
