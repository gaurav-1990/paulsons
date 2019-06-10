<?php
include_once './vendor/autoload.php';

use Base64Url\Base64Url;

include 'admin_paulsons/connection.php';
//include_once ("includes/config.php");

$id = intval(str_replace("MYSECRET_", "", Base64Url::decode($_GET["product_id"])));
$prepare = $con->prepare("select * from tbl_product join tbl_category on tbl_product.cat_id=tbl_category.id where tbl_product.id=?");
$prepare->execute(array($id));

$result = $prepare->fetchAll()[0];


$title = $result["title"];
$meta_key = $result["meta_key"];
$meta_desc = $result["meta_desc"];
$cat_name=$result["cat_name"];

include_once ("includes/header.php");
?>

<div class="product-detal-part">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="product-img-part">

                    <div class="product-zoom">
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div class="tab-pane active" id="home">
                                <div class="pro-large-img">
                                    <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image1"] ?>" alt=""/>
                                     
                                    <a class="popup-link" href="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image1"] ?>">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="tab-pane" id="profile">
                                <div class="pro-large-img">
                                    <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image2"] ?>" alt="" />
                                    <a class="popup-link" href="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image2"] ?>">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>							
                            </div>
                            <?php
                            if ($result["image3"] != "") {
                                ?>
                                <div class="tab-pane" id="messages">

                                    <div class="pro-large-img">
                                        <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image3"] ?>" alt="" />
                                        <a class="popup-link" href="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image3"] ?>">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>							
                                </div>
                            <?php } ?>
                            <?php
                            if ($result["image4"] != "") {
                                ?>
                                <div class="tab-pane" id="settings">
                                    <div class="pro-large-img">
                                        <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image4"] ?>" alt="" />
                                        <a class="popup-link" href="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image4"] ?>">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    </div>							
                                </div>
                            <?php } ?>

                        </div>

                        <!-- Nav tabs -->
                        <div class="details-tab owl-carousel">
                            <div class="active">
                                <a href="#home" data-toggle="tab">
                                    <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image1"] ?>" alt="" />
                                </a>
                            </div>
                            <div>
                                <a href="#profile" data-toggle="tab">
                                    <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image2"] ?>" alt="" />
                                </a>
                            </div>
                            <?php
                            if ($result["image3"] != "") {
                                ?>
                                <div>
                                    <a href="#messages" data-toggle="tab">
                                        <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image3"] ?>" alt="" />
                                    </a>
                                </div>
                            <?php } ?>
                            <?php
                            if ($result["image4"] != "") {
                                ?>
                                <div>
                                    <a href="#settings" data-toggle="tab">
                                        <img src="<?= BASEURL; ?>admin_paulsons/img/<?= $cat_name?>/<?= $result["image4"] ?>" alt="" />
                                    </a>
                                </div>
                            <?php } ?>
                        </div>	

                    </div>


                </div>
            </div>


            <div class="col-md-7">

                <div class="product-discription-part">
                    <h2><?= $result["pro_name"] ?></h2>
                    <?= $result["pro_price"]; ?>
                    <div class="clear-both"></div>
                    <span><?= $result["available"] ?>  </span>
                    <p>
                        <?= $result["pro_details"]; ?>
                    </p>
                    <p>
                        <b> Note:   <?= $result["note"]; ?></b>
                    </p>


                    <div class="query-sec">
                        <div class="row">
                            <div class="col-md-6 col-xs-8">
                                <h3> BUY IT </h3>

                                <a href="tel:+91 999-956-5434" class="contact">
                                    <i class="fa fa-phone" aria-hidden="true"></i> 
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=919999565434" class="wts-app">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-3">
                                <div class="section-socail">
                                    <h3>Follow Us</h3>
                                    <div class="wrapper">

                                        <a href="https://www.facebook.com/paulsonsonline/" target="blank"><i class="fa fa-5x fa-facebook-square"></i></a> 
                                        <a href="https://www.instagram.com/paulsonsshop/" target="blank"><i class="fa fa-5x fa-instagram"></i></a>
                                    </div>
                                </div>	

                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>
</div>


<?php include_once ("includes/footer.php"); ?>