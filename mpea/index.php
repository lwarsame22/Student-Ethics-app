<!DOCTYPE html>
<html lang="en">
<head>
    <title>PEA | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<!-- Top content -->
<div class="row" style="margin-top:25px; background: #596d7f; ">
    <div class="col-sm-5"></div>
    <div class="col-sm-2"><div id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Project Ethical Approval" /></a></div> </div>
    <div class="col-sm-5"></div>
</div>

<div class="row" style="margin-top:0px;  min-height: 5px; "></div>
<div class="row" style=" padding-left: 3%; padding-right: 3%; padding-top: 1%;">

    <div class="col-sm-5">

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form method="post" action="login.php" class="login100-form validate-form p-l-55 p-r-55 p-t-128">
					<span class="login100-form-title">
						Student Login
					</span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter student email">
                            <input class="input100" type="email" name="username" placeholder="Student Email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="text-right p-t-13 p-b-23">

                        </div>

                        <div class="container-login100-form-btn">
                            <button name="std_submit" id="std_submit" class="login100-form-btn">
                                Sign in
                            </button>
                        </div>

                         <div class="flex-col-c p-t-10 p-b-40">
                        <span class="txt1 p-b-9">
                            Don’t have an account?
                        </span>

                        <a href="register.php" class="txt3">
                            Sign up now
                        </a>
                    

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <div class="col-sm-2">   </div>


    <div class="col-sm-5">

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form method="post" action="login.php" class="login100-form validate-form1 p-l-55 p-r-55 p-t-128" id="validate-form ">
					<span class="login100-form-title">
						EAO Login
					</span>

                        <div class="wrap-input100 validate-input1 m-b-16" data-validate="Please enter EAO email">
                            <input class="input100" type="email" name="username" placeholder="EAO Email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input1" data-validate = "Please enter password">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="text-right p-t-13 p-b-23">

                        </div>

                        <div class="container-login100-form-btn">
                            <button name="eao_submit" id="eao_submit" class="login100-form-btn">
                                Sign in
                            </button>
                        </div>

                        <div class="flex-col-c p-t-10 p-b-40">
                        <span class="txt1 p-b-9">
                            Don’t have an account?
                        </span>

                        <a href="registereao.php" class="txt3">
                            Sign up now
                        </a>
                    </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

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