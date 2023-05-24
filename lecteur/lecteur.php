<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wclassth, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Indizik</title>
</head>

<body>
<div class="flex row audio-player">

  <audio class="audio">
    <source src="../Ressources/uploads/6464d79a017f2.mp3" type="audio/mp3">
  </audio>
  
  <div class="flex row titre">
    <p class="currentTrackTitle"></p>
  </div>
  <div class="flex row player-controls">
    <button class="previousTrack"><img src="../Ressources/forward-button-1.png"></button>
    <button class="playAudio"><img src="../Ressources/play-button-arrowhead.png"></button>
    <button class="nextTrack"><img src="../Ressources/forward-button.png"></button>

    <div class="seekObjContainer">
      <div class="seekObj">
        <div class="percentage"></div>
      </div>
    </div>

    <p><p class="currentTime">00:00</p>/<p class="totalTime">00:00</p></p>

  </div>

  <div class="flex row volume">
        <button class="volume-img"><img src="../Ressources/volume.png"></button>
        <input type="range" class="volumeSlider" min="0" max="1" step="0.01" value="1">
    </div>

</div>
    <script src="main.js"></script>
</body>
</html>