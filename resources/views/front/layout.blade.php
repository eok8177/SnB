<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <style>
    .video-js.vjs-fluid {
      position: fixed;
      left: 0; right: 0;
      top: 0;
      bottom: 0;
      height: 100% !important;
    }
    .vjs-tech { object-fit: cover; }
  </style>

  <link href="//vjs.zencdn.net/7.8.2/video-js.min.css" rel="stylesheet">
  <script src="//vjs.zencdn.net/7.8.2/video.min.js"></script>

  <link href="{{ asset('css/front.css') }}" rel="stylesheet">

  @stack('styles')
</head>
<body class="{{$bodyClass ?? ''}}">

  <video id="preloader" class="video-js" muted autoplay style="opacity: 0;">
    <source src="/video/loader.mp4" type="video/mp4"></source>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>

  <div id="app" style="display: none;">
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

            <input type="text" name="name" class="input-control" required placeholder="Имя">

            <input type="text" name="phone" class="input-control" required placeholder="Телефон">

            <input type="text" name="email" class="input-control" required placeholder="Почта">

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
  <script>
    var options = {
      fluid: true,
      autoplay: true,
      controls: false,
      preload: 'auto'
    };

    if (localStorage.getItem('snb-visited')) {
      document.getElementById("preloader").remove();
      document.getElementById("app").style.display = 'block';;
    } else {
      var player = videojs('preloader', options, function onPlayerReady() {
        // In this context, `this` is the player that was created by Video.js.
        document.getElementById("preloader").style.opacity = 1;
        document.getElementById("preloader_html5_api").style.opacity = 1;

        this.on('ended', function() {
          document.getElementById("preloader").remove();
          document.getElementById("app").style.display = 'block';
        });
      });
      localStorage.setItem('snb-visited', true);
    }
  </script>

  <script src="{{ asset('js/front.js') }}"></script>
  @stack('scripts')
  <script>

  </script>
</body>
</html>
