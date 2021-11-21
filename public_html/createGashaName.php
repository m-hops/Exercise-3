<!DOCTYPE html>
<head>
<title> Cursed GashaPon: Create </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel='stylesheet' type='text/css' href='css/index.css'>
<script src="js/createGashaSetName.js"></script>
</head>
<body>

  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

  <section class='creationNameArea'>

    <form id="capsule_data" method="post" enctype ="multipart/form-data">

      <img src="media/giveName.png" id="giveName">
      <img src="media/cuppedHands.png" id="cuppedHands">

    <section id="sub_field">
      <p><input type="text" size="24" maxlength = "20" name = "capsule_name" required></p>
      <p class = "sub"><input type = "submit" name = "submit" value = "Proceed..." id ="buttonS" /></p>
    </section>

    </form>

  </section>

</body>
</html>
