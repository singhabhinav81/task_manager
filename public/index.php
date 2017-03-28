<?php include("../includes/session.php"); ?>
<?php include("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/function.php"); ?>

<form class="form" method="POST" action="addtask.php">
  <br/>
  <br/>
  <br/>
 <div  class="col-xs-4">
  <label for="usr">Task:</label>
  <input type="text" class="form-control" id="usr" name="addtask" placeholder="add task"
                     <?php if (isset($_SESSION['errors'])): ?>
                      <div class="form-errors">
                      <?php foreach($_SESSION['errors'] as $err): ?>
                      <p><?php echo $err; ?></p>
                      <?php endforeach; ?>
                      </div>
                     <?php endif; ?>
</div>
<div class="container">
  <div class="col-xs-3">
  <label for="usr">Time:</label>
  <br/>
  <input type="text" id="datetimepicker" class="form-control" name="dateandtime" placeholder="date and time">
  <script>
  $("#datetimepicker").datetimepicker({format:"Y-m-d h:i:s"});
  </script>
</div>
<br/>
<input type="submit" class="btn btn-success" name="submit" value="ADD">
</form>

<form method="POST" action="delete_task.php">
  <br/>
  <br/>
</form>

<table>
<?php
  show_task();
?>
</table>
</body>
<?php include("../includes/layout/footer.php"); ?>
