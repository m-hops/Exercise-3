<?php

//Try catch = pattern for catching errors.
try {
    /******************************************
    * Create databases and  open connections*
    ******************************************/

    // Create (connect to) SQLite database in file
    $file_db = new PDO('sqlite:../db/gashaCollection.db');
  // Set errormode to exceptions
    $file_db->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);
    //echo("opened or connected to the database graffitiGallery <br>");
   }
catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }
  ?>


<!DOCTYPE html>
<head>
<title> Cursed GashaPon </title>
<link rel='stylesheet' type='text/css' href='css/index.css'>
</head>
<body>

  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

  <section class='introArea'>

    <img src="media/Logo.png" id="mainLogo">
    <a href="instructions.php"><img src="media/start.png" id="start"></a>

  </section>

</body>
</html>
