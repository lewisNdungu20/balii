<?php
  $host = 'localhost';
  $dbname = 'pocket';
  $username = "root";
  $password = "";

  try{
      $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
      $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      session_start();
     }
     catch(PDOException $e){
         echo "unable to connect" ,$e->getMessage();
     }
     
?>