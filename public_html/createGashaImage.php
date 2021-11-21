<!DOCTYPE html>
<head>
<title> Cursed GashaPon: Create </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="external_library/webcamjs-master/webcam.min.js"></script>
<script src="js/createGashaSetImg.js"></script>
<script src="js/accessWebcam.js"></script>
<link rel='stylesheet' type='text/css' href='css/index.css'>
</head>
<body>

  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

<section class='creationNameArea'>

  <form id="capsule_data" method="post" enctype ="multipart/form-data">

    <img src="media/giveImage.png" id="giveImage">
    <img src="media/cuppedHands.png" id="cuppedHands">

  <section id="sub_field_image">

    <div id="my_camera"></div>
    <div id="results" ></div>

    <input type=button value="Say Cheese..." onClick="take_snapshot()">
    <input type=button value="Save Snapshot" onClick="saveSnap()">

    <p class = "sub"><input type = "submit" name = "submit" value = "One more step..." id ="buttonS" /></p>

  </section>

  </form>

</section>

</body>
</html>
