<?php
require('openDB.php');

  session_start();
  //check if there has been something posted to the server to be processed
  if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

      try{

        $theQuery = "INSERT INTO gashaCollection (name, image, music) VALUES ('" . $_SESSION['capsule_name'] . "', '" . $_SESSION['capsule_img'] . "','" . $_POST['capsule_mus'] . "')";
        $result = $file_db ->query($theQuery); //line that creates the table;
        $myfile = fopen("debug.txt", "w");
        fwrite($myfile,$result);
        fclose($myfile);
        $file_db = null;
      }
      catch(PDOException $e) {
         // Print PDOException message
         echo $e->getMessage();
       }
    }//POST
?>
