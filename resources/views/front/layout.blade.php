<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  @stack('pre-styles')
  <link href="{{ asset('css/front.css') }}?v={{time()}}" rel="stylesheet">

  @stack('styles')
</head>
<body class="{{$bodyClass ?? ''}}">

  <div id="app">
    <nav class="nav">
      <div class="container">
        <a class="logo" href="{{ url('/') }}"></a>

        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/{{$lang}}about" title="@lang('About us')">@lang('About us')</a>
        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/{{$lang}}contact" title="@lang('Contacts')">@lang('Contacts')</a>

        <span class="ms-auto blocks {{ (Request::is('bots') || Request::is('sites')) ? 'single' : 'dual' }}">
          <a class="nav-link bots {{ Request::is('*bots') ? 'd-none' : '' }}" href="/{{$lang}}bots" title="@lang('Bots')">@lang('Bots')</a>
          <a class="nav-link sites {{ Request::is('*sites') ? 'd-none' : '' }}" href="/{{$lang}}sites" title="@lang('Sites')">@lang('Sites')</a>
        </span>

        @if($lang == 'ua/')
        <a class="nav-link" href="/{{preg_replace("/ua\//","",request()->path())}}" title="English">
          <span class="d-md-none">EN</span>
          <span class="hide-sm">English</span>
        </a>
        @else
        <a class="nav-link" href="/ua/{{request()->path()}}" title="Українською">
          <span class="d-md-none">UA</span>
          <span class="hide-sm">Українською</span>
        </a>
        @endif

      </div>
    </nav>



    @yield('content')

  </div>

  {{-- Footer --}}
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-2 hide-sm">
          <form action="/email" method="POST" class="footer-form validate">
            <div class="form-block">
              <div class="form-group required">
                <input type="text" name="name" placeholder="@lang('Name')" class="only-text">
                <span class="error-msg">@lang('Required')</span>
              </div>
              <div class="form-group required email">
                <input type="text" name="email" placeholder="@lang('Email')" >
                <span class="error-msg">@lang('Required')</span>
              </div>
              <div class="form-group required">
                <input type="text" name="phone" placeholder="@lang('Phone number')" class="phone">
                <span class="error-msg">@lang('Required')</span>
              </div>

              <span class="d-block pt-2 pb-3">@lang('Preferable communication channel')</span>
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
                  <input type="radio" name="type" id="type_3" value="@lang('Phone')" required>
                  <label for="type_3">@lang('Phone')</label>
                </div>
                <div class="custom-input">
                  <input type="radio" name="type" id="type_4" value="Telegram" required>
                  <label for="type_4">Telegram</label>
                </div>
              </div>
              <button type="submit" class="button btn-submit">@lang('Contact us')</button>
            </div>

            <div class="success" style="display: none;">
              <h2>@lang('Thanks for the application!')</h2>
              <p>@lang('We will contact <br> you shortly!')</p>
            </div>

          </form>
        </div>
        <div class="col-md-6 order-1">
          <div class="text-block">
            <h2>@lang('Tell us about your project!')</h2>
            <p>@lang('We will gladly discuss the peculiarities of your project in more detail.')</p>
            <button class="button d-md-none btn-submit" data-bs-toggle="modal" data-bs-target="#contactModal">@lang('Contact us')</button>
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
          <h5 class="modal-title" id="contactModalLabel">@lang('Feedback')</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-2 p-md-4">
          <form action="/email" method="POST" class="feedback-form validate">

            <div class="form-group required">
              <input type="text" name="name" placeholder="@lang('Name')" class="only-text">
              <span class="error-msg">@lang('Required')</span>
            </div>
            <div class="form-group required email">
              <input type="email" name="email" placeholder="@lang('Email')" >
              <span class="error-msg">@lang('Required')</span>
            </div>
            <div class="form-group required">
              <input type="tel" name="phone" placeholder="@lang('Phone number')" class="phone">
              <span class="error-msg">@lang('Required')</span>
            </div>

            <span class="d-block pt-2 pb-3 pl-3">@lang('Preferable communication channel')</span>
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
                <input type="radio" name="type" id="modal_type_3" value="@lang('Phone')" required>
                <label for="modal_type_3">@lang('Phone')</label>
              </div>
              <div class="custom-input">
                <input type="radio" name="type" id="modal_type_4" value="Telegram" required>
                <label for="modal_type_4">Telegram</label>
              </div>
            </div>

            <button type="submit" class="button"><span>@lang('Contact us')</span></button>
          </form>
        </div>
      </div>

      <div class="modal-content success" style="display: none;">
        <div class="modal-header p-2 p-md-4">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-2 p-md-4 text-center">
          <h5 class="modal-title">@lang('Thanks for the application! <br> We will contact you shortly!')</h5>

          <button type="button" data-bs-dismiss="modal" class="button mt-5"><span>OK</span></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/front.js') }}?v={{time()}}"></script>
  @stack('scripts')
</body>
</html>
