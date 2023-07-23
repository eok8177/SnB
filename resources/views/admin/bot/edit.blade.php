@extends('admin.layout')

@section('content')
<div class="card mt-2">
  <div class="card-header">
    <h2 class="page-header">Bot: <small>{{ $page->title }}</small></h2>
  </div>
  <form action="{{route('admin.bot.update', $page->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
  <div class="card-body">

    <div class="mb-3 d-flex flex-wrap sorted sorted-list">
      @foreach ($page->images as $image)
        <div data-id="{{$image->id}}" class="card">
          <div class="card-body">
            <img src="/{{$image->url}}" style="max-width: 100px;">
          </div>
          <div class="card-footer d-flex justify-content-between align-items-center">
            <i class="fa fa-arrows me-4 move" aria-hidden="true"></i>

            <a href="{{route('admin.image.destroy',$image)}}" class="btn ms-1 delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mb-3">
      <label for="images" class="form-label">Images</label>
      <input name="images[]" class="form-control" type="file" id="images" multiple>
    </div>

    <div class="form-floating mb-3">
      <input name="title_ua" value="{{$page->title_ua}}" type="text" class="form-control" placeholder="">
      <label>Title UA</label>
    </div>

    <div class="form-floating mb-3">
      <textarea name="preview_ua" class="form-control" placeholder="">{{$page->preview_ua}}</textarea>
      <label>Preview UA</label>
    </div>

    <div class="mb-3">
      <label>Text UA</label>
      <textarea name="text_ua" class="form-control editor" placeholder="">{{$page->text_ua}}</textarea>
    </div>

    <div class="form-floating mb-3">
      <input name="title_en" value="{{$page->title_en}}" type="text" class="form-control" placeholder="">
      <label>Title EN</label>
    </div>

    <div class="form-floating mb-3">
      <textarea name="preview_en" class="form-control" placeholder="">{{$page->preview_en}}</textarea>
      <label>Preview EN</label>
    </div>

    <div class="mb-3">
      <label>Text EN</label>
      <textarea name="text_en" class="form-control editor" placeholder="">{{$page->text_en}}</textarea>
    </div>

    <div class="form-floating mb-3">
      <input name="url" value="{{$page->url}}" type="text" class="form-control" placeholder="">
      <label>link to bot</label>
    </div>

    <div class="form-check form-switch mb-3">
      <input type="hidden" name="show" value="0">
      <input name="show" {{$page->show ? 'checked' : ''}} value="1" class="form-check-input" type="checkbox" role="switch" id="show">
      <label class="form-check-label" for="show">Show</label>
    </div>

  </div>
  <div class="card-footer d-flex justify-content-end">
    <button type="submit" class="btn btn-outline-primary">Update</button>
  </div>
  </form>
</div>
@endsection

@push('scripts')
<script>
$(function () {
  {{-- Sorted --}}
  $('.sorted-list').sortable({
    containerSelector: 'div.sorted-list',
    itemSelector: 'div.card',
    placeholder: '<div class="placeholder card" style="width:100px;"/>',
    handle: 'i.move',
    vertical: false,
    onDrop: function ($item, container, _super) {
      let data = container.el.sortable("serialize").get()[0];
      $.ajax({
          data: {order:data},
          type: 'PUT',
          dataType: 'json',
          url: '{{route("admin.change-order",["model"=>"Image"])}}'
      });
      _super($item, container);
    }
  });
});

</script>
@endpush