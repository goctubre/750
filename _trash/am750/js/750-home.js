// SECCIONES CARROUSEL - [HOME] == OK
  seccionSlider_DT = document.querySelectorAll('.swiper-secciones'); //const
  nextButton_DT = document.querySelectorAll('.seccion-bt-next'); //const
  prevButton_DT = document.querySelectorAll('.seccion-bt-prev'); //const
   
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


    // SLIDER MOBILE - POPULAR [HOME] == OK
    breakpoint = window.matchMedia( '(min-width:768px)' ); //const
    var swipermobile; //let swipermobile

    breakpointChecker = function() {    //const
      if ( breakpoint.matches === true ) {
        if ( swipermobile !== undefined ) swipermobile.destroy( true, true );      
        return;
      } else if ( breakpoint.matches === false ) {
        return enableSwiper();
      }
    };


    enableSwiper = function() { //const

    var  swipermobile = new Swiper ('.swiper-container-mob', {
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



  //PROGRAMACION SWIPER  [HOME] == OK
  programacionSlider = document.querySelectorAll('.swiper-programacion'); // const
  programacionNextButton = document.querySelectorAll('.programacion-bt-next'); //const
  programacionPrevButton = document.querySelectorAll('.programacion-bt-prev'); //const

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




  // FIN PROGRAMACION SWIPER  [HOME]

// FILTRO [HOME] -- SEGUIR
//   document.querySelectorAll('.tabs').forEach((tab)=>{
//     tab.querySelectorAll('li').forEach((li)=>{
//       li.onclick = () => {
//           tab.querySelector('li.is-active').classList.remove('is-active')
//           li.classList.add('is-active')
// tab.nextElementSibling.querySelector('.tab-pane.is-active').classList.remove('is-active')
// tab.nextElementSibling.querySelector('.tab-pane#'+li.firstElementChild.getAttribute('id'))
//             .classList.add("is-active")
//       }
//     })
//   })


