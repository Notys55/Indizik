<?php include ("header.php");?>

<body>
<div class="flex row audio-player">

  <audio class="audio">
    <source src="Ressources/uploads/6464d79a017f2.mp3" type="audio/mp3">
  </audio>
  
  <div class="flex row titre">
    <p class="currentTrackTitle"></p>
  </div>
  <div class="flex row lecteur">
  <div class="flex row player-controls">
    <button class="previousTrack"><img class="dark-image" src="Ressources/previous.svg"></button>
    <button class="playAudio"><img class="dark-image" src="Ressources/play.svg"></button>
    <button class="nextTrack"><img class="dark-image" src="Ressources/next.svg"></button>
  </div>
    <div class="flex row seekObjContainer">
      <div class="seekObj">
        <div class="percentage"></div>
      </div>
      <div class="flex row timer">
        <p class="currentTime">00:00</p>
        <p> / </p>
        <p class="totalTime">00:00</p>
      </div>
    </div>

  </div>

  <div class="flex row volume">
        <button class="volume-img"><img class="dark-image" src="Ressources/volume.svg"></button>
        <input type="range" class="volumeSlider" min="0" max="1" step="0.01" value="1">
    </div>

</div>
</body>
</html>