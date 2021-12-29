//PLAYING / PAUSE MEDIAPLAYER JS --> terminar cuándo se pueda controlar vía api
// btplayerdown = document.querySelector('.np__btn_controls_play');
// btplayerup = document.querySelector('.play_btn');

// btplayerdown.addEventListener('click',check_if_playing ); // PASAR CON API MEDIA
// btplayerup.addEventListener('click',check_if_playing ); // PASAR CON API MEDI

// function check_if_playing(){
//   if (btplayerdown.querySelectorAll(".fa-play").length > 0) {
//     console.log("playin");
//     btplayerdown.classList.add('reproduciendo');
//     btplayerup.classList.add('reproduciendo');
//     //window.reproduciendo=true;
//     dataLayer.push({'event': 'play'});
//   } else {
//      console.log("pausado")
//     btplayerdown.classList.remove('reproduciendo');
//     btplayerup.classList.remove('reproduciendo');
//     //window.reproduciendo=false;
//     dataLayer.push({'event': 'stop'});
//   }
// }

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
