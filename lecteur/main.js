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

  togglePlay() {
    if (this.media.paused === false) {
      this.media.pause();
      this.playButton.classList.remove('pause');
    } else {
      if (this.media.src === '') {
        // If no audio file is currently loaded, play the first track
        this.playTrackAtIndex(0);
      } else {
        this.media.play();
        this.playButton.classList.add('pause');
      }
    }
  }

  calculatePercentPlayed() {
    let percentage = (this.media.currentTime / this.media.duration).toFixed(2) * 100;
    this.percentageBar.style.width = `${percentage}%`;
  }

  calculateCurrentValue(currentTime) {
    const currentMinute = parseInt(currentTime / 60) % 60;
    const currentSecondsLong = currentTime % 60;
    const currentSeconds = currentSecondsLong.toFixed();
    const currentTimeFormatted = `${currentMinute < 10 ? `0${currentMinute}` : currentMinute}:${
      currentSeconds < 10 ? `0${currentSeconds}` : currentSeconds
    }`;

    return currentTimeFormatted;
  }

  initProgressBar() {
    const currentTime = this.calculateCurrentValue(this.media.currentTime);
    this.currentTimeElement.innerHTML = currentTime;
    this.seekBar.addEventListener('click', this.seek.bind(this));

    this.media.onended = () => {
      this.playButton.classList.remove('pause');
      this.percentageBar.style.width = 0;
      this.currentTimeElement.innerHTML = '00:00';
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
    const trackUrl = this.playlist[index];
    this.media.src = trackUrl;
    this.media.play();
    this.playButton.classList.add('pause');
  }

  changeVolume() {
    const volume = parseFloat(this.volumeSlider.value);
    this.media.volume = volume;
  }
}

const playlist = [
  '../Ressources/uploads/6464d79a017f2.mp3',
  '../Ressources/uploads/64674cf165d78.mp3',
  '../Ressources/uploads/64674f0c6e6bb.mp3'
];

const player = new Player(playlist);


  //-----------------------------------Fin lecteur----------------------------//

