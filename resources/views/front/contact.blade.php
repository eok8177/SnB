@extends('front.layout', ['bodyClass' => 'contact-page'])

@section('content')
{{-- First screen --}}
<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-4">
      <h1 class="title">@lang('Contacts')</h1>

      <h4 class="sub-title-border">@lang('Contacts')</h4>
      {{-- <a href="tel:0986105285" class="link-block">+38 (098) 610 52 85&nbsp;&nbsp;&nbsp; @lang('Vladislav')</a> --}}
      <a href="tel:0678042663" class="link-block">+38 (067) 804 26 63&nbsp;&nbsp;&nbsp; @lang('Aleksandr')</a>
      <a href="mailto:sitesnbotssocial@gmail.com" class="link-block">sitesnbotssocial@gmail.com</a>

      <h4 class="sub-title-border wow backInLeft" data-wow-delay="0.4s" style="visibility: hidden;">@lang('Social networks')</h4>
      <div class="contact-links">
        {{-- <a href="https://www.facebook.com/groups/250822842966466/" title="Facebook" class=" wow zoomIn" data-wow-delay="1.3s" style="visibility: hidden;">
          <span class="ico-fb"></span>
        </a> --}}
        {{-- <a href="https://www.instagram.com/sites_bots/" title="Instagram" class=" wow zoomIn" data-wow-delay="1.5s" style="visibility: hidden;">
          <span class="ico-inst"></span>
        </a> --}}
        <a href="https://www.linkedin.com/in/olexandr-vytushko-521138208/" title="LinkedIn" class=" wow zoomIn" data-wow-delay="1.3s" style="visibility: hidden;">
          <span class="ico-ln"></span>
        </a>
        <a href="https://t.me/alexsnbpm" title="Telegram" class=" wow zoomIn" data-wow-delay="1.5s" style="visibility: hidden;">
          <span class="ico-send"></span>
        </a>
      </div>
    </div>
    <div class="col-lg-8">
      <div id="map" class="d-none d-lg-block wow zoomIn" data-wow-delay="2.4s" style="visibility: hidden;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.6838143608816!2d35.05301231566045!3d48.462595879250706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2db5d9bbbd5%3A0xe907ee33905e9feb!2z0LLRg9C70LjRhtGPINCR0LDRgNC40LrQsNC00L3QsCwgMTYsINCU0L3RltC_0YDQviwg0JTQvdGW0L_RgNC-0L_QtdGC0YDQvtCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1suk!2sua!4v1617794888707!5m2!1suk!2sua" width="770" height="314" allowfullscreen="" aria-hidden="false" tabindex="0" style="border:0; max-width: 100%;"></iframe>
      </div>
    </div>
  </div>

</div>

@endsection
