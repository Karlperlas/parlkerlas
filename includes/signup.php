<?php
include 'conn.php';
   if(isset($_POST['submit'])) {
      $name = $_POST['username'];
      $pass = $_POST['pass'];
      $rpt =  $_POST['rpt'];

      $sql = "INSERT INTO accounts (name, pass) VALUES ('$name', '$pass');";
      if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
       } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       
       mysqli_close($conn);
   } else {
      echo 'Fill up the sign up form';
   }