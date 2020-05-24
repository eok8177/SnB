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
            <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" title="@lang('msg.sites')">@lang('msg.sites')</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('bots') ? 'active' : '' }}" href="/bots" title="@lang('msg.boots')">@lang('msg.boots')</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about" title="@lang('msg.about')">@lang('msg.about')</a></li>
            <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="contact" title="@lang('msg.contacts')">@lang('msg.contacts')</a></li>
            <li class="nav-item hide-sm"><a class="btn-gradient" href="#" data-toggle="modal" data-target="#contactModal"><span>@lang('msg.calc')</span></a></li>
            {{-- <li class="nav-item">
              <div class="dropdown">
                <button class="nav-link border-0 bg-transparent" type="button" id="selectLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  en
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-transparent" aria-labelledby="selectLang">
                  <a class="nav-link" href="#">Ru</a>
                </div>
              </div>
            </li> --}}

          </ul>
        </div>
      </div>
    </nav>

    <main class="">
      @yield('content')
    </main>
  </div>


  {{-- Modal --}}
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content request-form">
        <div class="modal-header p-2 p-md-4">
          <h5 class="modal-title" id="contactModalLabel">Оставьте нам свою контактную информацию и мы свяжемся с вами в ближайшее время</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-2 p-md-4">
          <form action="/email" method="POST" class="feedback-form">
            <input type="text" name="msg" class="input-control" required placeholder="Телефон, Почта, Мессенджер или что угодно на ваш вкус">

            <button type="submit" class="btn-gradient"><span>Отправить</span></button>
          </form>
        </div>
      </div>

      <div class="modal-content success" style="display: none;">
        <div class="modal-header p-2 p-md-4">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-2 p-md-4 text-center">
          <h5 class="modal-title">Thank you! <br> We’ll contact you <br> as soon as possible!</h5>

          <button type="button" data-dismiss="modal" class="btn-gradient mt-5"><span>OK</span></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/front.js') }}"></script>
  @stack('scripts')
</body>
</html>
