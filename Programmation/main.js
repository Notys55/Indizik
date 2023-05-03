// faire un selecteur sur tout ce dont on va avoir besoin
let now_playing = document.querySelector(".now-playing");
let track_art = document.querySelector(".track-art");
let track_name = document.querySelector(".track-name");
let track_artist = document.querySelector(".track-artist");
 
let playpause_btn = document.querySelector(".playpause-track");
let next_btn = document.querySelector(".next-track");
let prev_btn = document.querySelector(".prev-track");
 
let seek_slider = document.querySelector(".seek_slider");
let volume_slider = document.querySelector(".volume_slider");
let curr_time = document.querySelector(".current-time");
let total_duration = document.querySelector(".total-duration");
 

let track_index = 0;
let isPlaying = false;
let updateTimer;
 
//créer un element audio
let curr_track = document.createElement('audio');
 
// Liste de musique pour test
let track_list = [
  {
    name: "All eyes on me",
    artist: "bo-burnham",
    image: "image URL",
    path: "piste01.mp3"
  },
  {
    name: "Enthusiast",
    artist: "kezah",
    image: "Image URL",
    path: "piste02.mp3"
  },
  {
    name: "Power",
    artist: "billie eilish",
    image: "Image URL",
    path: "piste03.mp3",
  },
];
function loadTrack(track_index) {
    // clear le timer
    clearInterval(updateTimer);
    resetValues();
   
    // charger une nouvelle musique
    curr_track.src = track_list[track_index].path;
    curr_track.load();
   
    // mettre à jour les infos de la musique en cours
    track_art.style.backgroundImage =
       "url(" + track_list[track_index].image + ")";
    track_name.textContent = track_list[track_index].name;
    track_artist.textContent = track_list[track_index].artist;
    now_playing.textContent =
       "Music " + (track_index + 1) + " sur " + track_list.length;
   
    // interval de 1000 milliseconde
    // le temps d'afficher les infos images titre ect
    updateTimer = setInterval(seekUpdate, 1000);
   
    // passer automatiquement à la chanson suivante à la fin de celle en cours
    // utiliser un event de fin
    curr_track.addEventListener("ended", nextTrack);
   
  //   // Appliquer une couleur random
  //   random_bg_color();
  // }
   
  // function random_bg_color() {
  //   // mettre un chiffre compris 64 to 256
  //   // (pour des couleurs plus clair)
  //   let red = Math.floor(Math.random() * 256) + 64;
  //   let green = Math.floor(Math.random() * 256) + 64;
  //   let blue = Math.floor(Math.random() * 256) + 64;
   
  //   // faire une couleur avec ces paramètres
  //   let bgColor = "rgb(" + red + ", " + green + ", " + blue + ")";
   
  //   // Set le nouveau background
  //   document.body.style.background = bgColor;
  }
   
  // reinitialiser tout les compteurs
  function resetValues() {
    curr_time.textContent = "00:00";
    total_duration.textContent = "00:00";
    seek_slider.value = 0;
  }
  function playpauseTrack() {
    // Switch entre play et pause
    if (!isPlaying) playTrack();
    else pauseTrack();
  }
   
  function playTrack() {
    // jouer la musique charger
    curr_track.play();
    isPlaying = true;
   
    // remplacer l'icone avec celle de pause
    playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
  }
   
  function pauseTrack() {
    // mettre la musique en pause
    curr_track.pause();
    isPlaying = false;
   
    // Remplacer l'icon play par celui pause
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
  }
   
  function nextTrack() {
    // retourner à la première musique si tu est à la dernière musique de la "playlist"
    if (track_index < track_list.length - 1)
      track_index += 1;
    else track_index = 0;
   
    // charger et jouer la musique
    loadTrack(track_index);
    playTrack();
  }
   
  function prevTrack() {
    // retourner à la dernière musique si tu back depuis la première musique de la playlist 
    if (track_index > 0)
      track_index -= 1;
    else (track_index = track_list.length - 1);
     
    // charger et jouer la musique
    loadTrack(track_index);
    playTrack();
  }
  function seekTo() {
    // Calculer la position du lecteur selon l'avancement de la musique
    seekto = curr_track.duration * (seek_slider.value / 100);
   
    // Set la position actuelle pour calculer la prochaine
    curr_track.currentTime = seekto;
  }
   
  function setVolume() {
    // Ajustement du volume par rapport au pourcentage sur la barre
    curr_track.volume = volume_slider.value / 100;
  }
   
  function seekUpdate() {
    let seekPosition = 0;
   
    // Verifier si la durée de la musique est légit
    if (!isNaN(curr_track.duration)) {
      seekPosition = curr_track.currentTime * (100 / curr_track.duration);
      seek_slider.value = seekPosition;
   
      // Calculer le temps coté gauche de la barre
      let currentMinutes = Math.floor(curr_track.currentTime / 60);
      let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
      let durationMinutes = Math.floor(curr_track.duration / 60);
      let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);
   
      // Ajouter un zero au nombre à un seul chiffre
      if (currentSeconds < 10) { currentSeconds = "0" + currentSeconds; }
      if (durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
      if (currentMinutes < 10) { currentMinutes = "0" + currentMinutes; }
      if (durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }
   
      // Afficher la durée qui mis à jour chaque seconde
      curr_time.textContent = currentMinutes + ":" + currentSeconds;
      total_duration.textContent = durationMinutes + ":" + durationSeconds;
    }
  }
  