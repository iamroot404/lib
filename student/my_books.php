 <?php 
 session_start();
 if(!isset($_SESSION["username"]))
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
                                <h2>My Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<table class="table table-bordered">
     <th>
        Student Enrollment No
    </th> 
     <th>
        Book Name
    </th> 
     <th>
        Book Issued Date
    </th>

    <?php 
    $res=mysqli_query($con,"select * from issue_books where student_username='$_SESSION[username]' && books_return_date=''");
    while ($row=mysqli_fetch_array($res)) 
    {
       echo "<tr>";
       echo "<td>";

       echo $row["student_enrollment"];

       echo "</td>";

       echo "<td>";

       echo $row["books_name"];

       echo "</td>";

       echo "<td>";

       echo $row["books_issue_date"];

       echo "</td>";
       echo "</tr>";
    }

     ?>
                                   
</table>                                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

 <?php include("footer.php");?>