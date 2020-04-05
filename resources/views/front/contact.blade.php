@extends('front.layout', ['bodyClass' => 'contact'])

@section('content')
{{-- First screen --}}
<div class="container">
  <div class="row contact-main">
    <div class="col-md-6">
      <h1 class="title-contact">Contact with us by any convenient way.</h1>
    </div>
    <div class="col-md-6">
      <h2 class="title-contact">Facebook, Twitter, LinkedIn, Instagram, Telegram, Email or Phone.</h2>
      <hr class="dashed">
      <p class="contact-sub-text">Or leave your credentials and we will reach you in any convenient way</p>
      <button class="btn-gradient" data-toggle="modal" data-target="#contactModal"><span>GET STARTED</span></button>
    </div>
  </div>
  <p class="copryright">Sites&Bots, 2020</p>

</div>

{{-- Modal --}}
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-contact" id="contactModalLabel">Leave us your contact info and we will reach you in any possible view</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" class="input-control" placeholder="Phone, Email, Messenger, Anything">

        <button class="btn-gradient"><span>GET STARTED</span></button>
      </div>
    </div>
  </div>
</div>

@endsection
