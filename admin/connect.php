<?php
   $dsn = 'mysql:host=localhost;dbname=shop';
   $user = 'root';
   $password = 'root';
   $option = array(
     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
   );

   try{
     $con = new PDO($dsn, $user, $password, $option);
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo 'You are Connected';
   }
   catch(PDOException $e){
     echo 'Failed To Connect' . $e->getMessage();
   }
 ?>
