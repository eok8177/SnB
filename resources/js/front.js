try {
    // window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    window.mask = $.mask = require('jquery-mask-plugin');

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
    if (validateForm(form))
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
    if (validateForm(form))
      postForm(form, function(response) {
        console.log(response);
        form.trigger("reset");
        changeFooterContent(form);
      });
    return false;
  }); 

  $(".only-text").keyup(function(event){
      this.value = this.value.replace(/[^а-яёіїєa-z'\s]/ig, "");
  });

  $('.phone').mask('+ (00) 000 000-00-00', {placeholder: "+ (38) 0__ ___-__-__"});

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

window.validateForm = function(form) {

  // let form = $(this);
  let valid = true;

  form.find('.error').removeClass('error');

  form.find('div.required').each(function(){
    let field = $(this);
    let input = field.find('input');
    if (input.length < 1) {
      input = field.find('textarea');
    }

    if (input.prop('type') == 'checkbox' && !input.prop('checked')) {
      field.addClass('error');
      valid = false;
    } else if (!input.val()) {
      field.addClass('error');
      valid = false;
    }

    if (input.hasClass('phone')) {
      if (input.val().length < 20) { //phone number with whitespaces
        field.addClass('error');
        valid = false;
      }
    }
  });

  let email = form.find('.email');
  if (email.length) {
    if(!validateEmail(email.find('input').val())) {
      email.addClass('error');
      valid = false;
    }
  }

  let pass = form.find('.pass');
  if (pass.length) {
    if (pass.find('input').val().length < 8) {
      pass.addClass('error');
      valid = false;
    }
  }

  let rePass = form.find('.re-pass');
  if (rePass.length) {
    if (rePass.find('input').val() != pass.find('input').val()) {
      rePass.addClass('error');
      valid = false;
    }
  }

  let emailVerify = form.find('.email-verify');
  if (emailVerify.length) {
    let email = emailVerify.find('input').val();
    if(!validateEmail(email)) {
      emailVerify.addClass('error');
      valid = false;
    }
  }

  return valid;
};

function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}