@extends('front.layout', ['bodyClass' => 'bots'])

@section('content')

{{-- First screen --}}
<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">@lang("Ми створюємо <br> ботів")</h1>
      <div class="image d-lg-none bots-mobile-image" style="overflow-x: hidden;"><img src="/img/m-bots.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>@lang("Наші роботи автоматизують складні процеси в компаніях")</h4>
          <hr>
          <p>@lang("Прискорюють формування звітів, вивантажують дані у 1С чи CRM-систему, збирають зворотний зв'язок від співробітників компанії.")</p>
        </div>
        <div class="col-sm-6">
          <h4>@lang("Наші боти допомагають обслуговувати клієнтів у звичному середовищі спілкування")</h4>
          <hr>
          <p>@lang("Приймають замовлення і оплати, відповідають на питання, що часто ставляться, допомагають краще дізнатися продукт. Збирають відгуки клієнтів, розсилають їм спеціальні пропозиції та акції.")</p>
        </div>
      </div>

      <button class="button fixed" data-bs-toggle="modal" data-bs-target="#contactModal">@lang("Розрахувати проект")</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/bots.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;">
    </div>

  </div>

</div>



<section class="wide-text">
  <div class="container text-center">
    <h3>@lang("Боти функціонують 24/7, підтримуючи та оптимізуючи процеси без зовнішнього втручання. Виконують рутинну роботу менеджерів, бухгалтерів, технічної підтримки.")</h3>
  </div>
</section>


<section class="works bot-works">

  <div class="container">
    <h3 class="text-center text-lg-left">@lang("Проекти, які ми запустили")</h3>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">@lang("Бухгалтер Чарлі")</h2>

          <div class="owl-carousel owl-theme" data-pause="0">
            <div class="item"><img src="/images/charly/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/charly/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/charly/03.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/charly/04.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">@lang("Бухгалтер Чарлі")</h2>
            <p><b>@lang("Чат-бот фірми, що займається шиттям шуб.")</b></p>
            <p>@lang("Бот-бухгалтер для ведення звітності про замовлення та продажі.")</p>
            <p>@lang("Дає можливість вносити нові продажі та замовлення постачання товарів у всі магазини компанії, щодня формує звіти для 1С.")</p>
            <button class="button more btn-more closed" data-open="@lang('Читати далі')" data-close="Скрыть">@lang("Читати далі")</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">@lang("Можливості")</p>
          <ul class="list">
            <li class="list-item">@lang("платформа: Telegram")</li>
            <li class="list-item">@lang("передача інформації співробітникам та дублювання повідомлень у чат компанії для збору звіту про отримані відгуки.")</li>
            <li class="list-item">@lang("формування листа подяки одному або декільком співробітникам компанії")</li>
            <li class="list-item">@lang("інтеграція із сервісом SMS-Fly для передачі подяк у вигляді SMS-повідомлень")</li>
            <li class="list-item">@lang("підтримка вкладення файлів та зображень")</li>
          </ul>
          <p>@lang("Результат:") <br> @lang("значне зростання мотивації співробітників та рівня їх задоволення виконаною роботою за рахунок отримання подяк від клієнтів.")</p>
        </div>
      </div>
      <hr>
    </div>
  </div>



  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">@lang("Бот програми лояльності")</h2>

          <div class="owl-carousel owl-theme" data-pause="1000">
            <div class="item"><img src="/images/loyalty/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/loyalty/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/loyalty/03.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/loyalty/04.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">@lang("Бот програми лояльності")</h2>
            <p>@lang("Закритий чат-бот для компанії-виробника автомобільних шин")</p>
            <p>@lang("Основною метою робота є впровадження програми лояльності для заохочення працьовитих співробітників компанії. Допомагає співробітнику вивести бонусні бали від продажу шин методом сканування QR-кодів із фізичних чеків. Також має інтеграцію з API клієнта, яка дозволяє вести діалог з техпідтримкою, залишати заявки на комунікацію, уточнювати свій статус та баланс за програмою лояльності.")</p>
            <button class="button more btn-more closed" data-open="@lang('Читати далі')" data-close="Скрыть">@lang("Читати далі")</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">@lang("Можливості")</p>
          <ul class="list">
            <li class="list-item">@lang("платформа: Telegram")</li>
            <li class="list-item">@lang("інтегрована взаємодія з техпідтримкою у форматі «питання-відповідь» та можливістю вкладення закодованих файлів у будь-якому форматі")</li>
            <li class="list-item">@lang("інтеграція з багатофункціональним API")</li>
            <li class="list-item">@lang("розпізнавання QR-кодів та подальша їх передача по API")</li>
            <li class="list-item">@lang("реєстрація та авторизація користувача з кількома ступенями верифікації та підтримкою редагування профілю")</li>
            <li class="list-item">@lang("перевірка балансу за проведеними сканами кодів та загальний підрахунок бонусних балів за робочий квартал")</li>
          </ul>
          <p>@lang("Результат:") <br> @lang("прозора система лояльності для продавців компанії працює на більш ніж 500 торгових точках по всій країні. Зросла мотивація продавців, з'явився елемент змагання, середній чек по місту збільшився на 15%.")</p>
        </div>
      </div>
      <hr>
    </div>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">@lang("Rest bot")</h2>
          
          <div class="owl-carousel owl-theme" data-pause="2000">
            <div class="item"><img src="/images/rest/01.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/rest/02.jpg" alt="" class="img-fluid"></div>
            <div class="item"><img src="/images/rest/03.jpg" alt="" class="img-fluid"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block"><span class="">@lang("Rest bot")</h2>
            <p>@lang("Віртуальний менеджер ресторану.")</p>
            <p>@lang("Розповідає гостям, скільки вільних місць у закладі, показує меню, допомогає вибрати їжу та напої. Має можливість зарезервувати будь-який столик на ваш вибір або навіть усі заклади для великого свята. Приймає відгуки щодо роботи ресторану")</p>
            <button class="button more btn-more closed" data-open="@lang('Читати далі')" data-close="Скрыть">@lang("Читати далі")</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">@lang("Можливості")</p>
          <ul class="list">
            <li class="list-item">@lang("платформа: Telegram")</li>
            <li class="list-item">@lang("передача даних клієнта з Telegram-профілю (ім'я, прізвище, номер телефону) до адмін панелі сервісу в один клік")</li>
            <li class="list-item">@lang("можливість забронювати столик у ресторані: вибір часу, дати, кількості людей")</li>
            <li class="list-item">@lang("система інформаційних розсилок для тих, хто розпочав діалог з ботом")</li>
            <li class="list-item">@lang("зручна та проста адміністративна панель для збору інформації про замовлення")</li>
            <li class="list-item">@lang("редагування інформації про роботу через адміністративну панель")</li>
          </ul>
          <p>@lang("Результат:") <br> @lang("підвищилася швидкість обробки замовлень - кожне шосте замовлення ресторан отримує через бота. Дані клієнтів передаються в CRM-систему для подальших розсилок про акції та пропозиції ресторану")</p>
        </div>
      </div>
      <hr>
    </div>
  </div>

  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none"><span class="">@lang("Бот з продажу масел Shell")</h2>
          
          <div class="owl-carousel owl-theme" data-pause="3000">
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
            <h2 class="d-none d-lg-block"><span class="">@lang("Бот з продажу масел Shell")</h2>
            <p>@lang("Дозволяє підібрати та придбати масло для вашого автомобіля.")</p>
            <p>@lang("Призначений для допомоги у виборі олії для клієнтів компанії Shell. Дозволяє знайти потрібну олію та придбати її. Розсилає повідомлення та запрошує брати участь в акціях. Бот працює за функціоналом широкого API з отриманням великих масивів даних кожного клієнта.")</p>
            <button class="button more btn-more closed" data-open="@lang('Читати далі')" data-close="Скрыть">@lang("Читати далі")</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <p class="mb-2">@lang("Можливості")</p>
          <ul class="list">
            <li class="list-item">@lang("платформа: Telegram")</li>
            <li class="list-item">@lang("Реєстрація за номерами телефонів з підтвердженням API")</li>
            <li class="list-item">@lang("Глобальний каталог товарів з персональними цінами")</li>
            <li class="list-item">@lang("Мультифункціональний кошик з можливістю редагування замовлення та прорахунком ціни")</li>
            <li class="list-item">@lang("Оформлення замовлення на адреси та методи оплати клієнта, що передаються за API")</li>
            <li class="list-item">@lang("Мапа масел, що надає можливість підбору оптимального масла для автомобіля за декількома параметрами")</li>
            <li class="list-item">@lang("Адміністративна панель для редагування наповнення бота")</li>
            <li class="list-item">@lang("Система FAQ та підтримки клієнта з інтеграцією з API")</li>
          </ul>
          <p>@lang("Результат:") <br> @lang("Зростання продажів моторних масел, зниження навантаження на відділ підтримки завдяки інформативності наповнення бота. Зростання мотивації придбання моторних масел завдяки системі оповіщень про акції та унікальні пропозиції.")</p>
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
    let config = {
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
    };

    $('.owl-carousel').each(function() {
      let item = $(this);
      let timeout = parseInt(item.attr('data-pause'));
      setTimeout(function() {
          item.owlCarousel(config);
      }, timeout);
    });

  });
</script>
@endpush