<!DOCTYPE html>
<head>
<title> Cursed GashaPon </title>
<link rel='stylesheet' type='text/css' href='css/testStyle.css'>
</head>
<body>
<?php

try {
  //ACCESSES INITIAL DB//
  require('openDB.php');

  //VARIABLE USING SELECT FROM//
  $sql_select ='SELECT * FROM gashaCapsule';

  //USES ABOVE VARIABLE TO ACCESS $filed_db(WHICH WAS CREATED IN OpenDB.php) WITH PARAMETERS SETUP IN $sql_select//
  $result = $file_db->query($sql_select);

  //ERROR CHECK//
  if (!$result) die("Cannot execute.");

  echo "<h3> Query Results:::</h3>";
  echo "<div id='back'>";

  //WHILE LOOP TO FORMAT DATA INSIDE THE DB//
  while($row = $result->fetch(PDO::FETCH_ASSOC))
  {
     echo "<div class ='outer'>";
     echo "<div class ='content'>";
     // go through each column in this row
     // retrieve key entry pairs
     foreach ($row as $key=>$entry)
     {
       //if the column name is not 'image'
        if($key!="image")
        {
          // echo the key and entry
            echo "<p>".$key." :: ".$entry."</p>";
        }
     }

    // put image in last
      echo "</div>";
      // access by key
      $imagePath = $row["image"];
      echo "<img src = $imagePath \>";
      echo "</div>";
  }//end while
  echo"</div>";

}
catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }

?>
</body>
</html>
