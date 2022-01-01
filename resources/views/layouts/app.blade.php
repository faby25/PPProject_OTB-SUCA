<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SeikoControl') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        {{-- <div class="wrapper d-flex align-items-stretch"> --}}
        <div class="flex">
            @include('layouts.sidebar')

            <div id="content" class="w-full flex-col">
                <!-- Page Heading -->
                <header class="container-fluid navbar navbar-expand-lg navbar-light bg-light max-w-7xl mx-auto  sm:px-6 lg:px-4">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    {{ $header }}
                    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">  </div> --}}
                </header>

                <!-- Page Content -->
                <div class="w-full h-full">
                    <main>
                        {{-- <div class="flex"> --}}
                        <div class="w-auto">
                            {{ $slot }}
                        </div>
                        {{-- </div> --}}
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
