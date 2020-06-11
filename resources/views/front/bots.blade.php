@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')
<div class="container">

  {{-- First screen --}}
  <div class="row align-items-center">
    <div class="col-lg-6 d-none d-md-block">
      <div class="image"><img src="/images/main_bots.jpg" alt="" class="img-fluid"></div>
    </div>
    <div class="col-lg-6 pl-xl-5">
      <a href="/" class="btn-black-round">Сайты</a>
      <a href="/bots" class="btn-black-round active">Боты</a>

      <h1 class="title">Мы создаем <br> ботов</h1>

      <hr class="dashed">

      <div class="row">
        <div class="col-sm-6">
          <p class="uppercase"><b>Которые автоматизируют <br> сложные процессы в компании.</b></p>

          <p>Ускоряют формирование отчетов, выгружают данные в 1С или CRM-систему, собирают обратную связь от сотрудников компании.</p>
        </div>
        <div class="col-sm-6">
          <p class="uppercase"><b>Которые обслуживают клиентов <br> в привычной среде общения.</b></p>

          <p>Принимают заказы и оплаты, отвечают на часто задаваемые вопросы, помогают лучше узнать продукт.</p>
        </div>
      </div>

      <button class="btn-gradient mt-4" data-toggle="modal" data-target="#contactModal"><span>@lang('msg.calc')</span></button>
    </div>
  </div>

  <div class="main-page-text">
    <p>
      Они круглосуточно, без отпусков и праздников трудятся на благо вашего бизнеса в Telegram, Facebook, WhatsApp, Viber. Заменяют менеджеров, бухгалтеров, работников поддержки, пару ленивых маркетологов. 
    </p>
  </div>


  <p class="uppercase mt-5 semi-bold">Смотрите, какие проекты мы уже запустили</p>

</div>

{{-- Second screen --}}
<div class="work-block">
  <div class="container">
    <video autoplay muted width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/charlie.mp4">
        <img src="/images/bot_1.png" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-lg-6">
        <p class="work-title mb-md-5">
          <span class="small">Бухгалтер</span> Чарли
        </p>
      </div>
      <div class="col-lg-6 mb-4 pl-xl-5">
        <p><b>Чат-бот фирмы, которая занимается пошивом шуб.</b></p>
        <p>Бот-бухгалтер для ведения отчетности о заказах и продажах.</p>
        <p>Даёт возможность вносить новые продажи и заказы поставок товаров во все магазины компании, ежедневно формирует отчеты для 1С.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-lg-6 pl-xl-5">
          <p class="mb-2">Возможности</p>
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">передача информации сотрудникам и дублирование сообщений в чат компании для сбора отчета о полученных отзывах.</div>
          <div class="list-item">формирование благодарственного письма одному или нескольким сотрудникам компании</div>
          <div class="list-item">интеграция с сервисом SMS-Fly для передачи благодарностей в виде SMS-сообщений</div>
          <div class="list-item">поддержка вложений файлов и изображений в благодарность</div>

          <p class="mt-4"><b>Результат:</b> значительный рост мотивации сотрудников и уровня их удовлетворенности проделанной работой за счет получения благодарностей от клиентов напрямую.</p>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr class="dashed reverse mb-80">
</div>

{{-- Third screen --}}
<div class="work-block">
  <div class="container">
    <video autoplay muted width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/misslora.mp4">
        <img src="/images/bot_1.png" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-lg-6">
        <p class="work-title">
          <span class="small">Бот</span> «Благодарности»
        </p>
      </div>
      <div class="col-lg-6 mb-4 pl-xl-5">
        <p><b>Второй виртуальный сотрудник компании Miss Lora.</b></p>
        <p>Он собирает у клиентов отзывы, предлагая им пройти детальный опрос 
        и приложить фотографии. Полученные благодарности автоматически 
        отправляются тому сотруднику, который их заслужил. Сотрудникам старой закалки, которые не пользуются месенджерами, бот пересылает благодарности в виде SMS-сообщений на любые модели мобильных телефонов.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-lg-6 pl-xl-5">
          <p class="mb-2">Возможности</p>
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">передача информации сотрудникам и дублирование сообщений в чат компании для сбора отчета о полученных отзывах.</div>
          <div class="list-item">формирование благодарственного письма одному или нескольким сотрудникам компании</div>
          <div class="list-item">интеграция с сервисом SMS-Fly для передачи благодарностей в виде SMS-сообщений</div>
          <div class="list-item">поддержка вложений файлов и изображений в благодарность</div>

          <p class="mt-4"><b>Результат:</b> значительный рост мотивации сотрудников и уровня их удовлетворенности проделанной работой за счет получения благодарностей от клиентов напрямую.</p>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr class="dashed mb-80">
</div>

{{-- Fourth screen --}}
<div class="work-block">
  <div class="container">
    <video autoplay muted width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/restbot.mp4">
        <img src="/images/bot_1.png" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-lg-6">
        <p class="work-title">
          <span class="small">Бот</span> «RestBot»
        </p>
      </div>
      <div class="col-lg-6 mb-4 pl-xl-5">
        <p><b>Виртуальный менеджер ресторана.</b></p>
        <p>Рассказывает гостям, сколько есть свободных мест в заведении, покажет меню, поможет выбрать еду и напитки. Имеет возможность зарезервировать любой столик на ваш выбор или даже все заведение для большого праздника. Принимает отзывы о работе ресторана.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-lg-6 pl-xl-5">
          <p class="mb-2">Возможности</p>
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">передача данных клиента из telegram-профиля (имя, фамилия, номер телефона) в админ панель сервиса в один клик </div>
          <div class="list-item">возможность забронировать столик в ресторане: выбор времени, даты, количества людей</div>
          <div class="list-item">система информационной рассылки для тех, кто начал диалог с ботом</div>
          <div class="list-item">удобная и простая административная панель для сбора информации о заказах</div>
          <div class="list-item">редактирование информации о боте через административную панель</div>

          <p class="mt-4"><b>Результат:</b> повысилась скорость обработки заказов — каждый шестой заказ ресторан получает через бота. Данные клиентов передаются в CRM-систему для последующих рассылок об акциях и предложениях ресторана.</p>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr class="dashed reverse mb-80">
</div>

{{-- Fivth screen --}}
<div class="work-block">
  <div class="container">
    <video autoplay muted width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/bridgestoun.mp4">
        <img src="/images/bot_1.png" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-lg-6">
        <p class="work-title">
          <span class="small">Бот</span> Программы Лояльности
        </p>
      </div>
      <div class="col-lg-6 mb-4 pl-xl-5">
        <p><b>Закрытый чат-бот для компании-производителя автомобильных шин.</b></p>
        <p>Основной целью бота является внеднерение программы лояльности для поощрения трудолюбивых сотрудников компании. Помогает сотруднику вывести бонусные баллы от продаж шин методом сканирование QR-кодов с физических чеков. Так же, имеем интеграцию с апи клиента, которая позволяет вести в диалоги в тех поддержке, оставлять заявки на коммуникацию, уточнять свой статус и баланс по программе лояльности.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-lg-6 pl-xl-5">
          <p class="mb-2">Возможности</p>
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">интегрированное взаимодействие с техподдержкой в формате «вопрос-ответ» и возможностью вложения закодированных файлов в любом формате</div>
          <div class="list-item">интеграция с многофункциональным API</div>
          <div class="list-item">распознавание QR-кодов и последующая их передача по API</div>
          <div class="list-item">регистрация и авторизация пользователя с несколькими ступенями верификации и поддержкой редактирования профиля</div>
          <div class="list-item">проверка баланса по проведенным сканам кодов и общий подсчет бонусных баллов за рабочий квартал</div>

          <p class="mt-4"><b>Результат:</b> прозрачная система лояльности для продавцов компании работает на более чем 500-та торговых точках по всей стране. Выросла мотивация продавцов, появился соревновательный элемент, средний чек по городу увеличился на 15%.</p>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- Footer --}}
<footer>
  <div class="container">
    <p class="title">
      Хотите себе крутых <br> виртуальных помощников?
    </p>
    <hr class="dashed">
    <p class="small">Мы хотим сделать их для вас. Напишите, и мы обсудим подробности по вашему проекту.</p>
    <button class="btn-gradient" data-toggle="modal" data-target="#contactModal"><span>НАПИСАТЬ</span></button>

    <p class="copryright">Sites&Bots, 2020</p>
  </div>
</footer>
@endsection
