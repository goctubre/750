console.log("(╹◡╹) un grito de corazón!");


/**************************
  VERSIÓN JS PARA AJAXIFY
**************************/

//OPEN MENU & MANTO ==
openmenu = document.querySelector('.openmenu');
manto = document.getElementById('manto');
elmenu = document.querySelector('#menuprincipal');
burger = document.querySelector('.openmenu .burger');
html = document.querySelector('html');
//const reproduciendo = false; (ESTO VA?)

manto.classList.remove('show');
manto.classList.add('hide');
elmenu.classList.remove('is-active');
burger.classList.remove('is-active');

openmenu.addEventListener('click', function () {
  manto.classList.toggle('show'); manto.classList.toggle('hide'); elmenu.classList.toggle('is-active');
  burger.classList.toggle('is-active'); html.classList.toggle('overhidden');
});

manto.addEventListener('click', event => {
  manto.classList.toggle('show'); manto.classList.toggle('hide'); elmenu.classList.remove('is-active');
  burger.classList.remove('is-active'); html.classList.remove('overhidden');
});

document.querySelector("html").classList.remove("overhidden");

// TOP BUTTON ==
(function() {
  'use strict';

  function trackScroll() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;
    if (scrolled > coords) { goTopBtn.classList.add('back_to_top-show'); }
    if (scrolled < coords) { goTopBtn.classList.remove('back_to_top-show'); }
  }

  function backToTop() { if (window.pageYOffset > 0) { window.scrollBy(0, -80); setTimeout(backToTop, 0);}  }

  var goTopBtn = document.querySelector('#gototop');
  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', backToTop);
})();
// FIN TOP BUTTON


//REDES SHARE ==
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
//FIN REDES


// DARKMODE == OK
    var darkMode = localStorage.getItem("darkMode");
    var darkSwitch = document.querySelectorAll(".switch");
    var enableDarkMode = () => { document.documentElement.classList.add("darkmode"); localStorage.setItem("darkMode", "enabled"); };
    var disableDarkMode = () => { document.documentElement.classList.remove("darkmode"); localStorage.setItem("darkMode", null);};
    if (darkMode === "enabled") { enableDarkMode();}

    darkSwitch.forEach(element => {
      element.addEventListener('click', event => {
        darkMode = localStorage.getItem("darkMode");
        if (darkMode !== "enabled") {
          enableDarkMode(); element.setAttribute("aria-label", "Desactivar modo oscuro");
        } else {
          element.setAttribute("aria-label", "Cambiar a modo oscuro")
          disableDarkMode();
        }
      })
    });
  // FIN  DARKMODE


  //PANEL BUSQUEDA MOBILE == OK
  var buscarmobile = document.querySelector('#buscarmobile');
  var searchmobile = document.querySelector('#searchmobile');
  var cerrarsearchmobile = document.querySelector('#cerrar');

  searchmobile.classList.remove('show');

  buscarmobile.addEventListener('click', function () { searchmobile.classList.toggle('show'); });
  cerrarsearchmobile.addEventListener('click', function () { searchmobile.classList.remove('show'); });
  //--FIN PANEL BUSQUEDA MOBILE-->

// SEARCH INPUT == OK
  document.querySelector('#search-btn').addEventListener('click', function () { document.querySelector('#search').classList.add('open'); })
  document.querySelector('.search-close').addEventListener('click', function () { document.querySelector('#search').classList.remove('open'); })


  //ANALYTICS
  function sendPageView(){
    dataLayer.push({ 'event': 'pageview','pagePath': window.location.pathname,'pageTitle': document.title });
    console.log("pageview:" + document.title);
    self.COMSCORE && COMSCORE.beacon({c1:"2",c2:"24322362"});
    jQuery.ajax({
      url : "https://750.am/wp-content/themes/am750/COMSCORE.txt?rand="+Math.random(4),
            type: 'get',
            success: function(response) { console.log(response); }
        });
  }

  sendPageView();
  //ANALYTICS




  //PLAYING / PAUSE MEDIAPLAYER == jquery
  function check_if_playing(elem=false){
      if(jQuery(".np__btn_controls_play").children().hasClass("fa-pause")){
        jQuery(".play_btn").addClass("reproduciendo");
        jQuery(".np__btn_controls_play").addClass("reproduciendo");
        console.log("reproduciendo");
        window.reproduciendo=true;
        if(elem!=false){ dataLayer.push({'event': 'play'}); }
      } else {
        jQuery(".play_btn").removeClass("reproduciendo");
        jQuery(".np__btn_controls_play").removeClass("reproduciendo");
        console.log("pausa");
        window.reproduciendo=false;
        if(elem!=false){ dataLayer.push({'event': 'stop'}); }
      }
      console.log(window.reproduciendo);
  }

  var playPauseStreaming = function(elem) { jQuery(".np__btn_controls_play").click();};

  jQuery("body").on("click touch", ".np__btn_controls_play", function() { setTimeout(function(){ check_if_playing("player"); }, 700); });  
  jQuery("body").on("click touch", ".play_btn", function() { playPauseStreaming(jQuery(this)) });  

  check_if_playing();


  //PROGRAMAS TAB - PAGE PROGRAMAS
  jQuery(".programas_tabs li ").on('click touch', function () {
    var selectedElement = jQuery(this).children("a").attr("id");
    console.log(selectedElement);
    jQuery('.programas_tabs li ').removeClass('is-active');
    jQuery(this).addClass('is-active');

    jQuery(".programas_tabs_content div").removeClass('is-active');
    jQuery(".programas_tabs_content").children("#"+selectedElement).addClass('is-active');
  });

  
  // ##JQUERY
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
  });