<?php
if($_SERVER['REQUEST_METHOD'] == 'GET')
  {
    if($_GET['capsule_name']){
    echo("we have data to process");
    exit;
  }
}
?>

<!DOCTYPE html>
<head>
<title> Cursed GashaPon: Display </title>
<link rel='stylesheet' type='text/css' href='css/index.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/pullGasha.js"></script>
</head>
<body>

<section class='pullArea' id="userPull">



</section>

</body>
</html>
