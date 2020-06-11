jQuery(function(){
    jQuery('.conteneurLakers').click();
 });

$('.conteneurDivisionPoint').click(function(){
    $('.logoEquipe').css("transform","");
    $('.logoEquipe').css("filter","");
    $('.divisionIcone').css("color","");
    $('.point').css("background-color","");
    $(this).find('.logoEquipe').css("transform","scale(1.2) translateY(-8px)");
    $(this).find('.logoEquipe').css("filter","grayscale(0) ");
    $(this).find('.divisionIcone').css("color","gold");
    $(this).find('.point').css("background-color","gold");
});

$( ".conteneurLakers" ).click(function() {
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/carreLakers.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/carreLakers.png');
    });
  });

$('.conteneurRaptors').click(function(){
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/carreRaptors.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/carreRaptors.png');
    });
  });

$('.conteneurCeltics').click(function(){
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/carreCeltics.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/carreCeltics.png');
    });
  });

$('.conteneurLakers').click(function(){
    $('.sourceVideo').attr('src','video/highlightLakers.mp4');
    $(".videoGo")[0].load();
});
$('.conteneurRaptors').click(function(){
    $('.sourceVideo').attr('src','video/highlightsRaptors.mp4');
    $(".videoGo")[0].load();
});
$('.conteneurCeltics').click(function(){
    $('.sourceVideo').attr('src','video/highlightCeltics.mp4');
    $(".videoGo")[0].load();
});


