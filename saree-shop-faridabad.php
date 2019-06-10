<?php
$title = "Banarasi Silk Saree Retailers, Women Saree Shop in Faridabad";
$meta_key = "Women Saree Retailer Shop, Women Saree, Silk Saree, Banarasi Saree, Women Clothing Retailer Shop in Faridabad, Women Saree Shop";
$meta_desc = "Paulsons Online is the Best Women Saree Shop in Faridabad. Visit Women Clothing Retailer Shop in Haryana, Women Saree, Banarasi Saree, Silk Sarees at best price.";
include_once ("includes/header.php");
include 'admin_paulsons/connection.php';
//include_once ("includes/config.php");
include_once './vendor/autoload.php';
?>
<div class="product-detal-slider">
    <div class="img-set">
        <img src="<?= BASEURL ?>img/slider/pro-saree.jpg" alt="" >
    </div>  
    <div class="opecy">
        <div class="container">

            <div class="heading-tag">
                <h3>Sarees</h3>
                <a href="#">Home ></a>
                <a href="#">Sarees</a>
            </div>
        </div>
    </div>


</div>

<div class="product-detal-part">
    <div class="container">
        <div class="category-block">

            <div class="row">
                <?php

                use Base64Url\Base64Url;

$prepare = $con->prepare("select * from tbl_product where cat_id=? order by is_new desc");
                $prepare->execute(array(2));
                $result = $prepare->fetchAll();

                $stmt=$con->prepare("select * from tbl_category where id=2");
                $stmt->execute();
                $res=$stmt->fetch();
                $cat=$res['cat_name'];

                foreach ($result as $ready) {
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="colections">
                              <?php
                        if ($ready["is_new"]) {
                            ?>
                            <div class="new-tag">New</div>
                        <?php } ?>
                        <?php
                        if ($ready["f_offer"]) {
                            ?>
                            <div class="dis-tag"><?= $ready["f_offer"] ?></div>
                        <?php } ?>
                            <div class="img-set">
                                <img src="<?= BASEURL ?>admin_paulsons/img/<?=$cat?>/<?= $ready["main_img"] ?>" alt=""/>
                            </div>
                            <h2><?= $ready["pro_name"] ?></h2>
                              <div class="parice-part">
                            <?php
                            if ($ready["single_price"] == 0) {
                                ?>
                                <span>MRP
                                    <small><i class="fa fa-inr" aria-hidden="true"></i> <?= $ready["f_act_price"] ?></small>
                                    <mrp><i class="fa fa-inr" aria-hidden="true"></i><?= $ready["f_offer_price"] ?></mrp>

                                </span>
                            <?php } else { ?>
                                <div class="single-price">
                                    <h3>MRP <i class="fa fa-inr" aria-hidden="true"></i> <small><?= $ready["f_offer_price"] ?></small></h3>
                                </div>
                            <?php } ?>
                        </div>
                            <div class="for-query">
                                <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                <a href="<?= BASEURL ?>saree/<?= cleanurl($ready["pro_name"]) ?>/<?= Base64Url::encode("MYSECRET_" . $ready["id"]) ?>" class="know-more">View Details </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>





            </div>
        </div>

    </div>
</div>

<div class="container">


</div>
<?php include_once ("includes/footer.php"); ?>