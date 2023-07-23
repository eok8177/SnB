@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')

<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">@lang("Створення <br> ботів")</h1>
      <div class="image d-lg-none bots-mobile-image" style="overflow-x: hidden;"><img src="/img/m-bots.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>@lang("Наші роботи автоматизують складні процеси в компаніях")</h4>
          <hr>
          <p>@lang("Прискорюють формування звітів, вивантажують дані у 1С чи CRM-систему, збирають зворотний зв'язок від співробітників компанії.")</p>
        </div>
        <div class="col-sm-6">
          <h4>@lang("Наші боти допомагають обслуговувати клієнтів у звичному середовищі спілкування")</h4>
          <hr>
          <p>@lang("Приймають замовлення і оплати, відповідають на питання, що часто ставляться, допомагають краще дізнатися продукт. Збирають відгуки клієнтів, розсилають їм спеціальні пропозиції та акції.")</p>
        </div>
      </div>

      <button class="button fixed" data-bs-toggle="modal" data-bs-target="#contactModal">@lang("Оцінити проект")</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/bots.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;">
    </div>
  </div>
</div>



<section class="wide-text">
  <div class="container text-center">
    <h3>@lang("Боти функціонують 24/7, підтримуючи та оптимізуючи процеси без зовнішнього втручання. Виконують рутинну роботу менеджерів, бухгалтерів, технічної підтримки.")</h3>
  </div>
</section>


<section class="works bot-works">

  <div class="container">
    <h3 class="text-center text-lg-left">@lang("Проекти, які ми запустили")</h3>
  </div>

  @foreach ($blocks as $block)
  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">{!! $block->title !!}</h2>

          <div class="owl-carousel owl-theme" data-pause="0">
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
          <p class="mb-2">@lang("Можливості")</p>
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
    let config = {
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
    };

    $('.owl-carousel').each(function() {
      let item = $(this);
      let timeout = parseInt(item.attr('data-pause'));
      setTimeout(function() {
          item.owlCarousel(config);
      }, timeout);
    });

  });
</script>
@endpush