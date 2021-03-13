@extends('front.layout', ['bodyClass' => 'home-page'])

@push('styles')
<script>
  if (window.innerWidth < 992) window.location.href = '/sites';
</script>
@endpush

@section('content')
<section class="welcome-page">
  <span class="logo"></span>
  <div class="sites">
    <div class="block">
      <h1 class="title">Сайты</h1>
      <span class="main-sites"></span>
      <a href="/sites" class="button">Смотреть</a>
    </div>
  </div>
  <div class="bots">
    <div class="block">
      <h1 class="title">Боты</h1>
      <span class="main-bots"></span>
      <a href="/bots" class="button">Смотреть</a>
    </div>
  </div>
</section>
@endsection

