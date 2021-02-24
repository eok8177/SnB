@extends('front.layout', ['bodyClass' => 'about-us-page'])

@section('content')
{{-- First screen --}}
<div class="container">
  <h1 class="title-about">О НАС</h1>
  <p class="sub-text">
    Вместо посредственного инструмента для выполнения множества задач мы предпочитаем создавать специализированный продукт под узкую нишу, который выполнит одну задачу, но идеально.
  </p>



{{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div> --}}



  <ul class="nav nav-tabs pills" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">О НАС</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">КАК МЫ РАБОТАЕМ</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

      <div class="row">
        <div class="col-md-4 wow backInLeft" data-wow-delay="0.4s">
          <h4 class="sub-title">Кто мы такие</h4>
          <p>Команда профессионалов, у которой есть все, чтобы реализовать ваши смелые идеи. <br>Мы - команда разработчиков, тестировщиков, дизайнеров,аналитиков, seo специалистов и нишевых экспертов, для которых нет нерешаемых задач.</p>
        </div>

        <div class="col-md-4 wow backInLeft" data-wow-delay="0.6s">
          <h4 class="sub-title">Что умеем</h4>
          <p>Создавать самописные интернет-магазины и корпоративные сайты, полностью заточенные под потребности заказчика.  Без мусора и ненужных функций. Делать крутые блоги на Wordpress и промо-страницы на Tilda. <br> Писать ботов для Telegram, Facebook WhatsApp и Viber, со сложными интеграциями с другими сервисами клиента. </p>
        </div>

        <div class="col-md-4 wow backInLeft" data-wow-delay="0.8s">
          <h4 class="sub-title">Почему мы</h4>
          <p>Работая с нами, вам не будут нужны другие подрядчики. Мы превратим вашу идею в работающий продукт, будем его поддерживать и дорабатывать, добавлять нужные вашему бизнесу функции.</p>
        </div>

        <div class="col-md-4 d-md-none wow backInLeft">
          <h4 class="sub-title">Наши друзья</h4>
          <p>Предприниматели с активной жизненной позицией, которые хотят создавать крутые продукты и менять мир вокруг себя. Люди, которые полны идей и желания создавать что-то новое.</p>
        </div>

        <div class="col-md-4 d-md-none wow backInLeft">
          <h4 class="sub-title">Наши враги</h4>
          <p>Мы не уважаем студии и специалистов, которые не вникают в задачи клиента, пытаются навязать шаблонные решения, чтобы поскорее закрыть проект. Вместо посредственного инструмента для выполнения множества задач мы предпочитаем создавать специализированный продукт под узкую нишу, который выполнит одну задачу, но идеально. <br>Чужой код всегда представляет ряд сложностей в работе с ним, но если обстоятельства того потребуют - мы с радостью займемся и им.</p>
        </div>
      </div>

    </div>

    <div class="tab-pane fade how-work-blocks" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      
      <div class="row first-line">
        <span class="ico-start"></span>

        <div class="col-lg-4 item wow backInLeft" data-wow-delay="1s" data-wow-offset="200">
          <div class="number">01</div>
          <div class="text"><span>Встречаем вас, слушаем ваши идеи</span></div>
        </div>

        <div class="col-lg-4 item wow backInLeft" data-wow-delay="1.5s" data-wow-offset="200">
          <div class="number">02</div>
          <div class="text"><span>Вместе заполняем бриф и план проекта</span></div>
        </div>

        <div class="col-lg-4 item wow backInLeft" data-wow-delay="2s" data-wow-offset="200">
          <div class="number">03</div>
          <div class="text"><span>Пишем и утверждаем детальное техзадание</span></div>
        </div>
      </div>

      <div class="row second-line">
        <div class="col-lg-4 item wow backInRight order-lg-3" data-wow-delay="0s" data-wow-offset="200">
          <div class="number">04</div>
          <div class="text"><span>Пишем код, тестируем, исправляем баги</span></div>
        </div>

        <div class="col-lg-4 item wow backInRight order-lg-2" data-wow-delay="0.5s" data-wow-offset="200">
          <div class="number">05</div>
          <div class="text"><span>Создаем прототип и разрабатываем дизайн</span></div>
        </div>

        <div class="col-lg-4 item wow backInRight order-lg-1" data-wow-delay="1s" data-wow-offset="200">
          <div class="number">06</div>
          <div class="text"><span>Пишем код, тестируем, исправляем баги</span></div>
        </div>
      </div>

      <div class="row third-line">
        <div class="col-lg-4 item wow backInLeft" data-wow-delay="0s" data-wow-offset="200">
          <div class="number">07</div>
          <div class="text"><span>Передаем проект вам и разворачиваем на вашем сервере</span></div>
        </div>

        <div class="col-lg-4 item wow backInLeft" data-wow-delay="0.5s" data-wow-offset="200">
          <div class="number">08</div>
          <div class="text"><span>Остаемся на связи и поддерживаем проект</span></div>
        </div>

        <div class="col-lg-4 item wow backInLeft" data-wow-delay="1s" data-wow-offset="200">
          <div class="number">09</div>
          <div class="text"><span>Участвуем в жизни проекта, добавляем новые функции</span></div>
        </div>

        <span class="ico-finish"></span>
      </div>
    </div>

  </div>

</div>



@endsection
@push('scripts')
<script>
  $(function () {
    $('.pills .nav-link').on('click', function(){
      wow.init();
    });
  });
</script>
@endpush