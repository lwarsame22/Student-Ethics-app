<?php

include "config.php";

if (isset($_POST['std_submit'])) {

    //getting values
    $userid = mysqli_real_escape_string($con, $_POST['userid']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $prefername = mysqli_real_escape_string($con, $_POST['prefername']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    if ($username != "" && $password != "") {
//inserting data into db
        $sql_query = "insert into students(student_id,user_fname,user_pname,user_email,user_pass,user_type,user_status) values('$userid','$firstname','$prefername','$username',$password,'student',0)";

        if (mysqli_query($con, $sql_query)) {
            $msg="Student Registered Successfully\n\n Check your email to continue registration";
            echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"index.php\";</script>";
            $to="preewishali@gmail.com";
            $subject="Student Registration";
            $txt="test test test";
            mail($to,$subject,$txt);
            //header('Location: index.php');
        } else {
            $msg="Try again..";
            echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"register.php\";</script>";
        }

    }

}

if (isset($_POST['eao_submit'])) {

    //getting values
    $userid = mysqli_real_escape_string($con, $_POST['userid']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $prefername = mysqli_real_escape_string($con, $_POST['prefername']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    if ($username != "" && $password != "") {
//inserting data into db
        $sql_query = "insert into users(user_id,user_fname,user_pname,user_email,user_pass,user_type,user_status) values('$userid','$firstname','$prefername','$username',$password,'staff',0)";

        if (mysqli_query($con, $sql_query)) {
            $msg="Staff Registered Successfully\n\n Check your email to continue registration";
            echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"index.php\";</script>";
            $to="preewishali@gmail.com";
            $subject="Student Registration";
            $txt="test test test";
            mail($to,$subject,$txt);
            //header('Location: index.php');
        } else {
            $msg="Try again..";
            echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"registereao.php\";</script>";
        }

    }

}