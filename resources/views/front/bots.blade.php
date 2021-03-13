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


<section class="works bot-works">

  <div class="container">
    <h3 class="text-center text-lg-left">Смотрите, какие проекты мы уже запустили</h3>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">Бухгалтер Чарли</h2>

          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/charly/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/charly/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/charly/03.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/charly/04.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">Бухгалтер Чарли</h2>
            <p><b>Чат-бот фирмы, которая занимается пошивом шуб.</b></p>
            <p>Бот-бухгалтер для ведения отчетности о заказах и продажах.</p>
            <p>Даёт возможность вносить новые продажи и заказы поставок товаров во все магазины компании, ежедневно формирует отчеты для 1С.</p>
            <p>Даёт возможность вносить новые продажи и заказы поставок товаров во все магазины компании, ежедневно формирует отчеты для 1С.</p>
            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">Возможности</p>
          <ul class="list">
            <li class="list-item">платформа: Telegram</li>
            <li class="list-item">передача информации сотрудникам и дублирование сообщений в чат компании для сбора отчета о полученных отзывах.</li>
            <li class="list-item">формирование благодарственного письма одному или нескольким сотрудникам компании</li>
            <li class="list-item">интеграция с сервисом SMS-Fly для передачи благодарностей в виде SMS-сообщений</li>
            <li class="list-item">поддержка вложений файлов и изображений в благодарность</li>
          </ul>
          <p>Результат: <br> значительный рост мотивации сотрудников и уровня их удовлетворенности проделанной работой за счет получения благодарностей от клиентов напрямую.</p>
        </div>
      </div>
      <hr>
    </div>
  </div>



  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">Бот программы лояльности</h2>

          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/loyalty/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/loyalty/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/loyalty/03.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/loyalty/04.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">Бот программы лояльности</h2>
            <p>Закрытый чат-бот для компании-производителя автомобильных шин.</p>
            <p>Основной целью бота является внеднерение программы лояльности для поощрения трудолюбивых сотрудников компании. Помогает сотруднику вывести бонусные баллы от продаж шин методом сканирование QR-кодов с физических чеков. Так же, имеем интеграцию с апи клиента, которая позволяет вести в диалоги в тех поддержке, оставлять заявки на коммуникацию, уточнять свой статус и баланс по программе лояльности.</p>
            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">Возможности</p>
          <ul class="list">
            <li class="list-item">платформа: Telegram</li>
            <li class="list-item">интегрированное взаимодействие с техподдержкой в формате «вопрос-ответ» и возможностью вложения закодированных файлов в любом формате</li>
            <li class="list-item">интеграция с многофункциональным API</li>
            <li class="list-item">распознавание QR-кодов и последующая их передача по API</li>
            <li class="list-item">регистрация и авторизация пользователя с несколькими ступенями верификации и поддержкой редактирования профиля</li>
            <li class="list-item">проверка баланса по проведенным сканам кодов и общий подсчет бонусных баллов за рабочий квартал</li>
          </ul>
          <p>Результат: <br> прозрачная система лояльности для продавцов компании работает на более чем 500-та торговых точках по всей стране. Выросла мотивация продавцов, появился соревновательный элемент, средний чек по городу увеличился на 15%.</p>
        </div>
      </div>
      <hr>
    </div>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">Rest bot</h2>
          
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/rest/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/rest/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/rest/03.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">Rest bot</h2>
            <p>Виртуальный менеджер ресторана.</p>
            <p>Рассказывает гостям, сколько есть свободных мест в заведении, покажет меню, поможет выбрать еду и напитки. Имеет возможность зарезервировать любой столик на ваш выбор или даже все заведение для большого праздника. Принимает отзывы о работе ресторана.</p>
            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">Возможности</p>
          <ul class="list">
            <li class="list-item">платформа: Telegram</li>
            <li class="list-item">передача данных клиента из telegram-профиля (имя, фамилия, номер телефона) в админ панель сервиса в один клик</li>
            <li class="list-item">возможность забронировать столик в ресторане: выбор времени, даты, количества людей</li>
            <li class="list-item">система информационной рассылки для тех, кто начал диалог с ботом</li>
            <li class="list-item">удобная и простая административная панель для сбора информации о заказах</li>
            <li class="list-item">редактирование информации о боте через административную панель</li>
          </ul>
          <p>Результат: <br> повысилась скорость обработки заказов — каждый шестой заказ ресторан получает через бота. Данные клиентов передаются в CRM-систему для последующих рассылок об акциях и предложениях ресторана.</p>
        </div>
      </div>
      <hr>
    </div>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">Бот по продаже масел Shell</h2>
          
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/shell/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/shell/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/shell/03.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/shell/04.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/shell/05.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/shell/06.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">Бот по продаже масел Shell</h2>
            <p>Позволяет подобрать и приобрести масло для вашего автомобиля.</p>
            <p>Предназначен для помощи в выборе машинного масла для клиентов компании Shell. Позволяет найти нужное масло и приобрести его. Рассылает уведомления и приглашает принимать участие в акциях. Бот работает по функционалу широкого API с получением крупных массивов данных по каждому клиенту.</p>
            <button class="button more btn-more closed" data-open="Читать полностью" data-close="Скрыть">Читать полностью</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">Возможности</p>
          <ul class="list">
            <li class="list-item">платформа: Telegram</li>
            <li class="list-item">Регистрация по номеру телефонов с подтверждением по API</li>
            <li class="list-item">Глобальный каталог товаров с персональными цена</li>
            <li class="list-item">Мультифункциональная корзина с возможностью редактирования заказа и просчетом цены</li>
            <li class="list-item">Оформление заказа на адреса и методы оплаты клиента, передаваемые по API</li>
            <li class="list-item">Карта масел, предоставляющая возможность подбора оптимального масла для автомобиля по нескольким параметрам</li>
            <li class="list-item">Административная панель для редактирования наполнения бота</li>
            <li class="list-item">Система FAQ и поддержки клиента с интеграцией по API</li>
          </ul>
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