@extends('front.layout', ['bodyClass' => 'sites'])

@section('content')

{{-- First screen --}}
<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">Мы создаем <br> сайты</h1>
      <div class="image d-lg-none sites-mobile-image" style="overflow-x: hidden;"><img src="/img/m-sites.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>Наши сайты решают самые сложные задачи бизнеса<br><br></h4>
          <hr>
          <p>Мы не навязываем шаблонные решения и конструкторы. Наша компания сосредоточена на качестве продукта и удовлетворении потребностей клиента.</p>
        </div>
        <div class="col-sm-6">
          <h4>Наши сайты гарантируют динамику роста прибыли и долгосрочных клиентов</h4>
          <hr>
          <p>Вы получаете готовый продукт, оперативную техническую поддержку и команду высококвалифицированных сотрудников, готовых выполнить любые поставленные задачи.</p>
        </div>
      </div>

      <button class="button fixed" data-bs-toggle="modal" data-bs-target="#contactModal">Рассчитать проект</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/sites.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;">
    </div>

  </div>

</div>



<section class="wide-text">
  <div class="container text-center">
    <h3>Разрабатываем уникальные интернет-магазины, сложные корпоративные сайты с множеством интеграций, проекты на Wordpress и Opencart.</h3>
  </div>
</section>



<section class="works">

  <div class="container">
    <h3 class="text-center text-lg-left">Познакомьтесь с некоторыми нашими клиентами</h3>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
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
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">annafoxy</h2>

            <p>Полноценный монобрендовый интернет-магазин для ценителей уникальных предметов одежды и аксессуаров, ориентированный в основном на европейскую аудиторию.</p>

            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">Мультиязычный (UA, RU, ENG) интернет-магазин с расширенным функционалом административной панели и упором на повышение конверсии.</li>
            <li class="list-item">Динамические слайдеры на главной странице, удобный конструктор для самостоятельного наполнения страниц сайта.</li>
            <li class="list-item">Широкий список уникальных свойств для каждого товара: цвет, рост, размер</li>
            <li class="list-item">Система ролей, позволяющая раздавать только необходимые права доступа тем, кто работает с сайтом.</li>
            <li class="list-item">Гибкая система лояльности с начислением баллов за покупки. Модуль акций для легкого запуска промо и активации скидок. </li>
            <li class="list-item">Подключен прием оплат со всего мира с помощью Visa, Mastercard, Apple Pay, Google Pay. Кастомный чекаут без перехода на сторонний ресурс для увеличения конверсии.</li>
            <li class="list-item">Интеграция с AmoCRM для эффективной обработки заказов.</li>
          </ul>
          <a href="https://annafoxy.com" class="button more" target="_blank">Перейти на сайт</a>
        </div>
      </div>

      <hr>

    </div>
  </div>



  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
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
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">Personal Blog</span><br>VADYM IERMOLAIEV</h2>

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
          <a href="https://vadymiermolaiev.info" class="button more" target="_blank">Перейти на сайт</a>
        </div>
      </div>

      <hr>
    </div>
  </div>


  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">Dynasty</h2>

          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/dinasty/01.png"></div>
            <div class="item"><img src="/images/dinasty/02.png"></div>
            <div class="item"><img src="/images/dinasty/03.png"></div>
            <div class="item"><img src="/images/dinasty/04.png"></div>
            <div class="item"><img src="/images/dinasty/05.jpg"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">Dynasty</h2>

            <p>Cамописный веб-сайт юридической фирмы с мультиролевым кабинетом для хранения и работы с документацией, документооборота, многофункциональной административной панелью и кастомной файловой системой.</p>

            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">Мультиязычный (UA, RU, ENG) сайт с расширенным функционалом административной панели и упором на повышение конверсии.</li>
            <li class="list-item">Фронт-часть сайта с функционалом редактирования страниц и публикаций</li>
            <li class="list-item">Мультифункциональный кабинет для нескольких типов пользователей: клиент, стажер, юрист, администратор.</li>
            <li class="list-item">Внутренний функционал файловой системы для работы с документами юристов и клиентов</li>
            <li class="list-item">Система внутреннего тестирования для стажеров и юристов</li>
            <li class="list-item">Система просмотра посетителей сайта: юристов, стажеров, клиентов</li>
            <li class="list-item">Возможность оплаты услуг внутри кабинета.</li>
          </ul>
          <a href="https://dynasty.legal" class="button more" target="_blank">Перейти на сайт</a>
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
        autoplay: false,
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