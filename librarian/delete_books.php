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

if(isset($_GET["id"]))
{

$id=$_GET["id"];
mysqli_query($con,"delete from add_books where id=$id");

?>
<script type="text/javascript">
	
	window.location="display_books.php"
</script>
 <?php
}else
{
	?>
<script type="text/javascript">
	
	window.location="display_books.php"
</script>
<?php
}

