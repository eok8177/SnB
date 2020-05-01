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
        margin:40,
        stagePadding: 100,
        items: 1,
        // autoWidth: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 10000
    })
  });
</script>
@endpush