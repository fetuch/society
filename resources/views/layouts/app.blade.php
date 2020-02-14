<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <script src="{{ mix('js/app.js') }}" defer></script>

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @yield('head')
</head>
<body class="theme-light bg-page">
<div id="app">
  <nav class="bg-header">
    <div class="container px-4 mx-auto">
      <div class="flex justify-between items-center">
        <h1>
          <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('img/logo-ptoitr.png') }}" alt="">
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
              <dropdown align="right" width="200px">
                <template v-slot:trigger>
                  <button class="flex items-center text-default text-sm focus:outline-none">
                    {{ auth()->user()->email }}
                  </button>
                </template>

                <template v-slot:default>
                  <span
                    class="dropdown-menu-link cursor-pointer"
                    onclick="javascript: document.querySelector('#logout-form').submit()"
                  >
                    Wyloguj
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
