

<!DOCTYPE html>
<head>
<title> Cursed GashaPon </title>
<link rel='stylesheet' type='text/css' href='css/index.css'>
</head>
<body>
  <?php
    require('openDB.php');


    try{

      $sql_def = "SELECT * FROM gashaCollection ORDER BY RANDOM() LIMIT 1";
      //$sql_def = "SELECT * FROM gashaCollection";
      // the result set
      $result = $file_db->query($sql_def);

      if (!$result) die("Cannot execute query.");
      //var_dump($result);

      while($row = $result->fetch(PDO::FETCH_ASSOC))
      {
         foreach ($row as $key=>$entry)
         {
           //if the column name is not 'image'
            if($key!="capsule_name")
            {
              // echo the key and entry
                echo "<p>".$key." :: ".$entry."</p>";
            }
         }
      }
      $file_db = null;
    }
    catch(PDOException $e) {
       // Print PDOException message
       echo $e->getMessage();
     }
  ?>
  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

  <section class='instructionArea'>

    <a href="displayGasha.php"><img src="media\openMe.png" id="openMe"></a>

  </section>

</body>
</html>
