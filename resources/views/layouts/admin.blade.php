<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <script src="{{ mix('js/app.js') }}" defer></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!--Replace with your tailwind.css once created-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');

        html {
            font-family: 'Lato', sans-serif;
        }
    </style>

    @yield('head')
</head>

<body class="bg-gray-100 tracking-wider tracking-normal theme-light bg-page">

<div id="app">
    @include('admin._includes.header')

    <main class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
        <div class="w-full lg:w-1/5 lg:px-2 text-xl text-gray-800 leading-normal">
            @include('admin._includes.sidebar')
        </div>

        <div
            class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
            @yield('content')
        </div>

        <!--Back link -->
        <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-500 px-4 py-6">
            <span class="text-base text-purple-500 font-bold">&lt;</span>
            <a
                href="{{ url()->previous() }}"
                class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline"
            >
                Wróć
            </a>
        </div>
    </main>

    @include('admin._includes.footer')
</div>

@yield('footer')

</body>
</html>
