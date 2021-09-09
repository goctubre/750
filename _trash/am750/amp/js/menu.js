

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


    //OPEN MENU & MANTO - cambie de lugar - MAJO

    var openmenu = document.querySelector('.openmenu');
    var manto = document.querySelector('#manto');
    //var buttonoff = document.querySelector('.closemenu');
    var elmenu = document.querySelector('#menuprincipal');
    var burger = document.querySelector('.openmenu .burger');
    var html = document.querySelector('html');
    //var reproduciendo = false; (ESTO VA?)

    manto.classList.remove('show')
    manto.classList.add('hide');
    elmenu.classList.remove('is-active');
    burger.classList.remove('is-active');

    openmenu.addEventListener('click', function () {
      manto.classList.toggle('show');
      manto.classList.toggle('hide');
      elmenu.classList.toggle('is-active');
      burger.classList.toggle('is-active');
      html.classList.toggle('overhidden');
    });

    // BORRAR?
    // buttonoff.addEventListener('click', event => {
    //   manto.className = 'hide';
    //   elmenu.classList.remove('is-active');
    //   burger.classList.remove('is-active');
    // });

    manto.addEventListener('click', event => {
      manto.classList.toggle('show');
      manto.classList.toggle('hide');
      elmenu.classList.remove('is-active');
      burger.classList.remove('is-active');
      html.classList.remove('overhidden');
    });

    document.querySelector("html").classList.remove("overhidden");



    //BUSQUEDA MOBILE --MAJO--
    var buscarmobile = document.querySelector('#buscarmobile');
    var searchmobile = document.querySelector('#searchmobile');
    var cerrarsearchmobile = document.querySelector('#cerrar');

    searchmobile.classList.remove('show');

    buscarmobile.addEventListener('click', function () {
      searchmobile.classList.toggle('show');
    });
    cerrarsearchmobile.addEventListener('click', function () {
      searchmobile.classList.remove('show');
    });
    //--FIN MAJO BUSQUEDA-->

  // SEARCH INPUT
    jQuery("body").on("click touch", "#search-btn", function() { 
      jQuery("#search-input").toggleClass("square");
      jQuery("#search-btn").toggleClass(" close");
    }); 
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
    // alert("iuju");
});