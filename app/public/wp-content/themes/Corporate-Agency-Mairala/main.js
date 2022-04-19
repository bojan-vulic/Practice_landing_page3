
////Hamburger responsive
let lista = document.querySelector('.nav.mobile-menu');
let burger = document.querySelector('.burger');

burger.addEventListener('click', showHideNav);

function showHideNav(){
   lista.classList.toggle('navActive');
   burger.classList.toggle('closeBtn');
}



// ----------------------------------------------------------
// hide or display the mobile menu

/* let's consider we want to toggle the menu displayed at 800 screen width, here's what we need to do (you can accordingly replace 800 with to a screen width you would need)..*/
function toggle() {
    if ( jQuery( window ).width() >= 800 ) {
      jQuery( '.nav.mobile-menu' ).hide();
      jQuery( '.nav.desktop-menu' ).show();
    } else {
      jQuery( '.nav.desktop-menu' ).hide();
      jQuery( '.nav.mobile-menu' ).show();
    }
}

// on page load set the menu display initially
toggle();

// toggle the menu display on browser resize
jQuery( window ).resize( function () {
    toggle();
} );

//OWL Carousel
$('.owl-one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

//OWL Carousel
$('.owl-two').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})