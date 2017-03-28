<?php include("../includes/session.php"); ?>
<?php include("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>

<?php
  if($_GET[id]){

 $query = "DELETE FROM task_done WHERE task_id = '$_GET[id]'";
   $result = mysqli_query($db, $query);

  if($result){
    redirect_to("done_task.php");
  }
}
?>
