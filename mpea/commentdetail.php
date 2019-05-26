<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
	<title>PEA | Application Comments</title>


    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
<!-- Begin Wrapper -->
<div id="wrapper">
  <div id="content">
  <h5 style="float: right;padding-right: 3%;"><a href="logout.php">Logout</a></h5>
  </div>
	<!-- Begin Sidebar -->
	<div id="sidebar">
		 <div id="logo"><a href="applications.php"><img src="style/images/logo.png" alt="Caprice" /></a></div>

	<!-- Begin Menu -->
    <div id="menu" class="menu-v">
      <ul>
        <li><a href="applications.php">Dashboard</a></li>
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
	<h1 class="title">Application Detail</h1>
	<div class="line"></div>

	<!-- Begin Slider -->
        <div id="slider" class="box-shadow">

            <table class="price">
                <tr class="border_bottom">
                    <th><h4>Student ID </h4></th>
                    <th><h4>Student Name </h4></th>
                    <th><h4>Application Title </h4></th>
                    <th><h4>Submission Date</h4></th>
                    <th><h4>Assigned Date</h4></th>
                    <th><h4>Reviewed Date </h4></th>
                    <th><h4>Download </h4></th>
                </tr>
                <?php
                include("config.php");
                session_start();
                $userid=$_SESSION['userid'];
if($userid<1)
                header('Location: index.php');
                $sql_query = "select * from app_transactions t, users u, apps a ,students s  where t.user_id= u.user_id and t.app_id= a.app_id and a.student_id=s.student_id and t.t_id=".$_GET["id"];
                $result = mysqli_query($con, $sql_query);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['student_id'] . "</td>";
                    echo "<td>" . $row['user_fname'] . "</td>";
                    echo "<td>" . $row['app_title'] . "</td>";
                    echo "<td>" . $row['app_date'] . "</td>";
                    echo "<td>" . $row['assigned_date'] . "</td>";
                    echo "<td>" . $row['review_date'] . "</td>";
                    echo "<td> <a href=../" . $row['app_file'] ."> <span class='view'> </span></a></td>";
                    $comment=$row['eoa_review'];
                    echo "</tr>";
                }
                ?>

            </table>
<h4 class="title" style="padding-left: 5px;">EAO Review for this Application</h4>
<div class="line"></div>
         <h5 class="title" style="padding-left: 5px;"><?php echo $comment; ?></h5>
<div class="flex-col-c p-b-40"></div>
        </div>
        <!-- End Slider -->


	</div>
	<!-- End Content -->

</div>
<!-- End Wrapper -->
<div class="clear"></div>
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