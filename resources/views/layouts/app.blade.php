<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommece</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @if (request()->routeIs('home') || request()->routeIs('signup') || request()->routeIs('signin'))
        <style>
            body {
                background-image: url("storage/bg-shape.png");
                background-repeat: no-repeat;
                background-size: 700px;
                background-position: 50%;
            }

            @media(max-width: 640px){
                body {
                    background-position: 10px -20%;
                    background-size: 500px;
                }
            }
        </style>
    @endif

    @livewireStyles
</head>
<body>

    <section id="nav">
       <x-navigation/>
    </section>

    {{ $slot }}

    {{-- <section id="footer">
        <x-footer/>
     </section> --}}

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script></body>
</body>
</html>
