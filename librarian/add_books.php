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
 include("header.php");
 ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Books </h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

        <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
         <table class="table table-bordered">
             <tr>
                 <td><input type="text" class="form-control" placeholder="books name" name="booksname" required=""></td>
             </tr>
               <tr>
                 <td>
                    books image
                    <input type="file"  name="f1" required="">
                </td>
             </tr>
               <tr>
                 <td><input type="" class="form-control" placeholder="books author name" name="bauthorname" required=""></td>
             </tr>
              <tr>
                 <td><input type="" class="form-control" placeholder="books publication name" name="pname" required=""></td>
             </tr>
              <tr>
                 <td><input type="" class="form-control" placeholder="books purchase date" name="bpurchasedt" required=""></td>
             </tr>
              <tr>
                 <td><input type="" class="form-control" placeholder="books price" name="bprice" required=""></td>
             </tr>
              <tr>
                 <td><input type="" class="form-control" placeholder="books quantity" name="bqty" required=""></td>
             </tr>
              <tr>
                 <td><input type="" class="form-control" placeholder="available quantity " name="aqty" required=""></td>
             </tr>
             <tr>
                 <td>
                     <input type="submit" name="submit1" class="btn btn-default submit" value="insert books details" 
                     style="background-color: blue; color: white">
                 </td>
             </tr>
             
         </table>        
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

 <?php include("books_data.php");?>

 <?php include("footer.php");?>