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

// Sélectionnez l'élément du titre du logo
var titreLogo = document.querySelector('.texte_logo');

// Gérez l'événement de défilement de la fenêtre
window.addEventListener('scroll', function() {
  // Vérifiez si la position de défilement est supérieure à 0 (vers le bas)
  if (window.scrollY > 0) {
    // Ajoutez une classe CSS pour masquer le titre du logo
    titreLogo.classList.add('invisible');
  } else {
    // Supprimez la classe CSS pour afficher le titre du logo
    titreLogo.classList.remove('invisible');
  }
});