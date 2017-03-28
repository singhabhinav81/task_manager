<?php include("../includes/session.php"); ?>
<?php include("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>

<?php
  $err = array();

 if (isset($_POST['submit'])){

  $add_task = isset($_POST['addtask']) ?
  trim($_POST['addtask']) : '';
  if (empty($add_task)) {
    $_SESSION['errors'] = array("Please enter your task");
    redirect_to("index.php");
  }

  $date = isset($_POST['dateandtime']) ?
  trim($_POST['dateandtime']) : '';
  if (empty($date)){
   $_SESSION['errors'] = array("please select date and time");
   redirect_to("index.php");
  }
   add_task();
 }

 function add_task(){

    global $db;
    $add_task = $_POST['addtask'];
    $date = $_POST['dateandtime'];

     $query = "INSERT INTO db_task( ";
     $query .= "task_name, dateandtime ";
     $query .= ")VALUES( ";
     $query .= " '{$add_task}', '{$date}' ";
     $query .= ")";

    $result = mysqli_query($db, $query);

     if($result){
      redirect_to("index.php");
     }
  }
  mysqli_close($db);
?>
