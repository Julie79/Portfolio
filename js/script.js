// PANNEAU ACCORDEON
$(".accordeon").click(function(){
    $(".panneau").slideToggle();
});


// ANIMER LES PROGRESS-BAR
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

// ANIMATION DES THUMBNAILS
$('.middle').click(function(){
    $('this').show();
})