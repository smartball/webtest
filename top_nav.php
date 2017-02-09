<div class="navbar yamm navbar-default" role="navigation" style="background: #000000">
            <div class="container pt-0 pb-0" style="background: #000000;height: 70px;">
                <!--**** Brand and toggle get grouped for better mobile display ****-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-navbar">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="" href="index.php"><img src="logo/new.png" style="width: 50px;height: 50px;padding-top: 15px"></a>
                </div>
                <!--**** Collect the nav links, forms, and other content for toggling ****-->
                <div class="collapse navbar-collapse" id="main-menu-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="index.php">About Us</a>
                        </li>
                        <li class="dropdown yamm yamm-fw">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Service</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">

                                        <div class="row">
                                            <ul class="col-sm-3 list-unstyled">

                                                <li><a href="s_buy.php">หาซื้อ</a></li>
                                                


                                            </ul>
                                            <ul class="col-sm-3 list-unstyled">
                                                <li><a href="ddsell.php">ต้องการขาย</a></li>
                                                

                                            </ul>
                                            <ul class="col-sm-3 list-unstyled">
                                                <li><a href="s_rent.php">หาเช่า</a></li>
                                                

                                            </ul>
                                            <ul class="col-sm-3 list-unstyled">
                                                <li><a href="faq.html">หาขายฝาก</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php
                    if (empty($_SESSION['mem_id'])) {
                        ?>
                        <li><a class="page-scroll" href="login2.php"><b>Login</b></a></li>    
                        <li><a class="page-scroll" href="register2.php"><b>Sigup</b></a></li>   
                        <?php
                    } else {
                        ?>   
                        <li> <a  href="#">Wellcome : <b><?php echo $_SESSION['mem_name']; ?></b></a></li>
                        <?php
                        if ($_SESSION['mem_level'] == 1) {
                            ?>
                            <li> <a href="category.php" ><b>จัดการหมวดกระทู้</b></a></li>
                        <?php } ?>
                        <li><a href="logout.php" ><b>Logout</b></a></li>
                        <?php
                    }
                    ?>     
                    </ul>
                </div>
                <!--**** End navbar-collapse ****-->
            </div>
            <!--**** End container-fluid ****-->
        </div>