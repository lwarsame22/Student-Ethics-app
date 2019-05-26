<?php
include "../config.php";
if (isset($_POST['submit'])) {
    $eao1 = mysqli_real_escape_string($con, $_POST['eao1']);
    $eao2 = mysqli_real_escape_string($con, $_POST['eao2']);
    $app_id = mysqli_real_escape_string($con, $_POST['app_id']);
    $pdate1= date('Y-m-d');
    if ($eao1 != "" && $eao2 != "" && $app_id != "") {
$sql_query = "INSERT INTO app_transactions( user_id, app_id,eoa_review,assigned_date) VALUES ('$eao1','$app_id','Pending', '$pdate1')";
$sql_query1 ="INSERT INTO app_transactions( user_id, app_id,eoa_review,assigned_date) VALUES ('$eao2','$app_id','Pending','$pdate1')";
        mysqli_query($con, $sql_query);
        mysqli_query($con, $sql_query1);
            $sql_query = "update apps set app_status=2,assigned_date='$pdate1'  where app_id='".$app_id."'";
                if (mysqli_query($con, $sql_query)) {
ding Email
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


                        $msg="Application Assigned for Review Successfully";
        echo  "<script type='text/javascript'>alert('$msg');window.location.href = \"dashboard.php\";</script>";
                                                    }
 
}
}