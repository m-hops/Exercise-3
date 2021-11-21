<?php
 require('openDB.php');

 try{
   //very important to be in double quotes and specify the TYPE of data (text in this case, but many more options)
   //Piece ID: needs to be unique ("primary key"), and cannot be empty (not null)
$theQuery = "CREATE TABLE gashaCollection (pieceID INTEGER PRIMARY KEY NOT NULL, name TEXT, image TEXT, music TEXT)";
$file_db ->exec($theQuery); //line that creates the table;
echo ("Table gashaCollection created successfully<br>");
$file_db = null;
}
catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }
?>
