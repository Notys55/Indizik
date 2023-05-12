//bouton light / dark
const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
});
// fin bouton light / dark
//changement couleur navbar

var navbar = document.querySelector('.navbar');
var scrolled = false;

window.addEventListener('scroll', function() {
  if (window.pageYOffset > 50) {
	if (!scrolled) {
	  navbar.classList.add('scrolled');
	  scrolled = true;
	}
  } else {
	if (scrolled) {
	  navbar.classList.remove('scrolled');
	  scrolled = false;
	}
  }
});
//fin changement couleur navbar

//disparition du titre dans le logo

window.addEventListener('scroll', function() {
	var texteLogo = document.querySelector('.texte_logo');
	var imageLogo = document.querySelector('.image_logo');
  
	var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
  
	if (scrollPos > 0) {
	  // Faire disparaître le texte_logo en le fondu (fade-out)
	  texteLogo.classList.add('invisible');
	  texteLogo.classList.remove('move-left');
	} else {
	  // Faire réapparaître le texte_logo en le fondu (fade-in)
	  texteLogo.classList.remove('invisible');
	  texteLogo.classList.remove('move-left');
	}
  
	if (scrollPos > imageLogo.clientHeight) {
	  // Faire bouger le texte_logo sur la gauche derrière l'image_logo
	  texteLogo.classList.add('move-left');
	}
  });

