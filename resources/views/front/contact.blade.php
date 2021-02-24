@extends('front.layout', ['bodyClass' => 'contact-page'])

@section('content')
{{-- First screen --}}
<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-4">
      <h1 class="title">Контакты</h1>

      <h4 class="sub-title-border wow backInLeft" data-wow-delay="0.3s">Контакты</h4>
      <a href="" class="link-block wow backInLeft" data-wow-delay="0.6s">+38 (063) - 012 - 34 - 56</a>
      <a href="" class="link-block wow backInLeft" data-wow-delay="0.6s">+38 (099) - 012 - 34 - 56</a>
      <a href="mailto:sitesnbotssocial@gmail.com" class="link-block wow backInLeft" data-wow-delay="0.6s">sitesnbotssocial@gmail.com</a>

      <h4 class="sub-title-border wow backInLeft" data-wow-delay="0.9s">Социальные сети</h4>
      <div class="contact-links">
        <a href="https://www.facebook.com/groups/250822842966466/" title="Facebook" class=" wow zoomIn" data-wow-delay="1.8s">
          <span class="ico-fb"></span>
        </a>
        <a href="https://www.instagram.com/sites_bots/" title="Instagram" class=" wow zoomIn" data-wow-delay="2s">
          <span class="ico-inst"></span>
        </a>
        <a href="#" title="LinkedIn" class=" wow zoomIn" data-wow-delay="2.2s">
          <span class="ico-ln"></span>
        </a>
        <a href="#" title="Telegram" class=" wow zoomIn" data-wow-delay="2.4s">
          <span class="ico-send"></span>
        </a>
      </div>
    </div>
    <div class="col-lg-8">
      <div id="map" class="d-none d-lg-block wow zoomIn" data-wow-delay="2.6s">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20298.871400318883!2d30.48649989347255!3d50.50888812945788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4d2146b576c33%3A0xf10debc0e65558a5!2z0J7QsdC-0LvQvtC90YwsINCa0LjRl9CyLCAwMjAwMA!5e0!3m2!1suk!2sua!4v1613807658062!5m2!1suk!2sua" width="770" height="314" allowfullscreen="" aria-hidden="false" tabindex="0" style="border:0; max-width: 100%;"></iframe>
      </div>
    </div>
  </div>

</div>

@endsection
