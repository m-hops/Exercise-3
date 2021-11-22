

<!DOCTYPE html>
<head>
<title> Cursed GashaPon: Display </title>
<link rel='stylesheet' type='text/css' href='css/index.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/pullGasha.js"></script>
</head>
<body>

  <video autoplay muted loop id="vidBKG" src="video/emergencyBroadcast.mp4"></video>

  <section class='instructionArea'>
  </section>

  <section class ='capsule_output'>
    <?php
      require('openDB.php');

      try{

        $sql_def = "SELECT * FROM gashaCollection ORDER BY RANDOM() LIMIT 1";
        //$sql_def = "SELECT * FROM gashaCollection";
        // the result set
        $result = $file_db->query($sql_def);

        if (!$result) die("Cannot execute query.");
        //var_dump($result);

        if($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $name = $row['name'];
          $music = $row['music'];
          $img = $row['image'];

          echo "<img id=\"pullImageDisplay\" src=\"images/" . $img. "\"/>";
          echo "<img id=\"pullCardBKG\" src=\"media/cardBase.png\"/>";
          echo "<img id=\"youPulledIMG\" src=\"media/youPulled.png\"/>";
          echo "<img id=\"pullMusicGenre\" src=\"media/pullMusicGenre.png\"/>";
          echo "<p id=\"pullNameDisplay\">" . $name . "</p>";
          echo "<p id=\"pullMusicDisplay\">" . $music . "</p>";
        }

        // $file_db = null;
      }
      catch(PDOException $e) {
         // Print PDOException message
         echo $e->getMessage();
       }
    ?>
  </section>

</section>

</body>
</html>
