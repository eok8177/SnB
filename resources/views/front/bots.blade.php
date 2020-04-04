@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')
<div class="container">
  {{-- {!! $page->html !!} --}}

  {{-- First screen --}}
  <div class="row align-items-center">
    <div class="col-md-6">
      <div class="image"><img src="/images/main_bots.jpg" alt="" class="img-fluid"></div>
    </div>
    <div class="col-md-6">
      <a href="/" class="btn-black-round">Сайты</a>
      <a href="/bots" class="btn-black-round active">Боты</a>

      <h1 class="title">Мы создаем ботов</h1>

      <hr class="dashed">

      <div class="row">
        <div class="col-sm-6">
          <p class="uppercase"><b>Которые автоматизируют сложные процессы в компании.</b></p>

          <p>Ускоряют формирование отчетов, выгружают данные в 1С или CRM-систему, собирают обратную связь от сотрудников компании.</p>
        </div>
        <div class="col-sm-6">
          <p class="uppercase"><b>Которые помогают обслуживать клиентов в привычной среде общения.</b></p>

          <p>Принимают заказы и оплаты, отвечают на часто задаваемые вопросы, помогают лучше узнать продукт.Собирают отзывы клиентов, рассылают им специальные предложения и акции.</p>
        </div>
      </div>

      <button class="btn-gradient mt-4"><span>GET STARTED</span></button>
    </div>
  </div>

  <div class="main-page-text">
    <p>
      Они круглосуточно, без отпусков и праздников трудятся на благо вашего бизнеса в Telegram, Facebook, WhatsApp, Viber. Заменяют менеджеров, бухгалтеров, работников поддержки, пару ленивых маркетологов. 
    </p>
  </div>


  <p class="uppercase mt-5">Смотрите, какие проекты мы уже запустили</p>

</div>

{{-- Second screen --}}
<div class="work-block">
  <div class="container">
    <div class="image-bot mt-5 mb-4"><img src="/images/bot_1.png" alt="" class="img-fluid"></div>
    <div class="row">
      <div class="col-md-6">
        <p class="bot-title">
          <span class="small">Бухгалтер</span> Чарли
        </p>
      </div>
      <div class="col-md-6 mb-4">
        <p><b>Чат-бот фирмы, которая занимается пошивом шуб.</b></p>
        <p>Бухгалтер, менеджер и просто мастер на все руки. Каждый день он спрашивает у коллег-менеджеров, сколько они продали шуб и на какую сумму, а потом заносит эти данные в учетную систему 1С, чтобы бухгалетрия сформировала необходимые отчеты.</p>
        <p>А в свободное время он принимает заказы от клиентов, которые не любят общаться по телефону.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-desc">
          <li>платформа: Telegram</li>
          <li>формирование дневного отчета по продажам</li>
          <li>работа с менеджерами в формате: «вопрос-ответ»</li>
          <li>оформление заказа на уникальную шубу для клиента</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-desc">
          <li>выгрузка отчетов в 1С-Предприятие</li>
          <li>интеграция с базами данных предприятия </li>
          <li>интеграция с базами данных предприятия </li>
          <li>постоянная актуализация отчетов и статуса складских запасов</li>
        </ul>

        <a href="https://annafoxy.com" class="btn-gradient" target="_blank"><span> ОПРОБОВАТЬ</span></a>
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
    <div class="image-bot mt-5 mb-4"><img src="/images/bot_1.png" alt="" class="img-fluid"></div>
    <div class="row">
      <div class="col-md-6">
        <p class="bot-title">
          <span class="small">Почитатель</span> Мисс Лоры
        </p>
      </div>
      <div class="col-md-6 mb-4">
        <p><b>Второй виртуальный сотрудник компании Miss Lora.</b></p>
        <p>Он собирает у клиентов отзывы, предлагая им пройти детальный опрос и приложить фотографии. Полученные благодарности автоматически отправляются тому сотруднику, который их заслужил. Мастеров цеха хвалят за качественный пошив, менеджеров — за хорошие эмоции 
        и вежливое обслуживание. Сотрудникам старой закалки, которые не пользуются месенджерами, 
        бот пересылает благодарности в виде SMS-сообщений, которые открываются даже 
        на чудом дожившей до наших дней Nokia 1100.</p>

        <a href="https://annafoxy.com" class="btn-gradient" target="_blank"><span> ОПРОБОВАТЬ</span></a>
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
    <div class="image-bot mt-5 mb-4"><img src="/images/bot_1.png" alt="" class="img-fluid"></div>
    <div class="row">
      <div class="col-md-6">
        <p class="bot-title">
          <span class="small">Коллектор</span> Иннокентий
        </p>
      </div>
      <div class="col-md-6 mb-4">
        <p><b>Иннокентий боится называть свое настоящее имя, ведь он, в отличие от коллег по цеху — добрый коллектор.</b></p>
        <p>Он работает в микрофинансовой компании и любезно напоминает должникам, когда наступает время возвращать займ. Принимает оплаты сам, или подсказывает, как это сделать без его участия. Если нужно, то подключает менеджера.</p>
        <p>Когда дело сделано, передает данные об успешной оплате в CRM-систему 
        и админ-панель компании.</p>

        <a href="https://annafoxy.com" class="btn-gradient" target="_blank"><span> ОПРОБОВАТЬ</span></a>
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
    <div class="image-bot mt-5 mb-4"><img src="/images/bot_1.png" alt="" class="img-fluid"></div>
    <div class="row">
      <div class="col-md-6">
        <p class="bot-title">
          <span class="small">Заместитель</span> Ресторана
        </p>
      </div>
      <div class="col-md-6 mb-4">
       <p><b>Не “Мальчик, водочки нам принеси”, а заместитель владельца ресторана, пусть и виртуальный.</b></p>
       <p>Расскажет гостям, сколько есть свободных мест в заведении, покажет меню, поможет выбрать еду и напитки. Забронирует самый лучший столик или даже все заведение для большого праздника. Развеселит шуткой, примет отзыв о работе коллег, подскажет странички заведения в социальных сетях. Заменяет администратора, официанта, менеджера и одного ленивого маркетолога.</p>

        <a href="https://annafoxy.com" class="btn-gradient" target="_blank"><span> ОПРОБОВАТЬ</span></a>
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
    <p>Мы хотим сделать их для вас. Напишите, и мы обсудим подробности по вашему проекту.  </p>
    <button class="btn-gradient"><span>НАПИСАТЬ</span></button>

    <p class="copryright">Sites&Bots, 2020</p>
  </div>
</footer>
@endsection
