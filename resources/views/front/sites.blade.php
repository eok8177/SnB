@extends('front.layout', ['bodyClass' => 'sites'])

@section('content')

<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">@lang('We create <br> sites')</h1>
      <div class="image d-lg-none sites-mobile-image" style="overflow-x: hidden;"><img src="/img/m-sites.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>@lang('Our sites can solve the most complicated business tasks')<br><br></h4>
          <hr>
          <p>@lang('We do not offer the most basic options or site builders. Our company’s focus is on product quality, and we tend to satisfy our customers’ needs.')</p>
        </div>
        <div class="col-sm-6">
          <h4>@lang('Our sites bring up the numbers. Moreover, they surely guarantee the long term customers')</h4>
          <hr>
          <p>@lang('You get the end-product, prompt technical support, and highly qualified team that is always ready to implement the tasks.')</p>
        </div>
      </div>

      <button class="button fixed" data-bs-toggle="modal" data-bs-target="#contactModal">@lang('Estimate a project')</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/sites.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;">
    </div>
  </div>
</div>

<section class="wide-text">
  <div class="container text-center">
    <h3>@lang('We develop unique online stores, complex corporate sites with lots of integrations, and projects created on Wordpress & Shopify.')</h3>
  </div>
</section>

<section class="works">

  <div class="container">
    <h3 class="text-center text-lg-left">@lang('You are welcome to meet our customers')</h3>
  </div>

  @foreach ($blocks as $block)
  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">{!! $block->title !!}</h2>

          <div class="owl-carousel owl-theme">
            @foreach ($block->images as $image)
            <div class="item"><img src="/{{$image->url}}" alt="{{$block->title}}" class="img-fluid"></div>
            @endforeach
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">{!! $block->title !!}</h2>

            <p>{!! $block->preview !!}</p>

            <button class="button more btn-more closed" data-open="@lang('Read more')" data-close="@lang('Hide')">@lang('Read more')</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          {!! $block->text !!}
          @if($block->url)
          <a href="{{$block->url}}" class="button more" target="_blank">@lang('Go to the website')</a>
          @endif
        </div>
      </div>

      @if(!$loop->last)
      <hr>
      @endif

    </div>
  </div>
  @endforeach

</section>
@endsection

@push('pre-styles')
<link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
  $(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        items: 1,
        slideTransition: 'linear',
        nav: true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 2000,
        responsive : {
            0 : {margin:10},
            480 : {},
            768 : {margin:40}
        }
    })
  });
</script>
@endpush