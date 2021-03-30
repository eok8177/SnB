try {
    // window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

  const WOW = require('wowjs');
  window.wow = new WOW.WOW({ live: false });

$(function () {

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Show/Hide block
  $('.btn-more').on('click', function(){
    $(this).toggleClass('closed');
    let block  = $(this).closest('.work-block').find('.block-more');
    let height = block.find('.block-inner').innerHeight();
    if ($(this).hasClass('closed')) {
      $(this).text($(this).attr('data-open'));
      block.css('max-height', 0);
    } else {
      $(this).text($(this).attr('data-close'));
      block.css('max-height', height + 90);
    }
    block.toggleClass('open');
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

  $('.footer-form').submit(function(e){
    e.preventDefault();
    let form = $(this);
    postForm(form, function(response) {
      console.log(response);
      form.trigger("reset");
      changeFooterContent(form);
    });
    return false;
  }); 

window.wow.init();
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

function changeFooterContent(form) {
  form.find('.form-block').hide();
  form.find('.success').show();
}