{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <style>[x-cloak] { display: none !important; }</style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        @stack('scripts')
    </head>
    <body class="antialiased">
        {{ $slot }}
        @livewire('notifications')
    </body>
</html> --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERMC Formulary</title>
    <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">
    {{-- Bulma --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> --}}
    {{-- flowbite --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" /> --}}
    {{-- tailwindcss --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/fd0b59a77d.js" crossorigin="anonymous"></script>
    {{-- google fonts icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link href="/css/app.css" rel="stylesheet" />
    
    {{-- <style>
        .op {
            opacity: 0.25;
        }
    </style> --}}
    @livewireStyles
</head>

<body>
    <div class="mt-3 max-w-lg mx-auto">
        <a href="/"><img class="" src="{{ asset('svg/formulary.svg') }}" alt=""></a>
    </div>
    <div class="px-4 my-2 max-w-4xl mx-auto">
        @yield('content')
    </div>
    {{-- footer --}}
    <footer class="bg-gray-900 text-white p-8 rounded-sm">
        <div class="container mx-auto flex flex-wrap justify-between">
            <div class="w-full text-center">
                <p class="my-2">
                <div class="text-center">
                    <div>
                        <a href="/" class="mb-4 lg:mb-0">
                            <img src="{{ asset('svg/formulary icon.svg') }}" class="h-16 mx-auto"
                                alt="formulary Logo" />
                        </a>
                    </div>
                    <div class=" text-justify">
                        <a class="hover:underline" href="https://ermcpharma.com/">The Clinical Pharmacy Department</a>
                        at the Egyptian Railway Hospital presents a web application formulary list,
                        that includes medication generic name, brand name, class, price and possible side effects. It's
                        designed and developed
                        by clinical pharmacy department to provide healthcare professionals with easy access to the
                        medications
                        approved for use within the Egyptian Railway Hospital.
                    </div>
                </div>
                </p>
            </div>
        </div>
        <div class="container mx-auto text-center py-4">
            <span class="block text-sm text-white sm:text-center dark:text-gray-400">© ERMC 2023</span>
        </div>
    </footer>
    {{-- END footer --}}

    {{-- flowbate script --}}
    <script src="\js\flowbite.min.js"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script> --}}
    @livewireScripts
</body>

</html>
