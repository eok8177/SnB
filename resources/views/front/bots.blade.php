@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')
<div class="container">

  {{-- First screen --}}
  <div class="row align-items-center">
    <div class="col-md-6">
      <div class="image"><img src="/images/main_bots.jpg" alt="" class="img-fluid"></div>
    </div>
    <div class="col-md-6 pl-xl-5">
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
          <p class="uppercase"><b>Которые помогают обслуживать <br> клиентов в привычной среде общения.</b></p>

          <p>Принимают заказы и оплаты, отвечают на часто задаваемые вопросы, помогают лучше узнать продукт.Собирают отзывы клиентов, рассылают им специальные предложения и акции.</p>
        </div>
      </div>

      <button class="btn-gradient mt-4" data-toggle="modal" data-target="#contactModal"><span>GET STARTED</span></button>
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
    <video autoplay width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/charlie.mov">
        <img src="/images/bot_1.jpg" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-md-6">
        <p class="work-title mb-md-5">
          <span class="small">Бухгалтер</span> Чарли
        </p>
      </div>
      <div class="col-md-6 mb-4 pl-xl-5">
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
        <div class="col-md-6">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-md-6 pl-xl-5">
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">выгрузка отчетов в 1С-Предприятие</div>
          <div class="list-item">формирование дневного отчета по продажам</div>
          <div class="list-item">интеграция с базами данных предприятия </div>
          <div class="list-item">работа с менеджерами в формате: «вопрос-ответ»</div>
          <div class="list-item">интеграция с базами данных предприятия </div>
          <div class="list-item">оформление заказа на уникальную шубу для клиента</div>
          <div class="list-item">постоянная актуализация отчетов и статуса складских запасов</div>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="ml-4 btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr class="dashed mb-80">
</div>

{{-- Third screen --}}
<div class="work-block">
  <div class="container">
    <video autoplay width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/misslora.mov">
        <img src="/images/bot_1.jpg" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-md-6">
        <p class="work-title">
          <span class="small">Бот</span> «Благодарности»
        </p>
      </div>
      <div class="col-md-6 mb-4 pl-xl-5">
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
        <div class="col-md-6">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-md-6 pl-xl-5">
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">Передеача информации сотрудникам и дубликат сообщения в чат компании для отчетности о действиях.</div>
          <div class="list-item">формирование благодарственного письма одному или нескольким сотруднкиам компании</div>
          <div class="list-item">Интеграция с сервисом SMS-Fly для передачи благодарности смс сообщением</div>
          <div class="list-item">возможность вложения файлов и изображений в благодарность</div>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="ml-4 btn-hide">СКРЫТЬ</button>
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
    <video autoplay width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/restbot.mov">
        <img src="/images/bot_1.jpg" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-md-6">
        <p class="work-title">
          <span class="small">Бот</span> «RestBot»
        </p>
      </div>
      <div class="col-md-6 mb-4 pl-xl-5">
        <p><b>Виртуальный менеджер ресторана.</b></p>
        <p>Рассказывает гостям, сколько есть свободных мест в заведении, покажет меню, поможет выбрать еду и напитки. Имеет возможность зарезервировать любой столик на ваш выбор или даже все заведение для большого праздника. Принимает отзывы о работе ресторана.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-md-6 pl-xl-5">
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">Передеача данных клиента в админ панель в один клик (утяжка данных из профиля: имя, фамилия, номер телефона)</div>
          <div class="list-item">возможность забронировать столик в ресторане: выбор времени, даты, количества людей</div>
          <div class="list-item">система информационной рассылки всем, кто начал диалог с ботом</div>
          <div class="list-item">удобная и простая административная панель для сбора информации о заказах</div>
          <div class="list-item">редактирование информации о боте через административную панель</div>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
          <button class="ml-4 btn-hide">СКРЫТЬ</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr class="dashed mb-80">
</div>

{{-- Fivth screen --}}
<div class="work-block">
  <div class="container">
    <video autoplay width="1400" class="image mt-5 mb-4" controls style="max-width: 100%;">
      <source src="/video/bridgestoun.mov">
        <img src="/images/bot_1.jpg" alt="" class="img-fluid">
    </video>
    <div class="row">
      <div class="col-md-6">
        <p class="work-title">
          <span class="small">Бот</span> Программы Лояльности
        </p>
      </div>
      <div class="col-md-6 mb-4 pl-xl-5">
        <p><b>Закрытый чат-бот для компании-производителя автомобильных шин.</b></p>
        <p>Основной целью бота является внеднерение программы лояльности для поощрения трудолюбивых сотрудников компании. Помогает сотруднику вывести бонусные баллы от продаж шин методом сканирование QR-кодов с физических чеков. Так же, имеем интеграцию с апи клиента, которая позволяет вести в диалоги в тех поддержке, оставлять заявки на коммуникацию, уточнять свой статус и баланс по программе лояльности.</p>

        <button class="btn-more">Подробнее</button>
      </div>
    </div>
  </div>

  <div class="block-more">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/images/bots_logo.png" alt="Bots" class="img-fluid mb-4">
        </div>
        <div class="col-md-6 pl-xl-5">
          <div class="list-item">платформа: Telegram</div>
          <div class="list-item">интегрированное взаимодействие с тех поддержкой в формате-вопрос ответ и вложением закодированных файлов в любом формате</div>
          <div class="list-item">Интеграция с многофункциональным API</div>
          <div class="list-item">распознавание QR-кодов и последующая их передача по API</div>
          <div class="list-item">Регистрация\авторизация пользователя с несколькими ступенями верификации и редактированием профиля</div>
          <div class="list-item">Проверка баланса по проведенным сканам кодов и общий подсчет бонусных баллов за рабочий квартал</div>

          <a href="https://annafoxy.com" class="btn-gradient mt-5" target="_blank"><span> ОПРОБОВАТЬ</span></a>
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
      Хотите себе крутых <br> виртуальных помощников?
    </p>
    <hr class="dashed">
    <p class="small">Мы хотим сделать их для вас. Напишите, и мы обсудим подробности по вашему проекту.</p>
    <button class="btn-gradient" data-toggle="modal" data-target="#contactModal"><span>НАПИСАТЬ</span></button>

    <p class="copryright">Sites&Bots, 2020</p>
  </div>
</footer>
@endsection
