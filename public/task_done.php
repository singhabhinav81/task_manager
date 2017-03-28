<?php include("../includes/session.php"); ?>
<?php include("../includes/db_connection.php"); ?>
<?php require_once("../includes/function.php"); ?>

<script type = "text/javascript">
  alert("sure you have done your task");
</script>

<?php
  if($_GET[id]){

    $query = "SELECT * FROM db_task WHERE task_id = '$_GET[id]'";
    $fetch_result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($fetch_result);
    if($rows > 0) {
     while ($task =  mysqli_fetch_assoc($fetch_result)){

      $add_task = $task['task_name'];
      $date = $task['dateandtime'];

      $q = "INSERT INTO task_done( ";
      $q .= "task_name, dateandtime ";
      $q .= ")VALUES( ";
      $q .= " '{$add_task}', '{$date}' ";
      $q .= ")";

     $result = mysqli_query($db, $q);

      if($result){
        $que = "DELETE FROM db_task WHERE task_id = '$_GET[id]'";
         $result = mysqli_query($db, $que);
          if($result){
       redirect_to("done_task.php");
      }
    }
  }
  }
 }
mysqli_close($db);
?>
