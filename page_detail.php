<?php
session_start();
require('bin/connectdb.php');
//แสดงหมวดหมุ่กระทู้ทั้งหมดโดยเรียงตามลำดับ cg_order จากน้อยไปมาก
$rs_category = mysql_query("SELECT * FROM tbl_category ORDER BY cg_order ASC");
$chk_rows_category = mysql_num_rows($rs_category); //นับจำนวนแถวของหมวดกระทู้
?>
<?php include("header.php") ?>
    <body id="top" style="background-color:;">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    
        <?php include("top_nav.php") ?>
        

             <main>
            <!-- Post Title -->

            <section class="">
                <div class="container">
                </div>
            </section>
            <section class="blog-card section-top-margin border-bottom-light">
                     <div class="container">
                        <div class="col-xs-12 just-center"> 
                                <!-- Main Wrapper -->
                                <article>
                    <center><?php include('example.php'); ?></center>
                    <div class="blog-post">
            
            <!-- Main Post -->
                        <!-- Blockquote style 2 -->
                        <blockquote class="quote-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</blockquote>
                        
                        <!-- Pagination style 3 -->
                        
                    </div>
                </div>
            </section>
            
            
            <!-- Comments -->
            <section class="blog-comment section-padding-small">
                <div class="container">
                    <h6 class="text-center font-w600">Share this article</h6>
                    <!-- Social Share -->
                    <div class="social-share text-center">
                        <a href="#0" class="bttn-scale twitter"><span class="fa fa-twitter"></span>Twitter</a>
                        <a href="#0" class="bttn-scale facebook"><span class="fa fa-facebook"></span>Facebook</a>
                        <a href="#0" class="bttn-scale gplus"><span class="fa fa-google-plus"></span>Google</a>
                    </div>
                    <div class="col-md-8 col-sm-10 just-center no-padding">
                        <div class="comments-section">
                            
                                    <!-- Comment -->
                                    
                       
                        <!-- Comment Form -->
                        
            </section>

                   
        </main>
        <?php include("footer.php") ?>   
        
        
        <!-- Necessary Scripts -->
        
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/jquery.smartmenus.js"></script>
        <script src="assets/js/smartmenu.script.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/one-page-nav.js"></script> 
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.matchHeight-min.js"></script>
        <script src="assets/js/owl.carousel.js"></script>        
        <script src="assets/js/demo/demo5.js"></script>  
        <script>
            // masonry grid
            var $grid = $('.blog-card-small .blog-wrapper').masonry({
                itemSelector: '.grid-item'
            });
            $grid.imagesLoaded().progress(function () {
                $grid.masonry('layout');
            });
        </script>        
    </body>
</html>