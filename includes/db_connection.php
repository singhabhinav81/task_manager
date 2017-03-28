<?php
// connect to database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abhinav21";
$dbname = "task";

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()){
     die("could not connect : " . mysqli_connect_errno() .
       "(" . mysqli_connect_error() . ")"
     );
  }
?>
