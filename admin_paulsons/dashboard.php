<?php
session_start();
include 'connection.php';
@$uname=$_SESSION['x'];
$query="select * from admin where username=?";
$stmt=$con->prepare($query);
$stmt->execute([$uname]);
$res=$stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>PAULSONS</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
   <link href="lib/advanced-datatable/css/jquery.dataTables.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashboard.php?page=profile" class="logo"><b>PAUL<span>SONS</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="dashboard.php?page=profile"><img src="pro_img/logo-red.png" width="150"></a></p>
          <h5 class="centered"></h5>
          <li class="mt">
            <a class="active" href="dashboard.php?page=profile">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-list"></i>
              <span>CATEGORIES</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?page=add_category">ADD CATEGORY</a></li>
              <li><a href="dashboard.php?page=view_category">MANAGE CATEGORIES</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-file-text-o"></i>
              <span>PRODUCT</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?page=add_product">ADD PRODUCT</a></li>
              <li><a href="dashboard.php?page=view_product">MANAGE PRODUCTS</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-id-card"></i>
              <span>CONTACT US BANNER</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?page=add_con_banner">ADD BANNER IMAGE</a></li>
              <li><a href="dashboard.php?page=view_con_banner">MANAGE IMAGE</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-archive"></i>
              <span>OUR STORY BANNER</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?page=add_story_banner">ADD BANNER IMAGE</a></li>
              <li><a href="dashboard.php?page=view_story_banner">MANAGE IMAGE</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-home"></i>
              <span>HOME BANNER</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?page=add_home_banner">ADD BANNER IMAGE</a></li>
              <li><a href="dashboard.php?page=view_home_banner">MANAGE IMAGES</a></li>
            </ul>
          </li>
      </div>
    </aside>
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>ADMIN PANEL</h3>
            </div>
            
            <?php
              @$page=$_REQUEST['page'];
              if($page=='add_category')
              {
                include 'add_category.php';
              }
              if($page=='view_category')
              {
                include 'view_categries.php';
              }
              if($page=='update_category')
              {
                include 'update_cat.php';
              }
              if($page=='add_product')
              {
                include 'add_product.php';
              }
              if($page=='view_product')
              {
                include 'view_products.php';
              }
               if($page=='update_product')
              {
                include 'update_product.php';
              }
              if($page=='profile')
              {
                include 'profile.php';
              }
              if($page=='add_con_banner')
              {
                include 'add_con_banner.php';
              }
              if($page=='view_con_banner')
              {
                include 'view_con_banner.php';
              }
              if($page=='update_con_banner')
              {
                include 'update_con_banner.php';
              }
              if($page=='add_home_banner')
              {
                include 'add_home_banner.php';
              }
              if($page=='view_home_banner')
              {
                include 'view_home_banner.php';
              }
              if($page=='update_home_banner')
              {
                include 'update_home_banner.php';
              }
              if($page=='add_story_banner')
              {
                include 'add_story_banner.php';
              }
              if($page=='view_story_banner')
              {
                include 'view_story_banner.php';
              }
              if($page=='update_story_banner')
              {
                include 'update_story_banner.php';
              }
            ?>
          
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
        </div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
<?php
  include 'footer.php';
?>
<!--
  <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    -->

  <!-- js placed at the end of the document so the pages load faster -->

  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="application/javascript">
    $(document).ready(function() {

      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }


 
  

  </script>

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" >

<script type="" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

   <script>
     $(document).ready(function() {
    $('#example').DataTable();
} );

   </script>
</body>


</html>