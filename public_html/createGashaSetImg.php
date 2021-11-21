<?php

  session_start();
//check if there has been something posted to the server to be processed
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

   if($_FILES)
    {

     $fname = $_FILES['capsule_img']['name'];
     move_uploaded_file($_FILES['capsule_img']['tmp_name'], "images/".$fname);

     $_SESSION['capsule_img'] = $fname;

    }//FILES
  }//POST
?>
