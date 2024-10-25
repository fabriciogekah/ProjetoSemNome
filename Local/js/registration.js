// Created and tested by: Russo - Valdeijr
  
// validation
$('.btn').click(function(){
$('form').addClass('alert');
    setTimeout(function(){
        $('form').removeClass('alert');
    },3000 );
});