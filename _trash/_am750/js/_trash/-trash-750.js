// <!--PASAR A FUNCTIONS-->

// <!--LOCOMOTIVE-->
// <!-- sacar los data-scroll
// <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"> </script>    
// <script>
//   (function () {
//     var scroll = new LocomotiveScroll({
//       el: document.querySelector('[data-scroll-container]'),
//       smooth: true
//     });
//   })();
// </script>
//  -->

// <!--carousel-->
// <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> <!-SACAR?-->

//   //SECCIONES SWIPER
  // const seccionSlider = document.querySelectorAll('.swiper-secciones');
  // const nextButton = document.querySelectorAll('.seccion-bt-next');
  // const prevButton = document.querySelectorAll('.seccion-bt-prev');


  // for( i=0; i< seccionSlider.length; i++ ) {

  //   nextButton[i].classList.add('bt-next-' + i);
  //   prevButton[i].classList.add('bt-prev-' + i);

  //   seccionSlider[i].classList.add('swiper-secciones-' + i);
  //   var slider = new Swiper('.swiper-secciones-' + i, {
  //       slidesPerView: 1.5,
  //       spaceBetween: 10,
  //       slidesPerGroup:1,
  //       loop: true,
  //       pagination: {
  //         el: '.swiper-pagination',
  //         clickable: true,
  //       },
  //       breakpoints: {
  //         768: {
  //        slidesPerView: 4,
  //        spaceBetween: 20,
  //        slidesPerGroup:4
  //         },
  //       },      
  //       navigation: {
  //         nextEl :'.bt-next-' + i,
  //         prevEl: '.bt-prev-' + i,
  //       },
  //   });

  // }







 //    //MOBILE
 //    //https://codepen.io/aaronkahlhamer/pen/GveaXP
  // const breakpoint = window.matchMedia( '(min-width:768px)' );
  // let swipermobile;

  // const breakpointChecker = function() {   
  //  if ( breakpoint.matches === true ) {
  //    if ( swipermobile !== undefined ) swipermobile.destroy( true, true );      
  //    return;
  //  } else if ( breakpoint.matches === false ) {
  //    return enableSwiper();
  //  }
  // };


  // const enableSwiper = function() {

  // swipermobile = new Swiper ('.swiper-container-mob', {
  //   loop: true,
  //   slidesPerView: 1,
  //   a11y: true,
  //   keyboardControl: true,
  //   grabCursor: true,
 //      pagination: {
 //        el: '.swiper-pagination',
 //        dynamicBullets: true,
 //        dynamicMainBullets: 5
 //      },
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  //   },
  // });

  // };

  // breakpoint.addListener(breakpointChecker);// keep an eye on viewport size changes
  // breakpointChecker();// kickstart


 //   //PROGRAMACION SWIPER
  // const programacionSlider = document.querySelectorAll('.swiper-programacion');
  // const programacionNextButton = document.querySelectorAll('.programacion-bt-next');
  // const programacionPrevButton = document.querySelectorAll('.programacion-bt-prev');


  // for( i=0; i< programacionSlider.length; i++ ) {

  //   programacionNextButton[i].classList.add('bt-next-' + i);
  //   programacionPrevButton[i].classList.add('bt-prev-' + i);

  //   programacionSlider[i].classList.add('swiper-programacion-' + i);
  //   var slider = new Swiper('.swiper-programacion-' + i, {
  //       slidesPerView: 1,
  //       spaceBetween: 10,
  //       slidesPerGroup:1,
  //       loop: true,
  //       pagination: {
  //         el: '.swiper-pagination',
  //         clickable: true,
  //       },
  //       breakpoints: {
  //         768: {
  //        slidesPerView: 4,
  //        spaceBetween: 20,
  //        slidesPerGroup:4
  //         },
  //       },      
  //       navigation: {
  //         nextEl :'.bt-next-' + i,
  //         prevEl: '.bt-prev-' + i,
  //       },
  //   });

  // }


 //REDES SHARE
function activar_redes(){

  var mailShares = document.getElementsByClassName('mail-share');
  for(var i = 0; i < mailShares.length; i++) {
      var mailShare = mailShares[i];
      mailShare.onclick = function() {
          //e.preventDefault();
          location.href = "mailto:?subject=Mira está noticia de 750am&amp;body=Mirá esta noticia";
          //return false;
      }
  }


}
