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

//disparition du titre dans le logo  !!!(pas terminer)!!!  //

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
//fin de disparition du titre dans le logo//

//drag n drop//
document.querySelectorAll(".dropzone__input").forEach((inputElement) => {
	const dropZoneElement = inputElement.closest(".dropzone");
  
	dropZoneElement.addEventListener("click", (e) => {
	  inputElement.click();
	});
  
	inputElement.addEventListener("change", (e) => {
	  if (inputElement.files.length) {
		updateThumbnail(dropZoneElement, inputElement.files[0]);
	  }
	});
  
	dropZoneElement.addEventListener("dragover", (e) => {
	  e.preventDefault();
	  dropZoneElement.classList.add("dropzone--over");
	});
  
	["dragleave", "dragend"].forEach((type) => {
	  dropZoneElement.addEventListener(type, (e) => {
		dropZoneElement.classList.remove("dropzone--over");
	  });
	});
  
	dropZoneElement.addEventListener("drop", (e) => {
	  e.preventDefault();
  
	  if (e.dataTransfer.files.length) {
		inputElement.files = e.dataTransfer.files;
		updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
	  }
  
	  dropZoneElement.classList.remove("dropzone--over");
	});
  });
  
//fin drag n drop //
