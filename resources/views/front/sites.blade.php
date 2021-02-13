@extends('front.layout', ['bodyClass' => 'sites'])

@section('content')

{{-- First screen --}}
<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">Мы создаем <br> сайты</h1>
      <div class="image d-lg-none sites-mobile-image"><img src="/img/m-sites.svg" alt="сайты" class="img-fluid"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>Наши сайты решают самые сложные и безумные задачи бизнеса</h4>
          <hr>
          <p>Мы не навязываем шаблонные решения и конструкторы, и с горящими глазами беремся за нетривиальные и сложные задачи. Забудьте про ограничения.</p>
        </div>
        <div class="col-sm-6">
          <h4>Наши сайты работают годами, приносят клиентов и прибыль</h4>
          <hr>
          <p>Вы получаете 100% работающий продукт, оперативную техническую поддержку и инициативную команду, которая поможет сделать ваши крутые идеи еще лучше. </p>
        </div>
      </div>

      <button class="button fixed">Рассчитать проект</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/sites.svg" alt="сайты" class="img-fluid">
    </div>

  </div>

</div>



<section class="wide-text">
  <div class="container text-center">
    <h3>Делаем уникальные интернет-магазины, сложные корпоративные сайты с множеством интеграций, блоги на Wordpress и лендинги на Tilda</h3>
  </div>
</section>



<section class="works">

  <div class="container">
    <h3 class="text-center text-lg-left">Познакомьтесь с некоторыми нашими клиентами</h3>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">annafoxy</h2>
          
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/annafoxy/af_1.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_2.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_3.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_4.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_5.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_6.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_7.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_8.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_9.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/annafoxy/af_10.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4">
          <h2 class="d-none d-lg-block">annafoxy</h2>

          <p>Полноценный монобрендовый интернет-магазин для ценителей уникальных предметов одежды и аксессуаров, ориентированный в основном на европейскую аудиторию.</p>

          <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>

        </div>
      </div>

      <div class="block-more">
        <ul class="list">
          <li class="list-item">Мультиязычный (UA, RU, ENG) интернет-магазин с расширенным функционалом административной панели и упором на повышение конверсии.</li>
          <li class="list-item">Динамичные слайдеры на главной, удобный конструктор для самостоятельного наполнения страниц сайта.</li>
          <li class="list-item">Широкий список уникальных свойств для каждого товара: цвет, рост, размер</li>
          <li class="list-item">Система ролей, позволяющая раздавать только необходимые права доступа тем, кто работает с сайтом.</li>
          <li class="list-item">Гибкая система лояльности с начислением баллов за покупки. Модуль акций для легкого запуска промо и активации скидок. </li>
          <li class="list-item">Подключен прием оплат со всего мира с помощью Visa, Mastercard, Apple Pay, Google Pay. Кастомный чекаут без перехода на сторонний ресурс для увеличения конверсии.</li>
          <li class="list-item">Интеграция с AmoCRM для эффективной обработки заказов.</li>
        </ul>
        <a href="https://annafoxy.com" class="button more" target="_blank">Перейти на сайт</a>
      </div>

      <hr>

    </div>
  </div>



  <div class="work-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">Personal Blog</span><br>VADYM IERMOLAIEV</h2>
          
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/iermolaiev/Ie_01.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_02.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_03.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_04.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_05.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_06.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_07.jpg"></div>
            <div class="item"><img src="/images/iermolaiev/Ie_08.jpg"></div>
          </div>

        </div>
        <div class="col-lg-4">
          <h2 class="d-none d-lg-block"><span class="">Personal Blog</span><br>VADYM IERMOLAIEV</h2>

          <p>Мы разработали сайт для Вадима Владимировича, известного украинского бизнесмена, на котором он охотно делится интересными мыслями, новостями бизнес-проектов своей компании и видеороликами с обществом.</p>

          <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>

        </div>
      </div>

      <div class="block-more">
        <ul class="list">
          <li class="list-item">Мультиязычный (UA, RU, ENG)  сайт-блог на платформе WordPress</li>
          <li class="list-item">Уникальный, строгий и современный дизайн</li>
          <li class="list-item">Легкий и быстрый сайт для информирования и коммуникации с общественностью</li>
          <li class="list-item">Размещение статей с посторонних ресурсов для сохранения авторства контента</li>
          <li class="list-item">Удобная административная панель</li>
          <li class="list-item">Коммуникация по обратной связи</li>
        </ul>
        <a href="https://vadymiermolaiev.info" class="button more" target="_blank">Перейти на сайт</a>
      </div>

    </div>
  </div>

</section>







{{-- Footer --}}
<footer>
  <div class="container">
    <p class="title">
      Расскажите нам о своем проекте! Будем рады пообщаться и ответить на все вопросы.
    </p>
    <hr class="dashed">
    <p class="small">напишите нам и мы обсудим подробности по вашему проекту</p>
    <button class="btn-gradient" data-toggle="modal" data-target="#contactModal"><span>написать</span></button>

    <p class="copryright">Sites&Bots, 2020</p>
  </div>
</footer>
@endsection

@push('scripts')
<link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
  $(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        items: 1,
        slideTransition: 'linear',
        // autoWidth: true,
        nav: false,
        dots: false,
        // autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 10000,
        // autoplaySpeed: 10000,
        smartSpeed: 10000,
        // fluidSpeed: 25000
        responsive : {
            // breakpoint from 0 up
            0 : {
              stagePadding: 10,
              margin:10
            },
            // breakpoint from 480 up
            480 : {

            },
            // breakpoint from 768 up
            768 : {
              stagePadding: 100,
              margin:40
            }
        }
    })
  });
</script>
@endpush