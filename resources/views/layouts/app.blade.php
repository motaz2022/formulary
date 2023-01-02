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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/fd0b59a77d.js" crossorigin="anonymous"></script>

    {{-- google fonts icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    @livewireStyles
</head>

<body>
    {{-- <section class="section">
        <div class="container">
            <h1 class="title">
                ERMC Formulary
            </h1>
            <p class="subtitle">
                New Version Comming Soon <strong>2023</strong>
            </p>

            <div>
                <input class="input is-primary is-center" type="text" placeholder="Primary input">
            </div>
        </div>
    </section> --}}

    @yield('content')

    
    <footer class="footer">
        <div class="content has-text-centered">
          <p>
            <strong>ERMC Formulary</strong> 
            Designed & Developed by the <a href="https://ermcpharma.com/">Department of Clinical Pharmacy, Railway Hospital</a>
          </p>
          <strong>© ERMC | Clinical Pharmacy Department 2023</strong>
        </div>
      </footer>

    @livewireScripts
</body>

</html>
