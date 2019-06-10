<?php
include 'connection.php';
$q1="select * from tbl_category";
$stmt1=$con->prepare($q1);
$stmt1->execute();
$row1=$stmt1->rowCount();

$q2="select * from tbl_product";
$stmt2=$con->prepare($q2);
$stmt2->execute();
$row2=$stmt2->rowCount();
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <section id="container">
   
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4><?php echo $row1?></h4>
                  <h6>CATEGORIES</h6>
                  <h4><?php echo $row2?></h4>
                  <h6>PRODUCTS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>PAULSONS</h3>
                <h6>Administrator</h6>
                <p>Paulsons is one of the leading retailers in Haryana in ethnic apparels for women segment.</p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="pro_img/logo-red.png" width="100"></p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
         
            <!-- /col-lg-12 -->
          </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
</body>

</html>
