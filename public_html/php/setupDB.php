<?php

  //ACCESSES OPENDB.PHP FIRST//
 require('openDB.php');

 //IF OPENDB.PHP IS SUCCESSFUL THEN THIS WILL BE PERFORMED//
 try{

   //CREATE TABLE CALLED gashaCapsule; pieceID PURPLE TEXT LEAVE AS IS; INFO SUCH AS name, message, geoLoc, ETC. ARE CREATED BY ME WHEREAS THE//
   //PURPLE TEXT IS THE TYPE (IN THIS CASE, TEXT)//
   $theQuery = "CREATE TABLE gashaCapsule (pieceID INTEGER PRIMARY KEY NOT NULL, name TEXT, message TEXT, creationDate TEXT, image TEXT)";

   //LINKS THE DB FILE TO $THEQUERY FOR SORTING//
   $file_db ->exec($theQuery);

   //ON SCREEN SUCCESS CHECK//
   echo ("GashaPon Setup Successfully");

   //SETS VARIABLE VALUE BACK TO NULL//
   $file_db = null;
 }

 //IF OPENDB.PHP ISN'T SUCCESSFUL, DISPLAY ERROR MESSAGE//
 catch(PDOException $e) {
   echo $e->getMessage();
 }
?>
