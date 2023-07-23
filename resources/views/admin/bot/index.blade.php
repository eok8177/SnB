@extends('admin.layout')

@section('content')

<div class="card mt-2">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Bot`s</h5>
    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addModal">
      <i class="fa fa-plus-square-o"></i> Create
    </button>
  </div>
  <div class="card-body">
    <ul class="list-group sorted sorted-list">
      @foreach($blocks as $block)
        <li data-id="{{$block->id}}" class="list-group-item d-flex justify-content-between align-items-center">

          <span class="d-flex align-items-center">
            <i class="fa fa-arrows me-4 move" aria-hidden="true"></i>
            <a href="{{route('admin.bot.edit', $block)}}" class="btn d-flex align-items-center">
              <span class="me-2">{{$block->title_ua}}</span>
              <span class="me-2">{{$block->url}}</span>
              <span class="text-muted fs-7">{{$block->preview_ua}}</span>
            </a>
          </span>

          <span class="btns text-nowrap">
            <a href="{{route('admin.toggle-show',["id"=>$block->id,"model"=>"Bot"])}}" class="btn change-status"title="Toggle Active">
              <i class="fa fa-{{$block->show ? 'eye' : 'eye-slash'}}"></i>
            </a>
            <a href="{{route('admin.bot.edit', $block)}}" class="btn ms-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{route('admin.bot.destroy',$block)}}" class="btn ms-1 delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
          </span>

        </li>
      @endforeach
      </ul>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">Add new item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('admin.bot.create')}}" method="POST">
      <div class="modal-body">
          @csrf
          <div class="mb-3">
            <label class="form-label">Title UA</label>
            <input type="text" name="title_ua" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Title EN</label>
            <input type="text" name="title_en" class="form-control" required>
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-between align-items-center">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-outline-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection

@push('scripts')
<script>
$(function () {
  $('.sorted-list').sortable({
    containerSelector: 'ul',
    itemSelector: 'li',
    placeholder: '<li class="placeholder list-group-item"/>',
    handle: 'i.move',
    onDrop: function ($item, container, _super) {
      let data = container.el.sortable("serialize").get()[0];
      $.ajax({
          data: {order:data},
          type: 'PUT',
          dataType: 'json',
          url: '{{route("admin.change-order",["model"=>"Bot"])}}'
      });
      _super($item, container);
    }
  });
});

</script>
@endpush