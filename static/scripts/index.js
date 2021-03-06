$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    /*scroll up btn*/
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });

    /* Toggle menu */ 
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    /* tryping word */
    var typed = new Typed(".typing", {
        strings: ["Desarrollador web", "Diseñador web", "Desarrollador aplicaciones"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true 
    });

    /* owl carousel */
    $('.carsel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
}); 

function developer() {
    window.location.replace('developer.html')
}

function aplicacionesEscritorio() {
    window.location.replace('application.html')
}
function diseñoGrafico() {
    window.location.replace('diseñografico.html')
}