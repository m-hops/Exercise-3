<!DOCTYPE html>
<head>
<title> Cursed GashaPon: Create </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/createGashaSetMusic.js"></script>
<script src="js/pullMusicGenre.js"></script>
<link rel='stylesheet' type='text/css' href='css/index.css'>
</head>
<body>

  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

  <section class='creationNameArea'>

    <form id="capsule_data" method="post" enctype ="multipart/form-data">

      <img src="media/giveMusic.png" id="giveMusic">
      <img src="media/cuppedHands.png" id="cuppedHands">

    <section id="sub_field">

    <p></p>
    <input type="radio" name = "capsule_mus" value="genre0">
    <label for="genre0">Pop</label>
    <input type="radio" name = "capsule_mus" value="genre1">
    <label for="genre1">Hip Hop</label>
    <input type="radio" name = "capsule_mus" value="genre2">
    <label for="genre2">Rock</label>
    <input type="radio" name = "capsule_mus" value="genre3">
    <label for="genre3">Random</label>

    <p class = "sub"><input type = "submit" name = "submit" value = "reCeiVe yOUr MomENTo" id ="buttonS" /></p>

  </section>

  </form>

</section>

</body>
</html>
