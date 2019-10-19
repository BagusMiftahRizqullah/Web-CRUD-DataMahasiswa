<?php
//Ini untuk koneksi saja
$user_name = "root";
$dbpassword  = "";
$database  = "biodata"; //Tulis sesuai dengan nama database yang digunakan
$host_name = "localhost";


$conn = mysqli_connect($host_name, $user_name, $dbpassword);
   $find_db = mysqli_select_db($conn, $database);
   if ($find_db) {
       // echo "Database Found";
   }
   if(!$conn){
        die("Database Connection Failed" . mysqli_error($conn));
   }
  $select_db = mysqli_select_db($conn, $database);
  if (!$select_db){
       die("Database Selection Failed" . mysqli_error($conn));
  }

  ?>
