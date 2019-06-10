<?php
include_once ("includes/header.php");
?>
<script>
    $(window).on('load', function () {
        $(".loader").hide();
    });


</script>

<div class="loader">
    <div class="col-md-3 col-sm-6 col-xs-6">
        <img class="logo-img" src="<?= BASEURL ?>img/logo2.png" alt="paulsons logo" width="100%" />
        <img class="gf-img" src="<?= BASEURL ?>img/833.svg" alt="paulsons" width="100%" />
    </div>
</div>
<?php
include 'admin_paulsons/connection.php';
//include_once ("includes/config.php");
include_once './vendor/autoload.php';

?>


<div class="slider-top">
    <div id="owl-example-slider" class="owl-carousel">

        

        <?php

        $stmt3=$con->prepare("select * from tbl_home_img");
        $stmt3->execute();
        while($res3=$stmt3->fetch())
        {
            $image=$res3['img'];
        ?>
            <div class="slider-top-img">
            <img src="admin_paulsons/img/banner_image/<?=$image?>" >
          <!--  <div  class="box1">

                <h2>PAULSONS</h2>
                <p>FINEST STORE FOR WOMEN ETHNIC WEAR<br>
                    SINCE 1984</p>
              
            </div> -->
            </div>
        <?php } ?>

<!-- New Slide Code-->



<!--
        <div class="slider-top-img">
            <img src="img/slider/sl2.jpg" >
            <div  class="box1">			            		
                <h2>handcrafted sarees</h2>
                <p>By Paulsons</p>

             
            </div>
        </div>
        <div class="slider-top-img">
            <img src="img/slider/sl3.jpg" >
            <div  class="box1">			            		
                <h2>Exclusive Readymades</h2>
                <p>By Paulsons</p>
            
            </div>
        </div>
        <div class="slider-top-img">
            <img src="img/slider/fab.jpg" >
            <div  class="box1">			            		
                <h2>Exclusive Readymades</h2>
                <p>By Paulsons</p>
              
            </div>
        </div> -->

    </div>

</div>


<!--
                        <div class=" suit-product">
                            <div class="container">
                                <div class="suit-product-in">
<h2 class="featured"><span class="title">Featured Products </span></h2>
                                <div class="row inner-block">
                                    <div class="col-md-6"> 
                                        <div class="left-frame">
                                        <div class="left-img zoom">
                                            <img src="img/new-arrival/new1.jpg" alt="" width="100%"/>
                                        </div>
                                    </div></div>
                                    <div class="col-md-6">
                                        <div class="text-block">
                                            <h3>Silk Suit</h3>
                                            <span>We have best quality and world best product</span>
                   <hr>
                                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            
                                           <div class="for-query">
                                               
                                               <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                               <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                           </div>
                                           
                                        </div>
                                    </div>					
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class=" suit-product">
                           
                                <div class="suit-product-in">
                                <div class="row inner-block">
                                    <div class="col-md-6"> 
                                       <div class="text-block">
                                            <h3>Silk Suit</h3>
                                            <span>We have best quality and world best product</span>
                   <hr>
                                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            
                                           <div class="for-query">
                                               
                                               <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                               <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                           </div>
                                           
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">   
                                        <div class="left-frame">
                                        <div class="left-img zoom">
                                             <img src="img/suit-trans2.png" alt=""/>
                                        </div>
                                    </div>
                                        
                                         
                                    </div>					
                                </div>
                            </div>
                       
                </div>

<div class=" suit-product">
                            <div class="container ">
                                <div class="suit-product-in">
                                <div class="row inner-block">
                                    <div class="col-md-6"> 
                                        <div class="left-frame">
                                        <div class="left-img zoom">
                                            <img src="img/suit-trans2.png" alt=""/>
                                        </div></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-block">
                                            <h3>Silk Suit</h3>
                                            <span>We have best quality and world best product</span>
                   <hr>
                                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            
                                           <div class="for-query">
                                               
                                               <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                               <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                           </div>
                                           
                                        </div>
                                    </div>					
                                </div>
                            </div>
                            </div>
                        </div>

<div class="container-fluid offer">
                <div class="container">
                        <h6>Testimonial</h6>			
                        <div class="owl-carousel">
                            <div class="testi">
                                <div class="user">
                                    <img src="img/user-2.png" alt=""/>
                                </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>					
                                    <h5><span>Kaljal Aggrawal</span></h5>
                                </div>
                                 <div class="testi">
                                     <div class="user">
                                    <img src="img/user-2.png" alt=""/>
                                </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>					
                                    <h5><span>Smt. Santosh Devi</span></h5>
                                </div>
                                 <div class="testi">
                                     <div class="user">
                                    <img src="img/user.png" alt=""/>
                                </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>					
                                    <h5><span>Anil Sharma</span></h5>
                                </div>
                                 <div class="testi">
                                     <div class="user">
                                    <img src="img/user.png" alt=""/>
                                </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>					
                                    <h5><span>Mr. Bansal</span></h5>
                                </div>
                                 <div class="testi">
                                     <div class="user">
                                    <img src="img/user-2.png" alt=""/>
                                </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>					
                                    <h5><span>Jyoti Singh</span></h5>
                                </div>
                        </div>
                </div>
        </div>-->

<div class="cloth-block">
    <div class="container">
        <div class="head-title">
            <h2>
                Readymades
            </h2>
        </div>

        <div class="cloth-block-in">

            <div id="owl-example" class="owl-carousel">
 
                <?php

                use Base64Url\Base64Url;

$prepare = $con->prepare("select * from tbl_product where cat_id=? order by is_new desc,id desc");
                $prepare->execute(array(1));
                $result = $prepare->fetchAll();

                $stmt=$con->prepare("select * from tbl_category where id=1");
                $stmt->execute();
                $res=$stmt->fetch();
                $cat=$res['cat_name'];

                foreach ($result as $ready) {
                    ?>

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
                            <img src="<?= BASEURL ?>admin_paulsons/img/<?=$cat?>/<?=$ready["main_img"] ?>" alt=""/>
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
                            <a href="<?= BASEURL ?>readymades/<?= cleanurl($ready["pro_name"]) ?>/<?= Base64Url::encode("MYSECRET_" . $ready["id"]) ?>" class="know-more">View Details 
    <!--                                                   <i class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <div class="categoty-btn">
                <button onclick="window.location.href = '<?= BASEURL ?>readymades'">View Full Collection</button>
            </div>
        </div>



        <div class="head-title">
            <h2>
                Sarees 
            </h2>
        </div>

        <div class="cloth-block-in">
            <div id="owl-example2" class="owl-carousel">


                <?php
                $prepare = $con->prepare("select * from tbl_product where cat_id=? order by is_new desc,id desc");
                $prepare->execute(array(2));
                $result = $prepare->fetchAll();

                $stmt1=$con->prepare("select * from tbl_category where id=2");
                $stmt1->execute();
                $res1=$stmt1->fetch();
                $cat1=$res1['cat_name'];
                
                foreach ($result as $ready) {
                    ?>
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
                            <img src="<?= BASEURL ?>admin_paulsons/img/<?=$cat1?>/<?=$ready["main_img"] ?>" alt=""/>
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
                            <?php } else {
                                ?>
                                <div class="single-price">
                                    <h3>MRP <i class="fa fa-inr" aria-hidden="true"></i> <small><?= $ready["f_offer_price"] ?></small></h3>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="for-query">

                            <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                            <a href="<?= BASEURL ?>sarees/<?= cleanurl($ready["pro_name"]) ?>/<?= Base64Url::encode("MYSECRET_" . $ready["id"]) ?>" class="know-more">View Details 
    <!--                                                   <i class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
                            </a>
                        </div>
                    </div>

                <?php } ?>


            </div>

            <div class="categoty-btn">
                <button onclick="window.location.href = '<?= BASEURL ?>sarees'">View Full Collection</button>
            </div>
        </div>

        <!-- <div class="head-title">
                    <h2>
                        Fabrics
                    </h2>
                </div>
        
        <div class="cloth-block-in">
                    <div id="owl-example3" class="owl-carousel">
               
                   
                        
                        <div class="colections">
                            <div class="img-set">
                                <img src="img/sarees/s1.jpg" alt=""/>
                            </div>
                            <h2>Sarees</h2>
                            <div class="for-query">
                                                       
                                                       <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                                       <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                   </div>
                        </div>
                    
                   
                        
                        <div class="colections">
                            <div class="img-set">
                               <img src="img/sarees/s2.jpg" alt=""/>
                            </div>
                           <h2>Sarees</h2>
                            <div class="for-query">
                                                       
                                                       <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                                       <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                   </div>
                        </div>
                   
                   
                        
                        <div class="colections">
                            <div class="img-set">
                              <img src="img/sarees/s3.jpg" alt=""/>
                            </div>
                            <h2>Sarees</h2>
                            <div class="for-query">
                                                       
                                                       <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                                       <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                   </div>
                        </div>
                  
                  
                        
                        <div class="colections">
                            <div class="img-set">
                               <img src="img/sarees/s4.jpg" alt=""/>
                            </div>
                            <h2>Sarees</h2>
                            <div class="for-query">
                                                       
                                                       <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                                       <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                   </div>
                        </div>
                    
                    
                        
                        <div class="colections">
                            <div class="img-set">
                             <img src="img/sarees/s5.jpg" alt=""/>
                            </div>
                            <h2>Sarees</h2>
                            <div class="for-query">
                                                       
                                                       <a href="#" class="en-from"><i class="fa fa-envelope-open"></i>Enquire Us </a>
                                                       <a href="#" class="know-more">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                   </div>
                        </div>
                      
                     
                   
          
                </div>
             
                    <div class="categoty-btn">
                        <button onclick="window.location.href='fabrics.php'">View More Collection</button>
                    </div>
                </div>-->

    </div>

</div>



<?php include_once ("includes/footer.php"); ?>