<?php


 if(!isset($_SESSION["librarian"]))
 {
  ?>
<script type="text/javascript">
  
  window.location="index.php";
</script>
  <?php
 }
    if(isset($_POST["submit1"]))
    {
    $booksname = htmlentities(mysqli_real_escape_string($con,$_POST['booksname']));
    $bauthorname = htmlentities(mysqli_real_escape_string($con,$_POST['bauthorname']));
    $pname = htmlentities(mysqli_real_escape_string($con,$_POST['pname']));
    $bpurchasedt = htmlentities(mysqli_real_escape_string($con,$_POST['bpurchasedt']));
    $bprice = htmlentities(mysqli_real_escape_string($con,$_POST['bprice']));
    $bqty = htmlentities(mysqli_real_escape_string($con,$_POST['bqty']));
    $aqty = htmlentities(mysqli_real_escape_string($con,$_POST['aqty']));
   
    
        $tm=md5(time());
        $fnm=$_FILES["f1"]["name"];
        $dst="./books_image/".$tm.$fnm;
        $dst1="./books_image/".$tm.$fnm;

        move_uploaded_file($_FILES["f1"]["tmp_name"], $dst);

        $insert = "insert into add_books(books_name,books_image,books_author_name,books_publication_name,books_purchase_date,books_price,books_qty,available_qty,librarian_username) values('$booksname',
            '$dst1','$bauthorname','$pname','$bpurchasedt','$bprice','$bqty','$aqty','$_SESSION[librarian]')";

    $query = mysqli_query($con, $insert);

if ($query) {
        
        echo "<script>alert('Books added succefully!')</script>";
        
    }
    else{
        echo "<script>alert('failed please try again!')</script>";
        
    }

}
 ?>       