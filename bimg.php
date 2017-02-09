<?php  ?>
<?php include("header.php") ?>
<body style="background: #f9f8f2">
    <!--**** Preloader ****-->
    <div id="preloader">
        <div id="status">
            &nbsp;
        </div>
    </div>
    <!--**** End Preloader ****-->
    <!--**** Main Menu ****-->
    <div id="main-menu">
        <?php include("top_nav.php") ?>
    </div>
    <!--**** End Main Menu ****-->
    <!--**** Section Title ****-->
        
    <!--**** End Section Title ****-->
    <!-- Portfolio Item-->
    <section id="portfolio-item">
        
        <!-- Portfolio Item Content -->
        <article class="container portfolio-half-slider-wrap">
            <div class="row">
                <hr />
            </div>
            <div class="vs-40"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-7 col-lg-6">
                    <div class="owl-slider-wrap portfolio-project-slider-wrap">
                        <?php require("imtest.php") ?>
                        <div id = "theBigImageHolder" style="padding-top: 10px; margin-bottom: 10px" class="img-responsive" alt ="Responsive image ">
                        <?php 
                        echo '<img src="images/'.$my_images_arr[3].'" id ="bigImage">';
                        ?>
                    </div><br>
                    <div class="img-responsive" style="background: #ffffff; width: 590px; height: 172px; border-radius:10px ;padding-left: 20px" alt ="Responsive image "><br><br>
                        <h3><span>ขายบ้านสวยๆ</span></h3>
                        <div class="vs-20"></div><p>พื้นที่ขนาด 1 ไร่ ราคา 10 บาท </p>

                    </div>
                    </div>
                </div>
                <div class="col-xs-8 col-md-5"> 

                    <div class="img-responsive" alt ="Responsive image ">
                        
                        <p align="left"><div style="padding-left: 7px;padding-top: 32px" id = "thumbnailsHolder" //style="padding-left: 7px;></p>
                    <?php 
                        echo $img_string;
                     ?>
                </div>

                    </div>
                    <div class="" ><div class="portfolio-project-details-wrap">
                        <!--<div class="vs-20"></div>
                        
                        <div class="vs-10"></div>-->
                        <div >
                        <ul style="background: #ffffff;padding-left: 20px;width: 470px ;border-radius: 10px" class="img-responsive" alt ="Responsive image ">
                            
                            <li><strong><h3><i class="fa fa-tags" style="padding-top: 20px"></i> </strong> ราคา<h3></li>
                            <li><strong><a href="tel:021005007"><i class ="fa fa-volume-control-phone"></i> </strong> Tel</a></li>
                            
                            <li><strong><i class="fa fa-user"></i> </strong> ชื่อผู้ขาย</li>
                            <li><strong><i class="fa fa-calendar"></i>  </strong> วันลงขาย</li>
                            <li><strong><i class="fa fa-map-marker"></i>  </strong> ตำแหน่ง</li>
                        </ul>
                    </div>
                </div></div>
            </div>
            <div class="vs-40"></div>
            
            </div>
        </article>    <!-- End Portfolio Item Content -->
    </section>  <!-- End Portfolio Item-->
    <!--**** Footer ****-->
    <footer>
        <?php include("footer.php") ?>
    </footer>
    <!--**** End Footer ****-->
    <!--**** Go Back Top****-->
    <section id="go-back-top">
        <a class="scroll" href="#main-menu">
            <i class="fa fa-angle-up"></i>
        </a>
    </section>
    <!--**** End Go Back Top****-->
    <!--Core Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--External Scripts-->
    <script src="assets/js/external/jquery.backstretch.min.js"></script>
    <script src="assets/js/external/jquery.bxslider.min.js"></script>
    <script src="assets/js/external/jquery.mb.YTPlayer.js"></script>
    <script src="assets/js/external/jquery.fitvids.js"></script>
    <script src="assets/js/external/jquery.bootstrap-progressbar.min.js"></script>
    <script src="assets/js/external/slick.min.js"></script>
    <script src="assets/js/external/jquery.countTo.js"></script>
    <script src="assets/js/external/jquery.waypoints.js"></script>
    <script src="assets/js/external/jquery.mixitup.min.js"></script>
    <script src="assets/js/external/lightbox-2.6.min.js"></script>
    <script src="assets/js/external/jquery.sticky.js"></script>
    <!--Site Scripts-->
    <script src="assets/js/script.js"></script>
</body>
</html>
