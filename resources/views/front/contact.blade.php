@extends('front.layout', ['bodyClass' => 'contact'])

@section('content')
{{-- First screen --}}
<div class="container">
  <div class="row contact-main">
    <div class="col-md-6">
      <h1 class="contact-title">Contact with us <br> by any convenient way.</h1>
    </div>
    <div class="col-md-6">
      <ul class="contact-links">
        <li><a href="#" title="Facebook">Facebook</a></li>, 
        <li><a href="#" title="Twitter">Twitter</a></li>, 
        <li><a href="#" title="LinkedIn">LinkedIn</a></li>, 
        <li><a href="https://www.instagram.com/sites_bots/" title="Instagram">Instagram</a></li>, 
        <li><a href="#" title="Telegram">Telegram</a></li>, 
        <li><a href="#" title="Email">Email</a></li> or 
        <li><a href="#" title="Phone">Phone</a></li>.
      </ul>
      <hr class="dashed">
      <p class="contact-sub-text">Or leave your credentials and we will reach you in any convenient way</p>
      <button class="btn-gradient" data-toggle="modal" data-target="#contactModal"><span>GET STARTED</span></button>
    </div>
  </div>
  <p class="copryright">Sites&Bots, 2020</p>

</div>

@endsection
