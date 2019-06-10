<?php
$title = "Women readymade suits retailer shop in Faridabad & Rohtak";
$meta_key = "Women readymade suits, Ladies suits, Clothing Shop, Women Wearing Retailer, women wearing shop, women clothing shop in Haryana, ladies suits, women suits";
$meta_desc = "Paulsons online is the best women readymades suits retailer shop in Faridabad, Rohtak. Buy widest collections of ladies Readymades suits, women clothing.";
include_once ("includes/header.php");
include 'admin_paulsons/connection.php';
//include_once ("includes/config.php");
include_once './vendor/autoload.php';
 
$id=ucfirst($_GET['id']);
 
$sql1="select * from tbl_category where cat_name=?";
$var1=$con->prepare($sql1);
$var1->execute([$id]);
 $res_ch=$var1->fetchAll();


if(count( $res_ch)>0)
{
$res2= $res_ch[0];
$img=$res2['cat_banner'];
$cat_id=$res2['id'];
}else
{
    echo "<script>window.location.href='404.php'</script>";
}
?>

<div class="product-detal-slider">
    <div class="img-set">
        <img src="<?= BASEURL ?>admin_paulsons/img/banner_image/<?=$img?>" alt="readymade suits" >
    </div>  
    <div class="opecy">
        <div class="container">

            <div class="heading-tag">
                
                <?php
                    $sql="select * from tbl_category where cat_name=?";
                    $var=$con->prepare($sql);
                    $var->execute([$id]);
                    while($res1=$var->fetch())
                    {
                      $catname=$res1['cat_name'];
                    ?>
                      <h3><?=$catname?></h3>
                      <a href="#">Home ></a>
                      <a href='#'><?=$catname?></a>
                   <?php } ?>
                
                
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

$prepare = $con->prepare("select * from tbl_product where cat_id=? order by is_new desc,id desc");
                $prepare->execute([$cat_id]);
                $result = $prepare->fetchAll();

                $stmt=$con->prepare("select * from tbl_category where cat_name=?");
                $stmt->execute([$id]);
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
                                <img src="admin_paulsons/img/<?=$cat?>/<?= $ready["main_img"] ?>" alt=""/>
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
                                <a href="<?= BASEURL ?><?=$cat?>/<?= cleanurl($ready["pro_name"]) ?>/<?= Base64Url::encode("MYSECRET_" . $ready["id"]) ?>" class="know-more">View Details </a>
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