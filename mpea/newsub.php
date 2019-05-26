<!DOCTYPE html>
<html lang="en">
<head>
    <title>PEA | New Application</title>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
    <![endif]-->

</head>
<body>
    <?php 
         session_start();
            $userid=$_SESSION['userid'];
if($userid<1)
                header('Location: index.php');?>
<div id="wrapper">
    <div id="content">
        <h5 style="float: right;padding-right: 3%;"><a href="logout.php">Logout</a></h5>
    </div>
    <!-- Begin Sidebar -->
    <div id="sidebar">
        <div id="logo"><a href="submissions.php"><img src="style/images/logo.png" alt="Caprice" /></a></div>

        <!-- Begin Menu -->
        <div id="menu" class="menu-v">
            <ul>
        <li><a href="submissions.php">dashboard</a></li>
        <li><a href="newsub.php">New Application</a></li>
            </ul>
        </div>
        <!-- End Menu -->


        <div class="sidebox">
            <ul class="share">
                <li><a href="#"><img src="style/images/icon-rss.png" alt="RSS" /></a></li>
                <li><a href="#"><img src="style/images/icon-facebook.png" alt="Facebook" /></a></li>
                <li><a href="#"><img src="style/images/icon-twitter.png" alt="Twitter" /></a></li>
                <li><a href="#"><img src="style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
                <li><a href="#"><img src="style/images/icon-linkedin.png" alt="LinkedIn" /></a></li>
            </ul>
        </div>


    </div>
    <!-- End Sidebar -->

    <!-- Begin Content -->
    <div id="content">
        <h1 class="title">New Application</h1>
        <div class="line"></div>

        <!-- Begin Slider -->
        <div id="slider" class="box-shadow">

            <div class="row" style=" padding:1%;">

                <div class="col-sm-12">

                    <form method="post" enctype="multipart/form-data" action="appsubmit.php" class="login100-form validate-form p-l-55 p-r-55 p-t-58">

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Please Enter Unit ID">
                            <input class="input100" type="text" name="unitid" placeholder="Unit ID">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Please Enter Title">
                            <input class="input100" type="text" name="apptitle" placeholder="Application Title">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Please Select a File">
                            <input class="input100" type="file" name="file" id="file" onchange="return fileValidation()" style="line-height: 4; padding-left: 0%;"/>
                            <span class="focus-input100"></span>
                        </div>


                        <div class="text-right p-t-13 p-b-23">

                        </div>

                        <div class="container-login100-form-btn">
                            <button name="app_submit" id="app_submit" class="login100-form-btn">
                                Submit
                            </button>
                        </div>

                        <div class="flex-col-c p-b-40">

                        </div>
                    </form>
                </div>




            </div>

        </div>
        <!-- End Slider -->


    </div>
    <!-- End Content -->

</div>



<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>



</body>
</html>