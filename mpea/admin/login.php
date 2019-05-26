<?php
include "../config.php";
session_start();
if (isset($_POST['std_submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    if ($uname != "" && $password != "") {
        $sql_query = "select * from users where user_type='admin' and user_email='" . $uname . "' and user_pass='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['user_id'];
        if ($count > 0) {
            $_SESSION['userid'] = $row['user_id'];
            $_SESSION['ufname'] = $row['user_fname'];
            $_SESSION['upname'] = $row['user_pname'];
            $_SESSION['uemail'] = $row['user_email'];
            header('Location: dashboard.php');
        } else {
            $msg="Invalid username and password";
            echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"index.php\";</script>";
        }
    }
}

