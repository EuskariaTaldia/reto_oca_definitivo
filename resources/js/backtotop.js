// Si bajamos la pagina que aparezca la flecha
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) { 
        $('#backtotop').fadeIn(200);
    } else {
        $('#backtotop').fadeOut(200);
    }
});


// Cuando clickamos la flecha
$('#backtotop').click(function() {
    $('body,html').animate({
        scrollTop : 0                     
    }, 500);
});