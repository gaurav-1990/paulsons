<?php 
include_once ("admin_paulsons/connection.php");
include_once ("includes/header.php");
$stmt=$con->prepare("select * from tbl_contact_img");
$stmt->execute();
$res=$stmt->fetch();
$image=$res['img'];
?>
<div class="product-detal-slider">
    <div class="img-set">
        <img src="admin_paulsons/img/banner_image/<?=$image?>" alt="saree retailer shop faridabad" >
    </div>  
    <div class="opecy">
        <div class="container">

            <div class="heading-tag">
                <h3>Contact Us</h3>
                <a href="#">Home ></a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>


</div>

<div class="contact-part">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">

<div class="contact-address">
<!--                    <div class="contact-content">
                        <h2>contact-us</h2>
                        
                    </div>-->
                    <div class="contact-wp">
                        <div class="wpb_wrapper">
                            <h3>PAULSONS ROHTAK   <a href="https://goo.gl/maps/GxgbyMpGsyG2" target="blank" class="view-direction"><i class="fa fa-map-marker" aria-hidden="true"></i> View Direction</a></h3>
                            <ul>
                                <li><i class="fa fa-fax">&nbsp;</i><strong>Rohtak :</strong>  Shop No 2, Palika Bazar
                                    Rohtak 124001
                                  
                                </li>
                               


                            </ul>
                        </div>
                        <div class="wpb_wrapper">
                            <ul>
                                <li> <a href="tel:+ 01262-253570"><i class="fa fa-phone">&nbsp;</i>01262-253570 ,</a> <a href="tel: 01262-254015"><i class="fa fa-phone">&nbsp;</i>01262-254015</a></li>
                             
<!--                                <li><a href="https://api.whatsapp.com/send?phone=919999565434&amp;" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 999-956-5434</a></li>-->
                                 <li><a href="mailto:hello@paulsonsonline.com"><i class="fa fa-envelope-o">&nbsp;</i> hello@paulsonsonline.com</li>

                            </ul>
                        </div>
                        <div class="map">
                            <a href="https://goo.gl/maps/GxgbyMpGsyG2" target="blank" >
                      <img src="img/rohtak.jpg" alt="paulsons address rohtak" >
                            </a>
                         </div>
                    </div>
                </div>
                </div>		
            </div>
            <div class="col-md-6">
                <div class="contact-address">
<!--                    <div class="contact-content">
                        <h2>contact-us</h2>
                        
                    </div>-->
                    <div class="contact-wp">
                        <div class="wpb_wrapper">
                            <h3>PAULSONS FARIDABAD  <a href="https://goo.gl/maps/F9iJWAG6dq52" target="blank" class="view-direction"><i class="fa fa-map-marker" aria-hidden="true"></i> View Direction</a></h3>
                            <ul>
                               
                                <li><i class="fa fa-fax">&nbsp;</i><strong>Faridabad :</strong>  Crown Plaza Mall, Sector-15, 
                                    Mathura Road Faridabad 121007
                               
                                </li>


                            </ul>
                        </div>
                        <div class="wpb_wrapper">
                            <ul>
                                <li> <a href="tel:0129-4025565"><i class="fa fa-phone">&nbsp;</i>0129-4025565 ,</a> <a href="tel:0129-4025566"><i class="fa fa-phone">&nbsp;</i>0129-4025566</a> </li>
<!--                                <li><a href="https://api.whatsapp.com/send?phone=919999565434&amp;" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 999-956-5434</a></li>-->
                                <li><a href="mailto:hello@paulsonsonline.com"><i class="fa fa-envelope-o">&nbsp;</i> hello@paulsonsonline.com</li>

                            </ul>
                        </div>
                        <div class="map">
                            <a href="https://goo.gl/maps/F9iJWAG6dq52" target="blank" >
                      <img src="img/faridabad.jpg" alt="paulsons address faridabad" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once ("includes/footer.php"); ?>