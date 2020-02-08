<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->

  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->
{{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

<!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @yield('head')
</head>
<body class="theme-light bg-page">
<div id="app">
  <nav class="bg-header">
    <div class="container px-4 mx-auto">
      <div class="flex justify-between items-center py-2">
        <h1>
          <a class="navbar-brand" href="{{ url('/') }}">
            Logo
          </a>
        </h1>

        <div>
          <div class="flex items-center navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
              <a class="button no-underline mr-3 is-outlined" href="{{ route('login') }}">{{ __('Login') }}</a>

              @if (Route::has('register'))
                <a class="button no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
            @else
              <theme-switcher class="hidden md:block"></theme-switcher>

              <dropdown align="right" width="200px">
                <template v-slot:trigger>
                  <button class="flex items-center text-default text-sm focus:outline-none">
                    <img
                      width="35"
                      class="rounded-full mr-3"
                      src="{{ gravatar_url(auth()->user()->email) }}"
                      alt="Avatar">

                    {{ auth()->user()->name }}
                  </button>
                </template>

                <template v-slot:default>
                  <a class="dropdown-menu-link" href="{{ route('timesheets.index') }}">Timesheets</a>

                  <div class="dropdown-menu-link py-2 md:hidden">
                    <theme-switcher></theme-switcher>
                  </div>

                  <span
                    class="dropdown-menu-link cursor-pointer"
                    onclick="javascript: document.querySelector('#logout-form').submit()"
                  >
                    Logout
                  </span>

                  <form id="logout-form" method="POST" action="/logout">
                    @csrf
                  </form>
                </template>
              </dropdown>

            @endguest
          </div>
        </div>
      </div>
    </div>
  </nav>

  <main class="container mx-auto p-4">
    @yield('content')
  </main>
</div>

@yield('footer')
</body>
</html>
