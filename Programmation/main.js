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






























//--------------------------------Lecteur--------------------------//
class Player {
	constructor(playlist) {
	  this.playlist = playlist;
	  this.currentTrackIndex = 0;
	  this.media = document.querySelector('.audio');
	  this.playButton = document.querySelector('.playAudio');
	  this.percentageBar = document.querySelector('.percentage');
	  this.seekBar = document.querySelector('.seekObj');
	  this.currentTimeElement = document.querySelector('.currentTime');
	  this.totalTimeElement = document.querySelector('.totalTime');
	  this.previousButton = document.querySelector('.previousTrack');
	  this.nextButton = document.querySelector('.nextTrack');
	  this.volumeSlider = document.querySelector('.volumeSlider');
	  
	  this.playButton.addEventListener('click', this.togglePlay.bind(this));
	  this.media.addEventListener('timeupdate', this.initProgressBar.bind(this));
	  this.seekBar.addEventListener('click', this.seek.bind(this));
	  this.nextButton.addEventListener('click', this.playNextTrack.bind(this));
	  this.previousButton.addEventListener('click', this.playPreviousTrack.bind(this));
	  this.volumeSlider.addEventListener('input', this.changeVolume.bind(this));
	}
  
	//mode pause + changer l'image play pause
	togglePlay() {
	  if (this.media.paused === false) {
		this.media.pause();
		this.playButton.classList.remove('pause');
	  } else {
		if (this.media.src === '') {
		  // si il n' y a pas de fichier audio de charger reprendre à la première
		  this.playTrackAtIndex(0);
		} else {
		  this.media.play();
		  this.playButton.classList.add('pause');
		}
	  }
	  this.updatePlayButton();
	}
  
	updatePlayButton() {
	  if (this.media.paused) {
		this.playButton.innerHTML = '<img src="Ressources/play.svg">';
	  } else {
		this.playButton.innerHTML = '<img src="Ressources/pause.svg">';
	  }
	}
  
	calculatePercentPlayed() {
	  let percentage = (this.media.currentTime / this.media.duration).toFixed(2) * 100;
	  this.percentageBar.style.width = `${percentage}%`;
	}
  
	//calculer le temps en live 
	calculateCurrentValue(currentTime) {
	  const currentMinute = parseInt(currentTime / 60) % 60;
	  const currentSecondsLong = currentTime % 60;
	  const currentSeconds = currentSecondsLong.toFixed();
	  const currentTimeFormatted = `${currentMinute < 10 ? `0${currentMinute}` : currentMinute}:${
		currentSeconds < 10 ? `0${currentSeconds}` : currentSeconds
	  }`;
  
	  return currentTimeFormatted;
	}
  
  //calculer le temps total de la musique
	calculateTotalValue() {
	  const totalMinute = parseInt(this.media.duration / 60) % 60;
	  const totalSecondsLong = this.media.duration % 60;
	  const totalSeconds = totalSecondsLong.toFixed();
	  const totalTimeFormatted = `${totalMinute < 10 ? `0${totalMinute}` : totalMinute}:${
		totalSeconds < 10 ? `0${totalSeconds}` : totalSeconds
	  }`;
  
	  return totalTimeFormatted;
	}
  
	initProgressBar() {
	  const currentTime = this.calculateCurrentValue(this.media.currentTime);
	  const totalTime = this.calculateTotalValue();
	  this.currentTimeElement.innerHTML = currentTime;
	  this.totalTimeElement.innerHTML = totalTime;
	  this.seekBar.addEventListener('click', this.seek.bind(this));
  
	  this.media.onended = () => {
		this.playButton.classList.remove('pause');
		this.percentageBar.style.width = 0;
		this.currentTimeElement.innerHTML = '00:00';
		this.totalTimeElement.innerHTML = '';
	  };
  
	  this.calculatePercentPlayed();
	}
  
	seek(e) {
	  const percent = e.offsetX / this.seekBar.offsetWidth;
	  this.media.currentTime = percent * this.media.duration;
	}
  
	playNextTrack() {
	  this.currentTrackIndex++;
	  if (this.currentTrackIndex >= this.playlist.length) {
		this.currentTrackIndex = 0;
	  }
	  this.playTrackAtIndex(this.currentTrackIndex);
	}
  
	playPreviousTrack() {
	  this.currentTrackIndex--;
	  if (this.currentTrackIndex < 0) {
		this.currentTrackIndex = this.playlist.length - 1;
	  }
	  this.playTrackAtIndex(this.currentTrackIndex);
	}
  
	playTrackAtIndex(index) {
	  const trackUrl = this.playlist[index].url;
	  const trackTitle = this.getTrackTitle(index);
	  
	  this.media.src = trackUrl;
	  this.media.play();
	  this.playButton.classList.add('pause');
	  this.updatePlayButton();
	  this.updateCurrentTrackTitle(trackTitle); 
	}
	// recuperer le titre + mettre à jour le titre de la chanson
	updateCurrentTrackTitle(title) {
	  const currentTrackTitleElement = document.querySelector('.currentTrackTitle');
	  currentTrackTitleElement.textContent = title;
	}
	getTrackTitle(index) {
	  return this.playlist[index].title;
	}
  
	changeVolume() {
	  const volume = parseFloat(this.volumeSlider.value);
	  this.media.volume = volume;
	}
  }
  
  const playlist = [
	{ url: 'Ressources/uploads/6464d79a017f2.mp3', title: 'all eyes on me' },
	{ url: 'Ressources/uploads/64674cf165d78.mp3', title: 'dams' },
	{ url: 'Ressources/uploads/64674f0c6e6bb.mp3', title: 'power' }
  ];
  
  
  const player = new Player(playlist);
  
  
	//-----------------------------------Fin lecteur----------------------------//
  