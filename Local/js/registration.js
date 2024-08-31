// Created and tested by: Russo - Valdeijr

// animate
$('#password').focusin(function(){
    $('form').addClass('up')
  });
  $('#password').focusout(function(){
    $('form').removeClass('up')
});

  
// validation
$('.btn').click(function(){
$('form').addClass('wrong-entry');
    setTimeout(function(){
        $('form').removeClass('wrong-entry');
    },3000 );
});