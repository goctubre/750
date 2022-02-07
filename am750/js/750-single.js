var botones = document.getElementsByClassName('button');
	for (var i = 0; i < botones.length; i++) {
		var elDiv = botones[i];
		var value = elDiv.innerHTML.trim();
		if (value == 'Destacado-primero' || value == 'footer' || value == 'catastrofe-uno') {
		elDiv.style.display = 'none';
	}
}


// TE PUEDE INTERESAR - SINGLE.PHP == OK
// masnotas = [...document.querySelectorAll('.mas-notas')];
// options = { threshold: 1};
// observer = new IntersectionObserver(function (entries) {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       entry.target.classList.add('active');
//       var linksUrl = entry.target.getAttribute('data-url');
//       var titlesUrl = entry.target.getAttribute('data-title');
//       history.pushState(null, null, linksUrl);
//       document.title = titlesUrl;
//     sendPageView();
//     } else {
//       entry.target.classList.remove('active');
//     }
//   });
// }, options);
// masnotas.forEach(masnotas => { observer.observe(masnotas);});
// FIN TE PUEDE INTERESAR