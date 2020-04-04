@extends('front.layout', ['bodyClass' => 'sites'])

@section('content')
<div class="container">
  {{-- {!! $page->html !!} --}}

  {{-- First screen --}}
  <div class="row align-items-center">
    <div class="col-md-6">
      <div class="image"><img src="/images/main_sites.jpg" alt="" class="img-fluid"></div>
    </div>
    <div class="col-md-6">
      <a href="/" class="btn-black-round active">Сайты</a>
      <a href="/bots" class="btn-black-round">Боты</a>

      <h1 class="title">Мы создаем сайты</h1>

      <hr class="dashed">

      <div class="row">
        <div class="col-sm-6">
          <p><b>Которые решают задачи бизнеса, даже самые сложные и безумные.</b></p>

          <p>Мы не навязываем шаблонные решения и конструкторы, и с горящими глазами беремся за нетривиальные и сложные задачи. Забудьте про ограничения.</p>
        </div>
        <div class="col-sm-6">
          <p><b>Которые работают годами, приносят клиентов и прибыль.</b></p>

          <p>Вы получаете 100% работающий продукт, оперативную техническую поддержку и инициативную команду, которая поможет сделать ваши крутые идеи еще лучше. </p>
        </div>
      </div>

      <button class="btn-gradient mt-4"><span>рассчитать проект</span></button>
    </div>
  </div>

  <div class="main-page-text">
    <p>
      Делаем уникальные интернет-магазины, сложные корпоративные сайты с множеством интеграций, блоги на Wordpress и лендинги на Tilda
    </p>
  </div>


  <p class="uppercase mt-5">Познакомьтесь с некоторыми нашими клиентами</p>

</div>

{{-- Second screen --}}
<div class="work-block">
  <div class="container">
    <div class="image mt-5 mb-4"><img src="/images/annafoxy_1.jpg" alt="" class="img-fluid"></div>
    <div class="row">
      <div class="col-md-6">
        <p class="work-title">
          <span class="small">Luxury brand by</span>
          ANNAFOXY
        </p>
      </div>
      <div class="col-md-6">
        <p>Полноценный монобрендовый интернет-магазин для ценителей уникальных предметов одежды и аксессуаров, ориентированный в основном на европейскую аудиторию. Его дизайн необычный и вызывающий, он подчеркивает аутентичность бренда и передает его настроение покупателям.</p>
        <p>Магазин разработан на базе  фреймворка Symfony. В нем есть админ-панель для приема заказов и добавления товаров, интегрирована система уведомлений для менеджера, подключена платежная платформа для приема оплат в 120 валютах. </p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="owl-carousel owl-theme">
      <div class="item"><img src="/images/annafoxy_1.jpg" alt="" class="img-fluid"></div>
      <div class="item"><img src="/images/annafoxy_1.jpg" alt="" class="img-fluid"></div>
      <div class="item"><img src="/images/annafoxy_1.jpg" alt="" class="img-fluid"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-desc">
            <li>Мультиязычный (UA, RU, ENG) интернет-магазин с расширенным функционалом административной панели и упором на повышение конверсии.</li>
            <li>Широкий список уникальных свойств для каждого товара: цвет, рост, размер</li>
            <li>Гибкая система лояльности с начислением баллов за покупки. Модуль акций для легкого запуска промо и активации скидок. </li>
            <li>Интеграция с AmoCRM для эффективной обработки заказов.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="list-desc">
            <li>Динамичные слайдеры на главной, удобный конструктор для самостоятельного наполнения страниц сайта.</li>
            <li>Система ролей, позволяющая раздавать только необходимые права доступа тем, кто работает с сайтом.</li>
            <li>Подключен прием оплат со всего мира с помощью Visa, Mastercard, Apple Pay, Google Pay. Кастомный чекаут без перехода на сторонний ресурс для увеличения конверсии.</li>
            <li>Интеграция с AmoCRM для эффективной обработки заказов.</li>
          </ul>

          <a href="https://annafoxy.com" class="btn-gradient" target="_blank"><span>Перейти на сайт</span></a>
          <button class="ml-4 btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr class="dashed mb-5">
</div>

  {{-- Third screen --}}
<div class="work-block">
  <div class="container">
    <div class="image mt-5 mb-4"><img src="/images/ermolaev_1.jpg" alt="" class="img-fluid"></div>
    <div class="row">
      <div class="col-md-6">
        <p class="work-title">
          <span class="small">Personal Blog</span>
          VADYM IERMOLAIEV
        </p>
      </div>
      <div class="col-md-6">
        <p>Вадим Владимирович —  известный украинский бизнесмен, инвестор и основатель корпорации «Алеф». </p>
        <p>Мы разработали сайт, на котором он охотно делится интересными мыслями, новостями бизнес-проектов своей компании и видеороликами с общественностью. Сайт помогает предпринимателю укреплять свой имидж, налаживать коммуникации и привлекать новых партнеров по бизнесу.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="owl-carousel owl-theme">
      <div class="item"><img src="/images/ermolaev_1.jpg"></div>
      <div class="item"><img src="/images/ermolaev_1.jpg"></div>
      <div class="item"><img src="/images/ermolaev_1.jpg"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-desc">
            <li>Мультиязычный (UA, RU, ENG) интернет-магазин с расширенным функционалом административной панели и упором на повышение конверсии.</li>
            <li>Широкий список уникальных свойств для каждого товара: цвет, рост, размер</li>
            <li>Гибкая система лояльности с начислением баллов за покупки. Модуль акций для легкого запуска промо и активации скидок. </li>
            <li>Интеграция с AmoCRM для эффективной обработки заказов.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="list-desc">
            <li>Динамичные слайдеры на главной, удобный конструктор для самостоятельного наполнения страниц сайта.</li>
            <li>Система ролей, позволяющая раздавать только необходимые права доступа тем, кто работает с сайтом.</li>
            <li>Подключен прием оплат со всего мира с помощью Visa, Mastercard, Apple Pay, Google Pay. Кастомный чекаут без перехода на сторонний ресурс для увеличения конверсии.</li>
            <li>Интеграция с AmoCRM для эффективной обработки заказов.</li>
          </ul>

          <a href="https://vadymiermolaiev.info" class="btn-gradient" target="_blank"><span>Перейти на сайт</span></a>
          <button class="ml-4 btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>

</div>

{{-- Footer --}}
<footer>
  <div class="container">
    <p class="title">
      Расскажите нам о своем проекте! <br> Будем рады пообщаться и ответить <br> на все вопросы.
    </p>
    <hr class="dashed">
    <p>Or leave your credentials and we will reach you in any convenient way</p>
    <button class="btn-gradient"><span>GET STARTED</span></button>

    <p class="copryright">Sites&Bots, 2020</p>
  </div>
</footer>
@endsection

@push('scripts')
<link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
  $(function () {
    $('.btn-more').on('click', function(){
      $(this).closest('.work-block').find('.block-more').addClass('open');
      $(this).hide();
    });
    $('.btn-hide').on('click', function(){
      $(this).closest('.block-more').removeClass('open');
      $(this).closest('.work-block').find('.btn-more').show();
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        margin:40,
        stagePadding: 100,
        items: 1,
        // autoWidth: true,
        nav: false,
        dots: false,
        autoplay: true
    })
  });
</script>
@endpush