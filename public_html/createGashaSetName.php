<?php

  session_start();

  //check if there has been something posted to the server to be processed
  if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      //VARIABLES FOR FORM INTAKE//
      $_SESSION['capsule_name'] = $_POST['capsule_name'];
    }//POST
?>
