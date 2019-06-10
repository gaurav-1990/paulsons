<?php
include './admin_paulsons/connection.php';
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <?php
        error_reporting(E_ALL);
        define("BASEURL", "http://".$_SERVER['SERVER_NAME'] . ":8080/paulsons/");
        ?>
        <meta content="utf-8" http-equiv="encoding">
        <meta name="description" content="<?= isset($meta_desc) ? $meta_desc : "Paulson’s: Best Women clothing store in Faridabad, Rohtak , offers Contemporary Ethnic Women collections of Un-stitched Fabrics, Sarees, Readymades, Shawls and Stoles." ?>">
        <meta name="keywords" content="<?= isset($meta_key) ? $meta_key : "Paulsons, Women clothing store, Faridabad, Rohtak, Saree store Faridabad, Saree Sale, women clothing store rohtak, ladies suits, women clothing retailer shop, women clothing store, ladies clothing store" ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="1tXjQPS3ETHKVrMc2U88RBNb09SgcPHVhOoRSbZPx7s" />  
        <title><?= isset($title) ? $title : "Contemporary Ethnic Wear shop for Unstitched Fabrics, Sarees, Readymades, Shawls and Stoles for Women" ?></title>
        <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>css/style1.css">

        <link href="<?= BASEURL ?>css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= BASEURL ?>css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>

        <link href="<?= BASEURL ?>css/animation.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?= BASEURL ?>css/main.css">
        <link rel="stylesheet" href="<?= BASEURL ?>css/zoomer.css">
        <link rel="stylesheet" href="<?= BASEURL ?>css/stylerotation.css">

        <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>css/media1.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= BASEURL ?>css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
        <script type="text/javascript" src="<?= BASEURL ?>js/jquery.js"></script>
        <!-- loader  text-javascript effect -->


        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2233941310265331');
            fbq('track', 'PageView');
        </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2233941310265331&ev=PageView&noscript=1"
                   /></noscript>
    <!-- End Facebook Pixel Code -->



</head>
<body>


    <div class=" top-nav top-head">
        <div class="col-md-6 col-lg-7 col-xs-12 col-sm-6 left-sec">
            <ul>
                <li class="line"><a href="https://api.whatsapp.com/send?phone=919999565434&amp;text=" target="_blank" ><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 999-956-5434  </a></li>

                <li><a href="tel:+91 999-956-5434"><i class="fa fa-phone" aria-hidden="true"></i> +91 999-956-5434</a></li>
                <li class="tim"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Timing - 11:00 am to 5:00 pm (Mon to Fri) </a></li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-5 col-xs-6 col-sm-6 right-sec">
            <ul>
                <li><a href="#" data-toggle="modal" data-target="#myModal" title="Singup for Regular Updates.">Signup for Regular Updates</a></li>
                <li><a href="#"   title="Singup for Regular Updates.">|</a></li>
                <li><a href="<?= BASEURL ?>contact.php" data-toggle="tooltip" data-placement="bottom" title="Visit Our Exclusive Stores."> Visit Our Exclusive Stores</a></li>

            </ul>
        </div> 
    </div>
    <div class="header" id="myHeader">

        <!--<nav class="navbar navbar-expand-lg navbar-light menu d-block d-lg-none">
                                        <div class="container">
                                        <div class="logo">
                                          <a class="navbar-brand" href="#"><img src="img/logo.png"></a></div>
        
        
                                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                          </button>
                                                <div class="collapse navbar-collapse" id="navbarNav">
                                                        <ul class="nav product justify-content-center">
                                                                <li class="nav-item given-data">
                                                                        <a href="#">
                                                                                <img id="Searchform" src="img/icon/icon-search.png">
                                                                                <div class="dataform" style="display: none;">
                                                                                        <form name="search-form">
                                                                                                <input type="text" placeholder="Search" name="Search" value="">
                                                                                                <input type="submit" value="">
                                                                                        </form>
                                                                                </div>
                                                                        </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                        <a href="#">
                                                                                <img src="img/icon/icon-user.png">
                                                                        </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                        <a href="#">
                                                                                <img src="img/icon/icon-bag.png">
                                                                        </a>
                                                                        <h3>3</h3>
                                                                </li>
                                                        </ul>
                                                        <ul class="navbar-nav fermenu">
                                                                <li class="nav-item dropdown active">
                                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Home
                                                                    </a>
                                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="index-2.html">Home 1</a>
                                                                        <a class="dropdown-item" href="index2.html">Home 2</a>
                                                                        <a class="dropdown-item" href="index3.html">Home 3</a>
                                                                    </div>
                                                            </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">New</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Men</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Women</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Trending</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Special</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Blog</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Contact</a>
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </nav>-->

        <nav class="navbar  navbar-expand-lg navbar-light menu  d-lg-block">
            <div class="container">
                <div class=" menurow ">
                    <div class="logo">
                        <a class=" logi" href="<?= BASEURL ?>">&nbsp;</a>
                    </div>
                    <div id="mySidenav" class="sidenav" style="background-color: #000;">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <ul>
                            <li><a href="<?= BASEURL ?>">Home</a></li>

                            <li>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our Collection
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                    <?php
                                        $query="select * from tbl_category";
                                        $stmt=$con->prepare($query);
                                        $stmt->execute();
                                        while($res=$stmt->fetch())
                                        {
                                            $cid=$res['id'];
                                            $cat=$res['cat_name'];

                                    ?>
                                    <a class="dropdown-item" href="<?= BASEURL ?><?=$cat?>"><?=$cat?></a>

                                    <?php } ?>
                                    
                                    <!--							      	<a class="dropdown-item" href="fabrics.php">Fabrics</a>-->
                                </div>
                            </li>
                            <li><a href="<?= BASEURL ?>about-us.php">Our Story</a></li>
                            <li><a href="<?= BASEURL ?>contact.php">Our Exclusive Stores</a></li>                                                   
                            <li><a href="<?= BASEURL ?>contact.php">Contact Us</a></li>                                                    
                        </ul>  

                    </div>

                    <span class="menu-bargar" onclick="openNav()">&#9776; </span>
                    <!--                                            <div class="col-lg-12 col-md-12">
                                                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                                <span class="navbar-toggler-icon"></span>
                                                              </button>
                                                              
                                                                      <div class="collapse navbar-collapse" id="navbarNav">
                                                                        <ul class="navbar-nav fermenu">
                                                                          <li class="nav-item  active">
                                                                            <a href="./" >HOME</a>						   
                                                                        </li>
                                                                          <li class="nav-item">
                                                                            <a class="nav-link" href="#">EXCLUSIVE COLLECTION</a>
                                                                          </li>
                                                                          <li class="nav-item">
                                                                            <a class="nav-link" href="#">Our Story</a>
                                                                          </li>
                                                                          <li class="nav-item">
                                                                            <a class="nav-link" href="suit.php">New Arrivals</a>
                                                                          </li>
                                                                          <li class="nav-item">
                                                                            <a class="nav-link" href="#">Best Saller Product</a>
                                                                          </li>
                                                                          <li class="nav-item">
                                                                            <a class="nav-link" href="#">Our Store</a>
                                                                          </li>						      
                                                                          <li class="nav-item">
                                                                            <a class="nav-link" href="#">CONTACT</a>
                                                                          </li>
                                                                        </ul>
                                                                      </div>
                                                                    </div>-->

                </div>
            </div>
        </nav>	
    </div>
