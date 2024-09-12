// Created and tested by: Russo - Valdeijr

// animate
$('#password').focusIn(function(){
    $('form').addClass('up')
  });
  $('#password').focusout(function(){
    $('form').removeClass('up')
});
  
// validation
$('.btn').click(function(){
$('form').addClass('alert');
    setTimeout(function(){
        $('form').removeClass('alert');
    },3000 );
});