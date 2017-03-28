<?php
function redirect_to($new_location){
   header("Location:" . $new_location);
   exit;
}

function show_task(){

  global $db;
  $query = "SELECT * FROM db_task ORDER BY task_id DESC";

  $fetch_result = mysqli_query($db, $query);
  $rows = mysqli_num_rows($fetch_result);
  if($rows > 0) {
    while ($task =  mysqli_fetch_assoc($fetch_result)){
      echo " <table class=\"table table-striped\">";
      echo "<thead>";
      echo "<tr>";
      echo "<th id= \"th_color\">";
      echo "To Do Task";
      echo "</th>";
      echo " <th id= \"th_color\">";
      echo "Time";
      echo "</th>";
      echo "<th id= \"th_color\">";
      echo "Status";
      echo "</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      echo "<tr>";
      echo "<td class = \"glyphicon glyphicon-star\">";
      echo $task['task_name'];
      echo "</td>";
      echo "<td>";
      echo $task['dateandtime'];
      echo "</td>";
      echo "<td>";
      echo "<a href = task_done.php?id=" .rawurlencode($task['task_id']).  " class=\"glyphicon glyphicon-ok\">";
      echo "Task Done";
      echo "</a>";
      echo "</td>";
      echo "</tr>";
      echo "</tbody>";
      echo "</table>";
  }
 }
}

function show_done_task(){

global $db;
$query = "SELECT * FROM task_done ORDER BY task_id DESC";

$fetch_result = mysqli_query($db, $query);
$rows = mysqli_num_rows($fetch_result);
if($rows > 0) {
 while ($task =  mysqli_fetch_assoc($fetch_result)){
    echo " <table class=\"table table-striped\">";
    echo "<thead>";
    echo "<tr>";
    echo "<th id= \"th_color\">";
    echo "Task Done";
    echo "</th>";
    echo " <th id= \"th_color\">";
    echo "On Time";
    echo "</th>";
    echo "<th id= \"th_color\">";
    echo "Status";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td id=\"color_change\"  class = \"glyphicon glyphicon-star\">";
    echo $task['task_name'];
    echo "</td>";
    echo "<td id=\"color_change\">";
    echo $task['dateandtime'];
    echo "</td>";
    echo "<td>";
    echo "<a href = delete_task.php?id=" .rawurlencode($task['task_id']).  " class=\"glyphicon glyphicon-trash\">";
    ?>
 <script type = "text/javascript">
   alert("Sure you have done your work");
 </script>
    <?php
    echo "Delete";
    echo "</a>";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
  }
 }
}
?>
