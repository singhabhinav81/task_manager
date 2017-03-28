<?php include("../includes/session.php"); ?>
<?php include("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/function.php"); ?>

<form method="POST" action="delete_task.php">
  <br/>
  <br/>
</form>
<table>
  <?php
    show_done_task();
    ?>
</table>
</body>

</body>
<?php include("../includes/layout/footer.php"); ?>
