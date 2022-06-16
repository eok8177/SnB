@extends('front.layout', ['bodyClass' => 'about-us-page'])

@section('content')
{{-- First screen --}}
<div class="container">
  <h1 class="title-about">@lang('About us')</h1>
  <p class="sub-text">
    @lang('We prefer to create specialized products that serve any needs perfectly instead of temporary and mediocre solutions.')
  </p>

  <ul class="nav nav-tabs pills" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">@lang('About us')</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">@lang('how we work')</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

      <div class="row">
        <div class="col-md-4">
          <h4 class="sub-title">@lang('Who we are')</h4>
          <p>@lang('We are a team of professionals, and we are ready to implement the most complex ideas. <br> Our team consists of the qualified developers, quality assurance specialists, creative designers, analysts, SEO and niche experts for whom there are no impossible tasks.')</p>
        </div>

        <div class="col-md-4">
          <h4 class="sub-title">@lang('What we do')</h4>
          <p>@lang('We create self-made online stores and corporate sites aimed to satisfy customers’ needs. <br> We develop chatbots on Telegram, WhatsApp and Viber platforms, including multiple third-party services.')</p>
        </div>

        <div class="col-md-4">
          <h4 class="sub-title">@lang('Why us')</h4>
          <p>@lang('While working with us you won't need any other contractors. We will turn your idea into a сomprehensive product. We will support and develop it, and create the necessary features for your business.')</p>
        </div>

      </div>

    </div>

    <div class="tab-pane fade how-work-blocks" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      
      <div class="row first-line">
        <span class="ico-start"></span>

        <div class="col-lg-4 item wow zoomIn" data-wow-delay="0s" data-wow-offset="200">
          <div class="number">01</div>
          <div class="text"><span>@lang('Meet-and-greet with you.')</span></div>
        </div>

        <div class="col-lg-4 item wow zoomIn" data-wow-delay="0.5s" data-wow-offset="200">
          <div class="number">02</div>
          <div class="text"><span>@lang('Briefing and planning.')</span></div>
        </div>

        <div class="col-lg-4 item wow zoomIn" data-wow-delay="1s" data-wow-offset="200">
          <div class="number">03</div>
          <div class="text"><span>@lang('Forming the technical requirements.')</span></div>
        </div>
      </div>

      <div class="row second-line">
        <div class="col-lg-4 item wow zoomIn order-lg-3" data-wow-delay="0s" data-wow-offset="200">
          <div class="number">04</div>
          <div class="text"><span>@lang('Creating a mockup, develop a design.')</span></div>
        </div>

        <div class="col-lg-4 item wow zoomIn order-lg-2" data-wow-delay="0.5s" data-wow-offset="200">
          <div class="number">05</div>
          <div class="text"><span>@lang('Code writing and optimisation.')</span></div>
        </div>

        <div class="col-lg-4 item wow zoomIn order-lg-1" data-wow-delay="1s" data-wow-offset="200">
          <div class="number">06</div>
          <div class="text"><span>@lang('Performing quality assurance and bug fixing')</span></div>
        </div>
      </div>

      <div class="row third-line">
        <div class="col-lg-4 item wow zoomIn" data-wow-delay="0s" data-wow-offset="200">
          <div class="number">07</div>
          <div class="text"><span>@lang('Passing the project to you and deploying it on your server.')</span></div>
        </div>

        <div class="col-lg-4 item wow zoomIn" data-wow-delay="0.5s" data-wow-offset="200">
          <div class="number">08</div>
          <div class="text"><span>@lang('Keeping in touch and supporting the project.')</span></div>
        </div>

        <div class="col-lg-4 item wow zoomIn" data-wow-delay="1s" data-wow-offset="200">
          <div class="number">09</div>
          <div class="text"><span>@lang('Participating in the project lifecycle, adding new features”')</span></div>
        </div>

        <span class="ico-finish"></span>
      </div>
    </div>

  </div>

</div>



@endsection
@push('scripts')
<script>
  $(function () {
    $('.pills .nav-link').on('click', function(){
      wow.init();
    });
  });
</script>
@endpush