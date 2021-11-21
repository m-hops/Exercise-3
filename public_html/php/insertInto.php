<?php

  //CHECKS FOR OPENDB.PHP//
  require('openDB.php');

  //CREATE VARIABLE; INSERT INTO gashaCapsule ALLOWS FOR THE INFO IN () TO BE ACCESSED//
  //VALUES ARE WHAT GETS INSERTED INTO INTO THE gashaCapsule; FOR NOW, IT IS TEST TEXT//
  $insertStatement = "INSERT INTO gashaCapsule (name, message, creationDate, image) VALUES ('Madeline', 'This is a test capsule', '11/14/2021', 'images/testImage.jpg')";

  try{

    //PUTS TABLE VARIABLE INTO DB//
    $file_db->exec($insertStatement);
    echo ($insertStatement);

    //CLOSES OFF DB CONNECTION//
    $filed_db = null;
  }

  //IF OPENDB.PHP ISN'T SUCCESSFUL, DISPLAY ERROR MESSAGE//
  catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
