<?php
 require('openDB.php');

 try{
   //very important to be in double quotes and specify the TYPE of data (text in this case, but many more options)
   //Piece ID: needs to be unique ("primary key"), and cannot be empty (not null)
$theQuery = "CREATE TABLE gashaCollection (pieceID INTEGER PRIMARY KEY NOT NULL, name TEXT, image TEXT, music TEXT)";
$file_db ->exec($theQuery); //line that creates the table;
// echo ("Table gashaCollection created successfully<br>");
$file_db = null;
}
catch(PDOException $e) {
    // Print PDOException message
    // echo $e->getMessage();
  }
?>

<!DOCTYPE html>
<head>
<title> Cursed GashaPon </title>
<link rel='stylesheet' type='text/css' href='css/index.css'>
</head>
<body>

  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

  <section class='instructionArea'>

    <img src="media\instructions.png" id="instructions">
    <a href="createGashaName.php"><img src="media\capsuleButton.png" id="instruc_btn"></a>

  </section>

</body>
</html>
