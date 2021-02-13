@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')

{{-- First screen --}}
<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">Мы создаем <br> ботов</h1>
      <div class="image d-lg-none bots-mobile-image"><img src="/img/m-bots.svg" alt="сайты" class="img-fluid"></div>

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

      <button class="button fixed">Рассчитать проект</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/bots.svg" alt="сайты" class="img-fluid">
    </div>

  </div>

</div>



<section class="wide-text">
  <div class="container text-center">
    <h3>Они круглосуточно, без отпусков и праздников трудятся на благо вашего бизнеса в мессенджерах. Заменяют менеджеров, бухгалтеров, работников поддержки, пару ленивых маркетологов. </h3>
  </div>
</section>


<section class="works">
  <div class="container">
    <h3>Смотрите, какие проекты мы уже запустили</h3>
  </div>
</section>

@endsection
