@extends('front.layout', ['bodyClass' => 'sites'])

@section('content')

{{-- First screen --}}
<div class="container first-section">
  <div class="row align-items-center">

    <div class="col-lg-6">
      <h1 class="title">@lang('We create <br> sites')</h1>
      <div class="image d-lg-none sites-mobile-image" style="overflow-x: hidden;"><img src="/img/m-sites.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;"></div>

      <div class="row">
        <div class="col-sm-6">
          <h4>@lang('Our sites can solve the most complicated business tasks')<br><br></h4>
          <hr>
          <p>@lang('We do not offer the most basic options as well as site builders. Our company goal is concentrated on product quality, and we tend to satisfy customers’ needs.')</p>
        </div>
        <div class="col-sm-6">
          <h4>@lang('Our sites bringing up the numbers. Moreover, our sites can surely guarantee the long term customers')</h4>
          <hr>
          <p>@lang('You get the end-product, prompt technical support, and highly qualified team that is always ready to implement the tasks.')</p>
        </div>
      </div>

      <button class="button fixed" data-bs-toggle="modal" data-bs-target="#contactModal">@lang('Estimate a project')</button>
    </div>

    <div class="col-lg-6 d-none d-lg-block text-center">
      <img src="/img/sites.svg" alt="сайты" class="img-fluid wow backInRight" style="visibility: hidden;">
    </div>

  </div>

</div>



<section class="wide-text">
  <div class="container text-center">
    <h3>@lang('We develop unique online stores, complex corporate sites with lots of integrations, and projects created on Wordpress & Shopify.')</h3>
  </div>
</section>



<section class="works">

  <div class="container">
    <h3 class="text-center text-lg-left">@lang('You are welcome to meet our customers')</h3>
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

            <p>@lang('A full-fledged mono-brand online store for those who value unique garments, and accessories, aimed mainly at the European audience.')</p>

            <button class="button more btn-more closed" data-open="@lang('Read more')" data-close="@lang('Hide')">@lang('Read more')</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">@lang('Multilingual (UA, RU, ENG) online store with the extended functionalities of admin panel with a focus on increasing the conversion rate. Developed via Symfony framework.')</li>
            <li class="list-item">@lang('Dynamic sliders on a main page, convenient kit/editor for the independent updates of a site content.')</li>
            <li class="list-item">@lang('Wide range of unique product attributes: color, height, size')</li>
            <li class="list-item">@lang('Role system which allows you to distribute multiple access levels to various functionalities and admin panel content.')</li>
            <li class="list-item">@lang('Сumulative loyalty program for further purchases. Prompt promos launch and discount activations as the built-in features.')</li>
            <li class="list-item">@lang('Payment integrations are performed via API. Payment methods are Visa, Mastercard, Apple Pay, Google Pay. Custom checkouts are implemented without the third-party involvement to increase the conversion rate.')</li>
            <li class="list-item">@lang('AmoCRM integration to perform efficient order processing.')</li>
          </ul>
          <a href="https://annafoxy.com" class="button more" target="_blank">@lang('Go to the website')</a>
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

            <p>@lang('We developed a website for Vadym Iermolaiev, a well-known Ukrainian businessman. The main goal of the website is to share the interesting ideas, news, his company’s business projects along with the interviews.')</p>

            <button class="button more btn-more closed" data-open="@lang('Read more')" data-close="@lang('Hide')">@lang('Read more')</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">@lang('Multilingual (UA, RU, ENG) blog developed on the WordPress platform.')</li>
            <li class="list-item">@lang('Unique, rigorous, and modern design.')</li>
            <li class="list-item">@lang('Fast website for sharing the information as well as communication with the audience/visitors.')</li>
            <li class="list-item">@lang('Article publishing with external resource linking system to retain content authorship.')</li>
            <li class="list-item">@lang('Easy-to-use admin panel.')</li>
            <li class="list-item">@lang('Convenient feedback system.')</li>
          </ul>
          <a href="https://vadymiermolaiev.info" class="button more" target="_blank">@lang('Go to the website')</a>
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

            <p>@lang('A self-made website for a law company with multiple roles account for storing and processing the data, document management, multifunctional administrative panel, and custom file system.')</p>

            <button class="button more btn-more closed" data-open="@lang('Read more')" data-close="@lang('Hide')">@lang('Read more')</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">@lang('Multilingual (UA, RU, ENG) website with the extended functionalities of admin panel, with a focus on increasing the conversion rate.')</li>
            <li class="list-item">@lang('The pages of the website can be easily edited and published')</li>
            <li class="list-item">@lang('Multifunctional account for multiple user types/roles: customer, trainee, lawyer, administrator.')</li>
            <li class="list-item">@lang('Internal file system for the lawyers’ and customers’ documents management')</li>
            <li class="list-item">@lang('Automated internal and external testing system for the lawyers and trainees.')</li>
            <li class="list-item">@lang('Visitors tracking system.')</li>
            <li class="list-item">@lang('Payment for the legal services.')</li>
          </ul>
          <a href="https://dynasty.legal" class="button more" target="_blank">@lang('Go to the website')</a>
        </div>
      </div>

      <hr>
    </div>
  </div>


  <div class="work-block">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <h2 class="text-center d-lg-none">Ortomedica</h2>

          <div class="owl-carousel owl-theme">
            <div class="item"><img src="/images/ortomedica/01.jpg"></div>
            <div class="item"><img src="/images/ortomedica/02.jpg"></div>
            <div class="item"><img src="/images/ortomedica/03.jpg"></div>
          </div>

        </div>
        <div class="col-lg-4" style="overflow-x: hidden;">
          <div class="wow backInRight">
            <h2 class="d-none d-lg-block">Ortomedica</h2>

            <p>@lang('The E-commerce project for selling the orthopedic products, a self-made website developed via the Laravel framework. It includes high-speed customers’ interface and multifunctional admin panel for the site management.')</p>

            <button class="button more btn-more closed" data-open="@lang('Read more')" data-close="@lang('Hide')">@lang('Read more')</button>
          </div>
        </div>
      </div>

      <div class="block-more">
        <div class="block-inner">
          <ul class="list">
            <li class="list-item">@lang('Multilingual (UA, RU) website with more than 16000 unique products.')</li>
            <li class="list-item">@lang('Branching product building structure for the categories with the unlimited levels of nesting.')</li>
            <li class="list-item">@lang('Custom filtering and triage system for the prompt product displaying.')</li>
            <li class="list-item">@lang('Implementation of the local shops mapping via the Google Maps integration.')</li>
            <li class="list-item">@lang('Integration with the multiple payment processors in order to prevent the high load. Includes such payment methods as Visa, Mastercard, ApplePay, GooglePay, Privat24.')</li>
            <li class="list-item">@lang('Flexible import & export system for the products and attributes that provides large-scale product updates.')</li>
            <li class="list-item">@lang('Multiple third-party integrations: Google Analytics, Facebook Analytics, heatmaps for the on-site activity.')</li>
            <li class="list-item">@lang('Features for the SEO optimization: Sitemap, SEO templates and presets, redirect setup, strict URL formatting rules for various types of pages, metadata editing, automatic FAQ generation, schema.org data mark-up.')</li>
            <li class="list-item">@lang('Messaging system via Mail and SMS to inform clients')</li>
          </ul>
          <a href="https://ortomedica.ua/" class="button more" target="_blank">@lang('Go to the website')</a>
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