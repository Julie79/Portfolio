// ANIMER LE PANNEAU ACCORDEON DU HEADER
$(".accordeon").click(function(){
    $(".panneau").slideToggle();
});


// ANIMER LES PROGRESS-BAR DE LA SECTION LANGAGES
// Déclarartion de la fonction
function loadBar(){
    var delay = 500;
    $(".progress-bar").each(function(i){
    $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );

    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: delay,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now)+'%');
        }
    });
    });
}
// 1- Animation au clic sur un lien
$(document).ready(function () {
    $('#link_langages').on('click', function () {
        loadBar();
    });
});

// 2- Animation au scroll
var target = $("#link_langages").offset().top;
var barLoaded = false;
$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= target && !barLoaded) {
            loadBar();
            barLoaded = true;

        }
    }).trigger('scroll');

});


// ANIMATION DES LIGHTBOX DE LA SECTION REALISATIONS
// ouvrir les lightbox
$('#overlay1').click(function(){
    $("#lightbox1").fadeIn();
})
$('#overlay2').click(function(){
    $("#lightbox2").fadeIn();
})
$('#overlay3').click(function(){
    $("#lightbox3").fadeIn();
})
$('#overlay4').click(function(){
    $("#lightbox4").fadeIn();
})
$('#overlay5').click(function(){
    $("#lightbox5").fadeIn();
})

// fermer avec la croix
$('.close').click(function(){
    $(".lightbox").hide();
})

// ANIMER LES BOITES DE LA SECTION EXPERIENCES
$("#boite1").click(function(){
    $("#reveal1").slideToggle();
});
$("#boite2").click(function(){
    $("#reveal2").slideToggle();
});
$("#boite3").click(function(){
    $("#reveal3").slideToggle();
});