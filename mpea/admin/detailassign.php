<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PEA |Single Application Details</title>


    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="../style/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="../style.css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="../style/css/ie7.css" media="all" />
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="../style/css/ie8.css" media="all" />
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="../style/css/ie9.css" media="all" />
    <![endif]-->
    <script type="text/javascript" src="../style/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="../style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="../style/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="../style/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../style/js/carousel.js"></script>
    <script type="text/javascript" src="../style/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="../style/js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="../style/js/jquery.slickforms.js"></script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
    <div id="content">
        <h5 style="float: right;padding-right: 3%;"><a href="logout.php">Logout</a></h5>
    </div>
    <!-- Begin Sidebar -->
    <div id="sidebar">
        <div id="logo"><a href="dashboard.php"><img src="../style/images/logo.png" alt="Caprice" /></a></div>

        <!-- Begin Menu -->
        <div id="menu" class="menu-v">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
            </ul>
        </div>
        <!-- End Menu -->


        <div class="sidebox">
            <ul class="share">
                <li><a href="../#"><img src="../style/images/icon-rss.png" alt="RSS" /></a></li>
                <li><a href="../#"><img src="../style/images/icon-facebook.png" alt="Facebook" /></a></li>
                <li><a href="../#"><img src="../style/images/icon-twitter.png" alt="Twitter" /></a></li>
                <li><a href="../#"><img src="../style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
                <li><a href="../#"><img src="../style/images/icon-linkedin.png" alt="LinkedIn" /></a></li>
            </ul>
        </div>


    </div>
    <!-- End Sidebar -->

    <!-- Begin Content -->
    <div id="content">

        <h1 class="title">Application Details</h1>
        <div class="line"></div>

        <!-- Begin Slider -->
        <div id="slider" class="box-shadow">

            <table class="price">
                <tr class="border_bottom">
                    <th><h4>Student ID </h4></th>
                    <th><h4>Student Name </h4></th>
                    <th><h4>Student Email </h4></th>
                    <th><h4>Application Title </h4></th>
                    <th><h4>Unit Code </h4></th>
                    <th><h4>Submission Date</h4></th>
                    <th><h4>Download </h4></th>
                </tr>
                <?php
                include("../config.php");
                //session_start();
                 session_start();
                            $userid=$_SESSION['userid'];
if($userid<1)
                header('Location: index.php');
                $sql_query = "select * from apps a ,students u  where a.student_id=u.student_id and a.app_id=".$_GET["id"];
                $result = mysqli_query($con, $sql_query);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['student_id'] . "</td>";
                    echo "<td>" . $row['user_fname'] . "</td>";
                    echo "<td>" . $row['user_email'] . "</td>";
                    echo "<td>" . $row['app_title'] . "</td>";
                    echo "<td>" . $row['app_unit'] . "</td>";
                    echo "<td>" . $row['app_date'] . "</td>";
                    echo "<td> <a href=../" . $row['app_file'] ."> <span class='view'> </span></a></td>";

                    echo "</tr>";
                }
                ?>

            </table>

    

        </div>
        <!-- End Slider -->
<h1 class="title">Assign Details</h1>
        <div class="line"></div>

        <!-- Begin Slider -->
        <div id="slider" class="box-shadow">

            <table class="price">
                <tr class="border_bottom">
                    <th><h4>AEO ID </h4></th>
                    <th><h4>AEO Name </h4></th>
                    <th><h4>AEO Email </h4></th>
                    <th><h4>Assignment Date</h4></th>
                </tr>
                <?php
                include("../config.php");
                //session_start();
                $sql_query = "select * from app_transactions a ,users u  where a.user_id=u.user_id and a.app_id=".$_GET["id"];
                $result = mysqli_query($con, $sql_query);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['user_fname'] . "</td>";
                    echo "<td>" . $row['user_email'] . "</td>";
                    echo "<td>" . $row['assigned_date'] . "</td>";
                    

                    echo "</tr>";
                }
                ?>

            </table>

    

        </div>
        <!-- End Slider -->
<h1 class="title">Review Details</h1>
        <div class="line"></div>

        <!-- Begin Slider -->
        <div id="slider" class="box-shadow">

            <table class="price">
                <tr class="border_bottom">
                    <th><h4>AEO Name </h4></th>
                    <th><h4>AEO Comments </h4></th>
                    <th><h4>Comment Date</h4></th>
                </tr>
                <?php
                include("../config.php");
                //session_start();
                $sql_query = "select * from app_transactions a ,users u  where a.user_id=u.user_id and a.app_id=".$_GET["id"];
                $result = mysqli_query($con, $sql_query);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['user_fname'] . "</td>";
                    echo "<td>" . $row['eoa_review'] . "</td>";
                    echo "<td>" . $row['review_date'] . "</td>";
                    

                    echo "</tr>";
                }
                ?>

            </table>

    

        </div>
        <!-- End Slider -->
    </div>
    <!-- End Content -->



</div>
<!-- End Wrapper -->
<div class="clear"></div>
<script src="../js/main.js"></script>
</body>
</html>