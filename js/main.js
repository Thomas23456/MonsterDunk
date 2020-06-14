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
        $('.imageJoueur').attr('src','images/imagesEquipes/carreLakers.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreLakers.png');
    });
  });

$('.conteneurRaptors').click(function(){
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreRaptors.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreRaptors.png');
    });
  });

$('.conteneurCeltics').click(function(){
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreCeltics.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreCeltics.png');
    });
  });

$('.conteneurBucks').click(function(){
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreBucks.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreBucks.png');
    });
});

$('.conteneurBulls').click(function(){
    $( ".imageJoueur" ).animate({
        opacity: 0,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreBulls.png');
    });
    $( ".imageJoueur" ).animate({
        opacity: 1,
    }, 500, function() {
        $('.imageJoueur').attr('src','images/imagesEquipes/carreBulls.png');
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

$('.conteneurBucks').click(function(){
    $('.sourceVideo').attr('src','video/highlightsBucks.mp4');
    $(".videoGo")[0].load();
});

$('.conteneurBulls').click(function(){
    $('.sourceVideo').attr('src','video/highlightBulls.mp4');
    $(".videoGo")[0].load();
});

$(document).ready(function(){
    $('.joueurListe').hide();
})

$('.listingJoueurCeltics').click(function(){
    if ($(".conteneurEquipeCeltics .deplierJeu")[0]){
        $('.listingJoueurCeltics i').text('keyboard_arrow_down')
        $('.listingJoueurCeltics i').removeClass('versHaut')
        $( ".joueurListeCeltics" ).slideUp( "slow", function() {
            $('.joueurListeCeltics').hide();
            $('.equipeMenuCeltics').removeClass('deplierJeu')

        });
    } else {
        $('.listingJoueurCeltics i').text('keyboard_arrow_up')
        $('.listingJoueurCeltics i').addClass('versHaut')
        $( ".joueurListeCeltics" ).slideDown( "slow", function() {
            $('.joueurListeCeltics').show();
            $('.equipeMenuCeltics').addClass('deplierJeu')
        });
    }
})

$('.listingJoueurRaptors').click(function(){
    if ($(".conteneurEquipeRaptors .deplierJeu")[0]){
        $('.listingJoueurRaptors i').text('keyboard_arrow_down')
        $('.listingJoueurRaptors i').removeClass('versHaut')
        $( ".joueurListeRaptors" ).slideUp( "slow", function() {
            $('.joueurListeRaptors').hide();
            $('.equipeMenuRaptors').removeClass('deplierJeu')

        });
    } else {
        $('.listingJoueurRaptors i').text('keyboard_arrow_up')
        $('.listingJoueurRaptors i').addClass('versHaut')
        $( ".joueurListeRaptors" ).slideDown( "slow", function() {
            $('.joueurListeRaptors').show();
            $('.equipeMenuRaptors').addClass('deplierJeu')

        });
    }
})

$(function() {
    $(".sortable_list").sortable({
        connectWith: ".connectedSortable",    
        receive: function(event, ui) {
            if ($(this).children().length > 1) {
                $(ui.sender).sortable('cancel');
            }
        }
    }).disableSelection();
});


