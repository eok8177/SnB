@extends('front.layout', ['bodyClass' => 'sites'])

@section('content')
  {!! $page->html !!}
@endsection

@push('scripts')
<link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
  $(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        items: 1,
        slideTransition: 'linear',
        // autoWidth: true,
        nav: false,
        dots: false,
        // autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 10000,
        // autoplaySpeed: 10000,
        smartSpeed: 10000,
        // fluidSpeed: 25000
        responsive : {
            // breakpoint from 0 up
            0 : {
              stagePadding: 10,
              margin:10
            },
            // breakpoint from 480 up
            480 : {

            },
            // breakpoint from 768 up
            768 : {
              stagePadding: 100,
              margin:40
            }
        }
    })
  });
</script>
@endpush