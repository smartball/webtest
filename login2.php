<?php
session_start();
if(!empty($_POST['btLogin'])){//มีการคลิกที่ปุ่ม เข้าสู่ระบบ
    require('bin/connectdb.php');//เรียกไฟล์เชื่อมต่อกับฐานข้อมูล
    $msgError='';
 //ค่า username ,password ไม่เป็นค่าว่าง
    if(!empty($_POST['mem_user'])&& !empty($_POST['mem_pass'])){
        $username=$_POST['mem_user'];
        $password=$_POST['mem_pass'];
  //ตรวจสอบ username,password ว่ามีตรงกับฐานข้อมูลหรือไม่
        $rs_chk_mb=mysql_query("SELECT mem_name,mem_id,mem_level FROM tbl_member WHERE mem_user='$username' AND mem_pass='$password'");
        $show_chk_mb=  mysql_fetch_assoc($rs_chk_mb);
        if(empty($show_chk_mb['mem_name'])){//หากไม่พบข้อมูล username,password ในฐานข้อมูล ให้แสดงข้อความแจ้งเตือนดังนี้
            $msgError.='กรอกข้อมูล Username หรือ Password ไม่ถูกต้อง<br />';
        }else{//หากพบว่ากรอกข้อมูลถูกต้อง ให้สร้างตัวแปรแบบ session มารับค่าดังนี้
            $_SESSION['mem_id']=$show_chk_mb['mem_id'];//รับค่า id สมาชิก
            $_SESSION['mem_name']=$show_chk_mb['mem_name'];//รับค่าชื่อของสมาชิก
   $_SESSION['mem_level']=$show_chk_mb['mem_level'];//รับค่าระดับผู้ใช้งานของสมาชิก 1 = admin ,2=สมาชิก
        }        
    }else{//กรณีที่สมาชิกไม่กรอกข้อมูล แล้วดันทะลึ่งกดปุ่ม เข้าสู่ระบบ ให้แจ้งข้อความดังนี้
        $msgError.='กรุณากรอก Username และ Password ด้วย<br />';
    }
    if(empty($msgError)){
  //หากสมาชิกพิมพ์รหัสผ่านถูกต้อง ให้Redirect หน้าไปที่ไฟล์ index.php ซึ่งก็คือหน้าโฮมนั่นเอง
        header("Location:index.php");
    }else{
  //หากกรอกรหัสผ่านไม่ถูกต้อง ให้สร้างตัวแปร session มารับค่าเพื่อแจ้งให้ทราบถึงปัญหาที่เกิดขึ้น
        $_SESSION['message_error']=$msgError;
    }
}
?>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="Modular - The ultimate multipurpose responsive HTML5 Template">
        <meta name="keywords" content="modular, bootstrap, business, corporate, creative, multipurpose, responsive, agency, startup">
    <!--Core Css-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel='stylesheet'>
    <link rel="shortcut icon" href="logo/logopp.png" type="image/x-icon">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Font Css-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!--External Css-->
    <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="assets/css/yamm.css" rel="stylesheet" />
    <link href="assets/css/ytplayer.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--Site Css-->
    <link href="assets/css/site.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
        
        <link rel="stylesheet" type="text/css" href="btvalidate/dist/css/bootstrapValidator.min.css"/>
        <script type="text/javascript" src="btvalidate/dist/js/bootstrapValidator.min.js"></script>
        <title>เข้าสู่ระบบ </title>
    </head>
    <body>
        <div id="main-menu">
        <?php include("top_nav.php") ?>
                </div>
                <!--**** End navbar-collapse ****-->
            </div>
            <!--**** End container-fluid ****-->
        </div>
    </div>
        
        <div class="container">
            
            <div class="row ws-content">
                <div class="col-md-4  col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <h1>Login</h1>
                    <?php
                    if (!empty($_SESSION['message_error'])) {
      //แสดงปัญที่เกิดขึ้นจากการกรอกรหัสผ่านเข้าสู่ระบบ
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_SESSION['message_error']; ?>
                        </div>
                        <?php
                        $_SESSION['message_error'] = '';
                    }
                    ?>
                    <form  method="post" enctype="multipart/form-data" id="registrationForm" name="registrationForm" action="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="mem_user" name="mem_user" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="mem_pass"  name="mem_pass" placeholder="รหัสผ่าน">
                        </div>
                        
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="btLogin" value="เข้าสู่ระบบ" >
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <script>
           $(document).ready(function() {
      //คำสั่งข้างล่างนี้คล้ายไฟล์ register.php ให้ศึกษาจากโค๊ดจากไฟล์ register.php ได้เลยครับ
                $('#registrationForm').bootstrapValidator({
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        mem_user: {
                            validators: {
                                notEmpty: {
                                    message: 'กรุณากรอก Username ด้วย'
                                },
                                stringLength: {
                                    min: 4,
                                    max: 20,
                                    message: 'Username ต้องมีขนาดตัวอักษร  4-20 ตัวอักษรเท่านั้น'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9]+$/,
                                    message: 'กรอกข้อมูลไม่ถูกต้อง รองรับภาษาอังกฤษและตัวเลขเท่านั้น'
                                },
                                different: {
                                    field: 'mem_pass',
                                    message: 'Username ต้องมีค่าไม่ตรงกับรหัสผ่าน'
                                }
                            }
                        },
                        mem_pass: {
                            validators: {
                                notEmpty: {
                                    message: 'กรุณากรอก รหัสผ่าน ด้วย'
                                },
                                stringLength: {
                                    min: 4,
                                    message: 'รหัสผ่านต้องไม่น้อยกว่า 4 ตัวอักษร'
                                }
                            }
                        }
                    }
                });
            });
        </script>    
    </body>
</html>