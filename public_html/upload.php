<?php

  session_start();
  // new filename
  $filename = 'pic_'.date('YmdHis') . '.jpeg';
  $_SESSION['capsule_img'] = $filename;

  $url = '';
  move_uploaded_file($_FILES['webcam']['tmp_name'],'images/'.$filename);


?>
