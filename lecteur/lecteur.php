<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Indizik</title>
</head>

<body>
    <div class="player">
        <div class="details">
            <div class="now-playing">Voici mon premier player audio</div>
            <div class="track-art"></div>
            <div class="track-name">Track Name</div>
            <div class="track-artist">Track Artist</div>
        </div>


        <div class="buttons">
            <div class="prev-track" onclick="prevTrack()">
                <i class="fa fa-step-backward fa-2x"></i>
            </div>
            <div class="playpause-track" onclick="playpauseTrack()">
                <i class="fa fa-play-circle fa-5x"></i>
            </div>
            <div class="next-track" onclick="nextTrack()">
                <i class="fa fa-step-forward fa-2x"></i>
            </div>
        </div>
        <div class="slider_container">
            <div class="current-time">00:00</div>
            <input type="range" min="0" max="100" step="1" value="0"
                value="0" class="seek_slider" onchange="seekTo()">
            <div class="total-duration">00:00</div>
        </div>

        <div class="slider_container">
            <i class="fa fa-volume-down"></i>
            <input type="range" min="0" max="100"
                value="99" class="volume_slider" onchange="setVolume()">
            <i class="fa fa-volume-up"></i>
        </div>
    </div>    
    <script src="main.js"></script>
</body>
</html>