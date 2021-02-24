@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')

{{-- First screen --}}
<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">Мы создаем <br> ботов</h1>
      <div class="image d-lg-none bots-mobile-image" style="overflow-x: hidden;"><img src="/img/m-bots.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>Наши боты автоматизируют сложные процессы в компании</h4>
          <hr>
          <p>Ускоряют формирование отчетов, выгружают данные в 1С или CRM-систему, собирают обратную связь от сотрудников компании.</p>
        </div>
        <div class="col-sm-6">
          <h4>Наши боты помогуют обслуживать клиентов в привычной среде общения</h4>
          <hr>
          <p>Принимают заказы и оплаты, отвечают на часто задаваемые вопросы, помогают лучше узнать продукт. Собирают отзывы клиентов, рассылают им специальные предложения и акции.</p>
        </div>
      </div>

      <button class="button fixed" data-bs-toggle="modal" data-bs-target="#contactModal">Рассчитать проект</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/bots.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;">
    </div>

  </div>

</div>



<section class="wide-text wow zoomIn" data-wow-delay="1s">
  <div class="container text-center">
    <h3>Они круглосуточно, без отпусков и праздников трудятся на благо вашего бизнеса в мессенджерах. Заменяют менеджеров, бухгалтеров, работников поддержки, пару ленивых маркетологов. </h3>
  </div>
</section>


<section class="works">

  <div class="container">
    <h3 class="text-center text-lg-left">Смотрите, какие проекты мы уже запустили</h3>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">Чарли - бухгалтер фирмы</h2>
          
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/bot-1.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/bot-1.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">Чарли - бухгалтер фирмы</h2>

            <p><b>Чат-бот фирмы, которая занимается пошивом шуб.</b></p>
            <p>Бот-бухгалтер для ведения отчетности о заказах и продажах.</p>
            <p>Даёт возможность вносить новые продажи и заказы поставок товаров во все магазины компании, ежедневно формирует отчеты для 1С.</p>

            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p>Даёт возможность вносить новые продажи и заказы поставок товаров во все магазины компании, ежедневно формирует отчеты для 1С.</p>
          <p class="mb-2">Возможности</p>
          <ul class="list">
            <li class="list-item">Мультиязычный (UA, RU, ENG) интернет-магазин с расширенным функционалом административной панели и упором на повышение конверсии.</li>
            <li class="list-item">Динамичные слайдеры на главной, удобный конструктор для самостоятельного наполнения страниц сайта.</li>
            <li class="list-item">Широкий список уникальных свойств для каждого товара: цвет, рост, размер</li>
            <li class="list-item">Система ролей, позволяющая раздавать только необходимые права доступа тем, кто работает с сайтом.</li>
            <li class="list-item">Гибкая система лояльности с начислением баллов за покупки. Модуль акций для легкого запуска промо и активации скидок. </li>
            <li class="list-item">Подключен прием оплат со всего мира с помощью Visa, Mastercard, Apple Pay, Google Pay. Кастомный чекаут без перехода на сторонний ресурс для увеличения конверсии.</li>
            <li class="list-item">Интеграция с AmoCRM для эффективной обработки заказов.</li>
          </ul>
          <p>Результат: <br> значительный рост мотивации сотрудников и уровня их удовлетворенности проделанной работой за счет получения благодарностей от клиентов напрямую.</p>
          <a href="https://annafoxy.com" class="button more mt-4" target="_blank">Посмотреть бота</a>
        </div>

      </div>

      <hr>

    </div>
  </div>



  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">Бот благодарности</h2>
          
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/bot-1.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/bot-1.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">Бот благодарности</h2>

            <p>Мы разработали сайт для Вадима Владимировича, известного украинского бизнесмена, на котором он охотно делится интересными мыслями, новостями бизнес-проектов своей компании и видеороликами с обществом.</p>

            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">Мультиязычный (UA, RU, ENG)  сайт-блог на платформе WordPress</li>
            <li class="list-item">Уникальный, строгий и современный дизайн</li>
            <li class="list-item">Легкий и быстрый сайт для информирования и коммуникации с общественностью</li>
            <li class="list-item">Размещение статей с посторонних ресурсов для сохранения авторства контента</li>
            <li class="list-item">Удобная административная панель</li>
            <li class="list-item">Коммуникация по обратной связи</li>
          </ul>
          <a href="https://vadymiermolaiev.info" class="button more" target="_blank">Посмотреть бота</a>
        </div>
      </div>

    </div>
  </div>

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
        // autoWidth: true,
        nav: true,
        dots: false,
        // autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 2000,
        // smartSpeed: 10000,
        // fluidSpeed: 25000
        responsive : {
            // breakpoint from 0 up
            0 : {
              // stagePadding: 10,
              margin:10
            },
            // breakpoint from 480 up
            480 : {

            },
            // breakpoint from 768 up
            768 : {
              // stagePadding: 100,
              margin:40
            }
        }
    })
  });
</script>
@endpush