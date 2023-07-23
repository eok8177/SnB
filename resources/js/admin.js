import 'bootstrap';
import $ from 'jquery'
window.jQuery = window.$ = $

$(function () {
  
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  
  //Delete record
  $('.delete').on('click', function (e) {
    e.preventDefault();
    $('.flash-message').html('');
    let item = $(this);
    if (!item.hasClass('not-confirm')) {
      if (!confirm('Are You sure want to delete it?')) return false;
    }
    $.post({
      type: 'DELETE',  // destroy Method
      url: $(this).attr("href")
    }).done(function (data) {
      if (data.status == 'error') {
        console.log(data.msg)
        $('.flash-message').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+data.msg+'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      } else {
        if (!item.hasClass('noreload')) location.reload(true);
        item.closest('.noreload-parent').remove();
      }
    }).catch(e => console.log(e.responseText));
  });


  //Change status
  $('.change-status').on('click', function (e) {
    e.preventDefault();
    $.post({
      type: 'PUT',
      url: $(this).attr("href")
    }).done(function (data) {
      location.reload(true);
    });
  });

  // CK Editor
  var options = {
    filebrowserImageBrowseUrl: '/lfm?type=Images',
    filebrowserImageUploadUrl: '/lfm/upload?type=Images&_token='+ $('meta[name="csrf-token"]').attr('content'),
    filebrowserBrowseUrl: '/lfm?type=Files',
    filebrowserUploadUrl: '/lfm/upload?type=Files&_token='+ $('meta[name="csrf-token"]').attr('content'),
    allowedContent: true,
    extraAllowedContent: 'section(*); div(*); video(*)'
  };
  $('.editor').ckeditor(options);
});