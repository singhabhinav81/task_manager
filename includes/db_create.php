<?php
// connect to database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abhinav21";
$dbname = "widget_corp";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()){
     die("could not connect : " . mysqli_connect_errno() .
       "(" . mysqli_connect_error() . ")"
     );
  }
?>
<?php
// create database if not exist

$query = "CREATE DATABASE IF NOT EXISTS task";
 if(mysqli_query($connect,$query)) {
    echo "Database created successfully..\n ";
 }else{
   die("could not connect: " . mysqli_error($connect));
 }

// make sure that recently database is active one

mysqli_select_db($connect,"task");
  if(! $connect){
    die("could not connect: " . mysqli_error($connect));
  }

// perform query create table

$query = "CREATE TABLE db_task(
           task_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
           task_name VARCHAR(50) DEFAULT NULL,
           dateandtime DATETIME DEFAULT NULL,

           PRIMARY KEY(task_id)
         )
         ENGINE = MyISAM";

  mysqli_query($connect, $query);
   if(! $connect){
     die("could not connect: " . mysqli_error($connect));
   }else{
     echo "successfully..";
   }

  $q =   "CREATE TABLE task_done(
             task_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
             task_name VARCHAR(50) DEFAULT NULL,
             dateandtime DATETIME DEFAULT NULL,

             PRIMARY KEY(task_id)
           )
           ENGINE = MyISAM";

    mysqli_query($connect, $q);
     if(! $connect){
       die("could not connect: " . mysqli_error($connect));
     }else{
       echo "successfully..";
     }

  mysqli_close($connect);
?>
