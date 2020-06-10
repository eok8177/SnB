try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');

    // require('is-in-viewport')
} catch (e) {}

$(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Show/Hide block
  $('.btn-more').on('click', function(){
    $(this).closest('.work-block').find('.block-more').addClass('open');
    $(this).hide();
  });
  $('.btn-hide').on('click', function(){
    $(this).closest('.block-more').removeClass('open');
    $(this).closest('.work-block').find('.btn-more').show();
  });

  //Submit ajax form
  $('.feedback-form').submit(function(e){
    e.preventDefault();
    let form = $(this);
    postForm(form, function(response) {
      console.log(response);
      form.trigger("reset");
      changeModalContent(form);
    });
    return false;
  }); 

  // $(window).scroll(function() {
  //     $('video').each(function() {
  //         if ($(this).is(":in-viewport")) {
  //             $(this)[0].play();
  //         } else {
  //             $(this)[0].pause();
  //         }
  //     })
  // });


});

function postForm($form, callback) {
  /*
   * Get all form values
   */
  var values = {};
  $.each( $form.serializeArray(), function(i, field) {
    values[field.name] = field.value;
  });
 
  /*
   * Throw the form values to the server!
   */
  $.ajax({
    type        : $form.attr( 'method' ),
    url         : $form.attr( 'action' ),
    data        : values,
    success     : function(data) {
      callback(data);
    }
  }); 
}

function changeModalContent(form) {
  let block = form.closest('.modal-dialog');
  block.find('.request-form').hide();
  block.find('.success').show();
}