@extends('front.layout', ['bodyClass' => 'home-page'])

@push('styles')
<script>
  window.location.href = '/sites';
</script>
@endpush

@section('content')
<section class="welcome-page">
  <span class="logo"></span>
  <div class="sites">
    <div class="block">
      <h1 class="title">@lang('Sites')</h1>
      <span class="main-sites"></span>
      <a href="/{{$lang}}sites" class="button">@lang('Watch')</a>
    </div>
  </div>
  <div class="bots">
    <div class="block">
      <h1 class="title">@lang('Boots')</h1>
      <span class="main-bots"></span>
      <a href="/{{$lang}}bots" class="button">@lang('Watch')</a>
    </div>
  </div>
</section>
@endsection

