@extends('front.layout', ['bodyClass' => 'contact'])

@section('content')
{{-- First screen --}}
<div class="container">
  <div class="row contact-main">
    <div class="col-md-6">
      <h1 class="contact-title">Рады будем связаться с вами в различных социальных сетях.</h1>
    </div>
    <div class="col-md-6">
      <ul class="contact-links">
        <li><a href="https://www.facebook.com/groups/250822842966466/" title="Facebook">Facebook</a></li>, 
        <li><a href="#" title="Twitter">Twitter</a></li>, 
        <li><a href="#" title="LinkedIn">LinkedIn</a></li>, 
        <li><a href="https://www.instagram.com/sites_bots/" title="Instagram">Instagram</a></li>, 
        <li><a href="#" title="Telegram">Telegram</a></li>, 
        <li><a href="mailto:sitesnbotssocial@gmail.com" title="Email">Email</a></li> or 
        <li><a href="#" title="Phone">Phone</a></li>.
      </ul>
      <hr class="dashed">
      <p class="contact-sub-text">или оставьте свою заявку здесь</p>
      <button class="btn-gradient" data-toggle="modal" data-target="#contactModal"><span>связаться с нами</span></button>
    </div>
  </div>
  <p class="copryright">Sites&Bots, 2020</p>

</div>

@endsection
