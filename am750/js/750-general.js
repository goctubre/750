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
  }
  sendPageView();
  //ANALYTICS


  //PLAYING / PAUSE MEDIAPLAYER == siguen en mediaplyaer-asyn.php
  if (reproduciendo === true ) { 
    document.querySelector('.play_btn').classList.add('reproduciendo');
    document.querySelector(".play_btn").classList.remove('llamarfalsoplayer');
  } 

  var btfalsotop = document.querySelector(".play_btn");  //#playnav
  btfalsotop.addEventListener("click", haztugraciatop);
  btfalsobottom.addEventListener("click", haztugraciadown);
  btbottom = document.querySelector('#player-div .np__btn_controls_play'); 
  btbottom.addEventListener("click", haztugraciadown);
  

  //PROGRAMAS TAB - PAGE PROGRAMAS
  var tabLinks = document.querySelectorAll(".programas_tabs li");
  var tabContent = document.querySelectorAll(".tab-pane");

  tabLinks.forEach(function(el) {  el.addEventListener("click", openTabs); });

  function openTabs(el) {
     var btnTarget = el.currentTarget;
     var dia = btnTarget.dataset.dia;
    
     tabContent.forEach(function(el) { el.classList.remove("is-active"); });
     tabLinks.forEach(function(el) { el.classList.remove("is-active"); });
     document.querySelector("#" + dia).classList.add("is-active");
     btnTarget.classList.add("is-active");
}