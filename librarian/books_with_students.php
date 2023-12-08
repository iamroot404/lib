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
                                <h2>Books With Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              
                              <?php
                                $i=0;
                                $res=mysqli_query($con,"select * from add_books where available_qty>-1");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                while ($row=mysqli_fetch_array($res)) 
                                {
                                    $i=$i+1;
                                    echo "<td>";

                                    ?> <img src="../librarian/<?php echo $row["books_image"]; ?>" height="100px" width="100px"> <?php
                                    echo "<br>";
                                    echo "<b>".$row["books_name"]."</b>";

                                    echo "<br>";
                                    echo "<b>"."Total Books:".$row["books_qty"]."</b>";
                                    echo "<br>";

                                    echo "<b>"."Available:".$row["available_qty"]."</b>";
                                    echo "<br>";
                                    ?> <a href="students_with_books.php?books_name=<?php echo $row["books_name"]; ?>" style="color: red;">Student with this Books</a> <?php
                                    echo "</td>";

                                    if ($i==2) 
                                    {
                                      echo "</tr>";
                                      echo "<tr>";
                                      $i=0;
                                    }
                                    
                                }

                                echo "</tr>";
                                echo "</table>";
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

 <?php include("footer.php");?>