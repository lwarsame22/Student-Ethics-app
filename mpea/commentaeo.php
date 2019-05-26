<?php
include "config.php";
if (isset($_POST['submit'])) {
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $app_id = mysqli_real_escape_string($con, $_POST['app_id']);
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $pdate1= date('Y-m-d');
    if ($message != "" && $app_id != "" && $user_id != "") {
$sql_query = "update app_transactions set eoa_review= '$message',review_date='$pdate1' where app_id='".$app_id."' and user_id='".$user_id."'";
        mysqli_query($con, $sql_query);
 $sql_querystatus = "select app_status from apps where app_id='" . $app_id . "'";
        $result = mysqli_query($con, $sql_querystatus);
        $row = mysqli_fetch_array($result);
       $count = $row['app_status'];
        $count=$count+1;


 $sql_query = "update apps set app_status='".$count."'  where app_id='".$app_id."'";
                if (mysqli_query($con, $sql_query)) {

//Sending Email
    //$emailto="preewishali@gmail.com"; 
    $emailto=$_SESSION['user_email'];
    $subject = 'Application Submission';
    $message = 'tett test';
    // send email
        $cont='text/html; charset=UTF-8';
        $from = "The Team <support@rgu.ac.uk>";
        $to = $emailto;
        $subject = $subject;
        $body = $message;
        $host = "mail.xyz.com";                         // Enter Hosting Mail Server
        $username = "test@xyz.com";                     // Enter Email Address
        $password = "test";                     // Enter Email password
        $headers = array ('From' => $from,
          'To' => $to,
          'Subject' => $subject,
        'Content-Type'=> $cont);
        $smtp = Mail::factory('smtp',
          array ('host' => $host,
            'auth' => true,
            'username' => $username,
            'password' => $password));
        $mail = $smtp->send($to, $headers, $body); 
//Sending Email 
        
                        $msg="Review Submitted Successfully";
        echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"applications.php\";</script>";
                                                    }
 
}
}