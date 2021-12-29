// SECCIONES CARROUSEL - [HOME] == OK
seccionSlider_DT = document.querySelectorAll('.swiper-secciones'); //const
nextButton_DT = document.querySelectorAll('.seccion-bt-next'); //const
prevButton_DT = document.querySelectorAll('.seccion-bt-prev'); //const
 
for( i=0; i< seccionSlider_DT.length; i++ ) {
  nextButton_DT[i].classList.add('bt-next-' + i);
  prevButton_DT[i].classList.add('bt-prev-' + i);
  seccionSlider_DT[i].classList.add('swiper-secciones-' + i);
  var slider = new Swiper('.swiper-secciones-' + i, { slidesPerView: 1.5, spaceBetween: 10, slidesPerGroup:1, loop: true, pagination: { el: '.swiper-pagination', clickable: true, }, breakpoints: { 768: { slidesPerView: 4, spaceBetween: 20, slidesPerGroup:4 }, }, navigation: { nextEl :'.bt-next-' + i, prevEl: '.bt-prev-' + i, }, });
}

// SLIDER MOBILE - POPULAR [HOME] == OK
breakpoint = window.matchMedia( '(min-width:768px)' ); //const
var swipermobile; //let swipermobile

breakpointChecker = function() {    //const
  if ( breakpoint.matches === true ) { if ( swipermobile !== undefined ) swipermobile.destroy( true, true ); return;
  } else if ( breakpoint.matches === false ) { return enableSwiper(); }
};

enableSwiper = function() { //const

var swipermobile = new Swiper ('.swiper-container-mob', { loop: true, slidesPerView: 1, a11y: true, keyboardControl: true, grabCursor: true, pagination: { el: '.swiper-pagination', dynamicBullets: true, dynamicMainBullets: 5 }, navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

};

breakpoint.addListener(breakpointChecker);// keep an eye on viewport size changes
breakpointChecker();// kickstart


//PROGRAMACION SWIPER  [HOME] == OK
//if (typeof swiperprogramas !== 'undefined') { swiperprogramas.destroy(true, true);  }
var swiperprogramas = new Swiper('.swiper-programacion', { slidesPerView: 1, spaceBetween: 10, slidesPerGroup:1, loop: true, pagination: { el: '.swiper-pagination', clickable: true, }, breakpoints: { 768: { slidesPerView: 4, spaceBetween: 20, slidesPerGroup:4 }, }, navigation: { nextEl :'.programacion-bt-next', prevEl: '.programacion-bt-prev', }, });  
// FIN PROGRAMACION SWIPER  [HOME]



//FILTER NUEVO -- https://codepen.io/vskand/pen/MWKKKYK
var filtrame = document.querySelectorAll(".swipe_tabs li");

filtrame.forEach(filter => {
  filter.addEventListener('click', event => {
    var swiperprogramas;
    var val = filter.getAttribute('data-value');
    //alert(val);
    for (var item of document.querySelectorAll('.is-active')) {  item.classList.remove('is-active');}
    filter.classList.add('is-active');

    //TODOS
    if (val =="todos") {
      var todos = document.querySelectorAll('[data-filter]');
      todos.forEach((element) => { element.classList.remove('non-swiper-slide');  element.classList.add('swiper-slide'); });
      console.log($(".swiper-programacion .swiper-slide").length);
      var swiperprogramas = document.querySelector('.swiper-programacion').swiper;
      //swiperprogramas.destroy();
      swiperprogramas = new Swiper('.swiper-programacion', { slidesPerView: 1, spaceBetween: 10, slidesPerGroup:1, loop: true, pagination: { el: '.swiper-pagination', clickable: true, }, breakpoints: { 768: { slidesPerView: 4, spaceBetween: 20, slidesPerGroup:4 }, }, navigation: { nextEl :'.programacion-bt-next', prevEl: '.programacion-bt-prev', }, });
    
    } else {
    
      var vuelan = document.querySelectorAll('.swiper-programacion .swiper-slide:not([data-filter="'+val+'"])');
      vuelan.forEach((vuela) => { vuela.classList.add('non-swiper-slide');  vuela.classList.remove('swiper-slide'); });
      var estan = document.querySelectorAll('[data-filter="'+val+'"]');
      estan.forEach((esta) => { esta.classList.remove('non-swiper-slide'); esta.classList.add('swiper-slide'); });
      console.log($(".swiper-programacion .swiper-slide").length);
      //swiperprogramas.destroy();
      swiperprogramas = new Swiper('.swiper-programacion', { slidesPerView: 1, spaceBetween: 10, slidesPerGroup:1, loop: true, pagination: { el: '.swiper-pagination', clickable: true, }, breakpoints: { 768: { slidesPerView: 4, spaceBetween: 20, slidesPerGroup:4 }, }, navigation: { nextEl :'.programacion-bt-next', prevEl: '.programacion-bt-prev', }, });
    }

  })
});
//FIN FILTRO NUEVO


