<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

{{--   <style>
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
  <script src="//vjs.zencdn.net/7.8.2/video.min.js"></script> --}}

  <link href="{{ asset('css/front.css') }}" rel="stylesheet">

  @stack('styles')
</head>
<body class="{{$bodyClass ?? ''}}">

  {{-- <video id="preloader" class="video-js" muted autoplay style="opacity: 0;">
    <source src="/video/loader.mp4" type="video/mp4" media="screen and (min-device-width:768px)" />
    <source src="/video/loader_sm.mp4" type="video/mp4" media="screen and (max-device-width:767px)" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video> --}}

  <div id="app">
    <nav class="nav">
      <div class="container">
        <a class="logo" href="{{ url('/sites') }}"></a>

        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about" title="@lang('msg.about')">@lang('msg.about')</a>
        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="contact" title="@lang('msg.contacts')">@lang('msg.contacts')</a>

        <span class="ms-auto blocks {{ (Request::is('bots') || Request::is('sites')) ? 'single' : 'dual' }}">
          <a class="nav-link bots {{ Request::is('bots') ? 'd-none' : '' }}" href="/bots" title="@lang('msg.boots')">@lang('msg.boots')</a>
          <a class="nav-link sites {{ Request::is('sites') ? 'd-none' : '' }}" href="/sites" title="@lang('msg.sites')">@lang('msg.sites')</a>
        </span>
      </div>
    </nav>



    @yield('content')

  </div>

  {{-- Footer --}}
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-2 hide-sm">
          <form action="">
            <div class="form-group required">
              <input type="text" name="name" placeholder="Имя" required>
              <span class="error-msg">Заполните это поле</span>
            </div>
            <div class="form-group required">
              <input type="text" name="email" placeholder="Почта" required>
              <span class="error-msg">Заполните это поле</span>
            </div>
            <div class="form-group required">
              <input type="text" name="phone" placeholder="Номер телефона" required>
              <span class="error-msg">Заполните это поле</span>
            </div>

            <span class="d-block pt-2 pb-3">Предпочтительный канал связи</span>
            <div class="radio-list">
              <div class="custom-input">
                <input type="radio" name="type" id="type_1" value="Email" required>
                <label for="type_1">Email</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="type_2" value="Viber" required>
                <label for="type_2">Viber</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="type_3" value="Телефон" required>
                <label for="type_3">Телефон</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="type_4" value="Telegram" required>
                <label for="type_4">Telegram</label>
              </div>
            </div>
            <button type="submit" class="button btn-submit">связаться с нами</button>

          </form>
        </div>
        <div class="col-md-6 order-1">
          <div class="text-block">
            <h2>расскажите нам о своем проекте!</h2>
            <p>Будем рады пообщаться и обсудить подробности по вашему проекту</p>
            <button class="button d-md-none btn-submit" data-bs-toggle="modal" data-bs-target="#contactModal">связаться с нами</button>
          </div>
          <p class="copyright">Sites&Bots, 2020</p>
        </div>
      </div>
    </div>
  </footer>


  {{-- Modal --}}
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content request-form">
        <div class="modal-header p-2 p-md-4">
          <h5 class="modal-title" id="contactModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-2 p-md-4">
          <form action="/email" method="POST" class="feedback-form">

            <div class="form-group required">
              <input type="text" name="name" placeholder="Имя">
              <span class="error-msg">Заполните это поле</span>
            </div>
            <div class="form-group required">
              <input type="text" name="email" placeholder="Почта">
              <span class="error-msg">Заполните это поле</span>
            </div>
            <div class="form-group required">
              <input type="text" name="phone" placeholder="Номер телефона">
              <span class="error-msg">Заполните это поле</span>
            </div>

            <span class="d-block pt-2 pb-3 pl-3">Предпочтительный канал связи</span>
            <div class="radio-list pl-3">
              <div class="custom-input">
                <input type="radio" name="type" id="modal_type_1" value="Email" required>
                <label for="modal_type_1">Email</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="modal_type_2" value="Viber" required>
                <label for="modal_type_2">Viber</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="modal_type_3" value="Телефон" required>
                <label for="modal_type_3">Телефон</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="modal_type_4" value="Telegram" required>
                <label for="modal_type_4">Telegram</label>
              </div>
            </div>

            <button type="submit" class="button"><span>связаться с нами</span></button>
          </form>
        </div>
      </div>

      <div class="modal-content success" style="display: none;">
        <div class="modal-header p-2 p-md-4">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-2 p-md-4 text-center">
          <h5 class="modal-title">спасибо за заявку! <br> Мы свяжемся с вами в ближайшее время!</h5>

          <button type="button" data-bs-dismiss="modal" class="button mt-5"><span>OK</span></button>
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

    // if (localStorage.getItem('snb-visited')) {
    //   document.getElementById("preloader").remove();
    //   document.getElementById("app").style.display = 'block';;
    // } else {
    //   var player = videojs('preloader', options, function onPlayerReady() {
    //     // In this context, `this` is the player that was created by Video.js.
    //     document.getElementById("preloader").style.opacity = 1;
    //     document.getElementById("preloader_html5_api").style.opacity = 1;

    //     this.on('ended', function() {
    //       document.getElementById("preloader").remove();
    //       document.getElementById("app").style.display = 'block';
    //     });
    //   });
    //   localStorage.setItem('snb-visited', true);
    // }
  </script>

  <script src="{{ asset('js/front.js') }}"></script>
  @stack('scripts')
  <script>

  </script>
</body>
</html>
