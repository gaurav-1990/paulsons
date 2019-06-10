<div class="container-fluid p-0 foot-news">
    <div class="container">
        <div class="foot-news-in">

            <div class="row">
                <form action="newsletter.php" method="POST">
                    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-9">
                        <h3>Signup for Regular Updates</h3>
                         <input type="text" name="name" maxlength="10" minlength="10" placeholder="Name">
                        <input type="text" name="contactnumber" maxlength="10" minlength="10" placeholder="Phone No">
                        <input type="email" name="email" required="" placeholder="Email Address">
                        <span>

                        </span>
                        <div class="subcrip">
                        <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> SUBSCRIBE</button>
                        </div>
                    </div>
                </form>
                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-3">
                    <div class="follow-us">

                        <h2>Follow Us On</h2>
                        <div class="section-socail">

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
<div class="container-fluid footer">
    <div class="container">

        <div class="row main-content">
            <div class="Shop col-sm-6 col-md-4 col-lg-3  col-xs-12">
                <img src="<?= BASEURL ?>img/logo2.png" alt="paulsons logo">
                <p>Paulsons is one of the leading retailers in Haryana in ethnic apparels for women segment. We
                    strive towards providing our patrons with the most contemporary &amp; wide collection of Un-stitched
                    Fabrics, Sarees, Readymades, Shawls &amp; Stoles.</p>
            </div>

            <div class="Shop col-sm-6 col-md-3 col-lg-3 col-xs-12">
                <h2>Quick Links</h2>
                <ul class="">
                    <li><a href="<?= BASEURL ?>">Home</a></li>	
                    <li><a href="<?= BASEURL ?>about-us.php">About us</a></li>
                    <li><a href="<?= BASEURL ?>readymades">Readymades</a></li>
                    <li><a href="<?= BASEURL ?>sarees">Sarees</a></li>                                                   
                    <li><a href="#">Fabrics</a></li>                                                   
                    <li><a href="<?= BASEURL ?>contact.php">Contact Us</a></li>   
                </ul>

            </div>
            <div class="col-lg-6 col-md-5 col-xs-12 col-sm-12">
                <div class="store col-lg-6 col-xs-12 col-sm-6 my-auto">
                    <h2>Exclusive Stores</h2>
                    <ul>
                        <li><a href="<?= BASEURL ?>contact.php" class="foot-a">
                            <h3>Rohtak</h3>
                            <p>Shop No 2, Palika Bazar<br> Rohtak 124001</p>
                            </a>
                            </li>
                    </ul>

                    <ul>                                    
                        <li><a href="<?= BASEURL ?>contact.php" class="foot-a">
                            <h3>Faridabad</h3>
                            <p>Crown Plaza Mall, Sector-15, <br>Mathura Road
                                Faridabad 121007</p>
                                </a>
                                </li>
                    </ul>
                </div>
                <div class="store col-lg-6 col-xs-12 col-sm-6 my-auto">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="tel:+91 999-956-5434"><i class="fa fa-phone" aria-hidden="true"></i> +91 999-956-5434</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=919999565434&amp;" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 999-956-5434</a></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">hello@paulsonsonline.com</a></li>
                         <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Timing- 11:00 am to 5:00 pm (Mon to Fri)</a></li>
                    </ul>

                    <!--<div class="section-socail">
                       
                                                    <div class="wrapper">
                      <i class="fa fa-5x fa-facebook-square"></i>
                      <i class="fa fa-5x fa-instagram"></i>
                      
                    </div>
                                            </div>-->

                </div>

            </div>

        </div>
        <div class="last-footer">
            <h6>Copyright © 2019 Paulsons. All Rights Reserved.</h6>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade sign-up-form" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form action="<?= BASEURL ?>sendquery.php" method="POST">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Never miss any important update from Paulsons</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" required="" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required="" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" required="" maxlength="10" minlength="10" name="contact" class="form-control" placeholder="Phone No">
                    </div>
                   <!-- <div class="form-group">

                        <textarea rows="4" name="message"   placeholder="Message"></textarea>
                    </div> -->
                    <div class="form-group form-check">
                        <input type="checkbox" required="" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I wish to receive promotional, transactional or other information from Paulsons through Messgages, mails, calls or any other mode of communication.</label>
                    </div>
                    <div class="form-group submit">
                        <button    type="submit">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>






<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->


<!--leftside navigation-->	
<script>
    function openNav() {
        document.getElementById("mySidenav").style.left = "0px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.left = "-250px";
    }
</script>
<!--leftside navigation end-->


<!--header position-->
<script>
    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<!--nav bar position end-->

<script type="text/javascript" src="<?= BASEURL ?>js/ajaxxoffline.js"></script>
<!-- Bootstrap Core JavaScript-->
<script type="text/javascript" src="<?= BASEURL ?>js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JavaScript-->
<!--<script type="text/javascript" src="<?= BASEURL ?>js/bootstrap.min.js"></script>-->
<!-- Owl Carousel min Plugin JavaScript-->
<script src="<?= BASEURL ?>js/owl.carousel.min.js" type="text/javascript"></script>

<!-- sliphover Plugin JavaScript-->
<script src="<?= BASEURL ?>js/jquery.sliphover.min.js"></script>
<!-- Slider tab Plugin JavaScript-->
<script type="text/javascript" src="<?= BASEURL ?>js/tab.js"></script>
<!-- Slider tab1 Plugin JavaScript-->


<script src="<?= BASEURL ?>js/zoom-image.js"></script>
<script src="<?= BASEURL ?>js/main.js"></script>

<!-- Sliphover text-JavaScript-->



<!-- Owl Carousel min1 text-avaScript-->

<script type="text/javascript">
    var mouse_is_inside = false;

    $(document).ready(function ()
    {
        $('#mySidenav,.menu-bargar').hover(function () {
            mouse_is_inside = true;
        }, function () {
            mouse_is_inside = false;
        });

        $("body").mouseup(function () {
            if (!mouse_is_inside)
                closeNav();
        });
    });
//    var fbButton = document.getElementById('fb-share-button');
//    var url = window.location.href;
//
//    fbButton.addEventListener('click', function () {
//        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
//                'facebook-share-dialog',
//                'width=800,height=600'
//                );
//        return false;
//    });

</script>	
<script type="text/javascript">

    $('#owl-example-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        pagination: true,
        autoplay: true,
        smartSpeed: 200,
        items: 1,
        singleItem: true,

        animateOut: 'fadeOut',

    })
    $('#owl-example').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        dots: false,
        slideSpeed: 300,
        items: 4,

        responsiveClass: true,
          responsive: {
            0: {
                items: 1,

            },
            667: {
                items: 3,

            },
            1024: {
                items: 4,

            }
        }


    })
    $('#owl-example2').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        slideSpeed: 300,
        items: 4,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,

            },
            667: {
                items: 3,

            },
            1024: {
                items: 4,

            }
        }
    })

    $('#owl-example3').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        slideSpeed: 300,
        items: 4,
        dots: false,
        responsiveClass: true,
      responsive: {
            0: {
                items: 1,

            },
            667: {
                items: 3,

            },
            1024: {
                items: 4,

            }
        }
    })
    $('.details-tab').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        slideSpeed: 300,
        items: 4,
        dots: false,
        responsiveClass: true,
      responsive: {
            0: {
                items: 1,

            },
            667: {
                items: 3,

            },
            1024: {
                items: 3,

            }
        }
    })

</script>

    <script type="text/javascript">
                        
                        $('.image-link,.popup-link').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
                    </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c5ab6f26cb1ff3c14cb5265/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
    $(document).ready(function () {
        //-- Click on detail
        $("ul.menu-items > li").on("click", function () {
            $("ul.menu-items > li").removeClass("active");
            $(this).addClass("active");
        })

        $(".attr,.attr2").on("click", function () {
            var clase = $(this).attr("class");

            $("." + clase).removeClass("active");
            $(this).addClass("active");
        })

        //-- Click on QUANTITY
        $(".btn-minus").on("click", function () {
            var now = $(".section > div > input").val();
            if ($.isNumeric(now)) {
                if (parseInt(now) - 1 > 0) {
                    now--;
                }
                $(".section > div > input").val(now);
            } else {
                $(".section > div > input").val("1");
            }
        })
        $(".btn-plus").on("click", function () {
            var now = $(".section > div > input").val();
            if ($.isNumeric(now)) {
                $(".section > div > input").val(parseInt(now) + 1);
            } else {
                $(".section > div > input").val("1");
            }
        })
    })
</script>



<script type="text/javascript">
    $(function () {

        $('#container1').sliphover({
            backgroundColor: 'rgba(228,33,107,0.8)'
        });
    })
</script>
<!-- Owl Carousel min text-avaScript-->

<!-- Owl Carousel min1 text-avaScript-->

<!-- search text-avaScript-->
<script>
    $(document).ready(function () {
        $("#Searchform").click(function () {
            $(".dataform").toggle();
        });
    });
</script>
<!-- menu dropdown min text-avaScript-->
</script>
<script type="text/javascript">
    $('.dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });

    $('.dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
    });
</script>

<script type="text/javascript">
    $('.details-tab a').click(function () {
        var id = $(this).attr("href");
        $('.tab-content ').find('.tab-pane').removeClass("active");
        $('.tab-content ').find('div' + id + '').addClass("active");
    });
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBTXLS4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134177587-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134177587-1');
</script>

</body>

</html>
