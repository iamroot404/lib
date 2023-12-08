<?php

 session_start();
 if(!isset($_SESSION["librarian"]))
 {
  ?>
<script type="text/javascript">
  
  window.location="index.php";
</script>
  <?php
 }
include("includes/connection.php");
 $id=$_GET["id"];
 mysqli_query($con,"update student_registration set status='no' where id=$id");

?>

<script type="text/javascript">
	window.location="display_student_info.php"

</script>