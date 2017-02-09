<?php  session_start();
require('bin/connectdb.php');
//แสดงหมวดหมุ่กระทู้ทั้งหมดโดยเรียงตามลำดับ cg_order จากน้อยไปมาก
$rs_category = mysql_query("SELECT * FROM tbl_category ORDER BY cg_order ASC");
$chk_rows_category = mysql_num_rows($rs_category); //นับจำนวนแถวของหมวดกระทู้
?>
<?php include("header.php")  ?>
<body data-spy="scroll" data-target="#main-menu-navbar" data-offset="90" >
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
    <!--**** Header ****-->
    <div id="" style="height: 400px">
        <?php include("search2.php") ?>
    </div>
    <!--**** End Header ****-->
    <!--**** About Us  ****-->
    <!--<section style="background: #1C1C1C">

       <?php //include("recommend.php") ?> 
     </section> -->  
         <!--End Portfolio Item-->
                    <!--Portfolio Item-->
    <!--**** End About Us  ****-->
    <!--**** Our Skills  ****-->
    <section style="background: #ffffff">
        <?php include("recommend.php") ?>
    </section>
    <!--**** End Our Skills  ****-->
    <!--**** Video ****-->
    <section style="background: #ffffff">
        <?php include("promotion.php") ?>
    </section>
    <!--**** End Video ****-->
    <!--**** Features 1 ****-->
    
    <!--**** End Timeline ****-->
    <!--**** Explanation ****-->
    
    <!--**** End Request Quote ****-->
    <!--**** Testimional ****-->
    
    <!--**** End Testimional ****-->
    <!--**** Dark Bg ****-->
    <!--<div class="dark-bg  default-hovered animated-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2>Lorem Ipsum Dolor Sit Amet</h2>
                        <h2>Consectetur Adipisicing Elit</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    
    <!--**** Contact ****-->
    <!--<section id="contact">
        <div class="contact-bg">
            <div class="container">
                <div class="vs-60"></div>
                <div class="row  contact-wrap">
                    <div class="col-lg-4 col-lg-offset-1 ">

                        

                        <div class="contact-details-wrap">
                            <h3>Contact Details</h3>
                            <div class="vs-20"></div>
                            <ul class="contact-details">
                                <a href="https://goo.gl/maps/sdKzMZYqDf62" style="color: #FFFFFF"><li><span class="contact-details-icon"><i class="fa fa-map-marker"></i></span> 9/7 ถนน เจ้าคุณทหาร แขวง คลองสามประเวศ เขต ลาดกระบัง กรุงเทพมหานคร </li></a>
                                <a href="tel:021005007" style="color: #FFFFFF"><li><span class="contact-details-icon"><i class="fa fa-phone"></i></span> 02-100-5007</li></a>
                                <li><span class="contact-details-icon"><i class="fa fa-envelope-o"></i></span> info@website.com</li>
                                <li><span class="contact-details-icon"><i class="fa fa-globe"></i></span> http://ppplusrealestate.com</li>
                            </ul>
                        </div>  
                    </div>
                    <div class="col-lg-7 ">
                        <div class="contact-send-message-wrap">

                            

                            <form id="contact-form" action="post">
                                <ul>
                                    <li><input class="form-control" id="contact-name" name="contact-name" placeholder="Name" required="" type="text"></li>
                                    <li><input id="contact-email" class="form-control" name="contact-email" placeholder="Email" required="" type="email"></li>
                                    <li><input id="contact-subject" name="contact-subject" class="form-control" placeholder="Subject" required="" type="text"></li>
                                    <li><textarea id="contact-message" class="form-control" name="contact-message" rows="5" placeholder="Message"></textarea></li>
                                    <li><button class="btn btn-normal-white pull-right" id="contact-send"><i class="fa fa-envelope-o"></i> Send</button></li>
                                </ul>
                            </form>  

                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Google Map -->
            <!--<script src="https://www.google.co.th/maps/@13.7648488,100.7704179,12.53z"></script>	
            <div id="map"></div> 
        </div>
    </section> -->
    <!--**** End Contact ****-->
    <!--**** Footer ****-->
    <section>
    <?php include("footer.php") ?>
    </section>
    <!--**** End Footer ****-->
    <!--**** Go Back Top****-->
    <section id="go-back-top">
        <a class="scroll" href="">
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
    <script src="assets/js/project/testimonials.js"></script>
    <script src="assets/js/external/jquery.sticky.js"></script>
    <!--Site Scripts-->
    <script src="assets/js/script.js"></script>
    
    
</body>
</html>
