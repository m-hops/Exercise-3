<?php

try {

  //CREATES A NEW FILE OR ACCESSES IT IF IT'S ALREADY MADE//
  $file_db = new PDO('sqlite:../../db/GashaPon.db');

  //ERROR CHECKING//
  $file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //ECHO USED TO DISPLAY TEXT ON PAGE//
  echo("opened or connected to the database GashaPon <br>");
  }

//ERROR HANDLER//
catch(PDOException $e) {

    echo $e->getMessage();
  }
  ?>
