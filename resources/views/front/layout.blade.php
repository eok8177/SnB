<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ asset('css/front.css') }}" rel="stylesheet">
  @stack('styles')
</head>
<body class="{{$bodyClass ?? ''}}">
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <a class="navbar-brand logo" href="{{ url('/') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">@lang('msg.sites')</a></li>
            <li class="nav-item"><a class="nav-link" href="/bots"><i>@lang('msg.boots')</i></a></li>
            <li class="nav-item"><a class="nav-link" href="/about">@lang('msg.about')</a></li>
            <li class="nav-item"><a class="nav-link" href="contact">@lang('msg.contacts')</a></li>
            <li class="nav-item"><a class="btn-gradient" href="#"><span>@lang('msg.calc')</span></a></li>
            <li class="nav-item">
              <div class="dropdown">
                <button class="nav-link border-0 bg-transparent" type="button" id="selectLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  en
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-transparent" aria-labelledby="selectLang">
                  <a class="nav-link" href="#">Ru</a>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <main class="">
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/front.js') }}"></script>
  @stack('scripts')
</body>
</html>
