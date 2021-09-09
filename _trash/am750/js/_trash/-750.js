//OPEN MENU & MANTO
var openmenu = document.querySelector('.openmenu');
var manto = document.getElementById('manto');
var buttonoff = document.querySelector('.closemenu');
var elmenu = document.getElementById('menuprincipal');
var burger = document.querySelector('.openmenu .burger');
var reproduciendo = false;




var playPauseStreaming = function(elem) {
    jQuery(".np__btn_controls_play").click();
    setTimeout(function(){ check_if_playing(elem); }, 700);
};




//ANALYTICS
function check_if_playing(elem=false){
    if(jQuery(".np__btn_controls_play").children().hasClass("fa-pause")){
      jQuery(".play_btn").addClass("reproduciendo");
      jQuery(".np__btn_controls_play").addClass("reproduciendo");    
      window.reproduciendo=true;
      if(elem!=false){ dataLayer.push({'event': 'play'}); }
    }else{
      jQuery(".play_btn").removeClass("reproduciendo");
      jQuery(".np__btn_controls_play").removeClass("reproduciendo");    
      window.reproduciendo=false;
      if(elem!=false){ dataLayer.push({'event': 'stop'}); }
    }
    // console.log(window.reproduciendo);
}

function sendPageView(){
  dataLayer.push({
   'event': 'pageview',
   'pagePath': window.location.pathname,
   'pageTitle': document.title 
  });

  self.COMSCORE && COMSCORE.beacon({c1:"2",c2:"24322362"});

  jQuery.ajax({
    url : "https://750.am/wp-content/themes/am750/COMSCORE.txt?rand="+Math.random(4),
          type: 'get',
          success: function(response) {
            console.log(response);
          }
      });
}
//ANALYTICS



// QUIERO SABER MÁS
function masDestacados() {
  var quierosaber = document.getElementById("quierosaber");
  quierosaber.classList.toggle('sabermas');
  
  var x = document.querySelector("#sabermas");
  if (x.innerHTML === "Cerrar") {
    x.innerHTML = "<img src='https://750.am/wp-content/themes/am750/img/i-prev.svg\' width=\'11px\' height=\'7px\'> Quiero saber más";
    x.classList.remove("cerrate");
  } else {
    x.innerHTML = "Cerrar";
    x.classList.add("cerrate");
  }
}


// TOP BUTTON
(function() {
  'use strict';

  function trackScroll() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      goTopBtn.classList.add('back_to_top-show');
    }
    if (scrolled < coords) {
      goTopBtn.classList.remove('back_to_top-show');
    }
  }

  function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  }

  var goTopBtn = document.querySelector('#gototop');
  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', backToTop);
})();
/* end begin Back to Top button  */







  //REDES SHARE
function activar_redes(){

  var twitterShares = document.getElementsByClassName('twitter-share');
  for(var i = 0; i < twitterShares.length; i++) {
      var twitterShare = twitterShares[i];
      twitterShare.onclick = function() {
       var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
        if(twitterWindow.focus) { twitterWindow.focus(); }
      }
  }

  var facebookShares = document.getElementsByClassName('facebook-share');
  for(var i = 0; i < facebookShares.length; i++) {
      var facebookShare = facebookShares[i];
      facebookShare.onclick = function() {
        //e.preventDefault();
        var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
        if(facebookWindow.focus) { facebookWindow.focus(); }
        //return false;
      }
  }

}


function active_swipe_filters(){
// TABS
  jQuery(".swipe_tabs li ").on('click touch', function () {

        var selectedElement = jQuery(this).children("a").attr("id");
        console.log(selectedElement);
        jQuery('.swipe_tabs li ').removeClass('is-active');
        jQuery(this).addClass('is-active');
        jQuery(".swiper-programacion.filtromodo div div").removeClass('swiper-slide').addClass('non-swiper-slide');
        jQuery(".swiper-programacion.filtromodo div div."+selectedElement).removeClass('non-swiper-slide').addClass('swiper-slide');
        if(selectedElement=="todos"){
          jQuery(".swiper-programacion.filtromodo div div").removeClass('non-swiper-slide').addClass('swiper-slide');
        }
        
        start_programacion_swipe();
        start_MB_swipe();
        start_DT_swipe();
  });
}

function active_programas_filters(){
  jQuery(".programas_tabs li ").on('click touch', function () {

        var selectedElement = jQuery(this).children("a").attr("id");
        console.log(selectedElement);
        jQuery('.programas_tabs li ').removeClass('is-active');
        jQuery(this).addClass('is-active');

        jQuery(".programas_tabs_content div").removeClass('is-active');
        jQuery(".programas_tabs_content").children("#"+selectedElement).addClass('is-active');
  });
}



//LAZY LOAD
if ('loading' in HTMLImageElement.prototype) {
   console.log('El navegador soporta `lazy-loading`...');
} else {
   console.log('`lazy-loading` no soportado...');
}


// // DARKMOVE NAV
// const darkmodebt = document.querySelector(".switch");

// const checkdark = () => {
// if( document.documentElement.className.match('darkmode') ) { 
//   darkmodebt.setAttribute("aria-label", "Desactivar modo oscuro");} else {darkmode.setAttribute("aria-label", "Cambiar a modo oscuro")}
// };
// document.querySelector(".switch").addEventListener("click", checkdark);


function activar_botones(){

  // DARKMODE
  var darkMode = localStorage.getItem("darkMode");
  // var darkSwitch = document.querySelector(".switch");

  var enableDarkMode = () => {
    document.documentElement.classList.add("darkmode");
    localStorage.setItem("darkMode", "enabled");
  };

  var disableDarkMode = () => {
    document.documentElement.classList.remove("darkmode");
    localStorage.setItem("darkMode", null);
  };

  if (darkMode === "enabled") { enableDarkMode();}

  // darkSwitch.addEventListener("click", () => {
  //   darkMode = localStorage.getItem("darkMode");
  //   if (darkMode !== "enabled") {
  //     enableDarkMode();
  //      darkSwitch.setAttribute("aria-label", "Desactivar modo oscuro");
  //   } else {
  //     darkSwitch.setAttribute("aria-label", "Cambiar a modo oscuro")
  //     disableDarkMode();
  //   }
  // });

  jQuery("body").on("click touch", ".switch", function() { 
      darkMode = localStorage.getItem("darkMode");
      if (darkMode !== "enabled") {
        enableDarkMode();
         jQuery(this).attr("aria-label", "Desactivar modo oscuro");
      } else {
        jQuery(this).attr("aria-label", "Cambiar a modo oscuro")
        disableDarkMode();
      }
    }); 


  // openmenu.addEventListener('click', function () {
  //   elmenu.classList.toggle('is-active');
  //   burger.classList.toggle('is-active');
  //   manto.classList.toggle('show');
  // });

  // buttonoff.addEventListener('click', event => {
  //   manto.className = 'hide';
  //   elmenu.classList.remove('is-active');
  //   burger.classList.remove('is-active');
  // });

  // manto.addEventListener('click', event => {
  //   manto.className = 'hide';
  //   elmenu.classList.remove('is-active');
  //   burger.classList.remove('is-active');
  // });
    jQuery("body").on("click touch", ".openmenu", function() { 
      jQuery("#manto").toggleClass("show");
      jQuery("#menuprincipal").toggleClass("is-active");
      jQuery(".openmenu .burger").toggleClass("is-active");
    }); 
    jQuery("body").on("click touch", "#manto", function() { 
      jQuery(this).removeClass("show");
      jQuery("#menuprincipal").removeClass("is-active");
      jQuery("'.openmenu .burger'").removeClass("is-active");
    }); 
    jQuery("body").on("click touch", ".closemenu", function() { 
      jQuery("#manto").removeClass("show");
      jQuery("#menuprincipal").removeClass("is-active");
      jQuery(".openmenu .burger").removeClass("is-active");
    }); 


  // SEARCH INPUT
    jQuery("body").on("click touch", "#search-btn", function() { 
      jQuery("#search-input").toggleClass("square");
      jQuery("#search-btn").toggleClass(" close");
    }); 
}

   




//carousel
function start_DT_swipe(){
  const seccionSlider_DT = document.querySelectorAll('.swiper-secciones');
  const nextButton_DT = document.querySelectorAll('.seccion-bt-next');
  const prevButton_DT = document.querySelectorAll('.seccion-bt-prev');
  
  for( i=0; i< seccionSlider_DT.length; i++ ) {

    nextButton_DT[i].classList.add('bt-next-' + i);
    prevButton_DT[i].classList.add('bt-prev-' + i);

    seccionSlider_DT[i].classList.add('swiper-secciones-' + i);
    var slider = new Swiper('.swiper-secciones-' + i, {
        slidesPerView: 1.5,
        spaceBetween: 10,
        slidesPerGroup:1,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
          slidesPerView: 4,
          spaceBetween: 20,
          slidesPerGroup:4
          },
        },      
        navigation: {
          nextEl :'.bt-next-' + i,
          prevEl: '.bt-prev-' + i,
        },
    });

  }
}

function start_MB_swipe(){
  //MOBILE
  const breakpoint = window.matchMedia( '(min-width:768px)' );
  let swipermobile;

  const breakpointChecker = function() {   
    if ( breakpoint.matches === true ) {
      if ( swipermobile !== undefined ) swipermobile.destroy( true, true );      
      return;
    } else if ( breakpoint.matches === false ) {
      return enableSwiper();
    }
  };


  const enableSwiper = function() {

  swipermobile = new Swiper ('.swiper-container-mob', {
    loop: true,
    slidesPerView: 1,
    a11y: true,
    keyboardControl: true,
    grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
        dynamicMainBullets: 5
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  };

  breakpoint.addListener(breakpointChecker);// keep an eye on viewport size changes
  breakpointChecker();// kickstart
}



function start_programacion_swipe(){
  //PROGRAMACION SWIPER
  const programacionSlider = document.querySelectorAll('.swiper-programacion');
  const programacionNextButton = document.querySelectorAll('.programacion-bt-next');
  const programacionPrevButton = document.querySelectorAll('.programacion-bt-prev');


  for( i=0; i< programacionSlider.length; i++ ) {

    programacionNextButton[i].classList.add('programacion-bt-next-' + i);
    programacionPrevButton[i].classList.add('programacion-bt-prev-' + i);

    programacionSlider[i].classList.add('swiper-programacion-' + i);
    var slider = new Swiper('.swiper-programacion-' + i, {
        slidesPerView: 1,
        spaceBetween: 10,
        slidesPerGroup:1,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
          slidesPerView: 4,
          spaceBetween: 20,
          slidesPerGroup:4
          },
        },      
        navigation: {
          nextEl :'.programacion-bt-next-' + i,
          prevEl: '.programacion-bt-prev-' + i,
        },
    });

  }
}




function check_if_visible(elem){
    var top_of_element = $(elem).offset().top;
    var bottom_of_element = $(elem).offset().top + $(elem).outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();

    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        // the element is visible, do something
        return true;
    } else {
        // the element is not visible, do something else
        return false;
    }
}



function iniciar_js(){
    start_programacion_swipe();
    start_MB_swipe();
    start_DT_swipe();
    active_swipe_filters();
    active_programas_filters();
    activar_redes();
    jQuery("body").on("click touch", ".play_btn", function() { playPauseStreaming($(this)) });  
    jQuery("body").on("click touch", ".np__btn_controls_play", function() {
      setTimeout(function(){ check_if_playing("player"); }, 700);
    });  
    check_if_playing();
    activar_botones();
    console.log("iniciar_js");
    
}


jQuery( document ).ready(function() {
    iniciar_js();
});